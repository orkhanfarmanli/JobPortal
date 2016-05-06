<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JobPortal</title>
	<!-- Normalise css -->
	<link rel="stylesheet" href="{{asset('css/normalise.css')}}">
	<!-- FornAwesome css -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<!-- Custom css -->
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<!-- Jquery -->
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/validate.min.js')}}"></script>
</head>
<body>

	<!-- Header Start -->
	<header id="header">
		<div class="container">

			<!-- Header Reklam -->
			<div class="headerReklam">
				<div class="headerReklami">
					<iframe border="0" frameborder="0" height="120" marginheight="0" marginwidth="0" scrolling="no" src="http://b.turbo.az/r/?p=32" width="255"></iframe>
				</div>
				<div class="headerReklami">
					<iframe border="0" frameborder="0" height="120" marginheight="0" marginwidth="0" scrolling="no" src="http://b.turbo.az/r/?p=33" width="230"></iframe>
				</div>
				<div class="headerReklami">
					<iframe border="0" frameborder="0" height="120" marginheight="0" marginwidth="0" scrolling="no" src="http://b.turbo.az/r/?p=34" width="230"></iframe>
				</div>
				<div class="headerReklami">
					<iframe border="0" frameborder="0" height="120" marginheight="0" marginwidth="0" scrolling="no" src="http://b.turbo.az/r/?p=207" width="230"></iframe>
				</div>
			</div>

			<!-- Header Menu (Dil seçimi və partnor saytlar) -->
			<div class="headerMenu clearFix">
				<a href="/">bash sehife</a>
				<ul>
					<li id="az"><a>azerbaycanca</a></li>
					<li id="ru"><a>по-русски</a></li>
					<li id="en"><a>in english</a></li>
				</ul>
				<a href="/pages/advertising">saytda reklam</a>
			</div>
		</div>
	</header>
<!-- Header End -->

	@yield('navbar')
	@yield('form')
	@yield('view')
	@yield('search')
	@yield('content')
	@yield('lastVacancies')
	@yield('facebookVidget')
	@yield('listCompanies')
	@yield('footer')

<!-- Footer -->
	<section id="footer">
		<div class="container clearFix">
			<div class="row">
				<div class="col-md-4">
					<div class="footNav">
						<ul class="footNavbar">
							<li class="footNavbarItem mobile"><a href="">Mobil Versiyası</a></li>
							<li class="footNavbarItem"><a href="/pages/about">Haqqımızda</a></li>
							<li class="footNavbarItem"><a href="/pages/advertising">Saytda reklam</a></li>
						</ul>
					</div>
					<div class="footInfo">
						<ul class="info">
							<li class="footCopy"><span>2008-2016 Boss.Az</span></li>
							<li class="footPhone"><a href="">(012) 000-00-00</a></li>
							<li class="footEmail"><a href="">boss@boss.az</a></li>
						</ul>
					</div>
					<div class="copyright">
						<span>
							Saytın rəhbərliyi reklam bannerlərinin və yerləşdirilmiş elanların məzmununa görə məsuliyyət daşımır.
						</span>
					</div>
				</div>
				<div class="col-md-4">
					<a class="title" href="">İş elanları</a>
					<ul class="footCatList">
						@foreach($categories as $cat)
							<li class="cat"><a href="">{{$cat->cat_name}}</a></li>
							@endforeach
					</ul>
				</div>
				<div class="col-md-4">
					<a class="title" href="">İş axtaranlar</a>
					<ul class="footCatList">
						@foreach($categories as $cat)
							<li class="cat"><a href="">{{$cat->cat_name}}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer End -->
</body>
</html>
<script type="text/javascript">
			// Dil seçimi
			$(document).ready(function(){
				$("#az").addClass("lang-selected");
				$("#az").click(function(){
					$(".lang-selected").removeClass("lang-selected");
					$(this).addClass("lang-selected");
				})
				$("#ru").click(function(){
					$(".lang-selected").removeClass("lang-selected");
					$(this).addClass("lang-selected");
				})
				$("#en").click(function(){
					$(".lang-selected").removeClass("lang-selected");
					$(this).addClass("lang-selected");
				})
			});

	// Mobil ucun

	$(document).ready(function(){
		$("li#az").addClass("lang-selected");
		$("li#az").click(function(){
			$(".lang-selected").removeClass("lang-selected");
			$(this).addClass("lang-selected");
		})
		$("li#ru").click(function(){
			$(".lang-selected").removeClass("lang-selected");
			$(this).addClass("lang-selected");
		})
		$("li#en").click(function(){
			$(".lang-selected").removeClass("lang-selected");
			$(this).addClass("lang-selected");
		})
	});

	// Elan yerləşdir input yaratma
//	var fieldset = document.getElementById("addInput");
//	function yarat(){
//		var input = document.createElement("input");
//		input.type="text";
//		input.className="form-control";
//		input.name="vac_phone";
//		input.id="vac_phone";
//		fieldset.appendChild(input);
//	}

		// seyfeleme pagination

	$(document).ready(function() {
		$(".pagination").bootstrapPaginator();
	});
	// seyfeleme pagination end

</script>