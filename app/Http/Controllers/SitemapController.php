<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaKategori;
use App\Models\Informasi;
use App\Models\Kegiatan;
use App\Models\Pengumuman;
use App\Models\Potensi;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = collect([
            $this->url('/', now(), 'daily', '1.0'),
            $this->url('/beranda', now(), 'daily', '0.9'),
            $this->url('/berita', now(), 'daily', '0.9'),
            $this->url('/kegiatan', now(), 'daily', '0.8'),
            $this->url('/pengumuman', now(), 'daily', '0.8'),
            $this->url('/info', now(), 'daily', '0.8'),
            $this->url('/potensi', now(), 'weekly', '0.8'),
            $this->url('/visi-misi', now(), 'monthly', '0.6'),
            $this->url('/sejarah', now(), 'monthly', '0.6'),
            $this->url('/lambang', now(), 'monthly', '0.6'),
            $this->url('/profil', now(), 'monthly', '0.6'),
            $this->url('/pemerintahan', now(), 'monthly', '0.6'),
        ]);

        foreach (Berita::orderByDesc('updated_at')->limit(1000)->get(['slug', 'updated_at']) as $b) {
            $urls->push($this->url("/berita/{$b->slug}", $b->updated_at, 'weekly', '0.8'));
        }

        foreach (BeritaKategori::get(['slug', 'updated_at']) as $k) {
            $urls->push($this->url("/berita/kategori/{$k->slug}", $k->updated_at, 'weekly', '0.6'));
        }

        foreach (Kegiatan::orderByDesc('updated_at')->limit(500)->get(['slug', 'updated_at']) as $k) {
            $urls->push($this->url("/kegiatan/{$k->slug}", $k->updated_at, 'weekly', '0.7'));
        }

        foreach (Pengumuman::orderByDesc('updated_at')->limit(500)->get(['id', 'updated_at']) as $p) {
            $urls->push($this->url("/pengumuman/view/{$p->id}", $p->updated_at, 'weekly', '0.7'));
        }

        foreach (Potensi::orderByDesc('updated_at')->limit(500)->get(['slug', 'updated_at']) as $p) {
            $urls->push($this->url("/potensi/detail/{$p->slug}", $p->updated_at, 'monthly', '0.7'));
        }

        foreach (Informasi::orderByDesc('updated_at')->limit(500)->get(['id', 'updated_at']) as $i) {
            $urls->push($this->url("/info/view/{$i->id}", $i->updated_at, 'weekly', '0.6'));
        }

        $xml = view('sitemap', ['urls' => $urls])->render();

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    private function url(string $path, $lastmod, string $freq, string $priority): array
    {
        return [
            'loc' => url($path),
            'lastmod' => $lastmod->format('Y-m-d'),
            'changefreq' => $freq,
            'priority' => $priority,
        ];
    }
}
