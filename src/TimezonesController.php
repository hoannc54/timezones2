<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 3/29/18
 * Time: 06:22
 */

namespace Hoannc\Timezones;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }

}
