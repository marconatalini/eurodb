<?php
/**
 * Created by PhpStorm.
 * User: Marco
 * Date: 02/01/2021
 * Time: 20:57
 */

namespace App\Security\Encoder;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class myCustomPasswordEncoder implements PasswordEncoderInterface
{

    /**
     * Encodes the raw password.
     *
     * @return string The encoded password
     *
     * @throws BadCredentialsException   If the raw password is invalid, e.g. excessively long
     * @throws \InvalidArgumentException If the salt is invalid
     */
    public function encodePassword(string $raw, ?string $salt)
    {
        return $raw;
    }

    /**
     * Checks a raw password against an encoded password.
     *
     * @param string $encoded An encoded password
     * @param string $raw A raw password
     * @param string|null $salt The salt
     *
     * @return bool true if the password is valid, false otherwise
     *
     * @throws \InvalidArgumentException If the salt is invalid
     */
    public function isPasswordValid(string $encoded, string $raw, ?string $salt)
    {
        return $encoded == $raw;
    }

    /**
     * Checks if an encoded password would benefit from rehashing.
     */
    public function needsRehash(string $encoded): bool
    {
        return false;
    }
}