<?php
namespace App\Imports;

use App\Models\UserTestBulk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class bulkUploadImport implements ToModel
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new UserTestBulk([
            'name'     => $row[0],
            'email'    => $row[1],
            'password' => $row[2],
        ]);
    }
}
