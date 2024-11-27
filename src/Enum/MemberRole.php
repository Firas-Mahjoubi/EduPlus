<?php

namespace App\Enum;

enum MemberRole: string
{
case ADMIN = 'admin';
case MANAGER = 'manager';
case MEMBER = 'member';
case MODERATOR = 'moderator';
case PRESIDENT = 'president';
}