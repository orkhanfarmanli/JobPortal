@extends('layout')

@section('navbar')
	<!-- Categories -->
	<section id="categories">
		<div class="container">
			<div class="logo">
			</div>
			<div class="catNav">
				<div class="vacancies">
					<a class="active" href="/">İş elanları</a>
				</div>
				<div class="resumes">
					<a href="/categories/resumes">İş axtaranlar</a>
				</div>
			</div>
			<div class="otherNav">
				<div class="about">
					<a href="/pages/about">Haqqımızda</a>
				</div>
				<div class="add">
					<button><a href="/vacancies/new">Elan yerləşdirin</a></button>
				</div>
			</div>
			<div class="lang-select">
				<ul>
					<li id="az"><a>AZ</a></li>
					<li id="ru"><a>RU</a></li>
					<li id="en"><a>EN</a></li>
				</ul>
			</div>
		</div>
	</section>

	<!-- # Categories End -->
@stop

@section('view')
	<!-- Vacancies -->

	<!-- View Vacancies -->
	<section id="viewVacancies">
		<div class="container">
				<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="row">
						<div class="vacCount" >122</div>
						<div class="vacName"><a href="#maliyye">Maliyyə</a></div>
					</div>
					<div class="row">
						<div class="vacCount" >17</div>
						<a href="#markettinq">Markettinq</a>
					</div>
					<div class="row">
						<div class="vacCount" >14</div>
						<a class="vacLink" href="#it">İnformasiya Texnologiyaları</a>
					</div>
					<div class="row">
						<div class="vacCount" >18</div>
						<a href="#inzibati">İnzibati</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="row">
						<div class="vacCount" >36</div>
						<a href="#maliyye">Satış</a>
					</div>
					<div class="row">
						<div class="vacCount" >4</div>
						<a href="#markettinq">Dizayn</a>
					</div>
					<div class="row">
						<div class="vacCount" >3</div>
						<a href="#it">Hüquqşunaslıq</a>
					</div>
					<div class="row">
						<div class="vacCount" >10</div>
						<a href="#inzibati">Təhsil və Elm</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="row">
						<div class="vacCount" >7</div>
						<a href="#maliyye">Senaye və kənd təsərrüfatı</a>
					</div>
					<div class="row">
						<div class="vacCount" >24</div>
						<a href="#markettinq">Xidmət</a>
					</div>
					<div class="row">
						<div class="vacCount" >2</div>
						<a href="#it">Tibb və əczaçılıq</a>
					</div>
					<div class="row">
						<div class="vacCount" >2</div>
						<a href="#inzibati">Müxtəlif</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- # View Vacancies end -->

	<!-- View CV -->
		<!-- Səhifəyə görə dəyişir-->
	<!-- # View CV end -->

	<!-- # Vacancies End -->
@stop

@section('search')
	<!-- Search -->

	<section id="searchBtn">
		<div class="container">
			<div id="icon"></div>
			<span class="searchBtn">Axtarış</span>
			<i id="upDown" class="fa fa-caret-down"></i>
		</div>
	</section>
	<section id="search">
		{!!Form::open(['url' => 'vacancies', 'method' => 'GET'])!!}
		<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span>Kategoriya</span>
						<select class="select" id="category" name="vac_category_id">
						<option value>Bütün Kategoriyalar</option>
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->cat_name}}</option>
							@foreach($category->subcategories as $subcategory)
								<option value="{{$subcategory->id}}">— {{$subcategory->subcat_name}}</option>
							@endforeach
						@endforeach
						</select>
						<span>Təhsil</span>
						<select class="select" id="education" name="vac_education_id">
							<option value=>Vacib deyil</option>
							@foreach($education as $edu)
								<option value="{{$edu->id}}">{{$edu->edu_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-4">
						<span>Şəhər</span>
						<select class="select" id="city" name="vac_city_id">
							<option value>Vacib deyil</option>
							@foreach($cities as $city)
								<option value="{{$city->id}}">{{$city->city_name}}</option>
							@endforeach
						</select>
						<span>İş təcrübəsi</span>
						<select class="select" id="experience" name="vac_experience_id">
							<option value>Vacib deyil</option>
							@foreach($experience as $exp)
								<option value="{{$exp->id}}">{{$exp->exp_name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-4">
						<span>Əmək haqqı</span>
						<select class="select" id="salary" name="vac_min_salary">
							<option value="">Vacib deyil</option>
							<option value="100">minimum 100 AZN</option>
							<option value="200">minimum 200 AZN</option>
							<option value="300">minimum 300 AZN</option>
							<option value="400">minimum 400 AZN</option>
							<option value="500">minimum 500 AZN</option>
							<option value="600">minimum 600 AZN</option>
							<option value="700">minimum 700 AZN</option>
							<option value="800">minimum 800 AZN</option>
							<option value="900">minimum 900 AZN</option>
							<option value="1000">minimum 1000 AZN</option>
							<option value="1100">minimum 1100 AZN</option>
							<option value="1200">minimum 1200 AZN</option>
							<option value="1300">minimum 1300 AZN</option>
							<option value="1400">minimum 1400 AZN</option>
							<option value="1500">minimum 1500 AZN</option>
							<option value="1600">minimum 1600 AZN</option>
							<option value="1700">minimum 1700 AZN</option>
							<option value="1800">minimum 1800 AZN</option>
							<option value="1900">minimum 1900 AZN</option>
							<option value="2000">minimum 2000 AZN</option>
							<option value="2100">minimum 2100 AZN</option>
							<option value="2200">minimum 2200 AZN</option>
							<option value="2300">minimum 2300 AZN</option>
							<option value="2400">minimum 2400 AZN</option>
							<option value="2500">minimum 2500 AZN</option>
							<option value="2600">minimum 2600 AZN</option>
							<option value="2700">minimum 2700 AZN</option>
							<option value="2800">minimum 2800 AZN</option>
							<option value="2900">minimum 2900 AZN</option>
							<option value="3000">minimum 3000 AZN</option>
							<option value="3100">minimum 3100 AZN</option>
							<option value="3200">minimum 3200 AZN</option>
							<option value="3300">minimum 3300 AZN</option>
							<option value="3400">minimum 3400 AZN</option>
							<option value="3500">minimum 3500 AZN</option>
							<option value="3600">minimum 3600 AZN</option>
							<option value="3700">minimum 3700 AZN</option>
							<option value="3800">minimum 3800 AZN</option>
							<option value="3900">minimum 3900 AZN</option>
							<option value="4000">minimum 4000 AZN</option>
							<option value="5000">minimum 5000 AZN</option>
							<option value="6000">minimum 6000 AZN</option>
							<option value="7000">minimum 7000 AZN</option>
							<option value="8000">minimum 8000 AZN</option>
							<option value="9000">minimum 9000 AZN</option>
							<option value="10000">minimum 10000 AZN</option>
							<option value="11000">minimum 11000 AZN</option>
							<option value="12000">minimum 12000 AZN</option>
						</select>
						<span>Açar sözləri</span>
						{!!Form::text('term', Request::get('term'), array('class' => 'select'))!!}
					</div>
				</div>
				<div class="btnSearch">
					<input class="btn btn btn_load-more" name="commit" type="submit" value="Axtar">
				</div>
			</div>
	{{Form::close()}}
	</section>

	<!-- # Search end -->

@stop

@section('lastVacancies')
	<!-- Last Vakancies -->

	<section id="lastVac">
		<div class="container">

		<!-- List Last Vacancies -->

			<div class="headListLastVac">
				<div class="leftHead">
					<h1>SON İŞ ELANLARI</h1>
					<a href="/vacancies">Hamısını göstər</a>
				</div>
				<div class="rightHead pull-right">
					<span>7 gün - <a href="">14</a>, ay - <a href="">132</a> yeni elan</span>
				</div>
			</div>
			<div class="listLastVac clearFix">
				<div class="row">
					@foreach($vacancies as $vacancy)
						<div class="col-md-4">
							<a href="vacancies/{{$vacancy->id}}" class="nameVac">{{$vacancy->vac_position}}</a>
							<div class="priceVac">
								<span class="minPrice">{{$vacancy->vac_min_salary}}</span>
								<span> - </span>
								<span class="maxPrice">{{$vacancy->vac_max_salary}}</span>
							</div>
							<a href="" class="companyName">{{$vacancy->vac_company_name}}</a>
						</div>
					@endforeach
				</div>
			</div>

			<!-- Premium List Vac-->

			<div class="mobile headListLastVac">
				<div class="leftHead">
					<h1>PREMİUM İŞ ELANLARI</h1>
				</div>
			</div>
			<div class="mobile listLastVac clearFix">
				<div class="row">
					<div class="col-md-4 first">
						<a href="#vac" class="nameVac">Satış Təmsilçisi</a>
						<div class="priceVac">
							<span class="minPrice">300</span>
							<span> - </span>
							<span class="maxPrice">500 AZN</span>
						</div>
						<a href="#company" class="companyName">Caspian Telecom MMC</a>
					</div>
					<div class="col-md-4">
						<a href="#vac" class="nameVac">Satış Təmsilçisi</a>
						<div class="priceVac">
							<span class="minPrice">300</span>
							<span> - </span>
							<span class="maxPrice">500 AZN</span>
						</div>
						<a href="#company" class="companyName">Caspian Telecom MMC</a>
					</div>
					<div class="col-md-4">
						<a href="#vac" class="nameVac">Satış Təmsilçisi</a>
						<div class="priceVac">
							<span class="minPrice">300</span>
							<span> - </span>
							<span class="maxPrice">500 AZN</span>
						</div>
						<a href="#company" class="companyName">Caspian Telecom MMC</a>
					</div>
					<div class="col-md-4">
						<a href="#vac" class="nameVac">Satış Təmsilçisi</a>
						<div class="priceVac">
							<span class="minPrice">300</span>
							<span> - </span>
							<span class="maxPrice">500 AZN</span>
						</div>
						<a href="#company" class="companyName">Caspian Telecom MMC</a>
					</div>
				</div>
			</div>
@stop

@section('facebookVidget')
	<!-- Facebook Vidget  -->

			<div class="widgets">
				<div class="fb-like-box fb_iframe_widget" data-colorscheme="light" data-header="false" data-href="https://www.facebook.com/www.boss.az" data-show-border="false" data-show-faces="true" data-stream="false" data-width="940" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=168601233177656&amp;color_scheme=light&amp;container_width=520&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.boss.az&amp;locale=az_AZ&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=940">
					<span style="vertical-align: bottom; width: 500px; height: 214px;">
						<iframe name="f4f117a67f6574" width="940px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.2/plugins/like_box.php?app_id=168601233177656&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df2af5bb5e3b54bc%26domain%3Dboss.az%26origin%3Dhttp%253A%252F%252Fboss.az%252Ff3b93fec56b80dc%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=520&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.boss.az&amp;locale=az_AZ&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=940" style="border: none; visibility: visible; width: 500px; height: 214px;" class=""></iframe>
					</span>
				</div>
			</div>
			<div class="quote">
				<div class="quote-text">It does not matter how slowly you go as long as you do not stop.</div>
				<div class="quote-by">Confucius</div>
			</div>


	<!-- Facebook vidget end -->
@stop

@section('listCompanies')
	<!-- List All categories and All company -->
	
			
			<div class="tabCategoriesCompanies clearFix">
					<div class="row">
						<ul id="tabNav">
							<li><a class="tab-aktiv" href="#tab-categories">BÖLMƏLƏR</a></li>
							<li><a href="#tab-companies">ŞİRKƏTLƏR</a></li>
						</ul>
					</div>
				 <div id="tab-categories" class="show">
					<div class="row">
						@foreach($categories as $cat)
                            <div class="col-md-4">
                                <ul class="catList">
                                    <li class="catListItem"><a href="">{{$cat->cat_name}}</a></li>
                                    @foreach($cat->subcategories as $scat)
                                        <li class="catListItem"><a href="">{{$scat->subcat_name}}</a></li>
                                        @endforeach
                                </ul>
                            </div>
							@endforeach
			    	</div><!-- Row -->
				</div>
				<!-- tab companies-->
				<div id="tab-companies">
					<div class="row">
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4 last">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4 last">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4 last">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4">
		    				<a href="#company">CompanyName</a>
		    			</div>
		    			<div class="col-md-4 last">
		    				<a href="#company">CompanyName</a>
		    			</div>
			    	</div>
				</div>
			</div>
	<!-- List All categories and All company End -->
		</div>
	</section>
@stop

@section('footer')
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
	// Tab menu (Vakansiyalar və CV-lər)
		// Səhifəyə görə oldu
		


	// Yuxarıdan aşağı açılan Axtarış sistemi
	var height;
	$(document).ready(function() {
		height = $("#search > .container").height();
		$("#search").hide();

		$("#searchBtn").on('click', function(event){ 
         	$('#search').slideToggle(100);
    	});
    	$("#searchBtn").click(function(){
	    	$("#upDown").toggleClass("fa-caret-up");
    	});

	});

	// tab menu all vacancies
	var catlistAttr; 

	$(document).ready(function() {

    $("ul#tabNav li a").click(function(){
    	$(".tab-aktiv").removeClass("tab-aktiv");
    	$(this).addClass("tab-aktiv");
    	catlistAttr = $(this).attr("href");
    	$(".show").removeClass("show");
    	$(catlistAttr).addClass("show");
    	return false;
    });
	});
	</script>
@stop