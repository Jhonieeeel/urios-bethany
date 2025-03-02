<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resident\StoreResidentRequest;
use App\Http\Requests\Resident\UpdateResidentRequest;
use App\Models\Resident;
use Illuminate\Support\Facades\Storage;
use Spatie\QueryBuilder\QueryBuilder;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residents = QueryBuilder::for(Resident::class)
            ->allowedFilters(['name'])
            ->paginate(5);

        return view('residents.index', ['residents' => $residents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResidentRequest $request)
    {
        Resident::create(array_merge(
            $request->except(['profile']),
            ['profile' => asset('storage/'.$request->file('profile')->store('profiles', 'public'))],
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
                ['profile' => asset('storage/'.$request->file('profile')->store('profiles', 'public'))],
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
