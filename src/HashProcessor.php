<?php

declare(strict_types=1);

namespace AndreyCheburaev\PackageOtusHw3;

class HashProcessor
{
    /**
     * @param string $password
     *
     * @return string
     */
    public function getBlowfishHash(string $password = ''): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}