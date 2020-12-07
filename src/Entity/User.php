<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Entity;

use Cycle\Annotated\Annotation as ORM;
use MakiseCo\Auth\AuthenticatableInterface;

/**
 * @ORM\Entity(
 *     table="users",
 *     repository="\App\Repository\UserRepository",
 *     constrain="\App\Repository\Constrain\NotDeletedConstrain"
 * )
 */
class User implements AuthenticatableInterface
{
    /**
     * @ORM\Column(type="string", primary=true)
     */
    public ?int $id = null;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    public ?string $email = null;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    public ?string $password = null;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    public ?string $name = null;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    public ?string $token = null;

    /**
     * @ORM\Column(type="timestamp", name="created_at", nullable=false)
     */
    public ?\DateTimeImmutable $createdAt = null;

    /**
     * @ORM\Column(type="timestamp", name="updated_at", nullable=false)
     */
    public ?\DateTimeImmutable $updatedAt = null;

    /**
     * @ORM\Column(type="timestamp", name="deleted_at", nullable=true)
     */
    public ?\DateTimeImmutable $deletedAt = null;

    public function getAuthIdentifier(): int
    {
        return $this->id;
    }
}
