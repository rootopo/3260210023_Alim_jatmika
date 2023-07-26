<?php

namespace App\Controllers;
use Codeigniter\Controller;
class FormKontroler extends BaseController
{
    public function profile(){
        return view('profile');
    }
    public function experience(){
        return view('experience');
    }
}