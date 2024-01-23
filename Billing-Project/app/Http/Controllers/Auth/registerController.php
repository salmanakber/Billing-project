<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    // Returning register view 
    public function register_view()
    {
        return view('Auth.auth-register');
    }

    // Get register 
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'terms' => 'required'
            
        ]);

        if(User::where('email',$request->email)->first())
        {
            return redirect()->back()->with('error-msg','This email already been used !')->withInput();
        }

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => HASH::make($request->password),
            'created_at' => now(),
            'updated_at' => now() 
        ]);

        return redirect('/login')->with('success-msg','Your account has been created successfuly !');
    }
}
