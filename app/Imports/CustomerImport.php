<?php

namespace App\Imports;

use App\Card;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Card([
            'name' => $row[0],
            'cpr_no' => $row[1],
            'email' => $row[2],
            'date' => $row[3],
            'expiry' => $row[4],
            'agent_id' => $row[5],
            'gender' => $row[6],
            'mobile' => $row[7],
            'phone' => $row[8],
            'house' => $row[9],
            'road' => $row[10],
            'block' => $row[11],
            'place' => $row[12],
            'country' => $row[13],
            'card_type_id' => $row[14],
            'payment_method' => $row[15],
            'contact_method' => $row[16],
            'package_type' => $row[17],
            'status' => $row[18],
            'father_id' => $row[19],
            'comment' => $row[20],
            'price' => $row[21],
        ]);
    }
}
