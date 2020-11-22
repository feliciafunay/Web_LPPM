<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommunityService;
use Illuminate\Support\Str;

class PengabdianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comserv = CommunityService::orderBy('id', 'desc')->paginate(5);//Model
        foreach($comserv as $entries){
            $entries->description = Str::limit($entries->description, 200);
        }
        return view('/pengabdian/index', ['comserv' => $comserv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengabdian/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:2',
            'description' => 'required|min:2',
            'author' => 'required|min:3',
            'date' => 'required|date_format:Y-m-d',
            'thumbnail' => 'mimes:jpeg,png,jpg'
        ]);

        $imgName = null;

        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('img/pengabdian'), $imgName);
        }

        CommunityService::create([
            'title' => $request->title,
            'slug'=> Str::slug($request->title, '-'),
            'description' => $request->description,
            'author' => $request->author,
            'date' => $request->date,
            'thumbnail' => $imgName
        ]);
        // CommunityService::create($request->all());

        return redirect('/admin/successlogin/pengabdian')->with('status', 'Berita Pengabdian Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comserv = CommunityService::where('slug', $slug)->first();
        return view('pengabdian/show', compact('comserv'));
        // return $comserv;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityService $comserv)
    {
        return view('pengabdian/edit', compact('comserv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommunityService $comserv)
    {
        $request->validate([
            'title' => 'required|max:255|min:2',
            'description' => 'required|min:2',
            'author' => 'required|min:3',
            'date' => 'required|date_format:Y-m-d'
        ]);
        
        $imgName = null;

        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            $request->thumbnail->move(public_path('img/pengabdian'), $imgName);
        }

        CommunityService::where('id', $comserv->id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author,
                    'date' => $request->date,
                    'thumbnail' => $imgName
                ]);
        return redirect('/admin/successlogin/pengabdian')->with('status', 'Berita Pengabdian Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CommunityService::find($id)->delete();
        return redirect('/admin/successlogin/pengabdian')->with('status', 'Berita Pengabdian Berhasil Dihapus!');
    }
}
