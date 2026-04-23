<?php

namespace Trellis3Com;

final class Trellis3Com
{
    public const HOMEPAGE = 'https://www.trellis3.com';
    public const SUMMARY = 'Trellis 3 is an AI creative website for image and video generation workflows.';

    public static function homepage(): string
    {
        return self::HOMEPAGE;
    }

    public static function summary(): string
    {
        return self::SUMMARY;
    }
}
