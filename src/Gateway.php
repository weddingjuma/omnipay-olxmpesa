<?php

namespace Omnipay\OlxMpesa;

use Omnipay\Common\AbstractGateway;

/**
 * OlxMpesa Gateway
 *
 * @link TODO
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'OlxMpesa';
    }

    public function getDefaultParameters()
    {
        return [
            'secretKey' => '',
            'testMode' => false,
        ];
    }

    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\OlxMpesa\Message\PurchaseRequest', $parameters);
    }

}
