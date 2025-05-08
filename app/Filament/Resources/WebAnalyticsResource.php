<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAnalytics extends Model
{
    use HasFactory;
    
    protected $table = 'web_analytics';

    protected $fillable = [
        'id', 'date', 'nb_uniq_visitors', 'nb_users', 'nb_visits', 'nb_actions', 'nb_visits_converted', 'bounce_count', 'sum_visit_length', 'max_actions', 'bounce_rate', 'nb_actions_per_visit', 'avg_time_on_site', 'created_at', 'updated_at'
    ];
}

namespace App\Filament\Resources;

use App\Filament\Resources\WebAnalyticsResource\Pages;
use App\Models\WebAnalytics;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class WebAnalyticsResource extends Resource
{
    protected static ?string $model = WebAnalytics::class;

    protected static ?string $navigationGroup = 'Analytics';

    public static function query(): Builder
    {
        return WebAnalytics::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('date')->label('Date'),
                Tables\Columns\TextColumn::make('nb_uniq_visitors')->label('Unique Visitors'),
                Tables\Columns\TextColumn::make('nb_users')->label('Users'),
                Tables\Columns\TextColumn::make('nb_visits')->label('Visits'),
                Tables\Columns\TextColumn::make('nb_actions')->label('Actions'),
                Tables\Columns\TextColumn::make('nb_visits_converted')->label('Converted Visits'),
                Tables\Columns\TextColumn::make('bounce_count')->label('Bounce Count'),
                Tables\Columns\TextColumn::make('sum_visit_length')->label('Total Visit Length'),
                Tables\Columns\TextColumn::make('max_actions')->label('Max Actions'),
                Tables\Columns\TextColumn::make('bounce_rate')->label('Bounce Rate'),
                Tables\Columns\TextColumn::make('nb_actions_per_visit')->label('Actions Per Visit'),
                Tables\Columns\TextColumn::make('avg_time_on_site')->label('Avg Time on Site'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\DatePicker::make('date')->label('Date')->required(),
                \Filament\Forms\Components\TextInput::make('nb_uniq_visitors')->label('Unique Visitors')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('nb_users')->label('Users')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('nb_visits')->label('Visits')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('nb_actions')->label('Actions')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('nb_visits_converted')->label('Converted Visits')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('bounce_count')->label('Bounce Count')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('sum_visit_length')->label('Total Visit Length')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('max_actions')->label('Max Actions')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('bounce_rate')->label('Bounce Rate')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('nb_actions_per_visit')->label('Actions Per Visit')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('avg_time_on_site')->label('Avg Time on Site')->numeric()->required(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebAnalytics::route('/'),
            'create' => Pages\CreateWebAnalytics::route('/create'),
            'edit' => Pages\EditWebAnalytics::route('/{record}/edit'),
        ];
    }
}
