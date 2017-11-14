<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    'user/logout' => 'index/user/logout',
    'ties/index2/:id' => 'index/tie/index2',
    'tieba' => 'index/tieba/index',
    'user' => 'index/user/index',
    'user/register' => 'index/user/register',
    'user/jump' => 'index/user/jump',
    'user/register' => 'index/user/register',
    'user/doregister' => 'index/user/doregister',
    'ba/:id' => 'index/ba/index',
    'tie/:id' => 'index/tie/index',
    'ties/gentie/:id' => 'index/tie/gentie',
    'tie/addtie' => 'index/tie/addtie',
    'tie/addt' => 'index/tie/addt',
    'ties/gent' => 'index/tie/gent',
    'ties/huifutie/:id' => 'index/tie/huifutie',
    'ties/huifut' => 'index/tie/huifut',

];
