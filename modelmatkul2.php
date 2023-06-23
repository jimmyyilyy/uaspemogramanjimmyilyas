<?php namespace App\Models;
use CodeIgniter\Model;
 
class modelmatkul2 extends Model
{
     ////memunculkan tabel 2 as no 4
    public function getMatkul2()
    {
        $querymatkul= "SELECT sks,nama_matkul FROM `matkul` order by sks asc;";
        $queryhasil=$this->db->query($querymatkul); 
		return $queryhasil->getResultArray();  
    }
 }
 ?>