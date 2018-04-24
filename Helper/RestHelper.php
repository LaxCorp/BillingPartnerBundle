<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use Circle\RestClientBundle\Exceptions\CurlException;
use Circle\RestClientBundle\Services\RestInterface;
use Psr\Log\LoggerInterface;

/**
 * @inheritdoc
 */
class RestHelper
{

    /**
     * @var RestInterface
     */
    private $restClient;

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * RestHelper constructor.
     *
     * @param string          $apiUrl
     * @param string          $login
     * @param string          $password
     *
     * @param RestInterface   $restClient
     * @param LoggerInterface $logger
     *
     * @internal param $url
     */
    public function __construct(
        string $apiUrl, string $login, string $password, RestInterface $restClient, LoggerInterface $logger
    ) {
        $this->restClient = $restClient;
        $this->apiUrl     = $apiUrl;
        $this->login      = $login;
        $this->password   = $password;
        $this->logger     = $logger;
    }


    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function getText(string $path)
    {
        $url = $this->makeUrl($path);

        $this->logger->info('Get text: ' . $url);

        $header = $this->getAuthHeader();

        try {
            $query = $this->restClient->get($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error('Get text error: ' . $exception->getMessage());

            return $exception;
        }

        $resultContent = $query->getContent();

        $this->logger->info('Get text result: ', ['result'=> $resultContent]);

        return $resultContent;
    }

    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function getJson(string $path)
    {
        $method = 'GET';

        $url = $this->makeUrl($path);

        $header = $this->getAuthHeader();

        $logContext = $this->logContext($url, $method);

        try {
            $query = $this->restClient->get($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error("{$method} error: " . $exception->getMessage(), $logContext);

            return $exception;
        }

        $resultContent = $query->getContent();

        $logContext = $this->logContext($url, $method, null, $resultContent);

        if ($query->isServerError()) {
            $this->logger->error("{$method} error: " . $query->getStatusCode(), $logContext);
        } else {
            $this->logger->info("{$method}  result:", $logContext);
        }

        return $resultContent;
    }

    /**
     * @param string $path
     * @param string $json
     *
     * @return CurlException|\Exception|string
     */
    public function postJson(string $path, string $json)
    {
        $method = 'POST';

        $url = $this->makeUrl($path);

        $header = $this->getAuthHeader();

        $logContext = $this->logContext($url, $method, $json);

        try {
            $query = $this->restClient->post($url, $json, $header);
        } catch (CurlException $exception) {
            $this->logger->error("{$method} error: " . $exception->getMessage(), $logContext);

            return $exception;
        }

        $resultContent = $query->getContent();

        $logContext = $this->logContext($url, $method, $json, $resultContent);

        if ($query->isSuccessful()) {
            $this->logger->info("{$method} result:", $logContext);
        } else {
            $this->logger->error("{$method} error: " . $query->getStatusCode(), $logContext);
        }

        return $resultContent;
    }

    /**
     * @param string $path
     * @param string $json
     *
     * @return CurlException|\Exception|string
     */
    public function putJson(string $path, string $json)
    {
        $method = 'PUT';

        $url = $this->makeUrl($path);

        $header = $this->getAuthHeader();

        $logContext = $this->logContext($url, $method, $json);

        try {
            $query = $this->restClient->put($url, $json, $header);
        } catch (CurlException $exception) {
            $this->logger->error("{$method} error: " . $exception->getMessage(), $logContext);

            return $exception;
        }

        $resultContent = $query->getContent();

        $logContext = $this->logContext($url, $method, $json, $resultContent);

        if ($query->isSuccessful()) {
            $this->logger->info("{$method} result:", $logContext);
        } else {
            $this->logger->error("{$method} error: " . $query->getStatusCode(), $logContext);
        }

        return $resultContent;
    }

    /**
     * @param string $path
     *
     * @return CurlException|\Exception|string
     */
    public function delete(string $path)
    {
        $method = 'DELETE';

        $url = $this->makeUrl($path);

        $header = $this->getAuthHeader();

        $logContext = $this->logContext($url, $method);

        try {
            $query = $this->restClient->delete($url, $header);
        } catch (CurlException $exception) {
            $this->logger->error("{$method} error: " . $exception->getMessage(), $logContext);

            return $exception;
        }

        $resultContent = $query->getContent();

        $logContext = $this->logContext($url, $method, null, $resultContent);

        if ($query->isSuccessful()) {
            $this->logger->info("{$method} result:", $logContext);
        } else {
            $this->logger->error("{$method} error: " . $query->getStatusCode(), $logContext);
        }

        return $resultContent;
    }

    /**
     * @param string $url
     * @param string $method
     * @param null   $send
     * @param null   $result
     *
     * @return array
     */
    private function logContext($url = '', $method = '', $send = null, $result = null)
    {
        return ['url' => $url, 'method' => $method, 'send' => $send, 'result' => $result];
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function makeUrl(string $path)
    {
        return $this->apiUrl . '/' . $this->fixPath($path);
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function fixPath(string $path)
    {
        return (string)preg_replace('/^\//', '', $path);
    }

    /**
     * @return array
     */
    private function getAuthHeader()
    {
        return [
            CURLOPT_HTTPHEADER =>
                [
                    'Content-Type: application/json',
                    'Authorization: Basic ' . base64_encode($this->login . ':' . $this->password)
                ]
        ];
    }

}