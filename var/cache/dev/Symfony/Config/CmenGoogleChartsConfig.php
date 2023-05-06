<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CmenGoogleChartsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $version;
    private $language;
    private $_usedProperties = [];

    /**
     * @default 'current'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function language($value): self
    {
        $this->_usedProperties['language'] = true;
        $this->language = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'cmen_google_charts';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if (array_key_exists('language', $value)) {
            $this->_usedProperties['language'] = true;
            $this->language = $value['language'];
            unset($value['language']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['language'])) {
            $output['language'] = $this->language;
        }

        return $output;
    }

}
