<?php
/**
 * Copyright (c) Антон Аксенов (aka Anthony Axenov)
 *
 * This code is licensed under MIT.
 * Этот код распространяется по лицензии MIT.
 * https://github.com/anthonyaxenov/atol-online/blob/master/LICENSE
 */

namespace AtolOnline\Exceptions;

use Throwable;

/**
 * Исключение, возникающее в случае если платежей в массиве слишком мало
 *
 * @package AtolOnline\Exceptions
 */
class AtolTooFewPaymentsException extends AtolException
{
    /**
     * AtolTooFewPaymentsException constructor.
     *
     * @param int            $min
     * @param string         $message
     * @param int            $code
     * @param Throwable|null $previous
     */
    public function __construct($min, $message = "", $code = 0, Throwable $previous = null)
    {
        $message = $message ?: 'Слишком много платежей (мин. '.$min.')';
        parent::__construct($message, $code, $previous);
    }
}