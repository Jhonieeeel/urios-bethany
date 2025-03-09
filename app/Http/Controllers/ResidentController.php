<?php

namespace App\Http\Controllers;

use App\Enums\ResidentStatus;
use App\Http\Requests\Resident\StoreResidentRequest;
use App\Http\Requests\Resident\UpdateResidentRequest;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->query('format') === 'print') {
            return view('residents.print', [
                'residents' => Resident::all(),
            ]);
        }

        $residents = Resident::search(request('query'))->paginate();

        return view('residents.index', [
            'residents' => $residents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('residents.create', [
            'residentStatus' => ResidentStatus::values(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentRequest $request)
    {
        Resident::create(array_merge(
            $request->except(['profile']),
            ['profile' => $request->file('profile')->store('profiles', 'public')],
        ));

        return redirect(route('residents.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        return view('residents.show', [
            'resident' => $resident,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        return view('residents.edit', [
            'resident' => $resident,
            'residentStatus' => ResidentStatus::values(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResidentRequest $request, Resident $resident)
    {
        if ($request->has('profile')) {
            $resident->update(array_merge(
                $request->except(['profile']),
                ['profile' => $request->file('profile')->store('profiles', 'public')],
            ));
        } else {
            $resident->update($request->except('profile'));
        }

        return redirect(route('residents.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        Storage::public()->delete($resident->profile);

        $resident->delete();

        return redirect(route('residents.index'));
    }
}
