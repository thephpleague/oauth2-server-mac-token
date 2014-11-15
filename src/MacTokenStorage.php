<?php

namespace League\OAuth2\MacToken;

use League\OAuth2\Server\Entity\AccessTokenEntity;

interface MacTokenStorage
{
    public function create(AccessTokenEntity $accessToken, MacKeyEntity $macKeyEntity);

    public function getByAccessToken(AccessTokenEntity $accessToken);
}
