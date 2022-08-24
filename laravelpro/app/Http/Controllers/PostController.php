<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //viết phương thức để xuất id
    function detail($id)
    {
        echo $id;
    }

}
