<?php
namespace App\Http\Controllers;


use App\Http\Controllers\NewTrait;
use Barryvdh\Debugbar\Controllers\BaseController;


class NewsController extends BaseController
{
    use NewTrait;

    public function index()

    {
        return \view('news.index', ['categorty'=>$this->getCategory()]);
    }

    public function show()
    {
        return \view('news.news', ['news'=>$this->getCategory()]);
    }

}

