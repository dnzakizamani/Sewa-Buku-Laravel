<?php

namespace App\Exports;

use App\Models\DataPeminjam;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataPeminjamExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPeminjam::all();
    }
}
