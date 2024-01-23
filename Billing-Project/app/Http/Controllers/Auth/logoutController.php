<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class logoutController extends Controller
{
    public function logout()
    {
        Session::flush(); 
        return redirect()->to('/login');
    }
}
