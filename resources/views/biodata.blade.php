<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<style type="text/css">
		*{
			margin : 0px;
			padding: 0px;
			font-family: sans-serif;
		}
		header{
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("{{asset('diri.png')}}");
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		.title{
			position: absolute;
			top: 25%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.title h1{
			font-family: sans-serif;
			color: #fff;
			font-size: 40px;

		}
		.title1 {
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.title2 {
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.title1 h2 {
			font-family: sans-serif;
			color: #fff;
			font-size: 5  0px;
		}
		.title2 h1 {
			font-family: sans-serif;
			color: #fff;
			font-size: 30px;
		}
		.button{
			position: absolute;
			top: 73%;
			left: 50%;
			transform: translate(-50%,-50%);
		}
		.btn1{
			border: 1px solid;
			padding: 10px 25px;
			color: #fff;
			font-family:  sans-serif;
			font-size: 50px;
			text-decoration: none;
			transition: 0.6s ease;
			border-radius: 50px;
			margin: 10px;
		}
		.btn1:hover{
			background: #fff;
			color: #000;
		}
	</style>
	<header>
	<div class="main">
		<div class="title">
			<h1> Saya Angga Setiawan</h1>
		</div>
	</div>
	<div class="title1">
			<h2></h2>
		</div>
		<div class="title2">
			<h1>Siswa SMK Wikrama Bogor</h1>
		</div>
	<br><br><br>
	<div class="button">
		<a href="/dashboard" class="btn1">Masuk</a>
	</div>
	</header>

</body>
</html>


