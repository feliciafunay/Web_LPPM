<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researche;
use App\CommunityService;
use App\Publication;
use App\Expertise;
use App\User;
use DB;
use Carbon\Carbon;
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
        $admin = DB::table('users')->get();
        $timestamp = Carbon::now();
        $year1 = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->year;
        $year2 = $year1 - 1;
        $year3 = $year1 - 2;

        //penelitian
        $countR1 = \DB::table('researches')->whereYear('date', $year3)->count();
        $countR2 = \DB::table('researches')->whereYear('date', $year2)->count();
        $countR3 = \DB::table('researches')->whereYear('date', $year1)->count();

        //pengabdian
        $countCS1 = \DB::table('community_services')->whereYear('date', $year3)->count();
        $countCS2 = \DB::table('community_services')->whereYear('date', $year2)->count();
        $countCS3 = \DB::table('community_services')->whereYear('date', $year1)->count();

        //publikasi
        $countP1 = \DB::table('publications')->whereYear('date', $year3)->count();
        $countP2 = \DB::table('publications')->whereYear('date', $year2)->count();
        $countP3 = \DB::table('publications')->whereYear('date', $year1)->count();

        // $count = Researche::where('date', 2018)->count();
        return view('/admin/index', ['admin' => $admin, 'countR1' => $countR1, 'countR2' => $countR2, 'countR3' => $countR3,
                    'countCS1' => $countCS1, 'countCS2' => $countCS2, 'countCS3' => $countCS3,
                    'countP1' => $countP1, 'countP2' => $countP2, 'countP3' => $countP3,
                    'year1' => $year1, 'year2' => $year2, 'year3' => $year3]);
        // return view('/admin/index');
    }

    public function penelitian()
    {
        $researches = Researche::orderBy('date', 'desc')->paginate(5);//Model
        $timestamp = Carbon::now();
        $year1 = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->year;
        $year2 = $year1 - 1;
        $year3 = $year1 - 2;

        $countR1 = \DB::table('researches')->whereYear('date', $year3)->count();
        $countR2 = \DB::table('researches')->whereYear('date', $year2)->count();
        $countR3 = \DB::table('researches')->whereYear('date', $year1)->count();

        // foreach($researches as $entries){
        //     $entries->description = Str::limit($entries->description, 200);
        // }
        return view('/admin/adm_penelitian', ['researches' => $researches, 'countR1' => $countR1, 'countR2' => $countR2, 'countR3' => $countR3,
                                                'year1' => $year1, 'year2' => $year2, 'year3' => $year3]);
    }

    public function pengabdian()
    {
        $comserv = CommunityService::orderBy('date', 'desc')->paginate(5);//Model
        $timestamp = Carbon::now();
        $year1 = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->year;
        $year2 = $year1 - 1;
        $year3 = $year1 - 2;

        $countCS1 = \DB::table('community_services')->whereYear('date', $year3)->count();
        $countCS2 = \DB::table('community_services')->whereYear('date', $year2)->count();
        $countCS3 = \DB::table('community_services')->whereYear('date', $year1)->count();

        return view('/admin/adm_pengabdian', ['comserv' => $comserv, 'countCS1' => $countCS1, 'countCS2' => $countCS2, 'countCS3' => $countCS3,
                                                'year1' => $year1, 'year2' => $year2, 'year3' => $year3]);
    }

    public function publikasi()
    {
        $publications = Publication::orderBy('date', 'desc')->paginate(5);//Model
        $timestamp = Carbon::now();
        $year1 = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->year;
        $year2 = $year1 - 1;
        $year3 = $year1 - 2;

        $countP1 = \DB::table('publications')->whereYear('date', $year3)->count();
        $countP2 = \DB::table('publications')->whereYear('date', $year2)->count();
        $countP3 = \DB::table('publications')->whereYear('date', $year1)->count();

        return view('/admin/adm_publikasi', ['publications' => $publications, 'countP1' => $countP1, 'countP2' => $countP2, 'countP3' => $countP3,
                                                'year1' => $year1, 'year2' => $year2, 'year3' => $year3]);
    }

    public function kepakaran()
    {
        $expertises = Expertise::orderBy('created_at', 'asc')->paginate(5);//Model
        return view('/admin/adm_kepakaran', ['expertises' => $expertises]);
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
        // $admin = DB::table('users')->where('id', $id)->get();

        // return view('/admin/edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        // DB::table('users')->where('id', $request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]);
        // return redirect('/admin/successlogin')->with('status', 'Data Admin Berhasil Diubah!');
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
