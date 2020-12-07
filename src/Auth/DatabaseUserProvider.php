<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Auth;

use App\Repository\UserRepository;
use MakiseCo\Auth\AuthenticatableInterface;
use MakiseCo\Auth\UserProviderInterface;

use function array_key_exists;
use function password_verify;

class DatabaseUserProvider implements UserProviderInterface
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function retrieveById($id): ?AuthenticatableInterface
    {
        return $this->userRepo->findByPK($id);
    }

    public function retrieveByCredentials(array $credentials): ?AuthenticatableInterface
    {
        if (array_key_exists('token', $credentials)) {
            $token = $credentials['token'];

            return $this->userRepo->findByToken($token);
        }

        ['email' => $email, 'password' => $password] = $credentials;

        $user = $this->userRepo->findByEmail($email);
        if ($user === null) {
            return null;
        }

        // verify password
        if (!password_verify($password, $user->password)) {
            return null;
        }

        return $user;
    }
}
