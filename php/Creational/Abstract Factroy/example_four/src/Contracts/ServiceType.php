<?php

namespace AbstractFactory\Contracts;

enum ServiceType
{
    case SOAP;
    case RESTFUL;
}