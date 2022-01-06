<?php

namespace App\Imports;

use App\Employees;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class EmployeesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use Importable;
    public function model(array $row)
    {
       // dd($row['employees_name']);
        return new Employees([
            //
            'companies_id'     => $row['companies_id'],
            'employees_name'    => $row['employees_name'], 
            'employees_email' => $row['employees_email'],
        ]);
    }
}
