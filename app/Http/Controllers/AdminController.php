<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researche;
use App\CommunityService;
use App\Publication;
use App\Expertise;
use App\Http\Controllers\DB;
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
        //penelitian
        $countR18 = \DB::table('researches')->whereYear('date', '2018')->count();
        $countR19 = \DB::table('researches')->whereYear('date', '2019')->count();
        $countR20 = \DB::table('researches')->whereYear('date', '2020')->count();

        //pengabdian
        $countCS18 = \DB::table('community_services')->whereYear('date', '2018')->count();
        $countCS19 = \DB::table('community_services')->whereYear('date', '2019')->count();
        $countCS20 = \DB::table('community_services')->whereYear('date', '2020')->count();

        //publikasi
        $countP18 = \DB::table('publications')->whereYear('date', '2018')->count();
        $countP19 = \DB::table('publications')->whereYear('date', '2019')->count();
        $countP20 = \DB::table('publications')->whereYear('date', '2020')->count();

        // $count = Researche::where('date', 2018)->count();
        return view('/admin/index', ['countR18' => $countR18, 'countR19' => $countR19, 'countR20' => $countR20,
                    'countCS18' => $countCS18, 'countCS19' => $countCS19, 'countCS20' => $countCS20,
                    'countP18' => $countP18, 'countP19' => $countP19, 'countP20' => $countP20]);
        // return view('/admin/index');
    }

    public function penelitian()
    {
        $researches = Researche::orderBy('date', 'desc')->paginate(5);//Model

        $countR18 = \DB::table('researches')->whereYear('date', '2018')->count();
        $countR19 = \DB::table('researches')->whereYear('date', '2019')->count();
        $countR20 = \DB::table('researches')->whereYear('date', '2020')->count();

        // foreach($researches as $entries){
        //     $entries->description = Str::limit($entries->description, 200);
        // }
        return view('/admin/adm_penelitian', ['researches' => $researches, 'countR18' => $countR18, 'countR19' => $countR19, 'countR20' => $countR20]);
    }

    public function pengabdian()
    {
        $comserv = CommunityService::orderBy('date', 'desc')->paginate(5);//Model

        $countCS18 = \DB::table('community_services')->whereYear('date', '2018')->count();
        $countCS19 = \DB::table('community_services')->whereYear('date', '2019')->count();
        $countCS20 = \DB::table('community_services')->whereYear('date', '2020')->count();

        return view('/admin/adm_pengabdian', ['comserv' => $comserv, 'countCS18' => $countCS18, 'countCS19' => $countCS19, 'countCS20' => $countCS20]);
    }

    public function publikasi()
    {
        $publications = Publication::orderBy('date', 'desc')->paginate(5);//Model

        $countP18 = \DB::table('publications')->whereYear('date', '2018')->count();
        $countP19 = \DB::table('publications')->whereYear('date', '2019')->count();
        $countP20 = \DB::table('publications')->whereYear('date', '2020')->count();

        return view('/admin/adm_publikasi', ['publications' => $publications, 'countP18' => $countP18, 'countP19' => $countP19, 'countP20' => $countP20]);
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
