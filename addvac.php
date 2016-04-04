<!-- Header -->
	<?php  include "header.php"; ?>

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
							<button><a href="addcv.php">CV yerləşdirin</a></button>
						</div>
					</div>
					<div class="vacForm">
						<div class="row">
							<div class="col-md-12 box-sh">
								<div class="row">
									<div class="col-md-8">
										<h4 class="card-title">Əlaqə</h4>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">E-mail</label>
										    <input type="email" class="form-control" id="exampleInputEmail1">
										</fieldset>
									</div>
									<div class="col-md-4"></div>
								</div>
								<div class="row phoneForm">
									<div class="col-md-8">
										<fieldset class="form-group addInput">
										    <label for="exampleInputEmail1">Telefonlar</label>
										    <input type="text" class="phoneNum form-control" id="formGroupExampleInput" placeholder="Məsələn: (011) 222-33-44">
										    <input type="text" class="form-control" id="formGroupExampleInput">
										    <input type="text" class="form-control" id="formGroupExampleInput">
										</fieldset>
										<a onclick="yarat()">Nömrə əlavə etmək</a>
									</div>
									<div class="col-md-4">
										<div class="row">
												Daxili nomrəni (əgər varsa) vergüldən sonra daxil edin. Bir nömrə kifayətdir.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="rowBtn">
							<div class="col-md-12">
								<button type="submit" class="btn box-sh"><i class="fa fa-chevron-down"></i> Davam etmək</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 box-sh">
								<div class="row">
									<div class="col-md-12">
										<h4 class="card-title">ELAN</h4>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">Kategoriyalar</label>
										    <select class="grouped_collection optional form-control" id="ad_category_id" name="ad[category_id]">
											    <option value=""></option>
												<optgroup label="Maliyyə">
													<option value="48">Kredit mütəxəssisi</option>
													<option value="49">Sığorta</option>
													<option value="51">Audit</option>
													<option value="52">Mühasibat</option>
													<option value="57">Maliyyə analiz</option>
													<option value="150">Bank xidməti</option>
													<option value="154">Kassir</option>
													<option value="155">İqtisadçı</option>
													<option value="129">Digər</option>
												</optgroup>
												<optgroup label="Marketinq"><option value="64">Marketinq menecment</option>
													<option value="61">İctimayətlə əlaqələr</option>
													<option value="62">Reklam</option>
													<option value="60">Kopiraytinq</option>
												</optgroup>
												<optgroup label="İnformasiya texnologiyaları">
													<option value="66">Sistem idarəetməsi</option>
													<option value="67">Məlumat bazasının idarə edilməsi və inkişafı</option>
													<option value="68">İT mütəxəssisi / məsləhətçi</option>
													<option value="69">Proqramlaşdırma</option>
													<option value="70">İT layihələrin idarə edilməsi</option>
													<option value="71">Texniki avadanlıq mütəxəssisi</option>
													<option value="72">Digər</option>
												</optgroup>
												<optgroup label="İnzibati">
													<option value="105">İnzibati dəstək</option>
													<option value="108">Menecment</option>
													<option value="110">Ofis menecmenti</option>
													<option value="112">Katibə / Resepşn</option>
													<option value="143">Heyətin idarəolunması</option>
													<option value="113">Digər</option>
												</optgroup>
												<optgroup label="Satış">
													<option value="83">Daşınmaz əmlak agenti / makler</option>
													<option value="86">Satış üzrə mütəxəssis</option></optgroup>
													<optgroup label="Dizayn"><option value="159">Veb-dizayn</option>
													<option value="97">Memar / İnteryer dizaynı</option>
													<option value="99">Geyim dizaynı</option>
													<option value="101">Rəssam</option>
													<option value="104">Digər</option>
												</optgroup>
												<optgroup label="Hüquqşünaslıq">
													<option value="73">Vəkil</option>
													<option value="74">Cinayət hüququ</option>
													<option value="79">Hüquqşünas</option>
													<option value="151">Digər</option>
												</optgroup>
												<optgroup label="Təhsil və elm">
													<option value="119">Məktəb tədrisi</option>
													<option value="120">Universitet tədrisi</option>
													<option value="121">Repetitor</option>
													<option value="122">Xüsusi təhsil/ Təlim</option>
													<option value="145">Digər</option>
												</optgroup>
												<optgroup label="Sənaye və kənd təsərrüfatı">
													<option value="91">Avtomatlaşdırılmış idarəetmə</option>
													<option value="92">Tikinti</option>
													<option value="95">Kənd təsərrüfatı</option>
													<option value="93">Mühəndis</option>
													<option value="94">Geologiya və ətraf mühit</option>
													<option value="96">Digər</option>
												</optgroup>
												<optgroup label="Xidmət">
													<option value="157">Xadimə</option>
													<option value="158">Anbardar</option>
													<option value="134">Restoran işi</option>
													<option value="135">Sürücü</option>
													<option value="136">Dayə</option>
													<option value="137">Fəhlə</option>
													<option value="142">Turizm və mehmanxana işi</option>
													<option value="144">Tərcüməçi</option>
													<option value="153">Mühafizə xidməti</option>
													<option value="149">Digər</option>
													<option value="193">SPA və gözəllik</option>
													<option value="156">Kuryer</option>
												</optgroup>
												<optgroup label="Tibb və əczaçılıq">
													<option value="139">Həkim</option>
													<option value="140">Tibbi personal</option>
													<option value="141">Tibb təmsilçisi</option>
												</optgroup>
												<optgroup label="Müxtəlif">
													<option value="148">Jurnalistika</option>
													<option value="160">Tələbələr üçün</option>
												</optgroup>
											</select>
										</fieldset>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">Vəzifə</label>
										    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
										</fieldset>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">Şəhər</label>
										    <select class="select optional form-control" id="ad_region_id" name="ad[region_id]">
										    	<option value=""></option>
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
										</fieldset>
										<fieldset class="form-group">
											<div class="row maasForm">
												<div class="col-md-3">
													<label for="exampleInputEmail1">Maaş *</label>
												</div>
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="exampleInputEmail1" class="control-label">minimum </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control" id="ad_salary_from" name="ad[salary_from]">
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
														<label for="exampleInputEmail1" class="control-label">maks. </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control salary_to" id="ad_salary_to" name="ad[salary_to]">    <option value=""></option>
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
													<label for="exampleInputEmail1" class="control-label">AZN </label>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											<div class="row yasForm">
												<div class="col-md-3">
													<label for="exampleInputEmail1">Yaş *</label>
												</div>
												<div class="col-md-4">
													<div class="col-md-6">
														<label for="exampleInputEmail1" class="control-label">minimum </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control" id="ad_salary_from" name="ad[salary_from]">
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
														<label for="exampleInputEmail1" class="control-label">maks. </label>
													</div>
													<div class="col-md-6">
														<select class="select optional form-control salary_to" id="ad_salary_to" name="ad[salary_to]">    <option value=""></option>
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
													<label for="exampleInputEmail1" class="control-label">il </label>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											<div class="row eduForm">
												<div class="col-md-7">
													<label for="exampleInputEmail1">Təhsil</label>
													<select class="select optional form-control" id="ad_education_id" name="ad[education_id]">
														<option value=""></option>
														<option value="1">Elmi dərəcə</option>
														<option value="2">Ali</option>
														<option value="3">Natamam ali</option>
														<option value="4">Orta texniki</option>
														<option value="5">Orta xüsusi</option>
														<option value="6">Orta</option>
														<option value="7">-</option>
													</select>
												</div>
												<div class="col-md-5">
													<label for="exampleInputEmail1">İş təcrübəsi</label>
													<select class="select optional form-control" id="ad_experience_id" name="ad[experience_id]">
														<option value=""></option>
														<option value="1">1 ildən aşağı</option>
														<option value="2">1 ildən 3 ilə qədər</option>
														<option value="3">3 ildən 5 ilə qədər</option>
														<option value="4">5 ildən artıq</option>
													</select>
												</div>
											</div>
										</fieldset>
										<fieldset class="form-group">
											<label for="exampleInputEmail1">Namizədə tələblər</label>
											<textarea class="form-control" id="ad_requirements" name="ad[requirements]" rows="7" cols="50"></textarea>
										</fieldset>
										<fieldset class="form-group">
											<label for="exampleInputEmail1">İş barədə məlumat</label>
											<textarea class="form-control" id="ad_requirements" name="ad[requirements]" rows="7" cols="50"></textarea>
										</fieldset>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">Şirkətin adı</label>
										    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
										</fieldset>
										<fieldset class="form-group">
										    <label for="exampleInputEmail1">Əlaqədar şəxs</label>
										    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
										</fieldset>
									</div>
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
<!-- Footer-->
	<?php  include "footer.php";?>