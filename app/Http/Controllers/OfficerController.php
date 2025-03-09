<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Officer;
use Carbon\Carbon;

class OfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('officers.index', [
            'officers' => Officer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('officers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'firstname' => ['required', 'min:2'],
            'middlename' => ['nullable', 'min:2'],
            'lastname'=> ['required', 'min:2'],
            'dateOfBirth' => ['required'],
            'address' => ['required'],
            'civilStatus' => ['required'],
            'contactNumber' => ['required'],
            'dateAssumed' => ['required'],
            'officerImage' => ['required', 'mimetypes:image/*'],
        ]);

        $officerData = array_merge(
            $request->except(['officerImage', 'age']),
            [
                'officerPosition' => request('position'),
                'officerImage' => asset('storage/'.$request->file('officerImage')->store('', 'public')),
                'age' => Carbon::parse($request->dateOfBirth)->age
            ]
        );

        Officer::create($officerData);

        return redirect()->route('officers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $officer = Officer::findOrFail($id);

        return view('officer-information', ['officer' => $officer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $officer = Officer::findOrFail($id);

        return view('edit-officer', compact('officer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $request->validate([
            'firstname' => ['required', 'min:2'],
            'middlename' => ['nullable', 'min:2'],
            'lastname'=> ['required', 'min:2'],
            'dateOfBirth' => ['required'],
            'address' => ['required'],
            'civilStatus' => ['required'],
            'contactNumber' => ['required'],
            'dateAssumed' => ['required'],
            'officerImage' => ['required', 'mimetypes:image/*'],
        ]);

        $officerData = array_merge(
            $request->except(['officerImage', 'age']),
            [

                'officerImage' => asset('storage/'.$request->file('officerImage')->store('', 'public')),
                'age' => Carbon::parse($request->dateOfBirth)->age
            ]
        );

        $officer = Officer::findOrFail($id);



        $officer->update($officerData);


        return redirect()->route('officers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $officer = Officer::findOrFail($id);

        $officer->delete();

        return redirect()->route('officers');
    }
}
