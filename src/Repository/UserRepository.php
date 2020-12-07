<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use Cycle\ORM\Select\Repository;

class UserRepository extends Repository
{
    public function findByToken(string $token): ?User
    {
        return $this->select()->where('token', $token)->fetchOne();
    }

    public function findByEmail(string $email): ?User
    {
        return $this->select()->where('email', $email)->fetchOne();
    }
}
