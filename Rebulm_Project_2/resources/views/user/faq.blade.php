@extends('layouts.user')

@section('head')
	<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<script src="{{ asset('/js/jquery.min.js') }}"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<style>
	

		body {
		/* The image used */
		background-image: url("images/bg.png");
		padding-bottom: 300px;
		/* Full height */
		height: 100%;
	
		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		}
	
		h2 {
			font-family: Arial, Verdana;
			font-weight: 800;
			font-size: 2.5rem;
			color: #091f2f;
			text-transform: uppercase;
		}
		.accordion-section .panel-default > .panel-heading {
			border: 10px;
			background-color:rgb(36, 24, 24);
			padding: 10px;
			border-radius: 10px;
			
		}
		.accordion-section .panel-default .panel-title a {
			border: 10px;
			color: #ffffff;
			display: block;
			
			font-size: 1.5rem;
		}
		.accordion-section .panel-default .panel-title a:after {
			
			font-family: 'FontAwesome';
			font-style: normal;
			font-size: 3rem;
			content: "\f106";
			
			float: right;
			margin-top: -12px;
		}
		.accordion-section .panel-default .panel-title a.collapsed:after {
			content: "\f107";
		}
		.accordion-section .panel-default .panel-body {
			font-size: 1.2rem;
		}
	
	</style>

@endsection

@section('content')
<div class="bg">
	<br><br>
	
		
<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
<h1 style="text-align:center; color:white; font-size=5;" >FaQ</h1>
	<div>
	  <div class="container" ><br><br><br>
		
		  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" >
			<div class="panel panel-default" >
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" style="text-decoration:none;" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
					Apakah saya harus melakukan registrasi terlebih dahulu?
				  </a>
				</h3>
			  </div>
			  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 15px; border-radius: 10px;">
				  <p>Iya diharuskan, karena untuk menonton semua film yang ada di Rebulm harus memiliki akun terlebih dahulu.</p>
				</div>
			  </div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" title="" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
					Mengapa saya harus berlangganan streaming ini?
				  </a>
				</h3>
			  </div>
			  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14);padding: 15px; border-radius: 10px; border-radius: 10px;">
				  <p>Karena semua film nya HD</p>
				</div>
			  </div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" title="" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
					Berapa biaya untuk berlangganan Rebulm?
				  </a>
				</h3>
			  </div>
			  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 15px; border-radius: 10px;">
				  <p>Ada beberapa paket yang tersedia yang dimulai dari Rp.10.000 sampai dengan Rp.90.000</p>
				</div>
			  </div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" title="" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
					Bagaimana cara melakukan pembayaran pada Rebulm?
				  </a>
				</h3>
			  </div>
			  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 15px; border-radius: 10px;">
				  <p>Bisa via m-Banking, GOPAY, LINK AJA, DANA, OVO</p>
				</div>
			  </div>
			</div>	
	
			<div class="panel panel-default">
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" title="" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse3">
					Bagaimana jika saya ingin membatalkan berlangganan di Rebulm?
				  </a>
				</h3>
			  </div>
			  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14);padding: 15px; border-radius: 10px;">
				  <p>Cukup dengan menunggu paket anda habis dan berhenti melakukan pembayaran, maka dari itu anda dinyatakan sudah tidak berlangganan lagi.</p>
				</div>
			  </div>
			</div>
	
			<div class="panel panel-default">
			  <div class="panel-heading p-3 mb-3" role="tab" id="heading5">
				<h3 class="panel-title">
				  <a class="collapsed" role="button" title="" style="text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse3">
					Bagaimana cara menghubungi Rebulm?
				  </a>
				</h3>
			  </div>
			  <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
				<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 15px; border-radius: 10px;">
				  <p>Anda dapat menghubungi customer service kami dengan nomor telepon 08080182909</p>
				</div>
			  </div>
			</div>
	
		  </div>
	  
	  </div>
	</div>
	</section>
</div>					
@endsection