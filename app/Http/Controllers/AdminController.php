<?php

namespace App\Http\Controllers;

use App\Exports\DatasetsExport;
use App\Models\Dataset;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard()
    {
        $alumni = Dataset::all()->count();
        return view('admin.dashboard', compact('alumni'));
    }
    public function dataAlumni()
    {
        $alumni = Dataset::all();
        return view('admin.data-alumni', compact('alumni'));
    }
    public function exportDataAlumni()
    {
        $data = Dataset::all();
        // return view('exports.data-alumni', compact('data'));
        return Excel::download(new DatasetsExport, 'data-alumni.xlsx');
    }
    public function deleteDataAlumni($id)
    {
        $alumni = Dataset::find($id);
        $alumni->delete();
        return redirect()->route('admin.data-alumni')->with('success', 'Data alumni berhasil dihapus');
    }
}
