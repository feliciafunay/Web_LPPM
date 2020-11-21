<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researche;
use App\CommunityService;
use App\Publication;
use Illuminate\Support\Str;
use Validator;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/login');
    }

    public function checklogin(Request $request)
    {
        $messages = [
            'email' => ':email wajib diisi.',
        ];

        $this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('admin/successlogin');
        }
        else 
        {
            return back()->with('error', 'Wrong Email or Password!');
        }
    }

    public function successlogin()
    {
        return view('/admin/index');
    }

    public function penelitian()
    {
        $researches = Researche::orderBy('date', 'desc')->paginate(5);//Model
        // foreach($researches as $entries){
        //     $entries->description = Str::limit($entries->description, 200);
        // }
        return view('/admin/adm_penelitian', ['researches' => $researches]);
    }

    public function pengabdian()
    {
        $comserv = CommunityService::orderBy('date', 'desc')->paginate(5);//Model
        // foreach($researches as $entries){
        //     $entries->description = Str::limit($entries->description, 200);
        // }
        return view('/admin/adm_pengabdian', ['comserv' => $comserv]);
    }

    public function publikasi()
    {
        $publications = Publication::orderBy('date', 'desc')->paginate(5);//Model
        return view('/admin/adm_publikasi', ['publications' => $publications]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Researche $research)
    {

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
