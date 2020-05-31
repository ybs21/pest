<?php

declare(strict_types=1);

namespace Pest\Contracts;

use PHPUnit\Framework\Test as BaseTest;

/**
 * @internal
 */
interface Test extends BaseTest
{
    /**
     * Returns the test filename.
     */
    public function getFilename(): string;
}
