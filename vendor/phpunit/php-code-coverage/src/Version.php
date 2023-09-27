<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    /**
     * @var string
     */
    private static $version;

    public static function id(): string
    {
        if (self::$version === null) {
            self::$version = (new VersionId('9.2.27', dirname(__DIR__)))->getVersion();
        }

        return self::$version;
    }
}
