<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    
    private ?ModelsUser $user = null;
    //
    public function __construct()
    {
       $this->user = Auth::user();
    }

    public function getUser(): mixed {
        return $this->user;
    }
    
    public function isAdmin(): bool {
        return $this->user ? $this->user->is_admin : false;
    }
}
