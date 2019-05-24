<?php

namespace App\Http\Controllers;

use App\JadwalPanen;
use App\Http\Resources\JadwalPanen as JadwalPanenResource;
use Illuminate\Http\Request;

class JadwalPanenController extends Controller
{
    public function index(){
        try {
            $take = request()->take;
            if($take){
                $commodities = JadwalPanen::limit($take)
                                        ->latest()
                                        ->get();
            }
            else {
                $commodities = JadwalPanen::latest()
                                        ->get();
            }

            $commodity_collection = JadwalPanenResource::collection($commodities);
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
}
