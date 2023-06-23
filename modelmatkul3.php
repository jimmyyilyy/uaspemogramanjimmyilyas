<?php namespace App\Models;
use CodeIgniter\Model;
 
class modelmatkul3 extends Model
{
     //////memunculkan tabel 3 as nomor5
    public function getMatkul3()
    {
        $querymatkul= "Select mahasiswa.jenis_kelamin, count(*) AS jumlah, matkul.nama_matkul, mahasiswa.status FROM mahasiswa inner JOIN matkul on matkul.id_matkul=mahasiswa.id_matkul GROUP BY matkul.nama_matkul, mahasiswa.jenis_kelamin, mahasiswa.status ORDER BY mahasiswa.jenis_kelamin ASC, jumlah DESC";
        $queryhasil=$this->db->query($querymatkul); 
		return $queryhasil->getResultArray();  
    }
 }
 ?>