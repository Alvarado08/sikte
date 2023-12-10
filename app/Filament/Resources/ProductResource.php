<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\Resources\ProductResource\RelationManagers\VariationsRelationManager;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationGroup = 'Store';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('General Information')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->unique()
                                    ->live(onBlur:true)
                                    ->afterStateUpdated(function(string $operation,$state, Forms\Set $set){
                                        if($operation !== 'create'){
                                            return;
                                        }
                                        $set('slug',Str::slug($state));
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->disabled()
                                    ->dehydrated()
                                    ->unique(),
                                Forms\Components\MarkdownEditor::make('description')
                                    ->columnSpan('full'),
                        ])->columns('2'),
                    ]),
                Group::make()
                    ->schema([
                        Section::make('Details')
                            ->schema([
                                Forms\Components\Select::make('collection_id')
                                    ->relationship('collection','name')
                                    ->searchable()
                                    ->preload(),
                                Forms\Components\Select::make('category_id')
                                    ->relationship('category','name')
                                    ->searchable()
                                    ->preload(),
                                Forms\Components\Select::make('sex')
                                    ->options([
                                        'Men' => 'Men',
                                        'Women' => 'Women',
                                    ])
                        ])->columns('2')->collapsed(),
                        Section::make('Pricing')
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->numeric()
                                    ->required(),
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU'),
                                TextInput::make('width')
                                    ->numeric(),
                                TextInput::make('length')
                                    ->numeric(),
                                TextInput::make('height')
                                    ->numeric(),
                                TextInput::make('weight')
                                    ->numeric(),
                        ])->columns('2')->collapsed(),
                    ])
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('price')
                    ->money('MXN'),
                Tables\Columns\TextColumn::make('collection.name'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable()
                    ->date(),
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
            VariationsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }    
}
