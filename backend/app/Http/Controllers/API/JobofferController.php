<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Joboffer;
use App\Http\Resources\JobofferResource;
use Illuminate\Http\Request;

class JobofferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joboffers = Joboffer::all();
        return response([ 'data' => JobofferResource::collection($joboffers), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $joboffer = Joboffer::create($request->all());
        return response(['data' => new JobofferResource($joboffer), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Joboffer $joboffer)
    {
        return response(['data' => new JobofferResource($joboffer), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Joboffer $joboffer)
    {
        $joboffer->update($request->all());
        return response(['data' => new JobofferResource($joboffer), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Joboffer $joboffer)
    {
        $joboffer->delete();
        return response(['message' => 'Deleted']);
    }
}
