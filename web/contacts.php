<?php
	include 'base.php';
?>
<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="custom.css" media="screen">
	
<script>
	jsHover = function() {
	var hEls = document.getElementById("menu").getElementsByTagName("li");
	for (var i=0, len=hEls.length; i<len; i++) {
	hEls[i].onmouseover=function() { this.className+=" jshover"; }
	hEls[i].onmouseout=function() { this.className=this.className.replace(" jshover", ""); }
	}
	}
	if (window.attachEvent && navigator.userAgent.indexOf("Opera")==-1) window.attachEvent("onload", jsHover);
</script>

	
</head>

<body>
	<div class="col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10" style="margin-top: 50px">
		<div class="col-sm-6">
			<div class="panel panel-default" style="max-height: 640px; min-height: 640px;">
				<div class="panel-body text-center">
					<h2>Наши контакты</h2>
					<hr size="0.01" width="100%">
					
					<div class="row">
						<div class="col-sm-1 col-md-2 col-lg-1"><img class="contact-icon" src="images/logo.jpg" alt="I"></img>
						</div>
						<div class="col-sm-11 col-md-10 col-lg-11">
							<strong>ООО "ПРОКС"</strong><br><span>656043, Алтайский край, г. Барнаул, ул. Пролетарская, 90<br />
							тел. (3852) 22-94-44, 22-90-31, 35-44-61, 63-59-21</span>
						</div>
					</div>
					<hr size="0.01" width="100%">
					<div class="row">
						<div class="col-sm-1 col-md-2 col-lg-1"><img class="contact-icon" src="images/999.jpg" alt="I"></img>
						</div>
						<div class="col-sm-11 col-md-10 col-lg-11">
							<strong>Отдел 1С</strong><br><span><a href="mailto:1c@prox-it.ru"> 1c@prox-it.ru</a><br>
					Общий добавочный номер отдела: 604</span>
						</div>
					</div>
					<hr size="0.01" width="100%">
					<div class="row">
						<div class="col-sm-1 col-md-2 col-lg-1"><img class="contact-icon" src="images/rutoken.jpg"  alt="I"></img>
						</div>
						<div class="col-sm-11 col-md-10 col-lg-11">
							<strong>Отдел Информационной безопасности</strong><br><span><a href="mailto:oib@prox-it.ru"> oib@prox-it.ru</a><br>
					Общий добавочный номер отдела: 605</span>
						</div>
					</div>
					<hr size="0.01" width="100%">
					
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default" style="max-height: 640px; min-height: 640px;">
				<div class="panel-body text-center">
					<h2>Как нас найти?</h2>
					<hr size="0.01" width="100%">
					<h4>Наш адрес</h4>
					<div>
					656043, г. Барнаул, ул. Пролетарская, д.90<br />
					+7 (3852) 229-444<br />
					</div>
					<hr size="0.01" width="100%">
					<?php
						include '2gis.php';
					?>
				</div>
			</div>
		</div>
	</div>
	
	<!--
	<div class="col-md-12 footer">
		<div class="foot">
			© ООО «ПРОКС»<br>
			656043, г. Барнаул, ул. Пролетарская, д.90
			<br><br>
			+7 (3852) 229-444. 
		</div>
	</div>-->


</body>
</html>