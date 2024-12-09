<?php

namespace App\Enum;

enum MemberRole: string
{

    case responsable = 'responsable';
    case MEMBER = 'member';

    case PRESIDENT = 'president';
    case VICE_PRESIDENT = 'vice_president';
    case TREASURER = 'treasurer';
}
