<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('date', 'desc')->paginate(5);//Model
        foreach($publications as $entries){
            $entries->abstract = Str::limit($entries->abstract, 100);
        }
        return view('/publikasi/index', ['publications' => $publications]);

        // $publications = Publication::all();
        // return view('/publikasi/index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publikasi/create');
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
            'abstract' => 'required|min:2',
            'author' => 'required|min:3',
            'date' => 'required|date_format:Y-m-d',
            'file' => 'required|mimes:pdf'
        ]);

        $fileName = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
        $request->file->move(public_path('download/publikasi'), $fileName);

        Publication::create([
            'title' => $request->title,
            'abstract' => $request->abstract,
            'author' => $request->author,
            'date' => $request->date,
            'slug'=> Str::slug($request->title, '-'),
            'file' => $fileName
        ]);

        return redirect('/admin/successlogin/publikasi')->with('status', 'Publikasi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $publications = Publication::where('slug', $slug)->first();
        return view('/publikasi/show', compact('publications'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publications)
    {
        return view('publikasi/edit', compact('publications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publications)
    {
        $request->validate([
            'title' => 'required|max:255|min:2',
            'abstract' => 'required|min:2',
            'author' => 'required|min:3',
            'date' => 'required|date_format:Y-m-d',
            // 'file' => 'required|mimes:pdf'
        ]);

        // $fileName = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension();
        if($request->file){
            $fileName = $request->file->getClientOriginalName();
            $request->file->move(public_path('download/publikasi'), $fileName);

            Publication::where('id', $publications->id)
            ->update([
                'file' => $fileName
            ]);
        }
        
        Publication::where('id', $publications->id)
                ->update([
                    'title' => $request->title,
                    'abstract' => $request->abstract,
                    'author' => $request->author,
                    'date' => $request->date,
                ]);
        return redirect('/admin/successlogin/publikasi')->with('status', 'Publikasi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publication::find($id)->delete();
        return redirect('/admin/successlogin/publikasi')->with('status', 'Publikasi Berhasil Dihapus!');
    }

    public function getDownload(Publication $publications)
    {
        $file= public_path(). "/download/publikasi/" . $publications->file;

        $headers = [
                'Content-Type: application/pdf',
                ];

        return Response::download($file, $publications->title, $headers);
        // return response()->download(public_path('download/publikasi/'));   

        // fetch jurnal from database by id jurnal

        // $object_from_database = null;
        // $file_info = explode('.', $object_from_database->file);

        // // file.extension => explode "." => ['file', 'extension']
        // $file_name = $file_info[0];
        // $file_extension = $file_info[1];

        // //PDF file is stored under project/public/download/info.pdf
        // $file= public_path(). '/download/'. $object_from_database->file;

        // $headers = [
        //             'Content-Type' => 'application/'. $file_extension,
        //             ];

        // return response()->download($file, $object_from_database->judul_jurnal, $headers);

    }
}
