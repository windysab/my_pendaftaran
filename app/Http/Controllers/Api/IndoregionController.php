<?php

namespace App\Http\Controllers\Api;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class IndoregionController extends Controller
{
    public function searchKabupaten(Request $request)
    {
        $query = $request->input('query');
        $kabupaten = Regency::where('name', 'LIKE', "%{$query}%")->get(['id', 'name']);
        return response()->json($kabupaten);
    }

    public function getKabupaten()
    {
        $kabupaten = Regency::all();
        Log::info('Kabupaten data:', $kabupaten->toArray());
        return response()->json($kabupaten);
    }

    public function getKecamatan($kabupatenId)
    {
        $kecamatan = District::where('regency_id', $kabupatenId)->get();
        Log::info('Kecamatan data:', $kecamatan->toArray());
        return response()->json($kecamatan);
    }

    public function getDesa($kecamatanId)
    {
        $desa = Village::where('district_id', $kecamatanId)->get();
        Log::info('Desa data:', $desa->toArray());
        return response()->json($desa);
    }
}
