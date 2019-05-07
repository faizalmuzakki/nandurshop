<?php

namespace App\Http\Controllers\Variety;

use App\Models\Variety;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Variety as VarietyResource;

class VarietyApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $take = request()->take;
            if($take){
                $varieties = Variety::limit($take)
                                    ->latest()
                                    ->get();
            }
            else {
                $varieties = Variety::latest()
                                    ->get();
            }

            $variety_collection = VarietyResource::collection($varieties);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $variety_collection
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $variety = Variety::create([
                'name' => $request->name,
                'duration' => $request->duration
            ]);

            $variety_resource = new VarietyResource($variety);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "error",
            'message' => "create variety success",
            'data' => $variety_resource
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function show(Variety $variety)
    {
        try {
            $variety_resource = new VarietyResource($variety);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $variety_resource
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function edit(Variety $variety)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variety $variety)
    {
        try {
            $variety->name = $request->name;
            $variety->duration = $request->duration;
            $variety->save();

            $variety_resource = new VarietyResource($variety);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "error",
            'message' => "update variety success",
            'data' => $variety_resource
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variety $variety)
    {
        try {
            $variety->commodities()->delete();
            $variety->delete();

            $variety_resource = new VarietyResource($variety);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "error",
            'message' => "delete variety success",
            'data' => $variety_resource
        ]);
    }
}
