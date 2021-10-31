<?php

namespace App\Exports;

use App\Exceldisney;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Exceldisney::all();
    }
}
