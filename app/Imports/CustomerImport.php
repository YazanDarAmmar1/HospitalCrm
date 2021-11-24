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
            'cpr_no' => $row[2],
            'email' => $row[17],
            'date' => $row[16],
            'period' => $row[12],
            'agent_id' => $row[13],
            'gender' => $row[1],
            'mobile' => $row[3],
            'phone' => $row[4],
            'house' => $row[6],
            'first_issue_date' =>$row[15],
            'card_type_id' => $row[7],
            'payment_method' => $row[8],
            'contact_method' => $row[9],
            'package_type' => $row[10],
            'status' => $row[14],
            'father_id' => $row[18],
            'expiry' => $row[19],
            'comment' => $row[11],
            'price' => $row[5],
        ]);
    }
}
