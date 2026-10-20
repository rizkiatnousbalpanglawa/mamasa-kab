<?php

namespace Database\Seeders;

use App\Models\Portal;
use App\Models\PortalMenu;
use App\Models\WebOpd;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortalProductionSyncSeeder extends Seeder
{
    /**
     * Data disalin dari https://mamasakab.go.id/ (portal splash `/`)
     * Diekstrak 2026-10-20 dari HTML produksi.
     * Beranda + Website (modal) adalah hardcoded di blade, tidak masuk DB.
     */
    public function run(): void
    {
        // NOTE: pakai delete() bukan truncate() agar aman di dalam transaction MySQL
        // (TRUNCATE = DDL -> implicit commit -> "There is no active transaction").
        DB::transaction(function () {
            // 1. Portal header (id=1). Background dikosongkan agar fallback
            // ke asset('front-assets/bg-bupati.mp4') seperti produksi.
            $portal = Portal::firstOrNew(['id' => 1]);
            $portal->judul = 'PEMERINTAH KABUPATEN MAMASA';
            $portal->subjudul = '"Mamasa Menuju Mamase"';
            $portal->logo = 'portal/01KRAM4VQ4SRMRGN3YG0358MT1.webp';
            $portal->background = null;
            $portal->save();

            // 2. Portal menus (8 baris, tanpa Beranda/Website yang hardcoded)
            PortalMenu::query()->delete();
            $menus = [
                ['judul' => 'Pengumuman', 'link' => 'https://mamasakab.go.id/pengumuman', 'icon' => 'megaphone'],
                ['judul' => 'e-Mail Instansi', 'link' => 'https://surel.mail.go.id/multidomain', 'icon' => 'envelope'],
                ['judul' => 'JDIH Mamasa', 'link' => 'https://jdih.mamasakab.go.id/', 'icon' => 'book'],
                ['judul' => 'Layanan PAD', 'link' => 'https://pad.mamasakab.go.id/', 'icon' => 'brush'],
                ['judul' => 'Peta Jaringan Telekomunikasi', 'link' => 'https://www.google.com/maps/d/u/0/edit?mid=10BzNpCiOvALsmUD40XckQiqwZoWLlGw&usp=sharing', 'icon' => 'wifi'],
                ['judul' => 'Webgis Mamasa', 'link' => 'https://webgis.mamasakab.go.id/pddk_cam.html', 'icon' => 'map'],
                ['judul' => 'Portal Layanan Sertifikasi Elektronik Mamasa', 'link' => 'https://daftar-esertifikasi.mamasakab.go.id/', 'icon' => 'qr-code-scan'],
                ['judul' => 'Dashboard Arsitektur & Peta Rencana Pemerintah Digital Kab. Mamasa', 'link' => 'https://dashboard-pemdi.mamasakab.go.id/', 'icon' => 'diagram-3'],
            ];
            foreach ($menus as $m) {
                PortalMenu::create($m);
            }

            // 3. Web OPD (60 baris). image=null -> blade fallback ke logo-mamasa.png
            WebOpd::query()->delete();
            $opds = [
                ['nama' => 'SEKRETARIAT DAERAH', 'subnama' => 'www.setda.mamasakab.go.id', 'url' => 'https://setda.mamasakab.go.id/'],
                ['nama' => 'SEKRETARIAT DEWAN', 'subnama' => 'www.setwan.mamasakab.go.id', 'url' => 'https://setwan.mamasakab.go.id'],
                ['nama' => 'INSPEKTORAT DAERAH', 'subnama' => 'www.inspektorat.mamasakab.go.id', 'url' => 'https://inspektorat.mamasakab.go.id'],
                ['nama' => 'DINAS PENDIDIKAN DAN KEBUDAYAAN DAERAH', 'subnama' => 'www.disdikbud.mamasakab.go.id', 'url' => 'https://disdikbud.mamasakab.go.id'],
                ['nama' => 'DINAS KESEHATAN DAERAH', 'subnama' => 'www.dinkes.mamasakab.go.id', 'url' => 'https://dinkes.mamasakab.go.id'],
                ['nama' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG DAERAH', 'subnama' => 'www.dinaspupr.mamasakab.go.id', 'url' => 'https://dinaspupr.mamasakab.go.id'],
                ['nama' => 'DINAS PERUMAHAN, KAWASAN PEMUKIMAN DAN PERTANAHAN DAERAH', 'subnama' => 'www.disperkimtan.mamasakab.go.id', 'url' => 'https://disperkimtan.mamasakab.go.id'],
                ['nama' => 'DINAS SOSIAL DAERAH', 'subnama' => 'www.dinsos.mamasakab.go.id', 'url' => 'https://dinsos.mamasakab.go.id'],
                ['nama' => 'DINAS TRANSMIGRASI DAN TENAGA KERJA DAERAH', 'subnama' => 'www.disnakertrans.mamasakab.go.id', 'url' => 'https://disnakertrans.mamasakab.go.id'],
                ['nama' => 'DINAS PERTANIAN DAERAH', 'subnama' => 'www.dinaspertanian.mamasakab.go.id', 'url' => 'https://dinaspertanian.mamasakab.go.id'],
                ['nama' => 'DINAS PERIKANAN DAERAH', 'subnama' => 'www.perikanan.mamasakab.go.id', 'url' => 'https://perikanan.mamasakab.go.id'],
                ['nama' => 'DINAS PANGAN DAERAH', 'subnama' => 'www.dinaspangan.mamasakab.go.id', 'url' => 'https://dinaspangan.mamasakab.go.id'],
                ['nama' => 'DINAS PENGENDALIAN PENDUDUK, KELUARGA BERENCANA, PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK DAERAH', 'subnama' => 'www.dppkbp3a.mamasakab.go.id', 'url' => 'https://dppkbp3a.mamasakab.go.id'],
                ['nama' => 'DINAS LINGKUNGAN HIDUP DAERAH', 'subnama' => 'www.dlh.mamasakab.go.id', 'url' => 'https://dlh.mamasakab.go.id'],
                ['nama' => 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL DAERAH', 'subnama' => 'www.disdukcapil.mamasakab.go.id', 'url' => 'https://disdukcapil.mamasakab.go.id'],
                ['nama' => 'DINAS PEMBERDAYAAN MASYARAKAT DAN PEMERINTAH DESA DAERAH', 'subnama' => 'www.dinaspmd.mamasakab.go.id', 'url' => 'https://dinaspmd.mamasakab.go.id'],
                ['nama' => 'DINAS PERHUBUNGAN DAERAH', 'subnama' => 'www.dishub.mamasakab.go.id', 'url' => 'https://dishub.mamasakab.go.id'],
                ['nama' => 'DINAS KOMUNIKASI, INFORMATIKA DAN PERSANDIAN DAERAH', 'subnama' => 'www.diskominfosandi.mamasakab.go.id', 'url' => 'https://diskominfosandi.mamasakab.go.id'],
                ['nama' => 'DINAS KOPERASI, USAHA MIKRO, KECIL, MENENGAH, PERINDUSTRIAN DAN PERDAGANGAN DAERAH', 'subnama' => 'www.diskuperindag.mamasakab.go.id', 'url' => 'https://diskuperindag.mamasakab.go.id'],
                ['nama' => 'DINAS PENANAMAN MODAL DAN PTSP DAERAH', 'subnama' => 'www.dpmptsp.mamasakab.go.id', 'url' => 'https://dpmptsp.mamasakab.go.id'],
                ['nama' => 'DINAS PARIWISATA, OLAH RAGA DAN KEPEMUDAAN DAERAH', 'subnama' => 'www.disparpora.mamasakab.go.id', 'url' => 'https://disparpora.mamasakab.go.id'],
                ['nama' => 'DINAS KEARSIPAN DAN PERPUSTAKAAN DAERAH', 'subnama' => 'www.dkapd.mamasakab.go.id', 'url' => 'https://dkapd.mamasakab.go.id'],
                ['nama' => 'BADAN PERENCANAAN PEMBANGUNAN RISET DAN INOVASI DAERAH', 'subnama' => 'www.bapperida.mamasakab.go.id', 'url' => 'https://bapperida.mamasakab.go.id'],
                ['nama' => 'BADAN PENGELOLAAN KEUANGAN DAERAH', 'subnama' => 'www.bpkd.mamasakab.go.id', 'url' => 'https://bpkd.mamasakab.go.id'],
                ['nama' => 'BADAN PENDAPATAN DAERAH', 'subnama' => 'www.bapenda.mamasakab.go.id', 'url' => 'https://bapenda.mamasakab.go.id'],
                ['nama' => 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN DAERAH', 'subnama' => 'www.bkpp.mamasakab.go.id', 'url' => 'https://bkpp.mamasakab.go.id'],
                ['nama' => 'BADAN PELAKSANA PENANGGULANGAN BENCANA DAERAH', 'subnama' => 'www.bpbd.mamasakab.go.id', 'url' => 'https://bpbd.mamasakab.go.id'],
                ['nama' => 'BADAN KESATUAN BANGSA DAN POLITIK DAERAH', 'subnama' => 'www.kesbangpol.mamasakab.go.id', 'url' => 'https://kesbangpol.mamasakab.go.id'],
                ['nama' => 'SATUAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN DAERAH', 'subnama' => 'www.satpolpp.mamasakab.go.id', 'url' => 'https://satpolpp.mamasakab.go.id'],
                ['nama' => 'RSUD KONDOSAPATA', 'subnama' => 'www.rsudks.mamasakab.go.id', 'url' => 'https://rsudks.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN MAMASA', 'subnama' => 'www.kec.mamasa.mamasakab.go.id', 'url' => 'https://kec.mamasa.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN ARALLE', 'subnama' => 'www.kec.aralle.mamasakab.go.id', 'url' => 'https://kec.aralle.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN SESENA PADANG', 'subnama' => 'www.kec.sesenapadang.mamasakab.go.id', 'url' => 'https://kec.sesenapadang.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN TAWALIAN', 'subnama' => 'www.kec.tawalian.mamasakab.go.id', 'url' => 'https://kec.tawalian.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN BALLA', 'subnama' => 'www.kec.balla.mamasakab.go.id', 'url' => 'https://kec.balla.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN TANDUKKALUA', 'subnama' => 'www.kec.tandukkalua.mamasakab.go.id', 'url' => 'https://kec.tandukkalua.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN SUMARORONG', 'subnama' => 'www.kec.sumarorong.mamasakab.go.id', 'url' => 'https://kec.sumarorong.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN MESSAWA', 'subnama' => 'www.kec.messawa.mamasakab.go.id', 'url' => 'https://kec.messawa.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN TABANG', 'subnama' => 'www.kec.tabang.mamasakab.go.id', 'url' => 'https://kec.tabang.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN NOSU', 'subnama' => 'www.kec.nosu.mamasakab.go.id', 'url' => 'https://kec.nosu.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN PANA', 'subnama' => 'kec.pana.mamasakab.go.id', 'url' => 'https://kec.pana.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN RANTEBULAHAN TIMUR', 'subnama' => 'kec.rantim.mamasakab.go.id', 'url' => 'https://kec.rantim.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN MAMBI', 'subnama' => 'kec.mambi.mamasakab.go.id', 'url' => 'https://kec.mambi.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN MEHALAAN', 'subnama' => 'kec.mehalaan.mamasakab.go.id', 'url' => 'https://kec.mehalaan.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN BAMBANG', 'subnama' => 'kec.bambang.mamasakab.go.id', 'url' => 'https://kec.bambang.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN BUNTUMALANGKA', 'subnama' => 'kec.buntumalangka.mamasakab.go.id', 'url' => 'https://kec.bumal.mamasakab.go.id'],
                ['nama' => 'KANTOR KECAMATAN TABULAHAN', 'subnama' => 'kec.tabulahan.mamasakab.go.id', 'url' => 'https://kec.tabulahan.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN MAMASA', 'subnama' => 'www.kel.mamasa.mamasakab.go.id', 'url' => 'https://kel.mamasa.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN MINAKE', 'subnama' => 'www.kel.minake.mamasakab.go.id', 'url' => 'https://kel.minake.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN TAWALIAN', 'subnama' => 'www.kel.tawalian.mamasakab.go.id', 'url' => 'https://kel.tawalian.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN SUMARORONG', 'subnama' => 'www.kel.sumarorong.mamasakab.go.id', 'url' => 'https://kel.sumarorong.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN TABONE', 'subnama' => 'www.kel.tabone.mamasakab.go.id', 'url' => 'https://kel.tabone.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN MESSAWA', 'subnama' => 'www.kel.messawa.mamasakab.go.id', 'url' => 'https://kel.messawa.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN TABANG', 'subnama' => 'www.kel.tabang.mamasakab.go.id', 'url' => 'https://kel.tabang.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN NOSU', 'subnama' => 'www.kel.nosu.mamasakab.go.id', 'url' => 'https://kel.nosu.mamasakab.go.id'],
                ['nama' => 'KANTOR KELUARAHAN PANA', 'subnama' => 'www.kel.pana.mamasakab.go.id', 'url' => 'https://kel.pana.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN MAMBI', 'subnama' => 'www.kel.mambi.mamasakab.go.id', 'url' => 'https://kel.mambi.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN TALIPUKKI', 'subnama' => 'www.kel.talipukki.mamasakab.go.id', 'url' => 'https://kel.talipukki.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN ARALLE', 'subnama' => 'www.kel.aralle.mamasakab.go.id', 'url' => 'https://kel.aralle.mamasakab.go.id'],
                ['nama' => 'KANTOR KELURAHAN LAKAHANG', 'subnama' => 'www.kel.lakahang.mamasakab.go.id', 'url' => 'https://kel.lakahang.mamasakab.go.id'],
            ];
            foreach ($opds as $o) {
                WebOpd::create([
                    'image' => null,
                    'nama' => $o['nama'],
                    'subnama' => $o['subnama'],
                    'url' => $o['url'],
                ]);
            }
        });
    }
}
