<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    private $coffee;
    //
    public function __construct(CoffeeRepository $coffee)
    {
        $this->coffee = $coffee;
    }

}
