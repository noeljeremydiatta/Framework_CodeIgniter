<?php namespace App\Controllers;

use App\Models\ClientsModel;
use CodeIgniter\Controller;

class Clients extends Controller
{
    public function index()
    {
        $model = new ClientsModel();

        $data['clients'] = $model->getClients();
    }

    public function view($id_clients = null)
    {
        $model = new ClientsModel();

        $data['clients'] = $model->getClients($id_clients);
    }
}