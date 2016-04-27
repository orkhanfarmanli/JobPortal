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

@section('form')
	<!-- Add Vacancies and Add CV -->
	<section id="addVac">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-8">
							<h1>İŞ ELANI YERLƏŞDİRİN</h1>
						</div>
						<div class="col-md-4">
							<button><a href="">İş elanı yerləşdirin</a></button>
						</div>
					</div>
					{!! Form::open(array('url'=>'resumes')) !!} <!-- FORM START -->
					<div class="vacForm"> 
						<div class="row">
							<div class="col-md-12 box-sh">
								<div class="row">
									<div class="col-md-4">
									<fieldset class="form-group">
										{!!Form::label('cv_name','Ad *')!!}
										{!!Form::text('cv_name',null, ['class'=> 'phoneNum form-control'])!!}
									</fieldset>
									</div>
									<div class="col-md-4">
									<fieldset class="form-group">
										{!!Form::label('cv_surname','Soyad *')!!}
										{!!Form::text('cv_surname',null, ['class'=> 'phoneNum form-control'])!!}
									</fieldset>
									</div>
									<div class="col-md-4">
									<fieldset class="form-group">
										{!!Form::label('cv_surname','Ata adı *')!!}
										{!!Form::text('cv_midname',null, ['class'=> 'phoneNum form-control'])!!}
									</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<fieldset class="form-group">
										{!!Form::label('cv_male','Cins *')!!}
										<!-- <select class="select required form-control" id="ad_male" name="ad[male]">
											<option value=""></option>
											<option value="true">Kişi</option>
											<option value="false">Qadın</option>
										</select> -->
										{!!Form::select('cv_male', array_merge(array('' => '', 'true'=> 'Kişi', 'false'=>'Qadın') ), null, array('class' => 'select required form-control')) !!}
									</fieldset>
									</div>
									<div class="col-md-6">
									<fieldset class="form-group">
										{!!Form::label('cv_male','Yaş *')!!}
										<!-- <select class="select optional form-control" id="ad_age" name="ad[age]">
											<option value=""></option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
											<option value="32">32</option>
											<option value="33">33</option>
											<option value="34">34</option>
											<option value="35">35</option>
											<option value="36">36</option>
											<option value="37">37</option>
											<option value="38">38</option>
											<option value="39">39</option>
											<option value="40">40</option>
											<option value="41">41</option>
											<option value="42">42</option>
											<option value="43">43</option>
											<option value="44">44</option>
											<option value="45">45</option>
											<option value="46">46</option>
											<option value="47">47</option>
											<option value="48">48</option>
											<option value="49">49</option>
											<option value="50">50</option>
											<option value="51">51</option>
											<option value="52">52</option>
											<option value="53">53</option>
											<option value="54">54</option>
											<option value="55">55</option>
											<option value="56">56</option>
											<option value="57">57</option>
											<option value="58">58</option>
											<option value="59">59</option>
											<option value="60">60</option>
											<option value="61">61</option>
											<option value="62">62</option>
											<option value="63">63</option>
											<option value="64">64</option>
											<option value="65">65</option>
										</select> -->
										{!!Form::select('cv_age', array_merge(array('' => '', '18'=> '18') ), null, array('class' => 'select required form-control')) !!}
									</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group addInput">
											{!!Form::label('cv_avatar','Şəkil')!!}
											{!!Form::file('cv_avatar',['class', 'form-control'])!!}
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group addInput">
											{!!Form::label('cv_education_id','Təhsil')!!}
											<select class='form-control' name="cv_education_id">
											<option value="0"></option>
											@foreach($education as $edu)
												<option value="{{$edu->id}}">{{$edu->edu_name}}</option>
											@endforeach
										</select>
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
											{!!Form::label('cv_edu_detail','Ətraflı')!!}
											<!-- <textarea class="form-control" id="ad_requirements" name="ad[requirements]" rows="10" cols="50"></textarea> -->
											{!!Form::textarea('cv_edu_detail',null,['class'=>'form-control'])!!}
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										{!!Form::label('cv_edu_detail','İş təcrübəsi')!!}
										<select class='form-control' name="cv_experience_id">
											<option value="0"></option>
											@foreach($experience as $exp)
												<option value="{{$exp->id}}">{{$exp->exp_name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
											{!!Form::label('cv_exp_detail','Ətraflı')!!}
											{!!Form::textarea('cv_exp_detail',null,['class'=>'form-control'])!!}
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
										{!!Form::label('cv_category_id','Kateqoriya')!!}
										<select name="cv_category_id" class="form-control">
											<option value="0">Bütün kateqoriyalar</option>
											@foreach($categories as $category)
												<optgroup label="{{$category->cat_name}}">
													@foreach($category->subcategories as $subcategory)
														<option value="{{$subcategory->id}}">{{$subcategory->subcat_name}}</option>
													@endforeach
												</optgroup>
											@endforeach
										</select>
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
										    {!!Form::label('cv_position_name','Vəzifə *')!!}
											{!!Form::text('cv_position_name',null, ['class'=> 'phoneNum form-control'])!!}
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="cv_min_salary">Minimum əmək haqqı (AZN)</label>
										{!!Form::label('cv_min_salary','Minimum əmək haqqı (AZN)')!!}
										<select class="select optional form-control" id="cv_min_salary" name="cv_min_salary">
											<option value=""></option>
											<option value="100">100</option>
											<option value="200">200</option>
											<option value="300">300</option>
											<option value="400">400</option>
											<option value="500">500</option>
											<option value="600">600</option>
											<option value="700">700</option>
											<option value="800">800</option>
											<option value="900">900</option>
											<option value="1000">1000</option>
											<option value="1100">1100</option>
											<option value="1200">1200</option>
											<option value="1300">1300</option>
											<option value="1400">1400</option>
											<option value="1500">1500</option>
											<option value="1600">1600</option>
											<option value="1700">1700</option>
											<option value="1800">1800</option>
											<option value="1900">1900</option>
											<option value="2000">2000</option>
											<option value="2100">2100</option>
											<option value="2200">2200</option>
											<option value="2300">2300</option>
											<option value="2400">2400</option>
											<option value="2500">2500</option>
											<option value="2600">2600</option>
											<option value="2700">2700</option>
											<option value="2800">2800</option>
											<option value="2900">2900</option>
											<option value="3000">3000</option>
											<option value="3100">3100</option>
											<option value="3200">3200</option>
											<option value="3300">3300</option>
											<option value="3400">3400</option>
											<option value="3500">3500</option>
											<option value="3600">3600</option>
											<option value="3700">3700</option>
											<option value="3800">3800</option>
											<option value="3900">3900</option>
											<option value="4000">4000</option>
											<option value="5000">5000</option>
											<option value="6000">6000</option>
											<option value="7000">7000</option>
											<option value="8000">8000</option>
											<option value="9000">9000</option>
											<option value="10000">10000</option>
											<option value="11000">11000</option>
											<option value="12000">12000</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
											<label for="exampleInputEmail1">Bacarıqlar</label>
											<textarea class="form-control" id="ad_requirements" name="ad[requirements]" rows="7" cols="50"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
											<label for="exampleInputEmail1">Əlavə məlumat</label>
											<textarea class="form-control" id="ad_requirements" name="ad[requirements]" rows="7" cols="50"></textarea>
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">E-mail</label>
										    <input type="email" class="form-control" id="exampleInputEmail1">
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<fieldset class="form-group addInput">
										    <label for="exampleInputEmail1">Telefonlar</label>
										    <input type="text" class="phoneNum form-control" id="formGroupExampleInput" placeholder="Məsələn: (011) 222-33-44">
										</fieldset>
										<fieldset class="form-group addInput">
										    <input type="text" class="phoneNum form-control" id="formGroupExampleInput">
										</fieldset>
										<fieldset class="form-group addInput">
										    <input type="text" class="phoneNum form-control" id="formGroupExampleInput">
										</fieldset>
										<span>Bir nömrə kifayətdir.</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12"></div>
								</div>
							</div>
						</div>
						<div class="addBtn">
							<div class="col-md-12">
								<button type="submit" class="btn box-sh">Yerləşdirin</button>
							</div>
						</div>
					</div>
				</div>
				{!! Form::close() !!} <!-- FORM END -->
				<div class="col-md-5 rules">
					<div class="row headerRow">
						<div class="col-md-12">
							<h1>QAYDALAR</h1>
						</div>
					</div>
					<div class="row rulesRow">
						<div class="col-md-12">
							<ol start="1">
								<li>Bütün CV-lərin yerləşdirilməsi ödənişsizdir. Hər bir şəxs 30 gün ərzində yalnız 1 CV yerləşdirə bilər.</li>
								<li>CV-nizin qısa müddətdə sayta dərc edilməsi üçün, təlimatları diqqətli şəkildə yerinə yetirin. Düzgün doldurulmayan elanlar redaktə olunacaq və dərhal saytda dərc olunmayacaq.</li>
								<li>BÖYÜK HƏRFLƏRLƏ yazmaq qadağandır, həmçinin транслитля. Elanın mətni tam olaraq bir dildə yazılmalıdır.</li>
								<li>Tərkibində aşağıdakı məzmunları daşıyan CV-lərin yerləşdirilməsi qadağandır
									<ul>
										<li>Şəxsin özü haqda yalan məlumat yerləşdirməsi</li>
										<li>CV-nin tərkibində nalayiq və təhqiredici sözlər və ifadələrin istifadəsi</li>
										<li>Reklam</li>
									</ul>
								</li>
								<li>Əgər CV-də şəkil varsa onda aşağıdakı tələblərə cavab verməlidir
									<ul>
										<li>Yalnız bir şəxsin şəkli çəkilməlidir;</li>
										<li>Namizədin sifəti aydın görsənməlidir;</li>
									</ul>
								</li>
								<li>CV yerləşdirərkən “Vəzifə” bölməsində müvafiq kateqoriyaya uyğun bir vəzifə göstərilməlidir.</li>
								<li>“Təhsil” bölməsində təhsil müəssisəsinin, ixtisasın adı həmçinin təhsil aldığı müddət göstərilməlidir.</li>
								<li>“İş təcrübəsi” bölməsində işlədiyi yer, tutduğu vəzifə, və işləmə müddəti göstərilməlidir.</li>
								<li>“Bacarıqlar” bölməsində peşə, dil, kompyuter və başqa bacarıqlar göstərilməsi məsləhət görülür.</li>
								<li>“Özün barədə” bölməsində şəxsi keyfiyyətlər, hobbilər, maraqlar və başqa xüsusiyyətlər qeyd oluna bilər.</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add Vacancies and Add CV End-->
@stop