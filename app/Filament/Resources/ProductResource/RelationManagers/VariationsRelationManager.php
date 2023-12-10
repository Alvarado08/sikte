<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class VariationsRelationManager extends RelationManager
{
    protected static string $relationship = 'variations';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Variations')
                    ->tabs([
                        Tab::make('Color and Cover Image')
                            ->schema([
                                ColorPicker::make('color'),
                                FileUpload::make('image')
                                    ->directory('product-colors')
                                    ->preserveFilenames()
                                    ->imageEditor(),
                            ])->columns('2'),
                        Tab::make('Sizes and Quantities')
                            ->schema([
                                KeyValue::make('size_quantity')
                                    ->keyLabel('Size')
                                    ->valueLabel('Quantity'),
                            ]),
                        Tab::make('Gallery')
                            ->schema([
                                FileUpload::make('gallery')
                                    ->multiple()
                                    ->preserveFilenames()
                                    ->directory('galleries')
                                    ->imageEditor()
                            ])
                    ])->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('color')
            ->columns([
                Tables\Columns\ColorColumn::make('color'),
                ImageColumn::make('image')
                    ->label('Cover Image')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
