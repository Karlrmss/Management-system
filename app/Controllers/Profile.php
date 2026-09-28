<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        return view('profile/index', [
            'pageTitle'  => 'Profile',
            'activePage' => 'profile',
            'user'       => (new UserModel())->getDemoUser(),
        ]);
    }
}
