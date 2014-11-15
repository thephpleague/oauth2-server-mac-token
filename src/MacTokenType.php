<?php

namespace League\OAuth2\MacToken;

use League\OAuth2\Server\TokenType\TokenTypeInterface;
use League\OAuth2\Server\TokenType\AbstractTokenType;
use League\OAuth2\Server\Util\SecureKey;

class MacTokenType extends AbstractTokenType implements TokenTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function generateResponse()
    {
        $macKey = SecureKey::generate();

        $return = [
            'access_token'  =>  $this->getParam('access_token'),
            'token_type'    =>  'mac',
            'expires_in'    =>  $this->getParam('expires_in'),
            'mac_key'       =>  $macKey,
            'mac_algorithm' =>  'hmac-sha-256',
        ];

        if (!is_null($this->getParam('refresh_token'))) {
            $return['refresh_token'] = $this->getParam('refresh_token');
        }

        return $return;
    }
}


"access_token":"SlAV32hkKG",
"token_type":"mac",
"expires_in":3600,
"refresh_token":"8xLOxBtZp8",
"mac_key":"adijq39jdlaska9asud",
"mac_algorithm":"hmac-sha-256"