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
        $form_users = FormUser::paginate(10);
        return view('home' , compact('form_users'));
    }
    public function detail($id)
    {
    /* $about_table = AboutModel::find($id);*/
        $form_users = FormUser::find($id);
        return view('formdetails' , compact('form_users'));
    }
}
