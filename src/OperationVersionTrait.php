<?php

namespace Getresponse\Sdk;

/**
 * Trait OperationVersionTrait
 * @package Getresponse\Sdk
 */
trait OperationVersionTrait
{
    /**
     * @return string
     */
    public function getVersion()
    {
        return sprintf('GetResponse-SDK/%s GetResponse-API/%s', Version::VERSION, Version::API_COMPATIBLE);
    }
}