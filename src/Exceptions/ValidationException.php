<?php



declare(strict_types=1);



namespace BrianFaust\Database\Exceptions;

class ValidationException extends \Exception
{
    protected $errors;

    public function __construct($errors = [], $message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    public function errors()
    {
        return $this->errors;
    }
}
