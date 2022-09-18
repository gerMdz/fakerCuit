<?php

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CuitNotFoundException extends NotFoundHttpException
{
    private const MESSAGE = 'Recurso no encontrado';

    public static function fromCuit(): self
    {
        throw new self(self::MESSAGE);
    }
}