<?php
	include 'base.php';
?>

<html>
<head>
<title>ООО «ПРОКС»</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="style.css" media="screen">
	
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
		<div class="col-sm-6 col-md-6 col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body text-center">
					<h2>ООО "ПРОКС"</h2>
					<hr size="0.01" width="100%">
					<!-- текст надо отформатировать -->
					<p4>Купить 1С программы Вы можете в компании ПРОКС. Почему вам стоит обратиться именно в ПРОКС и купить 1С у нас:
					

				С помощью программ 1С мы автоматизируем учет и управление на вашем предприятии. После внедрения программного обеспечения 1С вы добьетесь следующих целей:

				- сократите издержки на ведение рутинных операций по учету;

				- сможете более оптимально задействовать трудовые и материальные ресурсы;

				- сформируете четкий регламент ведения бизнес-процессов, задействованных в вашей организации, и отладите их выполнение каждым сотрудником;

				- руководство компании сможет более оперативно и взвешенно принимать тактические и стратегические решения для развития бизнеса на основе автоматизированного управленческого учета;

				- вы будет владеть аналитическими и синтетическими данными по организации в целом, с возможностью мгновенной детализации до отдельной хозяйственной операции..<br><br>
							Наша компания ведет работу с на рынке с 1999 года.<br><br><br>
							«1С:Сопровождение» - это:<br><br>
							<z>★</z>&nbsp;&nbsp; Наш сервис. При покупке ПРОФ версии компания ПРОКС предоставляет бесплатное 1С сопровождение программы в течение 3 месяцев.При покупке базовой версии 1С специалист компании ПРОКС производит установку и первоначальные настройки программы(по желанию). ;<br><br>
							<z>★</z>&nbsp;&nbsp; Наш опыт – мы работаем на рынке ПО 1С с момента основания нашей компании, т.е. с 1999 года. На протяжении 13 лет, наша компания успешно зарекомендовала себя в сфере продаж 1С программ, кроме этого мы осуществляем широкий спектр 1С услуг, включая 1С внедрение и 1С сопровождение.
				;<br><br>
							<z>★</z>&nbsp;&nbsp; Наша квалификация – специалисты компании ПРОКС имеют сертификаты 1С:Профессионал и 1С:Специалист, что подтверждает высокий уровень знаний и умение конфигурировать, внедрять программы 1С.;<br><br>
							<z>★</z>&nbsp;&nbsp;     Надежность и признание фирмой 1С наших заслуг. Посмотрите рейтинг компании ПРОКС на сайте 1С. Мы лидеры по продаже, внедрению и сопровождению 1С программ в Алтайском крае.
				;<br><br><br>
							
							Сотрудники отдела 1C ориентированы не только на помощь в решении текущих потребностей клиентов, но и смотрят на перспективу, что позволяет клиентам снизить риск принятия ошибочных решений и повысить шансы на успех 
							в дискуссиях с контролирующими органами.<br><br>

							Уровень профессионализма сотрудников компании «1С:Сопровождение. ПРОКС», работающих в отделе 1С, 
							подтвержден квалификационными аттестатами 1С, сертификатами фирмы «1С».<br><br>

							Нашей компании вы можете доверить ведение бухгалтерского, налогового, кадрового учета и быть уверенными, 
							что он будет вестись в полном соответствии с требованиями законодательства и высокими стандартами качества «1С».<br><br>
						</p4>
					
				</div>
			</div>
		</div>
		
		<?php
			include 'contacts-small-panel.php';
		
		?>
	</div>
	<!--
	<div class="footer">
		<div class="foot">
			© ООО «ПРОКС»<br>
			656043, г. Барнаул, ул. Пролетарская, д.90
			<br><br>
			+7 (3852) 229-444. 
		</div>
	</div>-->


</body>
</html>