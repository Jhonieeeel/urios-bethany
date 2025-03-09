<?php

namespace App\Http\Controllers;

use App\Enums\ResidentStatus;
use App\Models\Resident;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ResidentStatusController extends Controller
{
    public function update(Request $request, Resident $resident): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'string', Rule::in(ResidentStatus::values())],
            'dismissed_at' => 'required_if:status,Dismissed|date',
        ]);

        $resident->update($request->only('status'));

        return redirect(route('residents.show', $resident));
    }
}
