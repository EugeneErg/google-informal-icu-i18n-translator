<?php

declare(strict_types=1);

namespace EugeneErg\GoogleInformalIcuI18nTranslator\Client;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * @throws ClientExceptionInterface
     */
    public function sendRequest(string $method, string $uri, ?string $body = null, array $headers = []): ResponseInterface;
}
