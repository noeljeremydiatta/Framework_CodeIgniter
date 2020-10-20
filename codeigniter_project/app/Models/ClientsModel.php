<?php namespace App\Models;

use CodeIgniter\Model;

class ClientsModel extends Model
{
    protected $table = 'clients';
}

public function getClients($id_client = false)
{
    if ($id_client === false)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['id_client' => $id_client])
                ->first();
}