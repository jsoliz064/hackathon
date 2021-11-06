<?php

namespace App\Exports;

use App\Models\Reporte;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $report=Reporte::select('id','latitud','longitud')->get();
        
        $reportes=DB::select("SELECT id,latitud,longitud FROM reportes");
        
        return $report;
    }
}
