<?php

namespace Webit\GlsAde\Api\Factory;

class SoapClientFactory
{

    /**
     * @param string $wsdl
     * @param array $options
     * @return \SoapClient
     */
    public function createSoapClient($wsdl, array $options = array())
    {
        return new \SoapClient($wsdl, $options);
    }
}