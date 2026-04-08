<?php

declare(strict_types=1);

class SystemStatus
{
    public static function getPhpVersion(): string
    {
        return phpversion() ?: 'Unknown';
    }

    public static function getCurrentTime(): string
    {
        return date('Y-m-d H:i:s');
    }

    public static function getFormattedMemoryUsage(): string
    {
        return round(memory_get_usage() / 1024 / 1024, 2) . ' MB';
    }

    public static function getCurrentYear(): string
    {
        return date('Y');
    }
}
