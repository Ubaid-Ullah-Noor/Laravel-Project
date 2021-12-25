<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\registration;

class reigstrationcontroller extends Controller
{
    function addData(Request $req)
    {  
        $member= new registration;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->phone=$req->phone;
        $member->address=$req->address;
        $member->blood_group=$req->blood_group;
        $member->date=$req->date;
        $member->disease=$req->disease;
        $member->save();
    }

}
