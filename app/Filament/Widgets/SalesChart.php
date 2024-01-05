<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SalesChart extends ChartWidget
{
    protected static ?string $heading = 'Sales';

    protected function getData(): array
    {
        //get the data from the User eloquent model
//        $data = Trend::model(User::class)
//            ->between(
//                start: now()->startOfMonth(),
//                end: now()->startOfMonth(),
//            )
//            ->perDay()
//            ->count();
//
//        return [
//            'datasets' => [
//                [
//                    'label' => 'Registered Users',
//                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
//                ],
//            ],
//            'labels' => $data->map(fn (TrendValue $value) => $value->date),
//        ];


        return [
            'datasets' => [
                [
                    'label' => 'Total Sales',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
