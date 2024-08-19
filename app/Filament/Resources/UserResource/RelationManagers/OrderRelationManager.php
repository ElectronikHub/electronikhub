<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderRelationManager extends RelationManager
{
    protected static string $relationship = 'order';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('id')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label('Order ID'),

                Tables\Columns\TextColumn::make('staus')
                ->badge()
                ->label('Status')
                ->color(fn(string $state): string => match($state){
                    'new' => 'info',
                    'processing' => 'info',
                    'shipped' => 'info',
                    'delivered' => 'info',
                    'picked' => 'info',
                    'canceled' => 'info',

                })
                ->icon(fn(string $state): string => match($state){
                    'new' => 'heroicon-m-sparkles',
                    'processing' => 'heroicon-m-sparkles',
                    'shipped' => 'heroicon-m-sparkles',
                    'delivered' => 'heroicon-m-sparkles',
                    'picked' => 'heroicon-m-sparkles',
                    'canceled' => 'heroicon-m-sparkles',

                }),

                Tables\Columns\TextColumn::make('created_at')
                ->label('Date Ordered')
                ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Action::make('View Order')
                // ->url(fn(Order $record):string => OrderResource::getUrl('View', ['record' => $record])),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
