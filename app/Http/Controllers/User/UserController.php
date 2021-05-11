<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct() {
      $this->middleware('auth')->except('showUser2');
    }
    public function showUser() {
        return 'Welcome User ?';
    }

    public function showUser1() {
        return 'Welcome User1 ?';
    }
    public function showUser2() {
        return 'Welcome User2 ?';
    }
    public function showUser3() {
        return 'Welcome User3 ?';
    }
    public function showUser4() {
        return 'Welcome User4 ?';
    }
}
