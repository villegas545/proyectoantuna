<?php

namespace App\Exports;

use App\Productor;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Productor::all();
    }
}
