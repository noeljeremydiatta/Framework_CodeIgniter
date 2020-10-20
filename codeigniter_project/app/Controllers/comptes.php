<?php namespace App\Controllers;

use App\Models\ComptesModel;
use CodeIgniter\Controller;

class Comptes extends Controller
{
    public function index()
    {
        $model = new ComptesModel();

        $data['comptes'] = $model->getComptes();
    }

    public function view($id_compte = null)
    {
        $model = new ComptesModel();

        $data['comptes'] = $model->getComptes($id_comptes);
    }
}