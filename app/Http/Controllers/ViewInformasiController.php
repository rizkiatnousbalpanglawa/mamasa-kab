<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ViewInformasiController extends Controller
{

    public function view($id)
    {
        $info = Informasi::findOrFail($id);

        $ip = request()->ip();
        $today = Carbon::today()->toDateString();

        // key unik untuk cache
        $cacheKey = "informasi_viewed:{$id}:{$ip}:{$today}";

        if (!Cache::has($cacheKey)) {
            // increment views
            $info->increment('views');

            // simpan di cache dengan TTL sampai tengah malam
            $expiresAt = Carbon::tomorrow();
            Cache::put($cacheKey, true, $expiresAt);
        }

        // redirect ke file/link tujuan
        $link = str_starts_with($info->pdf, 'informasi')
            ? asset(Storage::url($info->pdf))
            : $info->pdf;

        return redirect()->away($link);
    }
}
