<?php

namespace App\Exception;

use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;


class BadCuitException extends BadRequestHttpException
{
    private const MESSAGE = 'Bad request';

    public static function fromRequest(): self
    {
        throw new self(self::MESSAGE);
    }
}