<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ViewPengumumanController extends Controller
{
    public function view($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $ip = request()->ip();
        $today = Carbon::today()->toDateString();

        // key unik untuk cache
        $cacheKey = "pengumuman_viewed:{$id}:{$ip}:{$today}";

        if (!Cache::has($cacheKey)) {
            // increment views
            $pengumuman->increment('views');

            // simpan di cache dengan TTL sampai tengah malam
            $expiresAt = Carbon::tomorrow();
            Cache::put($cacheKey, true, $expiresAt);
        }

        // redirect ke file/link tujuan
        $link = str_starts_with($pengumuman->image, 'pengumuman')
            ? asset(Storage::url($pengumuman->image))
            : $pengumuman->image;

        return redirect()->away($link);
    }
}
