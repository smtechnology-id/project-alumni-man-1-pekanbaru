<?php

namespace App\Exports;

use App\Models\Dataset;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class DatasetsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = Dataset::all();
        return view('exports.data-alumni', compact('data'));
    }
}
