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
            'category_id' => $row[0],
            'name' => $row[1],
            'name_ar' => $row[2],
            'contract_date' => $row[3],
            'expiry_date' => $row[4],
            'cr_no' => $row[5],
            'place' => $row[6],
            'place_ar' => $row[7],
            'contact1' => $row[8],
            'contact2' => $row[9],
            'email' => $row[10],
            'address' => $row[11],
            'address_ar' => $row[12],
            'website' => $row[13],
            'description' => $row[14],
            'description_ar' => $row[15],
            'comment' => $row[16],
            'status' => $row[17],
            'on_off' => $row[18],

        ]);
    }
}
