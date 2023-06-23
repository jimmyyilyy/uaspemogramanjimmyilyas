<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\modelmatkul;
 
class Matkul extends BaseController
{
    public function index()
    {
        $model = new modelmatkul();
        $data['matkul'] = $model->getMatkul();
        echo view('matkul',$data);
    }
}