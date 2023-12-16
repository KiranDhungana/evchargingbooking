<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Stevebauman\Location\Facades\Location;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{


    public function loadRegister()
    {
        return view('loginsignup.register');
    }


    public function studentRegister(Request $request)
    {
        $gen = 1;
        if ($request->input('gender') == "male") {
            $gen = 1;
        } else {
            $gen = 0;
        }

        $request->validate([

            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'string|required|confirmed|min:6',
            'pnumber' => 'unique:users'
        ]);

        $user = new User;
        $user->fname = $request->fname;
        $user->email = $request->email;
        $user->lname = $request->lname;
        $user->pnumber = $request->pnumber;
        $user->address = $request->address;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->gender = $gen;
        $user->password = Hash::make($request->password);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("/verification/" . $user->id);
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                $data = User::all();
                return redirect('/superadmin/dashboard')->with("user", $data);
            } else {
                return redirect('/');
            }

        }
        return view('loginsignup.login');
    }


    //    forget  password
    public function changepassword()
    {
        return view('loginsignup.forgetpassword');
    }
    public function resetpassword(Request $req)
    {
        $email = $req->email;

        $emailExists = User::where('email', $email)->exists() && User::where('is_verified', 1)->exists();

        if ($emailExists) {
            $user = User::where('email', $email)
                ->where('is_verified', 1)

                ->first();
            $userid = $user['id'];

            return redirect("/changepasswordnew/" . $userid);
        }
        ;
        return view('loginsignup.forgetpassword');
    }

    public function changepasswordnew($id)
    {
        $user = User::where('id', $id)->first();

        $email = $user->email;
        $id = $user->id;

        $this->sendOtp($user);


        return view('loginsignup.verifyotpforpassword', )->with('id', $id)->with('email', $email);
        ;
    }
    public function checkotp(Request $req)
    {
        $user = (DB::table('email_verifications')->where('otp', $req->otp)->first());
        if ((DB::table('email_verifications')->where('otp', $req->otp)->first() != null)) {
            $usermail = $user->email;

            return redirect('/setnewpassword/' . $user->otp)->with('email', $usermail);
        } else {
            dd("invalid otp");

        }



    }
    public function setnewpassword($id)
    {
        $user = (DB::table('email_verifications')->where('otp', $id)->first());
        $usermail = $user->email;
        return view('loginsignup.changepassword')->with('email', $usermail);
    }
    public function setnewpasswordpost(Request $req)
    {
        $password = $req->password;
        $email = $req->email;
        $userinfo = (DB::table('users')->where('email', $email)->first());
        $id = $userinfo->id;
        $found = user::find($id);
        if ($found) {
            $found->password = Hash::make($password);
            $found->save();
        }

        // $userinfo->update();
        return redirect('/')->with('passwordmsg', "Password changed successfully");

    }

    //changepassword  end  




    public function sendOtp($user)
    {
        $otp = rand(100000, 999999);
        $time = time();

        EmailVerification::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'otp' => $otp,
                'created_at' => $time
            ]
        );

        $data['email'] = $user->email;
        $data['title'] = 'Mail Verification';

        $data['body'] = 'Your OTP is:- ' . $otp;

        Mail::send('loginsignup.mailVerification', ['data' => $data], function ($message) use ($data) {

            $message->from("kirandhungana570@gmail.com", "kd");
            $message->to($data['email'])->subject($data['title']);
        });
    }



    public function loadDashboard()
    {
        if (Auth::user()) {
            return view('dashboard');
        }
        return redirect('/');
    }

    public function verification($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user || $user->is_verified == 1) {
            return redirect('/');
        }
        $email = $user->email;

        $this->sendOtp($user); //OTP SEND

        return view('loginsignup.verification', compact('email'));
    }

    public function verifiedOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = EmailVerification::where('otp', $request->otp)->first();
        if (!$otpData) {
            return response()->json(['success' => false, 'msg' => 'You entered wrong OTP']);
        } else {
            // dd($user);
            $user['email_verified_at'] = now();
            $user->save();

            $currentTime = time();
            $time = $otpData->created_at;

            if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) { //90 seconds
                User::where('id', $user->id)->update([
                    'is_verified' => 1,

                ]);
                return response()->json(['success' => true, 'msg' => 'Mail has been verified']);
            } else {
                return response()->json(['success' => false, 'msg' => 'Your OTP has been Expired']);
            }

        }
    }



    public function resendOtp(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $otpData = EmailVerification::where('email', $request->email)->first();

        $currentTime = time();
        $time = $otpData->created_at;

        if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) { //90 seconds
            return response()->json(['success' => false, 'msg' => 'Please try after some time']);
        } else {

            $this->sendOtp($user); //OTP SEND
            return response()->json(['success' => true, 'msg' => 'OTP has been sent']);
        }

    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }





    //   get user location 

    public function getUserLocation(Request $request)
    {
        return view('location');
    }


    public function saveLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        dd($latitude, $longitude);
        // Process and store the location data as needed

        return response()->json(['success' => true]);
    }
    public function handleData(Request $request)
    {

        dd($request);
    }

    public function userprofilesetting($id)
    {
        $user = User::find($id);

        return view('userpages.profilesetting')->with('userinfo', $user);

    }

    public function userprofile($id)
    {
        $user = User::find($id);

        return view('userpages.userprofile')->with('profileinfo', $user);
    }

    // mail sender 
    public function mailsend(Request $req)
    {
        // dd($req);
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required',

            'message' => 'required',
            'subject' => 'required',

        ]);
        $fromemail = $req['email'];
        $fromname = $req['name'];
        $subj = $req['subject'];
        $message = $req['message'];
        $toname = 'Barefoot';
        $to_name = 'barefoot';
        $to_email = 'kirandhungana570@gmail.com';
        // $data = array('name' => "Cloudways (sender_name)", "body" => 'A test mail');
        $data = [
            'name' => $fromname,
            'email' => $fromemail,
            'msg' => $message,
            'subj' => $subj,

        ];



        // $user['to'] = 'barefootmartialarts@gmail.com';
        // $user['sub'] = $subj;
        // $user['from'] = $email;
        Mail::send('mail', $data, function ($message) use ($to_email, $toname, $fromemail, $fromname, $subj) {

            $message->from($fromemail, $fromname);
            $message->to($to_email, $toname);
            $message->subject($subj);
        });
        // Mail::send('contactus', $data, function ($mail) use ($user) {
        //     $mail->from($user['from']);
        //     $mail->subject($user['sub']);
        //     $mail->to($user['to']);
        // });

        return redirect('/contact')->with('sentmsg', 'Message sent successfully,We will contact you shortly');
    }

    //  delete user 
    public function deleteuser($name, $id)
    {
        // dd($id);
        $user = User::find($id);
        $user->delete();
        return redirect('/superadmin/dashboard')->with('deletemsg', "User Deleted Sucessfully");
    }

}