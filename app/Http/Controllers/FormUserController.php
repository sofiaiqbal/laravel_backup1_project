<?php

namespace App\Http\Controllers;

use App\Models\FormUser;
use Illuminate\Http\Request;

class FormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $form_users = new FormUser();
        // If no data exists, create and store the new data row
       // $form_users->entry_order = FormUser::count() + 1;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $zipcode = $request->input('zipcode');
           // $create_imagestable = new ImgeModel;
        $form_users->firstname = $firstname;
        $form_users->lastname = $lastname;
        $form_users->email = $email;
        $form_users->phonenumber = $phonenumber;
        $form_users->zipcode = $zipcode;
        $form_users->save();
        return ["message"=>"Successfully submitted"];
    }
}
