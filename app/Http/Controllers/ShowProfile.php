<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{

    public function __invoke(Request $request)
    {
        return 'this is a profile image';
    }

}
