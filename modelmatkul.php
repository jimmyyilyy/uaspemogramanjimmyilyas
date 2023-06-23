<?php namespace App\Models;
use CodeIgniter\Model;
 
class modelmatkul extends Model
///// memunculkan tabel 1 as no 3
{
     
    public function getMatkul()
    {
        $querymatkul= "SELECT mahasiswa.jenis_kelamin, count(*) AS jumlah, matkul.nama_matkul FROM mahasiswa LEFT JOIN matkul on matkul.id_matkul=mahasiswa.id_matkul GROUP BY matkul.nama_matkul, mahasiswa.jenis_kelamin ORDER BY mahasiswa.jenis_kelamin ASC, jumlah DESC";
        $queryhasil=$this->db->query($querymatkul); 
		return $queryhasil->getResultArray();  
    }
 }
 ?>