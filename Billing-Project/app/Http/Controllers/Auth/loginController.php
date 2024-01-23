<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Cookie;

class loginController extends Controller
{
    // Returning login view 
    public function login_view()
    {
        return view('Auth.auth-login');
    }

    // Get login 
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::where('email', $request->email)->first();
        if($user && HASH::check($request->password, $user->password))
        {
            if($request->has('remember_me'))
        {
            Cookie::queue('user_email', $request->email, 1440*15);
            Cookie::queue('user_pass', $request->password, 1440*15);
        }
        else
        {
            Cookie::queue('user_email', '', time() - 3600);
            Cookie::queue('user_pass','', time() - 3600);
        }
            Session::put('user', $user);
            return redirect('/');
        }

        return redirect()->back()->with('error-msg', 'Email/Password did not match !')->withInput();
    }
}
