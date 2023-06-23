<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menampilkan Data Tabel Ke 3</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> 
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Tabel Ke 3 </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
		            <th>Jenis Kelamin</th>
		            <th>Jumlah</th>
		            <th>Mata Kuliah</th>
					 <th>Status</th>
		        </tr>
		        	<?php foreach($matkul as $row):?>
		        <tr>
		            <td><?=$row['jenis_kelamin'];?></td>
		       <td><?=$row['jumlah'];?></td>
		            <td><?=$row['nama_matkul'];?></td>
					 <td><?=$row['status'];?></td>
		        </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>
</body>
</html>