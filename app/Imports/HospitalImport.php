<?php

namespace App\Imports;

use App\Hospital;
use Maatwebsite\Excel\Concerns\ToModel;


class HospitalImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Hospital([
            'name' => $row[0],
            'name_ar' => $row[1],
            'contract_date' => $row[2],
            'expiry_date' => $row[3],
            'cr_no' => $row[4],
            'place' => $row[5],
            'place_ar' => $row[6],
            'contact1' => $row[7],
            'contact2' => $row[8],
            'email' => $row[9],
            'address' => $row[10],
            'address_ar' => $row[11],
            'website' => $row[12],
            'category' => $row[13],
            'description' => $row[14],
            'description_ar' => $row[15],
            'comment' => $row[16],
            'status' => $row[17],
            'on_off' => $row[18],

        ]);
    }
}
