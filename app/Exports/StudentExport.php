<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentExport implements FromCollection
{



    public function headings():array{
        return[
            'Id',
            'Name',
            'Email',

        ];
    }

/**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
}
