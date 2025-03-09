<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Resident;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ResidentDocumentController extends Controller
{
    public function index(Request $request, Resident $resident): View
    {
        $documents = $resident->documents()->search(request('query'));

        return view('residents.documents.index', [
            'documents' => $documents,
        ]);
    }

    public function store(Request $request, Resident $resident): RedirectResponse
    {
        $request->validate([
            'filename' => 'required|string|unique:documents',
            'document' => 'required|file|mimetypes:application/pdf',
        ]);

        $resident->documents()->create([
            'filename' => $request->filename,
            'path' => $request->file('document')->store('documents', 'public'),
        ]);

        return redirect(route('residents.show', $resident));
    }

    public function destroy(Resident $resident, Document $document): RedirectResponse
    {
        Storage::disk('public')->delete($document->path);

        $document->delete();

        return redirect(route('residents.show', $resident));
    }
}
