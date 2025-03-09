<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $documents = Document::search(request('query'))
            ->where('documentable_id', NULL)
            ->paginate();

        return view('documents.index', [
            'documents' => $documents
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required|string|unique:documents',
            'document' => 'required|mimetypes:application/pdf',
        ]);

        Document::create([
            'filename' => $request->filename,
            'path' => $request->file('document')->store('documents', 'public'),
        ]);

        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document);

        $document->delete();

        return redirect(route('documents.index'));
    }
}
