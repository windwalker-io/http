<?php

declare(strict_types=1);

namespace Windwalker\Http\Transport;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface CurlTransportInterface
 */
interface CurlTransportInterface extends TransportInterface
{
    /**
     * @param  string                  $content
     * @param  array                   $info
     * @param  ResponseInterface|null  $response
     *
     * @return  ResponseInterface
     *
     * @psalm-template R
     * @psalm-param R  $response
     * @psalm-return R
     */
    public function contentToResponse(
        string $content,
        array $info,
        ?ResponseInterface $response = null
    ): ResponseInterface;

    /**
     * @param  RequestInterface  $request
     * @param  array             $options
     *
     * @return  \CurlHandle|false
     */
    public function createHandle(RequestInterface $request, array $options): \CurlHandle|false;
}
