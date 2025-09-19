<?php

namespace App;

use UnitEnum;

enum NavigationGroups: string
{
    case PORTAL = 'Portal';
    case BERANDA = 'Beranda';
    case BERITA = 'Berita';
    case KEGIATAN = 'Kegiatan';
    case INFORMASI = 'Informasi';
}
