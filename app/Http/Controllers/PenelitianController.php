<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Researche;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches = Researche::orderBy('date', 'desc')->paginate(5);//Model
        // $date = Researche::select('date')->first();
        // setlocale(LC_TIME, 'id_ID');
        // Carbon::setLocale('id');
        // Carbon::now()->formatLocalized("%A, %d %B %Y");

        foreach($researches as $entries){
            $entries->description = Str::limit($entries->description, 200);
            // $entries->date = Carbon::createFromFormat('Y-m-d H:i:s', $entries->date)->year;
            // $entries->date = date_format($entries->date, 'Y');
            // $entries->date = Carbon::parse($date->date)->year; yg bener
            // $date = $entries->date->isoFormat('D M Y');
        }
        
        return view('/berita-penelitian/index', ['researches' => $researches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita-penelitian/create');
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

        $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('img/penelitian'), $imgName);

        Researche::create([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'date' => $request->date,
            'slug'=> Str::slug($request->title, '-'),
            'thumbnail' => $imgName
        ]);
        // Researche::create($request->all());

        return redirect('/admin/successlogin/penelitian')->with('status', 'Berita Penelitian Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $research = Researche::where('slug', $slug)->first();
        return view('berita-penelitian/show', compact('research'));
        // return $research;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Researche $research)
    {
        return view('berita-penelitian/edit', compact('research'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Researche $research)
    {
        $request->validate([
            'title' => 'required|max:255|min:2',
            'description' => 'required|min:2',
            'author' => 'required|min:3',
            'date' => 'required|date_format:Y-m-d'
        ]);
        
        // $imgName = null;

        if($request->thumbnail) {
            // $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            $imgName = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/penelitian'), $imgName);

            Researche::where('id', $research->id)
                ->update([
                    'thumbnail' => $imgName
                ]);
        }

        Researche::where('id', $research->id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author,
                    'date' => $request->date
                ]);
        return redirect('/admin/successlogin/penelitian')->with('status', 'Berita Penelitian Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Researche::find($id)->delete();
        return redirect('/admin/successlogin/penelitian')->with('status', 'Berita Penelitian Berhasil Dihapus!');
    }
}
