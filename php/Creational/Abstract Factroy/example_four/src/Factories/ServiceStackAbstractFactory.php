<?php 
namespace AbstractFactory\Factories;


use AbstractFactory\Contracts\ServicesStackAbstractFactoryInterface;
use AbstractFactory\Contracts\ServiceType;

class ServiceStackAbstractFactory
{
    public function createServiceFactory(ServiceType $type): ?ServicesStackAbstractFactoryInterface
    {
        return null;
    }
}