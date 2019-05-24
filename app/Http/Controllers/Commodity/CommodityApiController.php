<?php

namespace App\Http\Controllers\Commodity;

use App\Models\Commodity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Commodity as CommodityResource;

class CommodityApiController extends Controller
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
                $commodities = Commodity::limit($take)
                                        ->latest()
                                        ->get();
            }
            else {
                $commodities = Commodity::latest()
                                        ->get();
            }

            $commodity_collection = CommodityResource::collection($commodities);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $commodity_collection
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
            $commodity = Commodity::create([
                'name' => $request->name,
                'variety_id' => $request->variety_id,
                'planted_at' => $request->planted_at,
                'image_url' => $request->image_url
            ]);

            $commodity_resource = new CommodityResource($commodity);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "create commodity success",
            'data' => $commodity_resource
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function show(Commodity $commodity)
    {
        try {
            $commodity_resource = new CommodityResource($commodity);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "success",
            'data' => $commodity_resource
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodity $commodity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $commodity = Commodity::findOrFail($request->id);

            $commodity->name = $request->name;
            $commodity->variety_id = $request->variety_id;
            $commodity->planted_at = $request->planted_at;
            $commodity->image_url = $request->image_url;
            $commodity->save();

            $commodity_resource = new CommodityResource($commodity);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "update commodity success",
            'data' => $commodity_resource
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $commodity = Commodity::findOrFail($request->id);
            $commodity->delete();

            $commodity_resource = new CommodityResource($commodity);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => $e->getMessage()
            ]);
        }

        return response()->json([
            'status' => "delete commodity success",
            'data' => $commodity_resource
        ]);
    }
}
