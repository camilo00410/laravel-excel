<?php

namespace App\Http\Controllers;

use App\Exports\UserMultisheetExport;
use App\Exports\UsersArrayExport;
use App\Exports\UsersCollectionExport;
use App\Exports\UsersExport;
use App\Exports\UsersViewExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class UsersExportController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        // return Excel::download(new UsersExport, 'users.xlsx');
        // return new UsersCollectionExport;
        // return $this->excel->download(new UsersExport, 'users.csv', Excel::CSV);
        // return $this->excel->download(new UsersExport, 'users.pdf', Excel::DOMPDF);
        // return $this->excel->download(new UserMultisheetExport(2022), 'users.xlsx');
        return $this->excel->store(new UserMultisheetExport(2022), 'users.xlsx');
    }
}
