<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\UserRegister;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Illuminate\Support\Facades\Notification;


class UserRegisterController extends Controller
{

    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()){

        $language = Languages::all();
        $interest = Interests::all();

        return view('user_create',compact('language','interest'));
        }else{
            return view('auth.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Request = Request::all();

        $required = array(
            'first_name' => 'Required',
            'surname' => 'Required',
            'sa_id' => 'Required',
            'mobile' => 'Required',
            'email' => 'Required',
            'birth_date' => 'Required',
            'language' => 'Required',
            'interests' => 'Required',
        );

        $validator  = Validator::make($Request, $required);

        if ($validator->passes()) {

            $userRegister = new UserRegister();

            $userRegister->first_name = $Request['first_name'];
            $userRegister->surname = $Request['surname'];
            $userRegister->sa_id = $Request['sa_id'];
            $userRegister->mobile = $Request['mobile'];
            $userRegister->email = $Request['email'];
            $userRegister->birth_date = $Request['birth_date'];
            $userRegister->languages = $Request['language'];
            $userRegister->interests = implode(',',$Request['interests']);

            //Check if duplicate user
            $duplicateReport = UserRegister::where('email',$Request['email'])->doesntExist();

            if($duplicateReport) {
                $userRegister->save();

                $messages = "User created successfully!";

                return redirect('/Dashboard')->with('success', $messages);
            }else{
                $messages = "User already exists!";
                return redirect('/RegisterUser')->with('error', $messages);
            }
        } else {
            $messages   = $validator->errors()->first();
            return redirect('/RegisterUser')->with('error', $messages);
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findUser = UserRegister::find($id);
        $language = Languages::all();
        $interest = Interests::all();

        $prevInterest = explode(',',$findUser->interests);


        return view('user_edit',compact('findUser','language','interest','prevInterest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $Request = Request::all();

        $required = array(
            'first_name' => 'Required',
            'surname' => 'Required',
            'sa_id' => 'Required',
            'mobile' => 'Required',
            'email' => 'Required',
            'birth_date' => 'Required',
            'language' => 'Required',
            'interests' => 'Required',
        );

        $validator  = Validator::make($Request, $required);

        if ($validator->passes()) {

            $userRegister =  UserRegister::find($id);

            $userRegister->first_name = $Request['first_name'];
            $userRegister->surname = $Request['surname'];
            $userRegister->sa_id = $Request['sa_id'];
            $userRegister->mobile = $Request['mobile'];
            $userRegister->email = $Request['email'];
            $userRegister->birth_date = $Request['birth_date'];
            $userRegister->languages = $Request['language'];
            $userRegister->interests = implode(',',$Request['interests']);

            $userRegister->save();

            $messages = 'User successfully update';

            return redirect('/Dashboard')->with('success', $messages);
        } else {
            $messages   = $validator->errors()->first();
            return redirect('/RegisterUser')->with('error', $messages);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportScheduler  $reportScheduler
     *  @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userRegister =  UserRegister::find($id);
        $userRegister->delete();

        $messages = 'User successfully deleted';
        return redirect('/Dashboard')->with('success', $messages);
    }

    public function sendEmailNotification()
    {
        $user = User::first();

        $registrationData =[
          'body' =>'You have been registered',
          'registrationText' => 'Visit site',
          'url' =>url('/'),
//          'ThankYou' =>'Verify that you are registered'
        ];

//        $user->notify(new UserCreatedNotification($registrationData));
        Notification::send($user, new UserCreatedNotification($registrationData));

    }
}

