<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Repository\Constrain;

use Cycle\ORM\Select\ConstrainInterface;
use Cycle\ORM\Select\QueryBuilder;

class NotDeletedConstrain implements ConstrainInterface
{
    public function apply(QueryBuilder $query): void
    {
        $query->where('deleted_at', '=', null);
    }
}
