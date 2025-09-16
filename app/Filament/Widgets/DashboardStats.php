<?php

namespace App\Filament\Widgets;

use App\Models\StatistikHarian;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class DashboardStats extends ChartWidget
{
    protected ?string $heading = 'Pengunjung Harian';

    public function getColumnSpan(): array|string|int
    {
        return '1'; // Membentang penuh
    }

    protected function getData(): array
    {
        $dates = collect();
        $labels = collect();

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i)->format('Y-m-d'); // untuk query
            $label = Carbon::today()->subDays($i)->format('d/m');   // untuk chart label

            $dates->push($date);
            $labels->push($label);
        }

        $stats = StatistikHarian::whereIn('tanggal', $dates)
            ->pluck('Pengunjung', 'tanggal');

        // Map data untuk chart
        $data = $dates->map(fn($date) => $stats[$date] ?? 0);

        return [
            'labels' => $labels->toArray(), // gunakan label d/m
            'datasets' => [
                [
                    'label' => 'Pengunjung Harian',
                    'data' => $data->toArray(),
                    'backgroundColor' => '#3B82F6',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
