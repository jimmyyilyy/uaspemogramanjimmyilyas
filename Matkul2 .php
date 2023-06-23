<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\modelmatkul2;
 
class Matkul2 extends BaseController
{
    public function index()
    {
        $model = new modelmatkul2();
        $data['matkul'] = $model->getMatkul2();
        echo view('matkul2',$data);
    }
}