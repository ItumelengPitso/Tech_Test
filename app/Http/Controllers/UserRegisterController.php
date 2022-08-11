<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserRegister;
use App\Models\Interests;
use App\Models\Languages;


class UserRegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Request = $request;

        $language = Languages::all();
        $interest = Interests::all();

        $required = array(
            'first_name' => 'Required',
            'surname' => 'Required',
            'sa_id' => 'Required',
            'email' => 'Required',
            'birth_date' => 'Required',
            'language' => 'Required',
            'interests' => 'Required',
        );

        $validator  = Validator::make($request->all(), $required);

        if ($validator->passes()) {

            $userRegister = new UserRegister();

            $userRegister->first_name = $Request->first_name;
            $userRegister->surname = $Request->surname;
            $userRegister->sa_id = $Request->sa_id;
            $userRegister->mobile = $Request->mobile;
            $userRegister->email = $Request->email;
            $userRegister->birth_date = $Request->birth_date;
            $userRegister->languages = $Request->language;
            $userRegister->interests = implode(',',$Request->interests);

            //Check if duplicate user
            $duplicateReport = UserRegister::where('email',$Request->email)->doesntExist();

            if($duplicateReport) {
                $userRegister->save();
//                $messages = "User created successfully!";
//                return response()->json(["success" => true, "message" => $messages]);
                return view('user_register',compact('language','interest'));
            }else{
                $messages = "User already exists!";
                return response()->json(["success" => false, "message" => $messages]);
            }



        } else {
            $messages   = $validator->errors()->first();
            return response()->json(["success" => false, "message" => $messages]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    }
}
