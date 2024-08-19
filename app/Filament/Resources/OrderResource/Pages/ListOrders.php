<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null=>Tab::make('All'),
            'new' => Tab::make()->query(fn ($query) => $query->where('staus', 'new')),
            'processing' => Tab::make()->query(fn ($query) => $query->where('staus', 'processing')),
            'shipped' => Tab::make()->query(fn ($query) => $query->where('staus', 'shipped')),
            'picked' => Tab::make()->query(fn ($query) => $query->where('staus', 'picked')),
            'delivered' => Tab::make()->query(fn ($query) => $query->where('staus', 'delivered')),
            'canceled' => Tab::make()->query(fn ($query) => $query->where('staus', 'canceled')),


        ];
    }



}
