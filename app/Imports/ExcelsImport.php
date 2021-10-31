<?php

namespace App\Imports;

use App\Exceldisney;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Exceldisney([
            'name'=>$row[0],
            'email'=>$row[1],
            'birth_date'=> '2010-11-05',
            'country'=>$row[3],
            'city'=>$row[4]
        ]);
    }
}
