<?php

namespace Connectors;

class FacebookConnector{
    public function __construct(private string $facebookAppName, private string $facebookAppKey) {
        $this->facebookAppName = $facebookAppName;
        $this->facebookAppKey = $facebookAppKey;
    }
}