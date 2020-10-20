<?php namespace App\Models;

use CodeIgniter\Model;

class ComptesModel extends Model
{
    protected $table = 'comptes';
}

public function getComptes($id_compte = false)
{
    if ($id_compte === false)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['id_compte' => $id_compte])
                ->first();
}