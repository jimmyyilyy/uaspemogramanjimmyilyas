<?php
    namespace App\Controllers;
    use App\Models\modelmahasiswa;

    class Mahasiswa extends BaseController
    {
         function __construct()
        {
            $this->modelmhs = new modelmahasiswa();
			
        }
	public function index()
	{
		$data['mahasiswa'] = $this->modelmahasiswa->getData();
            return view('mahasiswa', $data);
        }
       
      

    }
    

?>