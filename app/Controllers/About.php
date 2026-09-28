<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('about/index', [
            'pageTitle'  => 'About',
            'activePage' => 'about',
        ]);
    }
}
