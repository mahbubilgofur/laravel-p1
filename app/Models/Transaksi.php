<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaksi extends Model
{
	 use AutoNumberTrait;
    
    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {
        return [
            'id_transaksi' => [
                'id' => 'trs?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }


      use HasFactory;
     protected $table='tbl_transaksi';
    protected $fillable =[
'id_transaksi',
'id_admin',
'transaksi_tanggal',
'transaksi_nonota',
'transaksi_status'
    ];
}
