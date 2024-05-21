<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Penduduk;


class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $jumlahPenduduk = Penduduk::count();

        return [
            Stat::make('Jumlah Penduduk', $jumlahPenduduk)
                ->description('Total penduduk saat ini')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
        ];
    }
}
