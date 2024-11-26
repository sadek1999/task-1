<?php

namespace App\Enum;

enum PermissionsEnum:string
{
    case ManageUsers='manage_users';
    case ManageComments='mange_comments';
    case ManageFeatures='manage_features';
    case Upvote_Downvote='upvote_downvote';
}
