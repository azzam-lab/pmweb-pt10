<?php

namespace App\Filament\Resources\Pegawais\Schemas;

use App\Models\Divisi;
use App\Models\Jabatan;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PegawaiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                Select::make('gender')
                    ->label('Gender')
                    ->options(['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'])
                    ->required(),
                Select::make('divisi_id')
                    ->relationship('divisi', 'nama_divisi')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('jabatan_id')
                    ->relationship('jabatan', 'nama_jabatan')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('tmp_lahir')
                    ->label('Tempat Lahir')
                    ->required(),
                DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                TextInput::make('hp')
                    ->label('No. HP')
                    ->required(),
                Textarea::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->label('Foto Pegawai')
                    ->image()->directory('pegawai')
                    ->imageEditor()->maxSize(2048)->nullable(),
            ]);
    }
}
