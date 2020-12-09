<?php


namespace App\Enums;


use MyCLabs\Enum\Enum;

/**
 * Class UserStatus
 * @package App\Enums
 *
 * @method static DRAFT()
 * @method static PUBLISHED()
 * @method static ARCHIVED()
 * @method static HIDDEN()
 */
class UserStatus extends Enum
{
    private const DRAFT = 0;
    private const PUBLISHED = 1;
    private const ARCHIVED = 2;
    private const HIDDEN = 3;
}
