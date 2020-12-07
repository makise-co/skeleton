<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Auth;

use MakiseCo\Auth\AuthenticatableInterface;
use MakiseCo\Auth\Guard\GuardInterface;
use MakiseCo\Auth\UserProviderInterface;
use Psr\Http\Message\ServerRequestInterface;

use function array_key_exists;
use function is_string;

class FormGuard implements GuardInterface
{
    private UserProviderInterface $provider;
    private string $loginKey;
    private string $passwordKey;

    public function __construct(UserProviderInterface $provider, string $loginKey, string $passwordKey)
    {
        $this->provider = $provider;
        $this->loginKey = $loginKey;
        $this->passwordKey = $passwordKey;
    }

    public function authenticate(ServerRequestInterface $request): ?AuthenticatableInterface
    {
        $body = $request->getParsedBody();
        if (!array_key_exists($this->loginKey, $body) || !array_key_exists($this->passwordKey, $body)) {
            return null;
        }

        $login = $body[$this->loginKey];
        $password = $body[$this->passwordKey];

        if (!is_string($login) || !is_string($password)) {
            return null;
        }

        return $this->provider->retrieveByCredentials(
            [
                $this->loginKey => $login,
                $this->passwordKey => $password,
            ]
        );
    }
}
