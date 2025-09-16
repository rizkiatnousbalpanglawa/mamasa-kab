<?php

namespace App\Filament\Widgets;

use App\Models\StatistikHarian;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class DashboardStatsHits extends ChartWidget
{
    protected ?string $heading = 'Hits Harian';

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

        // Ambil data hits dari database
        $stats = StatistikHarian::whereIn('tanggal', $dates)
            ->pluck('hits', 'tanggal');

        // Map data untuk chart
        $data = $dates->map(fn($date) => $stats[$date] ?? 0);

        return [
            'labels' => $labels->toArray(), // gunakan label d/m
            'datasets' => [
                [
                    'label' => 'Hits Harian',
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
