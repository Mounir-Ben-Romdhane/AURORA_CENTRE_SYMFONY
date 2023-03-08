<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpuOauth2Client'.\DIRECTORY_SEPARATOR.'HttpClientOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpuOauth2Client'.\DIRECTORY_SEPARATOR.'ClientsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KnpuOauth2ClientConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $httpClient;
    private $httpClientOptions;
    private $clients;
    private $_usedProperties = [];

    /**
     * Service id of HTTP client to use (must implement GuzzleHttp\ClientInterface)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpClient($value): self
    {
        $this->_usedProperties['httpClient'] = true;
        $this->httpClient = $value;

        return $this;
    }

    public function httpClientOptions(array $value = []): \Symfony\Config\KnpuOauth2Client\HttpClientOptionsConfig
    {
        if (null === $this->httpClientOptions) {
            $this->_usedProperties['httpClientOptions'] = true;
            $this->httpClientOptions = new \Symfony\Config\KnpuOauth2Client\HttpClientOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "httpClientOptions()" has already been initialized. You cannot pass values the second time you call httpClientOptions().');
        }

        return $this->httpClientOptions;
    }

    public function clients(string $variable, array $value = []): \Symfony\Config\KnpuOauth2Client\ClientsConfig
    {
        if (!isset($this->clients[$variable])) {
            $this->_usedProperties['clients'] = true;
            $this->clients[$variable] = new \Symfony\Config\KnpuOauth2Client\ClientsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "clients()" has already been initialized. You cannot pass values the second time you call clients().');
        }

        return $this->clients[$variable];
    }

    public function getExtensionAlias(): string
    {
        return 'knpu_oauth2_client';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('http_client', $value)) {
            $this->_usedProperties['httpClient'] = true;
            $this->httpClient = $value['http_client'];
            unset($value['http_client']);
        }

        if (array_key_exists('http_client_options', $value)) {
            $this->_usedProperties['httpClientOptions'] = true;
            $this->httpClientOptions = new \Symfony\Config\KnpuOauth2Client\HttpClientOptionsConfig($value['http_client_options']);
            unset($value['http_client_options']);
        }

        if (array_key_exists('clients', $value)) {
            $this->_usedProperties['clients'] = true;
            $this->clients = array_map(function ($v) { return new \Symfony\Config\KnpuOauth2Client\ClientsConfig($v); }, $value['clients']);
            unset($value['clients']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['httpClient'])) {
            $output['http_client'] = $this->httpClient;
        }
        if (isset($this->_usedProperties['httpClientOptions'])) {
            $output['http_client_options'] = $this->httpClientOptions->toArray();
        }
        if (isset($this->_usedProperties['clients'])) {
            $output['clients'] = array_map(function ($v) { return $v->toArray(); }, $this->clients);
        }

        return $output;
    }

}
