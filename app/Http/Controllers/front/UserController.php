<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAdmin(){

        return view('admin');
    }
    public function getLanding(){

        return view('landing');
    }

    public function getMy(){
        return '7ooods';
    }
    public function getId(){
        return '9';
    }
    public function getAge(){
        return '29';
    }
    public function getMya(){
        return 'ahmad';
    }
    public function getAgea(){
        return '10';
    }
    public function getIda(){
        return '30';
    }
    public function getBobName(){
        return 'barhommmaa';
    }
}

