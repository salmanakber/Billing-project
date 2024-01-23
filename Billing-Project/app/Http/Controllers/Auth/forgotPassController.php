<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Setting;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class forgotPassController extends Controller {

    // Returning forget pass veiw
    public function forgot_pass_veiw() {
        return view( 'Auth.auth-forget-pass' );
    }

    // Reset password

    public function reset_pass( Request $request ) {

        // SYSTEM SETTINGS 
        $systemSetting =  json_decode(Setting::get('system')->first(),true);
        $systemValues = json_decode($systemSetting['system'],true);

        // SMPT SETTINGS 
        $smtpSetting =  json_decode(Setting::get('smtp')->first(),true);
        $settingValues = json_decode($smtpSetting['smtp'],true);

        if ( User::where( 'email', $request->email )->first() ) {

            $mail = new PHPMailer( true );

            try {
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host       = $settingValues["smtpHost"];
                $mail->SMTPAuth   = true;
                $mail->Username   = $settingValues["smtpUser"];
                $mail->Password   = $settingValues["smtpPass"];
                $mail->SMTPSecure = $settingValues["smtpSecure"];
                $mail->Port       = $settingValues["smtpPort"];

                $mail->setFrom($settingValues["smtpUser"], (!empty($systemValues['systemName'])));
                $mail->addAddress( $request->email );

                $mail->isHTML( true );
                $randomNumber = random_int( 1000, 9999 );
                $mail->Subject = 'Continue !';
                $mail->Body    = 'We have send you 4 digit code to continue your login ! '. $randomNumber;

                if ( !$mail->send() ) {

                    return back()->with( 'error', 'Email not sent.' )->withErrors( $mail->ErrorInfo );
                } else {

                    $user =  User::where( 'email', $request->email )->first();
                    $user->forgotPassCode = $randomNumber;
                    $user->save();
                    Session::put( 'resetCodeView', 1 );
                    return redirect()->to( '/reset-code' )->with( 'success-msg', 'Account activation 4 digits code sent to your email address: '.$request->email.' Please insert the Code to continue.' );
                }

                } catch ( Exception $e ) {
                    return redirect()->back()->with( 'error-msg', 'Fialed to send reset code, Try again !' )->withInput();
                }
            } else {
                return redirect()->back()->with( 'error-msg', 'This email not exist in our system !' )->withInput();
            }
    }

}
