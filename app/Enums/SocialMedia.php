<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum SocialMedia: string
{
    use EnumTrait;

    case YOUTUBE = "YouTube";
    case INSTAGRAM = "Instagram";
    case FACEBOOK = "Facebook";
    case TIKTOK = "TikTok";
    case TWITTER = "Twitter";
    case PINTEREST = "Pinterest";
    case LINKEDIN = "LinkedIn";
}
