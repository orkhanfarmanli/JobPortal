@extends('layout')

@section('navbar')
	<!-- Categories -->
	<section id="categories">
		<div class="container pBottom">
			<div class="logo">
			</div>
			<div class="catNav">
				<div class="pageVacancies">
					<a class="active" href="/">İş elanları</a>
				</div>
				<div class="pageResumes">
					<a href="/categories/resumes">İş axtaranlar</a>
				</div>
			</div>
			<div class="otherNav">
				<div class="pageAbout">
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

@section('search')
	<section id="search" class="show">
		<div class="container all">
				<div class="row">
					<div class="col-md-4">
						<span>Kategoriya</span>
						<select class="select" id="category" name="category">
							<option value="">Bütün kateqoriyalar</option>
							@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->cat_name}}</option>
								@foreach($category->subcategories as $subcategory)
									<option value="{{$subcategory->id}}">— {{$subcategory->subcat_name}}</option>
								@endforeach
							@endforeach
						</select>
						<span>Təhsil</span>
						<select class="select" id="education" name="education">
							<option value="">Vacib deyil</option>
							<option value="1">Elmi dərəcə</option>
							<option value="2">Ali</option>
							<option value="3">Natamam ali</option>
							<option value="4">Orta texniki</option>
							<option value="5">Orta xüsusi</option>
							<option value="6">Orta</option>
							<option value="7">-</option>
						</select>
					</div>
					<div class="col-md-4">
						<span>Şəhər</span>
						<select class="select" id="city" name="city">
							<option value="">Bütun şəhərlər</option>
							<option value="28">Ağcabədi</option>
							<option value="12">Ağdam</option>
							<option value="83">Ağdaş</option>
							<option value="34">Ağsu</option>
							<option value="1">Bakı</option>
							<option value="73">Balakən</option>
							<option value="30">Beyləqan</option>
							<option value="26">Biləsuvar</option>
							<option value="31">Bərdə</option>
							<option value="72">Cəlilabad</option>
							<option value="23">Füzuli </option>
							<option value="81">Goranboy</option>
							<option value="29">Göyçay</option>
							<option value="4">Gəncə</option>
							<option value="27">Kürdəmir</option>
							<option value="82">Lerik</option>
							<option value="11">Lənkaran</option>
							<option value="16">Masallı</option>
							<option value="6">Mingəçevir</option>
							<option value="14">Naftalan</option>
							<option value="8">Naxçıvan</option>
							<option value="39">Qaradağ</option>
							<option value="38">Qax</option>
							<option value="15">Qazax</option>
							<option value="18">Quba</option>
							<option value="19">Qusar</option>
							<option value="76">Qəbələ</option>
							<option value="33">Saatlı</option>
							<option value="24">Sabirabad</option>
							<option value="22">Salyan</option>
							<option value="35">Samux</option>
							<option value="74">Siyəzən</option>
							<option value="5">Sumqayıt</option>
							<option value="17">Tovuz</option>
							<option value="32">Tərtər</option>
							<option value="20">Xaçmaz</option>
							<option value="75">Xırdalan</option>
							<option value="37">Xızı</option>
							<option value="77">Yardımlı</option>
							<option value="10">Yevlax</option>
							<option value="2">Zaqatala</option>
							<option value="25">İmişli</option>
							<option value="3">İsmayıllı</option>
							<option value="80">Şabran</option>
							<option value="21">Şamaxı</option>
							<option value="78">Şirvan</option>
							<option value="9">Şəki</option>
							<option value="13">Şəmkir</option>
							<option value="79">Şərur</option>
							<option value="7">Əli-Bayramlı</option>
						</select>
						<span>İş təcrübəsi</span>
						<select class="select" id="experience" name="experience">
							<option value="">Vacib deyil</option>
							<option value="1">1 ildən aşağı</option>
							<option value="2">1 ildən 3 ilə qədər</option>
							<option value="3">3 ildən 5 ilə qədər</option>
							<option value="4">5 ildən artıq</option>
						</select>
					</div>
					<div class="col-md-4">
						<span>Əmək haqqı</span>
						<select class="select" id="salary" name="salary">
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
						<input class="select" id="keyword" name="keyword" type="text">
					</div>
				</div>
				<div class="btnSearch">
					<input class="btn btn btn_load-more" name="commit" type="submit" value="Axtar">
				</div>
			</div>
	</section>
@stop

@section('content')
		<!-- # vacancies -->

	<section id="allVac">

		<div class="container pBottom">
			<div class="row">
				<!-- vacancies header -->
				<div class="allVacHeader">
					<h3>AXTARIŞ NƏTİCƏLƏRİ :<span>161 İŞ ELANI</span></h3>

				</div>
				<!-- vacancies header end-->
			</div>


			<div class="row">
				@foreach($vacancies as $vac_table)
					<div class="col-md-6 " >
						<div class="card-lar ">
							<div class="card card-block">
								<h3 class="card-title"  >{{$vac_table->vac_position}}</h3>
								<a href="#">{{$vac_table->vac_company_name}}</a>
								<div class="imqiymet">
									<div class="qiymet"><span>{{$vac_table->vac_min_salary}}-{{$vac_table->vac_max_salary}} AZN</span></div>
									<div class="qiymetLink">
										<a href="{{url('vacancies',$vac_table->id)}}">Ətraflı</a>
										<i class="fa fa-angle-right"></i>
									</div>

								</div>


								<p class="col_inner_height">
									{{$vac_table->vac_job_description}}
								</p>

								<div class="cardFooter">
									<span>{{$vac_table->city['city_name']}}</span>
									<i class="fa fa-circle"></i>
									<a href="#" >{{$vac_table->subcategories->categories['cat_name']}} </a>
									/
									<a href="#" >{{$vac_table->subcategories['subcat_name']}}</a>
								</div>

							</div>



						</div >
					</div>






				@endforeach



				<script type="text/javascript">
							function equalHeight(group) {
								var tallest = 0;
								var b=$('.col_inner_height:odd');
								var c=$('.col_inner_height:even');

								group.each(function() {
									var thisHeight = $(this).height();
									if(thisHeight > tallest) {
										tallest = thisHeight;
									}
								});
								group.height(tallest);
							}

					$(document).ready(function() {
						var b = {!! json_encode($roles) !!}

						for(i=0; i < b.length; i++) {
							equalHeight($(".col_inner_height"));
						};
					});

				</script>






				<nav>
					<ul class="pagination">
						<li class="page-item disabled">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
						</li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
								<span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
								<span class="sr-only">Next</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>


		</div>
	</section>




	<!-- # vacancies end -->
@stop