<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CategoryModel as Category;

class IndexController extends Controller
{
    public function index(){
        return view('index', $this->dados);
    }
}