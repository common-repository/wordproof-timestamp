<?php

declare(strict_types=1);

namespace WordProofTimestamp\App\Config\Migrations;

/**
 * Base migration class.
 */
abstract class Migration
{
    /**
     * Performs the migration.
     *
     * @return void
     */
    abstract public function up(): void;
}
