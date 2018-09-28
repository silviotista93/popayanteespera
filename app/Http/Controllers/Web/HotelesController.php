<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelesController extends Controller
{
    public function showHotel(){

        return view('web.hotel.show-hoteles');
    }
}
