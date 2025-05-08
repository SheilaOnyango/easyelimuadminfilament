<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Models\Payment;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationGroup = 'Resources';
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function query(): Builder
    {
        return Payment::query()->latest();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('CheckoutRequestID')->label('Checkout Request ID'),
                Tables\Columns\TextColumn::make('MerchantRequestID')->label('Merchant Request ID'),
                Tables\Columns\TextColumn::make('user_id')->label('User ID'),
                Tables\Columns\TextColumn::make('referrer_id')->label('Referrer ID'),
                Tables\Columns\TextColumn::make('commission_percentage')->label('Commission Percentage'),
                Tables\Columns\TextColumn::make('cron_update')->label('Cron Update'),
                Tables\Columns\TextColumn::make('package_id')->label('Package ID'),
                Tables\Columns\TextColumn::make('topic_id')->label('Topic ID'),
                Tables\Columns\TextColumn::make('subject_id')->label('Subject ID'),
                Tables\Columns\TextColumn::make('exam_id')->label('Exam ID'),
                Tables\Columns\TextColumn::make('lpritopic_id')->label('LPRI Topic ID'),
                Tables\Columns\TextColumn::make('upritopic_id')->label('UPRI Topic ID'),
                Tables\Columns\TextColumn::make('jsstopic_id')->label('JSS Topic ID'),
                Tables\Columns\TextColumn::make('hstopic_id')->label('HS Topic ID'),
                Tables\Columns\TextColumn::make('online_class_id')->label('Online Class ID'),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('amount')->label('Amount')->money('USD'),
                Tables\Columns\TextColumn::make('mpesa_receipt_number')->label('Mpesa Receipt Number'),
                Tables\Columns\TextColumn::make('transaction_date')->label('Transaction Date')->dateTime(),
                Tables\Columns\TextColumn::make('purchase_description')->label('Purchase Description')->limit(50),
                Tables\Columns\TextColumn::make('comments')->label('Comments')->limit(50),
                Tables\Columns\TextColumn::make('transaction_completed')->label('Transaction Completed'),
                Tables\Columns\TextColumn::make('mpesa_first_name')->label('Mpesa First Name'),
                Tables\Columns\TextColumn::make('created_by')->label('Created By'),
                Tables\Columns\TextColumn::make('modified_by')->label('Modified By'),
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
                \Filament\Forms\Components\TextInput::make('CheckoutRequestID')->label('Checkout Request ID')->required(),
                \Filament\Forms\Components\TextInput::make('MerchantRequestID')->label('Merchant Request ID')->required(),
                \Filament\Forms\Components\TextInput::make('user_id')->label('User ID')->required(),
                \Filament\Forms\Components\TextInput::make('referrer_id')->label('Referrer ID'),
                \Filament\Forms\Components\TextInput::make('commission_percentage')->label('Commission Percentage')->numeric(),
                \Filament\Forms\Components\TextInput::make('cron_update')->label('Cron Update'),
                \Filament\Forms\Components\TextInput::make('package_id')->label('Package ID')->required(),
                \Filament\Forms\Components\TextInput::make('phone_number')->label('Phone Number')->required(),
                \Filament\Forms\Components\TextInput::make('amount')->label('Amount')->numeric()->required(),
                \Filament\Forms\Components\TextInput::make('mpesa_receipt_number')->label('Mpesa Receipt Number'),
                \Filament\Forms\Components\DateTimePicker::make('transaction_date')->label('Transaction Date')->required(),
                \Filament\Forms\Components\Textarea::make('purchase_description')->label('Purchase Description')->required(),
                \Filament\Forms\Components\Textarea::make('comments')->label('Comments'),
                \Filament\Forms\Components\TextInput::make('transaction_completed')->label('Transaction Completed')->required(),
                \Filament\Forms\Components\TextInput::make('mpesa_first_name')->label('Mpesa First Name'),
                \Filament\Forms\Components\TextInput::make('created_by')->label('Created By')->required(),
                \Filament\Forms\Components\TextInput::make('modified_by')->label('Modified By')->required(),
                \Filament\Forms\Components\DateTimePicker::make('created_at')->label('Created At'),
                \Filament\Forms\Components\DateTimePicker::make('updated_at')->label('Updated At'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }
}
