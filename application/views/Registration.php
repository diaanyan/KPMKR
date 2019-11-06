<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Form</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href=<?php echo base_url("assets/css/form.css")?> rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href=<?php echo base_url("//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese")?> rel="stylesheet">
</head>
<body >
<?php
echo validation_errors();
 ?>
	<!--header-->
	<div class="agile-header-dot">
	<div class="agile-header">
		
		<h1>Registration Form</h1>
		<p>Teruntuk Pelajar dan Mahasiswa Baru yang menempuh pendidikan di Kota Surabaya</p>
	</div>
	</div>
	<!--//header-->
	<!--main-->

	
	<div class="agileits-main-dot">
	<div class="agileits-main">
	
		<div class="wrap">
		<?php echo form_open_multipart('regis/create')?>
		<form>
			<ul>
				<li class="text">Nama Lengkap  :  </li>
				<li><input name="nama" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Nama Panggilan  :  </li>
				<li><input name="namap" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Tempat Lahir :  </li>
				<li><input name="tempatLahir" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Tanggal Lahir :  </li>
				<li><input name="tglLahir" type="date" required></li>
			</ul>
			<ul>
				<li class="text">Asal Daerah :  </li>
				<li><input name="asal" type="text" required></li>
			</ul>			
			<ul>
				<li class="text">Alamat Asal :  </li>
				<li><input name="alamatAsal" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Kampus  :  </li>
				<li><input name="kampus" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Alamat Surabaya  :  </li>
				<li><input name="alamatSby" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Jurusan  :  </li>
				<li><input name="jurusan" type="text" required></li>
			</ul>
			<ul>
				<li class="text">No Handphone  :  </li>
				<li><input name="noHP" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Email :  </li>
				<li><input name="email" type="text" required></li>
			</ul>
			<ul>
				<li class="text">ID LINE  :  </li>
				<li><input name="idLine" type="text" required></li>
			</ul>
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="hidden" name="is_submit" value="1" />
				<input type="submit" value="submit">
				<input type="reset" value="reset">
			</div>
			</form>
		</div>
		</div>	
	</div>
	 <?php echo form_close(); ?>
<!--//main-->
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2017 KPMKR-Surabaya. All rights reserved.</p>
</div>
<!--//footer-->
</body>
</html>