
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<!-- meta character set -->
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Pragyan 16</title>   
		<!-- Meta Description -->
		<meta name="description" content="Pragyan 2016">
		<meta name="keywords" content="Pragyan, Delta Delta Force">
		<meta name="author" content="Delta Force">
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		     ================================================== -->
		
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> -->
		
		<!-- Fontawesome Icon font -->
		<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css') }}">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{ asset('/css/slit-slider.css') }}">
		<!-- bootstrap.min -->
		<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

		<!-- Modernizer Script for old Browsers -->
		<script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
		<script>var base_url = "{{ url('/') }}";</script>
		<style type="text/css">
		body{
			overflow: visible;
		}
		table{
			background-color: white;
		}
		</style>
	</head>
	
	<body id="body">

		<!-- preloader -->
		<div id="preloader">
			<div class="loder-box">
				<div class="battery"></div>
			</div>
		</div>
		<!-- end preloader -->

		<!--
		     Fixed Navigation
		     ==================================== -->
		<header id="navigation" class="navbar-inverse animated-header">
			<div class="container">
				<div class="navbar-header">
					<!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Pragyan 16</a>
					</h1>
					<!-- /logo -->
				</div>
				<br><br><br>
			</div>
		</header>
		
		
		<main class="site-content" role="main">
			
			<label for="GrabToSmash">GRAB TO SMASH</label>
			<table class="table table-hover table-striped" id="GrabToSmash" >
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						
						@if( $detail->grabToSmash =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="PragyanDesignChallenge">PRAGYAN DESIGN CHALLENGE</label>
			<table class="table table-bordered table-hover table-striped" id="PragyanDesignChallenge">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->pragyanDesignChallenge =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 

					
				</tbody>
			</table>

			<label for="Yaconai"> YACONAI </label>
			<table class="table table-bordered table-hover table-striped" id="Yaconai">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->yaconai =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="Electrolution"></label>
			<table class="table table-hover table-striped" id="Electrolution">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->electrolution =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="BytecodeJunior">BYTECODE JUNIOR</label>
			<table class="table table-bordered table-hover table-striped" id="BytecodeJunior">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->bytecodeJunior =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="TheUltimateManager">THE ULTIMATE MANAGER</label>
			<table class="table table-bordered table-hover table-striped" id="TheUltimateManager">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->theUltimateManager =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="WaterRocket"> WATER ROCKET</label>
			<table class="table table-bordered table-hover table-striped" id="WaterRocket">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->waterRocket =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<label for="Trollphy"> TROLLPHY </label>
			<table class="table table-bordered table-hover table-striped" id="Trollphy">
				<thead>
					<tr>
						<th>roll no</th>
						<th>name</th>
						<th>hostel</th>
						<th>mobile</th>
					</tr>
				</thead>
				<tbody>
					
					@foreach ($details as $detail)
						@if( $detail->trollphy =='1' )
							<tr id="{{ $detail->rollno }}">
								<td> {{ $detail->rollno }} </td>
								<td> {{ $detail->name }} </td>
								<td> {{ $detail->hostel }} </td>
								<td> {{ $detail->mobile }} </td>
							</tr>
						@endif
					@endforeach 
					
				</tbody>
			</table>

			<!--   <th>amount</th>
			     </tr>
			     </thead>
			     <tbody>
			     
			     @foreach ($details as $detail)
			     <tr id="{{ $detail->rollno }}">
			     <td> {{ $detail->rollno }} </td>
			     <td> {{ $detail->name }} </td>
			     <td> {{ $detail->hostel }} </td>
			     <td> {{ $detail->grabToSmash }} </td>
			     <td> {{ $detail->pragyanDesignChallenge }} </td>
			     <td> {{ $detail->yaconai }} </td>
			     <td> {{ $detail->electrolution }} </td>
			     <td> {{ $detail->bytecodeJunior }} </td>
			     <td> {{ $detail->theUltimateManager }} </td>
			     <td> {{ $detail->waterRocket }} </td>
			     <td> {{ $detail->trollphy }} </td>
			     </tr>
			     @endforeach 
			     
			     </tbody>
			     </table>
			   -->
			
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>Let's Celebrate Technology</p>
							<p>Enjoy Pragyan 16</p>
						</div>
						<!--  <form action="#" method="post" class="subscribe-form wow animated fadeInUp">
						     <div class="input-field">
						     <input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
						     <button type="submit" class="submit-icon">
						     <i class="fa fa-paper-plane fa-lg"></i>
						     </button>
						     </div>
						     </form> -->
						<div class="footer-social">
							<ul>
								<!--                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								     <li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
								   -->              </ul>
						</div>
						
						<p>Made with &hearts; by <a href="http://delta.nitt.edu">Delta Force</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		     ================================================== -->
		<!-- Main jQuery -->
		<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
		<!-- Twitter Bootstrap -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<!-- Single Page Nav -->
		<script src="{{ asset('/js/jquery.singlePageNav.min.js') }}"></script>
		<!-- jquery.fancybox.pack -->
		<script src="{{ asset('/js/jquery.fancybox.pack.js') }}"></script>
		<!-- Owl Carousel -->
		<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
		<!-- jquery easing -->
		<script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
		<!-- Fullscreen slider -->
		<script src="{{ asset('/js/jquery.slitslider.js') }}"></script>
		<script src="{{ asset('/js/jquery.ba-cond.min.js') }}"></script>
		<!-- onscroll animation -->
		<script src="{{ asset('/js/wow.min.js') }}"></script>
		<!-- Custom Functions -->
		<script src="{{ asset('/js/main.js') }}"></script>
	</body>
</html>


