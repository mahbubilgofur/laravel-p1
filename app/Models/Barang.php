<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Barang extends Model
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
            'id_barang' => [
                'id' => 'brg?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }


      use HasFactory;
      
     protected $table='tbl_barang';
    protected $fillable =[
'id_barang',
'barang_kode',
'barang_nama',
'id_jenis',
'id_supplier',
'harga_jual',
'barang_status'
        ];

}
