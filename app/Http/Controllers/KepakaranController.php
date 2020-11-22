<?php

namespace App\Http\Controllers;

use App\Expertise;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KepakaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expertises = Expertise::orderBy('created_at', 'asc')->paginate(10);//Model
        return view('/kepakaran/index', ['expertises' => $expertises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kepakaran/create');
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
            'name' => 'required|max:255|min:2',
            'nip' => 'required|numeric|min:9',
            'email' => 'required|email',
            'bidang_kepakaran' => 'required|min:2',
            'satuan_kerja' => 'required|min:2',
            'status_kepegawaian' => 'required|min:2',
            'golongan' => 'required|min:3',
            'bahasa' => 'required|min:3',
            'pendidikan' => 'required|min:3',
            'pengalaman' => 'required|min:3',
            'kegiatan' => 'required|min:3',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);

        $fileName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/kepakaran'), $fileName);

        Expertise::create([
            'name' => $request->name,
            'slug'=> Str::slug($request->name, '-'),
            'nip' => $request->nip,
            'email' => $request->email,
            'bidang_kepakaran' => $request->bidang_kepakaran,
            'satuan_kerja' => $request->satuan_kerja,
            'status_kepegawaian' => $request->status_kepegawaian,
            'golongan' => $request->golongan,
            'bahasa' => $request->bahasa,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'kegiatan' => $request->kegiatan,
            'image' => $fileName
        ]);

        return redirect('/admin/successlogin/kepakaran')->with('status', 'Kepakaran Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $expertises = Expertise::where('slug', $slug)->first();
        return view('/kepakaran/show', compact('expertises'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Expertise $expertises)
    {
        return view('kepakaran/edit', compact('expertises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expertise $expertises)
    {
        $request->validate([
            'name' => 'required|max:255|min:2',
            'nip' => 'required|numeric|min:9',
            'email' => 'required|email',
            'bidang_kepakaran' => 'required|min:2',
            'satuan_kerja' => 'required|min:2',
            'status_kepegawaian' => 'required|min:2',
            'golongan' => 'required|min:3',
            'bahasa' => 'required|min:3',
            'pendidikan' => 'required|min:3',
            'pengalaman' => 'required|min:3',
            'kegiatan' => 'required|min:3',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);

        $fileName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('img/kepakaran'), $fileName);

        Expertise::where('id', $expertises->id)
                ->update([
                    'name' => $request->name,
                    'nip' => $request->nip,
                    'email' => $request->email,
                    'bidang_kepakaran' => $request->bidang_kepakaran,
                    'satuan_kerja' => $request->satuan_kerja,
                    'status_kepegawaian' => $request->status_kepegawaian,
                    'golongan' => $request->golongan,
                    'bahasa' => $request->bahasa,
                    'pendidikan' => $request->pendidikan,
                    'pengalaman' => $request->pengalaman,
                    'kegiatan' => $request->kegiatan,
                    'image' => $fileName
                ]);
        return redirect('/admin/successlogin/kepakaran')->with('status', 'Kepakaran Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expertise::find($id)->delete();
        return redirect('/admin/successlogin/kepakaran')->with('status', 'Kepakaran Berhasil Dihapus!');
    }
}
