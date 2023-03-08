<?php

namespace Symfony\Config\KnpuOauth2Client;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpClientOptionsConfig 
{
    private $timeout;
    private $proxy;
    private $verify;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->_usedProperties['timeout'] = true;
        $this->timeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxy($value): self
    {
        $this->_usedProperties['proxy'] = true;
        $this->proxy = $value;

        return $this;
    }

    /**
     * Use only with proxy option set
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function verify($value): self
    {
        $this->_usedProperties['verify'] = true;
        $this->verify = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('timeout', $value)) {
            $this->_usedProperties['timeout'] = true;
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }

        if (array_key_exists('proxy', $value)) {
            $this->_usedProperties['proxy'] = true;
            $this->proxy = $value['proxy'];
            unset($value['proxy']);
        }

        if (array_key_exists('verify', $value)) {
            $this->_usedProperties['verify'] = true;
            $this->verify = $value['verify'];
            unset($value['verify']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['timeout'])) {
            $output['timeout'] = $this->timeout;
        }
        if (isset($this->_usedProperties['proxy'])) {
            $output['proxy'] = $this->proxy;
        }
        if (isset($this->_usedProperties['verify'])) {
            $output['verify'] = $this->verify;
        }

        return $output;
    }

}
