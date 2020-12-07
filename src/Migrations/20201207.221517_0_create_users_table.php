<?php
/*
 * This file is part of the Makise-Co Framework
 *
 * World line: 0.571024a
 * (c) Dmitry K. <coder1994@gmail.com>
 */

declare(strict_types=1);

namespace App\Migrations;

use Spiral\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Create tables, add columns or insert data here
     */
    public function up(): void
    {
        $table = $this->database()->table('users')->getSchema();
        $table->column('id')->uuid();
        $table->setPrimaryKeys(['id']);

        $table->column('email')->text()->nullable(false);
        $table->column('password')->text()->nullable(false);
        $table->column('name')->text()->nullable(false);
        $table->column('token')->text()->nullable(true);

        $table->timestamp('created_at')->nullable(false);
        $table->timestamp('updated_at')->nullable(false);
        $table->timestamp('deleted_at')->nullable(true);

        $table->index(['email'])->unique();

        $table->save();
    }

    /**
     * Drop created tables, columns and etc here
     */
    public function down(): void
    {
        $table = $this->database()->table('users')->getSchema();
        $table->declareDropped();
        $table->save();
    }
}
