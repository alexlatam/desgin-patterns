<?php

namespace ProxyOne\Proxies;

use Exception;
use ProxyOne\Contracts\ProcessExecutorInterface;
use ProxyOne\DefaultProcessExecute;
use ProxyOne\Services\AuditService;
use ProxyOne\Services\CacheService;
use ProxyOne\Services\EmailService;
use ProxyOne\Services\RoleService;
use ProxyOne\Services\SecurityService;

/**
 * Class ProcessExecutorProxy
 * 
 * This class is a proxy for the DefaultProcessExecute class
 * This class must implement the same interface as the DefaultProcessExecute class
 * 
 * Prior and subsequent actions will not be known to the customer. 
 * The customer will have no knowledge that these actions are being executed.
 */
final readonly class ProcessExecutorProxy implements ProcessExecutorInterface
{
    // In this case we can use inversion of control to inject the ProcessExecutorInterface
    public function __construct(private DefaultProcessExecute $processExecutor)
    {
    }

    public function run(string $username, string $password, string $action): void
    {
        // Previous Validation. The user doesn't know about this validation!!!
        $this->checkAccess($username, $password);

        // Run the action. The original action
        $this->processExecutor->run($username, $password, $action);

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
     * @throws Exception
     */
    private function checkAccess(string $username, string $password): void
    {
        $securityService = new SecurityService();
        $isAuth = $securityService->checkAccess($username, $password);
        if (!$isAuth) {
            throw new Exception('Access denied');
        }
        $hasRole = new RoleService();
        $hasRole = $hasRole->hasRole($username);
        if (!$hasRole) {
            throw new Exception('This user has not permissions for this action');
        }
    }
}
