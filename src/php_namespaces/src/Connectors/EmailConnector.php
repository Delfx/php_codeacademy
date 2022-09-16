<?php

namespace Connectors;


class EmailConnector
{



    public function __construct(
        private string $host,
        private string $port,
        private string $email,
        private string $pass,
    )
    {
    }
}
