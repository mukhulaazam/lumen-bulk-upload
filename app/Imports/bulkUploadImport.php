<?php
namespace App\Imports;

use App\Models\UserTestBulk;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class bulkUploadImport implements ToModel, WithHeadingRow
{
    use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public $program_id;

    public function __construct($id)
    {
        $this->program_id = $id;
    }

    public function model(array $row)
    {
        $t = new UserTestBulk;

        $t->name = $row['name'];

        return $t;
    }
}
