@extends('layout')

@section('navbar')
	<!-- Categories -->
	<section id="categories">
		<div class="container pBottom">
			<div class="logo">
			</div>
			<div class="catNav">
				<div class="pageVacancies">
					<a class="active" href="#viewVacancies">İş elanları</a>
				</div>
				<div class="pageResumes">
					<a href="#viewCv">İş axtaranlar</a>
				</div>
			</div>
			<div class="otherNav">
				<div class="pageAbout">
					<a href="#resumes">Haqqımızda</a>
				</div>
				<div class="add">
					<button>Elan yerləşdirin</button>
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
		<!-- haqqında səhifəsi tab nav-->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul id="aboutNav">
						<li><a class="tactive" href="#aboutP">Haqqımızda</a></li>
						<li class="tabReklam"><a href="#aboutA">Saytda reklam</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- haqqında səhifəsi 1ci tab-->
	<section id="aboutP">
		<div class="container bgCol show">
			<div class="col-md-12 borderCol">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-offset-4 col-md-4">
							<h1>Haqqımızda</h1>
						</div>
					</div>
					<div class="col-md-12 contentTab">
						<p><strong>Layihə haqqında:</strong></p>
						<p>Boss.Az - əmək bazarının bütün iştirakçılarının faydalana biləcəyi, dəqiq və sürətli iş və ya işçi axtarışı üçün nəzərdə tutulmuş onlayn platformadır.  Layihə istifadəçilərə geniş iş elanı və CV bazasından rahat istifadə imkanı yaradır.</p>
						<p>Layihə fəaliyyətinə 2008-ci ildə başlayıb və hal-hazırda Azərbaycanın əmək bazarında aparıcı onlayn resuslarından biridir.</p>
						<p>Boss.Az - işədüzəltmə şirkəti deyil. Layihənin məqsədi işə götürən ilə potensial işçi arasında vasitəçisiz və operativ əlaqə imkanı yaratmaqdır. </p>
						<p><strong>Elanların yerləşdirilməsi:</strong></p>
						<p>Boss.Az - istifadəçilərə sayta iş elanı və CV yerləşdirmək imkanı yaradır. Hər istifadəçi ay ərzində ödənişsiz olaraq bir  iş elanı və bir CV yerləşdirə bilər.</p>
						<p><strong>Bizimlə əlaqə:</strong></p>
						<p>Biz layihənin inkişafı və təkmilləşdirilməsi üçün əlimizdən gələni edirik və sizin bu haqda olan fikirlərinizi və təkliflərinizi dinləməyə hazırıq. Bizimlə əlaqə yaratmaq üçün <a href="mailto:boss@boss.az">boss@boss.az</a> e-mail ünvanına yaza və ya <a href="tel:0124041427">(012) 404-14-27</a> telefon nömrəsinə zəng edə bilərsiniz.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- haqqında səhifəsi 2ci tab reklam-->
	<section id="aboutA">
		<div class="container bgCol">
			<div class="col-md-12 borderCol">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-offset-3 col-md-6">
							<h1>Saytda Reklam</h1>
						</div>
					</div>
					<div class="col-md-12 contentTab">
						<p><span class="green">BOSS.AZ - Azərbaycanın ən məşhur və stabil artan internet resurslarından biridir. Hər gün bu saytı minlərlə insan ziyarət edir.</span></p>
						<p><span class="red">BOSS.AZ saytında reklam sizin brendləriniz, məhsullarınız, xidmətləriniz, aksiyalarınız və əhəmiyyətli hadisələriniz barədə məlumatı çox geniş auditoriyaya çatdırmaq üçün ən gözəl üsüllarından biridir!</span></p>
						<p><span class="green">
							BOSS.AZ saytında reklam sizin brendləriniz, məhsullarınız, xidmətləriniz, aksiyalarınız və əhəmiyyətli hadisələriniz barədə məlumatı çox geniş auditoriyaya çatdırmaq üçün ən gözəl üsüllarından biridir!
						</span></p>
						<p><span class="green">Sizinlə əməkdaşlığa şad olardıq!</span></p>
						<p><span class="green">GAP</span> <span class="red">MEDIA</span> <span class="green">— Sizin</span> <span class="red">media reklam agentliyiniz</span></p>
						<p>
						<span class="red">+99412 594 12 34</span><br>
						<span class="red">99477 271 44 00</span><br>
						<a href="mailto:info@gapmedia.az" class="green">info@gapmedia.az</a><br>
						<a href="http://www.gapmedia.az" class="green">www.gapmedia.az</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop