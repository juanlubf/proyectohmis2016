<?php

class Password
{
    const MIN_LENGTH = 7;
    const MAX_LENGTH = 12;

    public function validLength($password) {
        $passLength = strlen($password);
        return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGTH;
    }
}