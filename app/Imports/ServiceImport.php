<?php

namespace App\Imports;

use App\Service;
use Maatwebsite\Excel\Concerns\ToModel;

class ServiceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Service([
            'name' => $row[0],
            'name_ar' => $row[1],
            'hospital_id' => $row[2],
            'discount' => $row[3],
            'price' => $row[4],
        ]);
    }
}
