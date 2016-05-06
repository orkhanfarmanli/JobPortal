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
                <a href="categories/resumes">İş axtaranlar</a>
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
        <!-- haqqında səhifəsi tab nav-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul id="aboutNav">
                    <li><a href="/pages/about">Haqqımızda</a></li>
                    <li class="tabReklam"><a class="tactive" a href="/pages/advertising">Saytda reklam</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- haqqında səhifəsi 1ci tab-->
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