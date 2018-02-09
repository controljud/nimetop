<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\CategoryModel as Category;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $dados = array();

    public function __construct(){
        $this->setCategories();
    }

    public function setCategories(){
        $categories = Category::where('status', 1)->get();
        $this->dados['categories'] = $categories;
    }
}
