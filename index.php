<html>
<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!-- Twitter bootstrap v3.3.7 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Google Fonts "Open Sans + Nunito" -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900|Open+Sans:400,500,600,700|Syncopate" rel="stylesheet">
	<!-- FontAwesome Library for icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<!-- JQUERY v3.3.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<div class = "container-fluid" style = "padding: 0px 0px">
		<?php include 'popup.php';?>
		<span id = "top"></span>
		<div class = 'masthead' id = "regnav">
			<img class = 'logo' src = "logo.png">
			<ul class = 'navigate'>
				<li><a href = "#contact-panel">Where</a></li>
				<li><a href = "#when-panel">When</a></li>
				<li><a href = "#why-panel">Why</a></li>
				<li><a href = "#who-panel">Who</a></li>
				<li><a href = "#what-panel">What</a></li>
				<li><a href = "#juru-panel">
					<span class = 'nav-juru'>JURU</span>
				</a></li>
			</ul>
		</div>
		<div class = 'masthead nfixed' id = "fixnav">
			<img class = 'logo' src = "logo.png">
			<ul class = 'navigate'>
				<li><a href = "#contact-panel">Where</a></li>
				<li><a href = "#when-panel">When</a></li>
				<li><a href = "#why-panel">Why</a></li>
				<li><a href = "#who-panel">Who</a></li>
				<li><a href = "#what-panel">What</a></li>
				<li><a href = "#juru-panel"><span class = 'nav-juru'>JURU</span></a></li>
			</ul>
		</div>
		<div class = 'mobnav' id = "mobnav">
			<img class = 'logo' src = "logo.png">
			<i class="fas fa-bars mobmenu"></i>
			<i class="far fa-times-circle mobmenu"></i>
		</div>
		<div class = 'moblist'>
			<ul>
				<a href = "#juru-panel" class = "moblink"><li>
					<span style = 'color: #525252'> The</span><span style = 'color: #89000d; font-weight: 600'> JURU</span>
				</li></a>
				<a href = "#what-panel" class = "moblink"><li><span class = "ylw-wrd">What</span> We Do</li></a>
				<a href = "#who-panel" class = "moblink"><li><span class = "ylw-wrd">Who</span> Are We</li></a>
				<a href = "#why-panel" class = "moblink"><li><span class = "ylw-wrd">Why</span> Choose Us</li></a>
				<a href = "#when-panel" class = "moblink"><li><span class = "ylw-wrd">When</span> To Act</li></a>
				<a href = "#contact-panel" class = "moblink"><li><span class = "ylw-wrd">Where</span> To Reach Us</li></a>
			</ul>
		</div>
		<a href="#top">
			<div class = "top-btn">
				<i class="fas fa-arrow-up"></i>
			</div>
		</a>
		<div class="panel1-header">
			<div class = 'panel1-cap'>
				<span id="p1head">LESS IS MORE</span>
				<span id="p1sub">No pain, All gain?<br>With LIM, transformation to the digital era is easier than you think!</span>
			</div>
		</div>
		<div class = 'row juru-panel' id = "juru-panel">
			<div class = "juru-panel-cont row">
				<div class = "panela-heading" style = 'font-size: 38px'>
					<span style = 'color: #525252'>The</span>
					<span class = 'spl-header' style = 'color: #89000d'><b>JURU</b></span>
				</div>
				<div class = "hrline"></div>
				<div class = 'col-md-1'></div>
				<div class = 'col-md-3 juru-panel-logo'>
					<img src = 'juru_logo.png'>
				</div>
				<div class = 'col-md-7 juru-panel-text'>
					<div class = 'row' style = 'margin-bottom: 10px'>
						<span class = 'juru-panel-title'>JURU</span>
						<span class = 'juru-panel-mini-title'>
							is a legal-tech and insurtech innovation that is first of its kind in Hong Kong.
						</span>
					</div>
					 JURU is a smart tool for assessing and handling Employees Compensation claims, Fatal claims, and Common Law Personal Injuries. Running on latest technologies like AI and NLP, it identifies relevant court precedents and calculates compensation estimates with efficiency and accuracy. It saves insurers valuable time and money.
					<div class = 'juru-panel-desc-link'>
						<a href = 'juru.php' target = '_blank'>Learn More on JURU's Website <i class="fas fa-arrow-right"></i></a>
					</div>
					<div class = 'trial-btn toggle-popup popup-form-toggle'> Get your FREE TRIAL </div>
					<a href="https://thejuru.com" target = '_blank'>
						<div class = 'trial-btn sign-btn'> Sign in to The JURU</div>
					</a>
				</div>
			</div>
		</div>
		<div class = 'row what-panel' id = "what-panel">
			<div class = "panela-heading"><span class = 'spl-header'><b>What</b></span> We Do</div>
			<div class = "hrline"></div>
			<div class = "row">
				<div class = "what-step col-md-4">
					<img src = "tech.jpg">
					<div class = 'panela-sub'>At LIM, we both <b>use</b> and <b>make</b></div>
				</div>
				<div class = "what-step col-md-4">
					<div class = "row">
						<img src = "dino.jpg">
					</div>
					<div class = 'panela-sub'>
						We <b>use</b> existing proven information technologies to transform insurance companies from its current dinosaur era to the world of modern technology.
					</div>
				</div>
				<div class = "what-step col-md-4">
					<img src = "profit.jpg">
					<div class = 'panela-sub'>
						Yet, LIM’s ambition does not rest here. Our team also <b>creates and develops</b> our own innovative IT products aiming at reducing operational costs and enhancing customer satisfaction and overall business efficacy of an insurance company.
					</div>
				</div>
			</div>
		</div>
		<div class = "who-panel" id = "who-panel">
			<div class = 'row'>
				<span class = "panelb-heading"> <span class = 'spl-header'><b>Who</b></span> Are We</span>
				<div class = "hrline" style="border-bottom: 1px solid #ad7800"></div>
				<div class = "panelb-sub">
					LIM is an innovation and technology one-stop shop for the insurance industry.
					<div style = "padding-top: 6px; padding-bottom:9px">
						<span>&#8270;</span><span>&#8270;</span><span>&#8270;</span>
					</div>
					Behind LIM is a powerful team of experts from crossed disciplines (legal, insurance, technology).
					<div style = "padding-top: 6px; padding-bottom:8px">
						<span>&#8270;</span><span>&#8270;</span><span>&#8270;</span>
					</div>
					We have not only exceptional capabilities, but also unbeatable passion and belief in using modern technology to improve quality of life; making the world better and smarter for everyone.
				</div>
			</div>
		</div>
		<div class = "why-panel" id = "why-panel">
			<span class = "panela-heading"><span class = 'spl-header'><b>Why</b></span> Choose Us</span>
			<div class = "hrline"></div>
			<div class = 'row'>
				<div class = "why-feat col-md-4">
					<img src = "why1.png">
					<div class = "title">We know what you need</div>
					<div class = "panela-sub" style = "margin-top: 10px">
						Regardless of your size, LIM will bring quality products and services with best value for money.
					</div>
				</div>
				<div class = "why-feat col-md-4">
					<img src = "why2.jpeg">
					<div class = "title">Small to medium size insurers</div>
					<div class = "panela-sub" style = "margin-top: 10px">
						Worried about the cost? We offer affordable rates because we have vast experience on building up specialized IT solutions for other insurers of your size! Transformation is easier than you expect with the right expert!
					</div>
				</div>
				<div class = "why-feat col-md-4">
					<img src = "why3.png">
					<div class = "title">Sizeable insurers</div>
					<div class = "panela-sub" style = "margin-top: 10px">
						Still not happy even after years of development? LIM possesses knowledge and experience in both Insurance and technology. Hence, we know exactly what an insurer needs and how and what technology serves it best. 
					</div>
				</div>
			</div>
		</div>
		<div class = "when-panel" id = "when-panel">
			<div class = 'row'>
				<span class = "panelb-heading"><span class = 'spl-header'><b>When</b></span> To Act</span>
				<div class = "hrline" style="border-bottom: 1px solid #ad7800"></div>
				<div class = "panelb-sub" style = "margin-bottom:20px;">
					<div class = "blinking" style = "margin-bottom:20px; font-size: 30px; font-family: 'Lobster'">NOW!</div><br> The insurance industry is undergoing a revolution.
					<div style = "padding-top: 6px; padding-bottom:9px">
						<span>&#8270;</span><span>&#8270;</span><span>&#8270;</span>
					</div>
					 Modern technology is already disrupting the traditional market in diverse ways, making substantial impact on business costs and revenue. Today's customers are more discerning and informed, seeking to pay less and get more.
					<div style = "padding-top: 6px; padding-bottom:9px">
						<span>&#8270;</span><span>&#8270;</span><span>&#8270;</span>
					</div>
					Join us now as pioneers in this transformation and get an edge over your competitors. 
				</div>
			</div>
		</div>
		<div class = 'contact-panel' id = "contact-panel">
			<span class = "panela-heading"><span class = 'spl-header'><b>Where</b></span> To Reach Us</span>
			<div class = "hrline"></div>
			<div class = "when-det">
				<div style = "font-size: 17px; margin-bottom: 20px">
					Call or email NOW to learn how we can help you to transform and excel in this evolution of the insurance industry.
				</div>
				<div class = "spl-font row">
					<div class = "col-sm-1 clabel">Address:</div>
					<div class = "col-sm-11 cdeet">Rm 1608, China Insurance Group Building, 141 Des Vouex Road Central, Hong Kong</div><br><br>
				</div>
				<div class = "spl-font row">
					<span class = "col-sm-1 clabel">Email:</span>
					<span class = "col-sm-11 cdeet">
						<a href="mailto:info@lessismore.best" style = "color: blue">info@lessismore.best</a>
					</span><br><br>
				</div>
				<div class = "spl-font row">
					<span class = "col-sm-1 clabel">Tel:</span>
					<span class = "col-sm-11 cdeet spl-pad">+852 2868-3631</span>
				</div>
			</div>
			<div class = "copyright">
				<i class="far fa-copyright"></i> Copyrighted Work 2019
			</div>
		</div>
	</div>
</body>
</html>
