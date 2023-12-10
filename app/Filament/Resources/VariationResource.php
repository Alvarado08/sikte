<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Variation;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\VariationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\VariationResource\RelationManagers;

class VariationResource extends Resource
{
    protected static ?string $model = Variation::class;

    protected static ?string $navigationGroup = 'Store';

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('General Information')
                            ->schema([
                                Select::make('product_id')
                                    ->relationship('product','name')
                                    ->searchable(),
                                ColorPicker::make('color'),
                                KeyValue::make('size_quantity')
                                    ->label('Sizes and Quantities')
                                    ->keyLabel('Size')
                                    ->valueLabel('Quantity'),
                            ])
                    ]),
                Group::make()
                    ->schema([
                        Section::make('Images')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Cover Image')
                                    ->directory('product-colors')
                                    ->imageEditor(),
                                FileUpload::make('gallery')
                                    ->multiple()
                                    ->preserveFilenames()
                                    ->directory('galleries')
                                    ->imageEditor()
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ColorColumn::make('color')
                ->searchable()
                ->sortable(),
                TextColumn::make('product.name'),
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
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
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVariations::route('/'),
            'create' => Pages\CreateVariation::route('/create'),
            'edit' => Pages\EditVariation::route('/{record}/edit'),
        ];
    }    
}
