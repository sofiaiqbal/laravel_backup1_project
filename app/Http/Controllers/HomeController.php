<?php

namespace App\Http\Controllers;
use App\Models\FormUser;
use Illuminate\Pagination\Paginator;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $form_users = FormUser::paginate(7);
        //$perPage = 5;

        // Create a paginator instance
        //$paginator = Paginator::make($customData, count($customData), $perPage);
        /*$form_users = FormUser::all();*/
        return view('home' , compact('form_users'));
    }
    public function detail($id)
    {
    /* $about_table = AboutModel::find($id);*/
        $form_users = FormUser::find($id);
        return view('formdetails' , compact('form_users'));
    }
     /* public function detailform($id)
    {
   $about_table = AboutModel::find($id);
        $form_users = FormUser::find($id);
        return view('formdetails' , compact('form_users'));
    }*/
}
