<?php

namespace App\Controllers;
use App\Models\cvmodel;

class Home extends BaseController
{
    protected $portfolio;
    public function __construct()
    {
        $this->portfolio = new cvmodel; 
    }
    public function index(): string
    {
        $abouts = new cvmodel();
        $about = $abouts->about();

        $data = [
            'abouts' => $about,
        
        ];

        return view('index',$data);
    }
}
