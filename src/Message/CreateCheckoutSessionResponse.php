<?php

namespace Paytic\Omnipay\Simplify\Message;

/**
 * Class CreateCheckoutSessionResponse
 * @package Paytic\Omnipay\Simplify\Message
 *
 * @documentation https://egenius.unicredit.ro/api/documentation/apiDocumentation/nvp/version/latest/operation/Session%3a%20Create%20Checkout%20Session.html?locale=en_US
 */
class CreateCheckoutSessionResponse extends AbstractResponse
{
    public const SESSION_VERSION = 'session_version';
    public const SUCCESS_INDICATOR = 'successIndicator';

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return $this->getDataProperty('result') == 'SUCCESS';
    }

    public function getMessage()
    {
        return print_r($this->getData(), true);
    }

    /**
     * @return mixed|null
     */
    public function getSessionId()
    {
        return $this->getDataProperty('session_id');
    }


    /**
     * @return mixed|null
     */
    public function getSuccessIndicator()
    {
        return $this->getDataProperty('successIndicator');
    }
}
