<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
	 border: 10px;
	color: #ffffff;
    display: block;
    font-style: italic;
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
</head>
<body>
	<div class="bg">
		<br><br>
	<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
		<div>
		  <div class="container"><br><br><br>
		  
			  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
						Apakah saya harus melakukan registrasi terlebih dahulu?
					  </a>
					</h3>
				  </div>
				  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Iya diharuskan, karena untuk menonton semua film yang ada di Rebulm harus mempunyai akun terlebih dahulu</p>
					</div>
				  </div>
				</div>
				
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
						Mengapa saya harus berlangganan streaming ini?
					  </a>
					</h3>
				  </div>
				  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Karena semua film nya HD</p>
					</div>
				  </div>
				</div>
				
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
						Berapa biaya untuk berlangganan Rebulm?
					  </a>
					</h3>
				  </div>
				  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Ada beberapa paket yang tersedia yang dimulai dari Rp.10.000</p>
					</div>
				  </div>
				</div>
				
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
						Bagaimana cara melakukan pembayaran pada Rebulm?
					  </a>
					</h3>
				  </div>
				  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Bisa via m-Banking, GOPAY, LINK AJA, DANA, OVO</p>
					</div>
				  </div>
				</div>	
		
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
						Bagaimana jika saya ingin membatalkan berlangganan di Rebulm?
					  </a>
					</h3>
				  </div>
				  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Cukup dengan menunggu paket anda habis dan berhenti melakukan pembayaran </p>
					</div>
				  </div>
				</div>
		
				<div class="panel panel-default">
				  <div class="panel-heading p-3 mb-3" role="tab" id="heading5">
					<h3 class="panel-title">
					  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
						Bagaimana cara menghubungi Rebulm?
					  </a>
					</h3>
				  </div>
				  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
					<div class="panel-body px-3 mb-4" style="color: white; background-color:rgb(31, 14, 14); padding: 10px 5px 5px 5px;">
					  <p>Anda dapat menghubungi customer service kami No.08080182909</p>
					</div>
				  </div>
				</div>
		
			  </div>
		  
		  </div>
		</div>
		</section>
	</div>			
</body>
</html>


