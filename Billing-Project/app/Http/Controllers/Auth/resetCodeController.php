<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class resetCodeController extends Controller
{
    // Returning reset code view 
    public function reset_code()
    {
        return view('Auth.auth-reset-code');
    }

    // If sent code match redirect to dashboard 
    public function reset_save_code(Request $request)
    {
        $user = User::where('forgotPassCode', $request->verify_code )->first();
        if($user)
        {
            Session::put('user', $user);
            return redirect()->to('/');
        }
        else
        {
            return redirect()->back()->with('error-msg', 'Code did not match !');
        }
    }
}
