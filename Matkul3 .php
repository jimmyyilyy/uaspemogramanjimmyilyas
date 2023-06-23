<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\modelmatkul3;
 
class Matkul3 extends BaseController
{
    public function index()
    {
        $model = new modelmatkul3();
        $data['matkul'] = $model->getMatkul3();
        echo view('matkul3',$data);
    }
}