<?php
/**
 * Created by PhpStorm.
 * User: boris_2
 * Date: 19.10.2016
 * Time: 19:56
 */

namespace App\Http\Controllers;

use App\Data;

class IndexController extends Controller
{
    private $data;

    public function portfolio()
    {
        $this->data = Data::all();
        return view('portfolio')->with(['data'=>$this->data]);
    }
}