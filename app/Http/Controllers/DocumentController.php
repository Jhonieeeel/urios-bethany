<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::paginate(5);


        return view('documents', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-document');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimetypes:application/pdf,doc,docx, txt']
        ]);

        $filename = $request->file('file')->getClientOriginalName();


        $filepath = $request->file('file')->storeAs('documents', $filename, 'public');

        Document::create([
            'filename' => $filename,
            'filepath' => $filepath
        ]);

        return redirect()->route('documents');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $document = Document::findOrFail($id);

        $path = storage_path('app/public/'.$document->filepath);

        return response()->file($path, ['Content-Type' => 'application/pdf']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
