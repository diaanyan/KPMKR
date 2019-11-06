<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KPMKR-Surabaya</title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?> rel="stylesheet"/>

    <!-- Custom Fonts -->
    <link href=<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?> rel="stylesheet" type="text/css"/>
    <link href=<?php echo base_url('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic')?> rel="stylesheet" type="text/css"/>
    <link href=<?php echo base_url('https://fonts.googleapis.com/css?family=Montserrat:400,700')?> rel="stylesheet" type="text/css"/>

    <!-- Theme CSS -->
    <link href=<?php echo base_url('assets/css/login.css')?> rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Sign<span>In</span></div>
		</div>
		<br>
		<div class="login">
            <form method="post" action="<?php echo base_url().'index.php/loginProc'?>">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="pass"><br>
                <h3><?php echo $err_message;?></h3>
				<input type="submit" value="Login">
            </form>

		</div>
</body>
</html>