<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 3/29/18
 * Time: 06:23
 */
Route::get('timezones/{timezone}',
    'hoannc\timezones\TimezonesController@index');