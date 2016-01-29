<?php

namespace Dribbble\Exception;

use Dribbble\Exception;

class UnprocessableEntityException extends Exception
{
    /**
     * The validation errors.
     *
     * @var array
     */
    protected $errors = [];

    /**
     * Get the validation errors.
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Set the validation errors.
     *
     * @param  array  $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }
}
