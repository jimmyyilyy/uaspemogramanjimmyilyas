<?php namespace App\Models;
use CodeIgniter\Model;
 
class modelmahasiswa extends Model
{
     
    public function getMahasiswa()
    {
        $query= "SELECT mahasiswa.jenis_kelamin, count(*) AS jumlah, matkul.matakuliah FROM mahasiswa LEFT JOIN matkul on matkul.id_matkul=mahasiswa.id_matkul GROUB BY matakuliah.mata_kuliah, mahasiswa.jenis_kelamin ORDER BY 1 ASC,2 DESC";
        $query=$this->db->query($query); 
		return $query->getResultArray();    
    }
 }