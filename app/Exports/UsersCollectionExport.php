<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;


class UsersCollectionExport implements FromCollection, Responsable
{
    use Exportable;

    private $fileName = "users.xlsx";


    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return new Collection([
        //     ['harish', 'harish@example.com']
        // ]);
        return User::all();
    }
}
