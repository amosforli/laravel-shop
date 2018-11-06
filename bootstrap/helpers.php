<?php
/**
 * Created by PhpStorm.
 * User: liyaohui
 * Date: 2018/11/5
 * Time: 22:26
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
