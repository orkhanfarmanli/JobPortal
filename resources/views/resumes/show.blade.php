@extends('layout')

@section('navbar')
	<!-- Categories -->
	<section id="categories">
		<div class="container pBottom">
			<div class="logo">
			</div>
			<div class="catNav">
				<div class="pageVacancies">
					<a href="/">İş elanları</a>
				</div>
				<div class="pageResumes">
					<a class="active" href="/categories/resumes">İş axtaranlar</a>
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

@section('content')
		<!-- single php -->
		<section id="singlePage">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="card-i-header">
								<div class="card-i-header-link">
									<a href="#">{{$cv->subcategories->categories['cat_name']}}</a> /
									<a href="#">{{$cv->subcategories['subcat_name']}}</a> 
								</div>
								
								<div class="row">
									<div class="card-i-header-post">
									<div class="div-i-header-post-title">
										<h2>{{$cv->cv_position_name}}</h2>
										<span>{{$cv->cv_min_salary}} AZN</span>
										<span class="cvName">{{$cv->cv_name}} {{$cv->cv_surname}}</span>
									</div>

									<div class="div-i-header-post-baxis">
										<span>Baxışların sayı: 1318</span><br>
										<span>Elan #{{$cv->id}}</span>
										<div class="fb-like fb_iframe_widget" data-action="recommend" data-layout="button_count" data-show-faces="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=recommend&amp;app_id=168601233177656&amp;container_width=132&amp;href=http%3A%2F%2Fboss.az%2Fvacancies%2F93022-p&amp;layout=button_count&amp;locale=az_AZ&amp;sdk=joey&amp;show_faces=false"><span style="vertical-align: bottom; width: 85px; height: 20px;"><iframe name="fb1dcc4fef0838" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="http://www.facebook.com/v2.2/plugins/like.php?action=recommend&amp;app_id=168601233177656&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df2b6d2c8b5cd5c%26domain%3Dboss.az%26origin%3Dhttp%253A%252F%252Fboss.az%252Ff7c2fd301f2674%26relation%3Dparent.parent&amp;container_width=132&amp;href=http%3A%2F%2Fboss.az%2Fvacancies%2F93022-p&amp;layout=button_count&amp;locale=az_AZ&amp;sdk=joey&amp;show_faces=false" style="border: none; visibility: visible; width: 85px; height: 20px;" class=""></iframe></span>
										</div>
									</div>
								</div>
								</div>
							</div>

							<div class="card-i-info">
							  <div class="info">
								 <div class="col-md-12">
									<div class="col-md-6">
										<div class="col-md-4">
											<ul>
												<li>Şəhər</li>
												<li>Yaş</li>
												<li>İş təcrübəsi</li>
												<li>Elanın tarixi</li>
												<li>Bitmə tarixi</li>
												<li>Ad</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul>
												<li>{{$cv->city['city_name']}}</li>
												<li>{{$cv->cv_age}} yaş</li>
												<li>{{$cv->experience['exp_name']}}</li>
												<li>{{$cv->created_at}}</li> 
												<li>{{$cv->updated_at}}</li>
												<li>{{$cv->cv_name}} {{$cv->cv_midname}} {{$cv->cv_surname}}</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-3">Telefon</div>
												<div class="col-md-9">
													<span><a href="tel:{{$cv->cv_phone}}">{{$cv->cv_phone}}</a></span>
													<span><a href="tel:{{$cv->cv_phone}}">{{$cv->cv_phone}}</a></span>
													<span><a href="tel:{{$cv->cv_phone}}">{{$cv->cv_phone}}</a></span>
												</div>
											</div>		
											
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-3">Email</div>
												<div class="col-md-9"><span class="email"><a encode="javascript" href="mailto:{{$cv->cv_email}}">{{$cv->cv_email}}</a></span></div>
												
											</div>
										</div>
									</div>
								</div>
							   </div>
							</div>
							<div class="card-i-content">
								
									<div class="col-md-12">
										<div class="col-md-6">
											<img src="" alt="">
											<h4>Bacarıqlar</h4>
												<p>{{$cv->cv_skills_detail}}</p>
											<h4>Təhsil</h4>
												<p>
													{{$cv->education['edu_name']}}
												</p>
												<p>
													{{$cv->cv_edu_detail}}
												</p>

										</div>
										<div class="col-md-6">
											<h4>İş təcrübəsi</h4>
												<p>{{$cv->experience['exp_name']}}</p>
												<p>{{$cv->cv_exp_detail}}</p>
											<h4>Əlavə məlumat</h4>
											<p>
												{{$cv->cv_personal_info}}
											</p>
										</div>
										
									</div>

								
							</div>
						  <div class="elanlar">
							<div class="col-md-12">
								<div class="col-md-12-elan">
									
									<a href="#">
										<i class="fa fa-arrow-up"></i>
										<span>Elanı irəli çəkmək</span>
										<div class="a-qiymet">5 AZN</div>	
										
									</a>

									<a href="#">
										<span><i class="fa fa-star"></i></span>
										<span>       Premium etmək       </span>

										<div class="a-premium">50 AZN</div>	
										
									</a>

								</div>
							</div>
						  </div>
							<div class="card-i-footer">
								<div class="comments-container">
								    <div class="comments">
								      <div class="fb-comments fb_iframe_widget" data-href="http://boss.az/vacancies/93174" data-numposts="10" data-width="900" fb-xfbml-state="rendered"><span style="height: 239px; width: 900px;"><iframe id="f10c0cc4fa86b64" name="f31bbdf564d22fc" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=168601233177656&amp;channel_url=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df2d726881e90d28%26domain%3Dboss.az%26origin%3Dhttp%253A%252F%252Fboss.az%252Ffb0b71e143a444%26relation%3Dparent.parent&amp;href=http%3A%2F%2Fboss.az%2Fvacancies%2F93174&amp;locale=az_AZ&amp;numposts=10&amp;sdk=joey&amp;version=v2.2&amp;width=900" style="border: none; overflow: hidden; height: 239px; width: 900px;"></iframe></span></div>
								    </div>
								    <div class="comments-hide">
									    <a href="#">
									      <span class="translation_missing" title="translation missing: az.application.social.hide">Hide</span>
									    </a>
									</div>
								</div>
   							</div>
						</div> <!-- row-->
					</div>
				</div>
			</div>
		</section>
		<!-- single php end -->
		
		<section id="allVac">

		<div class="container">
			<div class="row">
				<!-- vacancies header -->
				<div class="allVacHeader">
					<h3>Digər iş elanları</h3>

				</div>
				<!-- vacancies header end-->
			</div>


			<div class="row">

			  <div class="col-md-6">
					<div class="card-lar">
					   	<div class="card card-block">
					      <h3 class="card-title">TƏLİMLƏRİN TƏŞKİLİ ÜZRƏ KİÇİK MÜTƏXƏSSİS</h3>
					      <a href="#">ALSA GROUP</a>
						   <div class="imqiymet">
					              <div class="qiymet"><span>700-1000 AZN</span></div>
					              <div class="qiymetLink">
						               <a href="#">Ətraflı</a>
						               <i class="fa fa-angle-right"></i>
					              </div>

           				     </div>


					              <p >
					              - Şirkət istehsalatla məşğuldur
					              <br>
					              - Şirkətin məhsullarının korporativ və pərakəndə satışı
					              <br>
					              - 6 günlük iş rejimi
					              <br>
					              - Yemək və avtomobilin xərcləri şirkət tərəfindən ödəniləcək
					              <br>
					              - Əmək haqqı satış həcminə görə daha çox ola bilər

					              </p>

					              <div class="cardFooter">
						            <span>Bakı</span>
						              <i class="fa fa-circle"></i>
						              <a href="#" >Satış </a>
						                /
						              <a href="#" > Satış üzrə mütəxəssis</a>
		            			</div>
														
					   	</div>
						
						 

					</div>
			    </div>


			    
			  <div class="col-md-6">
					<div class="card-lar">
					   	<div class="card card-block">
					      <h3 class="card-title">TƏLİMLƏRİN TƏŞKİLİ ÜZRƏ KİÇİK MÜTƏXƏSSİS</h3>
					      <a href="#">ALSA GROUP</a>
						   <div class="imqiymet">
					              <div class="qiymet"><span>700-1000 AZN</span></div>
					              <div class="qiymetLink">
						               <a href="#">Ətraflı</a>
						               <i class="fa fa-angle-right"></i>
					              </div>

           				     </div>


					              <p >
					              - Şirkət istehsalatla məşğuldur
					              <br>
					              - Şirkətin məhsullarının korporativ və pərakəndə satışı
					              <br>
					              - 6 günlük iş rejimi
					              <br>
					              - Yemək və avtomobilin xərcləri şirkət tərəfindən ödəniləcək
					              <br>
					              - Əmək haqqı satış həcminə görə daha çox ola bilər

					              </p>

					              <div class="cardFooter">
						            <span>Bakı</span>
						              <i class="fa fa-circle"></i>
						              <a href="#" >Satış </a>
						                /
						              <a href="#" > Satış üzrə mütəxəssis</a>
		            			</div>
														
					   	</div>
						
						 

					</div>
			  	</div>
			</div>
		</section>
@stop