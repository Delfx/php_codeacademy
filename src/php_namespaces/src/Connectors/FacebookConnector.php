<?php

namespace Connectors;

class FacebookConnector{
    public function __construct(protected string $facebookAppName, protected string $facebookAppKey) {
        $this->facebookAppName = $facebookAppName;
        $this->facebookAppKey = $facebookAppKey;
    }
}