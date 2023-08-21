<?php

namespace Proxy\Proxies;

use Proxy\DefaultProcessExcecute;
use Proxy\Services\AuditService;
use Proxy\Services\CacheService;
use Proxy\Services\EmailService;
use Proxy\Services\ProcessExcecutorInterface;
use Proxy\Services\RoleService;
use Proxy\Services\SecurityService;

/**
 * Class ProcessExcecutorProxy
 * 
 * This class is a proxy for the DefaultProcessExcecute class
 * This class must implement the same interface as the DefaultProcessExcecute class
 * 
 * Prior and subsequent actions will not be known to the customer. 
 * The customer will have no knowledge that these actions are being executed.
 */
class ProcessExcecutorProxy implements ProcessExcecutorInterface
{
    // In this case we can use inversion of control to inject the ProcessExcecutorInterface
    public function __construct(private DefaultProcessExcecute $processExcecutor)
    {
    }

    public function run(string $username, string $password, string $action): void
    {
        // Previous Validation. The user doen't know about this validation!!!
        $this->checkAccess($username, $password);

        // Run the action. The original action
        $this->processExcecutor->run($username, $password, $action);

        // Post Execution. The user doen't know about this actions!!
        $auditService = new AuditService();
        $auditService->log($username, $action);

        $emailService = new EmailService();
        $emailService->send($username);

        $cacheService = new CacheService();
        $cacheService->set($username);
    }

    /**
     * This method verify if the user has access to the action
     */
    private function checkAccess(string $username, string $password): void
    {
        $securityService = new SecurityService();
        $isAuth = $securityService->checkAccess($username, $password);
        if (!$isAuth) {
            throw new \Exception('Access denied');
        }
        $hasRole = new RoleService();
        $hasRole = $hasRole->hasRole($username);
        if (!$hasRole) {
            throw new \Exception('This user has not permissions for this action');
        }
    }
}
