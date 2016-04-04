
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footNav">
						<ul class="footNavbar">
							<li class="footNavbarItem mobile"><a href="">Mobil Versiyası</a></li>
							<li class="footNavbarItem"><a href="">Haqqımızda</a></li>
							<li class="footNavbarItem"><a href="">Saytda reklam</a></li>
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
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<a class="title" href="">İş axtaranlar</a>
					<ul class="footCatList">
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
						<li class="cat"><a href="">Category Name</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer End -->

	<!-- Jquery -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
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
	// Tab menu (Vakansiyalar və CV-lər)
	var thisAttr; 

	$(document).ready(function() {

    $(".catNav div a").click(function(){
    	$(".active").removeClass("active");
    	$(this).addClass("active");
    	thisAttr = $(this).attr("href");
    	$(".show").removeClass("show");
    	$(thisAttr+"> .container").addClass("show");
    });
		
	});

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

	// seyfeleme pagination

	$(document).ready(function() {
		$(".pagination").bootstrapPaginator();
	});
	// seyfeleme pagination end


</script>