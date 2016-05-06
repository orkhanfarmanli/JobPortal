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

@section('form')
	<!-- Add Vacancies and Add CV -->
	<section id="addVac">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-7">
							<h1>İŞ ELANI YERLƏŞDİRİN</h1>
						</div>
						<div class="col-md-5">
							<button><a href="/resumes/new">CV yerləşdirin</a></button>
						</div>
					</div>
					<div class="vacForm">
						<div class="row">
							<div class="col-md-12 box-sh">
								<div class="row">
									<div class="col-md-8">
										<h4 class="card-title">Əlaqə</h4>
										<fieldset class="form-group">
										    {!! Form::open(array('url' => 'vacancies')) !!}
											{!!Form::label('vac_email', 'E-mail');!!}	
											{!! Form::email('vac_email',null, array_merge(['class' => 'form-control'])) !!}	    
										</fieldset>
									</div>
									<div class="col-md-4"></div>
								</div>
								<div class="row phoneForm">
									<div class="col-md-8">
										<fieldset id="addInput" class="form-group">   
											{!!Form::label('vac_phone', 'Telefonlar')!!}
											{!! Form::text('vac_phone',null, array_merge(['class' => 'phoneNum form-control','placeholder'=>'Məsələn: (011) 222-33-44'])) !!}	
											{!! Form::text('vac_phone1',null, array_merge(['class' => 'form-control'])) !!}
											{!! Form::text('vac_phone2',null, array_merge(['class' => 'form-control'])) !!}
										</fieldset>
										<a>Nömrə əlavə etmək</a>
									</div>
									<div class="col-md-4">
										<div class="row">
												Daxili nomrəni (əgər varsa) vergüldən sonra daxil edin. Bir nömrə kifayətdir.
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Disabled btn -->

						<div class="rowBtn" id="disabledBtn">
							<div class="col-md-12">
								<button id="davam" class="btn box-sh"><i class="fa fa-chevron-down" ></i> Davam etmək</button>
							</div>
						</div>
						<!-- Disabled btn -->
						<div class="row" id="disabledDiv">
							<div class="col-md-12 box-sh">
								<div class="row">
									<div class="col-md-12">
										<h4 class="card-title">ELAN</h4>
										<fieldset class="form-group">
											<label for="vac_category_id">Kategoriyalar</label>
											<select class="grouped_collection optional form-control" id="vac_category_id" name="vac_category_id">
												<option value=""></option>

												@foreach($categories as $category)

													<optgroup label="{{$category->cat_name}}">
														@foreach($category->subcategories as $subcategory)
															<option value="{{$subcategory->id}}"> {{$subcategory->subcat_name}}</option>
														@endforeach
													</optgroup>
												@endforeach

											</select>
										</fieldset>
										<fieldset class="form-group">
											{!!Form::label('vac_position', 'Vəzifə')!!}
											{!! Form::text('vac_position',null, array_merge(['class' => ' form-control'])) !!}
										 </fieldset>
										<fieldset class="form-group">
											<label for="vac_city_id">Şəhər</label>
											<select class="select optional form-control" id="vac_city_id" name="vac_city_id">
												<option value=""></option>
												@foreach($city as $cities)
													<option value="{{$cities->id}}">
														{{$cities->city_name}}
													</option>
												@endforeach
											</select>
										</fieldset>
										<fieldset class="form-group">
											<div class="row maasForm">
												<div class="col-md-3">
													<label for="vac_min_salary">Maaş *</label>
												</div>
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="vac_min_salary" class="control-label">minimum </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control" id="vac_min_salary" name="vac_min_salary">
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
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="vac_mak_salary" class="control-label">maks. </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control salary_to" id="vac_max_salary" name="vac_max_salary">    <option value=""></option>
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
												<div class="col-md-1">
													<label for="vac_max_salary" class="control-label">AZN </label>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											<div class="row yasForm">
												<div class="col-md-3">
													<label for="vac_min_age">Yaş *</label>
												</div>
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="vac_min_age" class="control-label">minimum </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control" id="vac_min_age" name="vac_min_age">
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
														</select>
														</div>
													</div>
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="vac_max_age" class="control-label">maks. </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control salary_to" id="vac_max_age" name="vac_max_age">    <option value=""></option>
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
														</select>
													</div>
												</div>
												<div class="col-md-1">
													<label for="vac_max_age" class="control-label">il </label>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											<div class="row eduForm">
												<div class="col-md-7">
													<label for="vac_education_id">Təhsil</label>
													<select class="select optional form-control" id="vac_education_id" name="vac_education_id">
														<option value=""></option>
														@foreach($education as $edu)
															<option value="{{$edu->id}}">
																{{$edu->edu_name}}
															</option>
														@endforeach
													</select>
												</div>
												<div class="col-md-5">
													<label for="vac_experience_id">İş təcrübəsi</label>
													<select class="select optional form-control" id="ad_experience_id" name="vac_experience_id">
														<option value=""></option>
														@foreach($experience as $exp)
															<option value="{{$exp->id}}">
																{{$exp->exp_name}}
															</option>
														@endforeach
													</select>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											{!!Form::label('vac_requirements', 'Namizədə tələblər')!!}
											{!! Form::textarea('vac_requirements',null, array_merge(['class' => ' form-control'])) !!}								
										</fieldset>
										<fieldset class="form-group">
											{!!Form::label('vac_job_description', 'İş barədə məlumat')!!}
											{!! Form::textarea('vac_job_description',null, array_merge(['class' => ' form-control'])) !!}							
										</fieldset>
										<fieldset class="form-group">
											{!!Form::label('vac_company_name', 'Şirkətin adı')!!}
											{!! Form::text('vac_company_name',null, array_merge(['class' => ' form-control'])) !!}
										</fieldset>
										<fieldset class="form-group">
											{!!Form::label('vac_contact', 'Əlaqədar şəxs')!!}
											{!! Form::text('vac_contact',null, array_merge(['class' => ' form-control'])) !!}
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="addBtn" id="addBtn">
							<div class="col-md-12">
								<button type="submit" class="btn box-sh" name="submit">Yerləşdirin</button>
							{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 rules">
					<div class="row headerRow">
						<div class="col-md-12">
							<h1>QAYDALAR</h1>
						</div>
					</div>
					<div class="row rulesRow">
						<div class="col-md-12">
							<ol start="1">
								<li>30 gün ərzində bir iş elanının yerləşdirilməsi ödənişsizdir.</li>
								<li>İş elanları yalnız Azərbaycan ərazisindəki elanlarla bağlı olmalıdır.</li>
								<li>Elanınız qısa müddətdə sayta dərc edilməsi üçün, təlimatları diqqətli şəkildə yerinə yetirin. Düzgün doldurulmayan elanlar redaktə olunacaq və dərhal saytda dərc olunmayacaq.</li>
								<li>BÖYÜK HƏRFLƏRLƏ yazmaq qadağandır, həmçinin транслитля.</li>
								<li>Təşkilatın rəsmi, Hüquq adı göstərilməlidir, əgər təşkilat holdinqin tərkibindədirsə onda holdinqin adını və fəaliyyət sahəsini qeyd edin.</li>
								<li>Əlaqə bölməsində şirkətin aktiv şəhər telefon nömrəsi və şirkətin korporativ e-mail ünvanı göstərilməlidir.</li>
								<li>“Əmək haqqı” bölməsinin AZN ilə doldurulması tələb olunur. 500AZN-dən aşağı olan əmək haqqında fərq 200AZN-dən artıq olmamalıdır, 1000AZN qədər əmək haqqında 300AZN, 2000AZN qədər olan əmək haqqında isə fərq 500AZN-dən artıq olmamalıdır.</li>
								<li>“Namizəddən tələblər” bölməsi mümkün qədər ətraflı yazılmalıdır.</li>
								<li>“Vəzifə barədə məlumat” bölməsində: iş qrafiki, vəzifə öhdəlikləri və iş şərtlərinin göstərilməsi məcburidir.</li>
								<li>Vəzifə seçilmiş kateqoriyaya uyğun olmalıdır. Əgər belə kateqoriya yoxdursa o zaman “Müxtəlif” kateqoriyasını seçin.</li>
								<li>Bu elanlar dərhal silinəcəkdir:
									<ul>
										<li>Elanın tərkibində nalayiq və təhqiredici sözlər və ifadələr olduqda;</li>
										<li>Elanın tərkibində şəbəkə marketinqi və ona oxşar fəaliyyət göstərən şirkətlərin, reklam kompaniyalarının qoşulma təklifləri, qeyri qanuni və şübhəli iş təklifləri.</li>
									</ul>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</section>
	<!-- Add Vacancies and Add CV End-->
	<script type="text/javascript">


	</script>
@stop