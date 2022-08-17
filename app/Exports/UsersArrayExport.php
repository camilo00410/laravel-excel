<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;

use Maatwebsite\Excel\Concerns\FromCollection;

class UsersArrayExport implements FromArray
{
    public function array(): array
    {
        return [
            ['Harish', 'harish@example.com']
        ];
    }
}
