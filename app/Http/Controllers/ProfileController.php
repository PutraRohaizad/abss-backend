<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileStoreRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\ProfileResource;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProfileResource::collection(Profile::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileStoreRequest $request)
    {
        $profile = Profile::create($request->validated());
        return new ProfileResource($profile);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return new ProfileResource($profile);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request, $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->update($request->validated());
        return new ProfileResource($profile);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return Profile::findOrFail($id)->delete();
    }
}
