<?php
/**
 * Yireo Core for Magento
 *
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2019 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

declare(strict_types=1);

namespace Yireo\Core\Behaviour;

/**
 * Core error trait
 */
trait Errorable
{
    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return bool
     */
    public function hasErrors() : bool
    {
        return (bool) empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * @param string $delimiter
     *
     * @return string
     */
    public function getErrorString(string $delimiter = '; ') : string
    {
        return implode($delimiter, $this->errors);
    }

    /**
     * @param string $error
     */
    public function setError(string $error)
    {
        $this->addError($error);
    }

    /**
     * @param string $error
     */
    public function addError(string $error)
    {
        $this->errors[] = $error;
    }
}
