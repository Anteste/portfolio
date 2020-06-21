<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="theme-color" content="#6B65E7" />
		<meta name="apple-mobile-web-app-status-bar" content="#6B65E7" />
		<meta
			name="keywords"
			content="frontend, programmer, coder, web developer, front-end developer, zalewski, bart zalewski, developer, web, javascript, html, css, Anteste, Iliass Alami, back-end developper"
		/>
		<meta name="description" content="Anteste - Full-Stack Developer" />
		<meta name="author" content="Anteste" />
		<link rel="apple-touch-icon" href="img/avatar.png" />
		<link rel="canonical" href="" />
		<link rel="manifest" href="manifest.json" />
		<link rel="stylesheet" href="css/style.css" />
		<link href="img/avatar.png" rel="shortcut icon" type="image/svg" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<title>Anteste | Full-stack Developer</title>
	</head>
	<body>
		<div id="sidenav" class="sidenav">
			<a href="#section-home" class="navbar__home active">Home</a>
			<a href="#section-about" class="navbar__about">About</a>
			<a href="#section-projects" class="navbar__projects">Projects</a>
			<a href="#section-contact" class="navbar__contact">Contact</a>
		</div>

		<nav class="navbar">
			<div class="navbar__container">
				<a href="#">
					 <img
						loading="lazy"
						src="img/nav3.jpg"
						alt="logo"
				/></a>
				<div class="hamburger">
					<div class="hamburger__wrapper icon">
						<span class="hamburger--line top"></span>
						<span class="hamburger--line middle"></span>
						<span class="hamburger--line bottom"></span>
					</div>
				</div>
				<ul class="navbar__nav">
					<a href="#"
						><li class="navbar__link navbar__home active">
							Home
						</li></a
					>
					<a href="#section-about"
						><li class="navbar__link navbar__about">
							About
						</li></a
					>
					<a href="#section-projects"
						><li class="navbar__link navbar__projects">
							Projects
						</li></a
					>
					<a href="#section-contact"
						><li class="navbar__link navbar__contact">
							Contact
						</li></a
					>
				</ul>
			</div>
		</nav>

		<div class="hero" id="section-home">
			<div class="hero__content">
				<div class="centered">
					<img
						loading="lazy"
						data-aos="fade-up"
						data-aos-once="true"
						class="hero__avatar primary"
						src="img/avatar.png"
						alt="avatar"
					/>
					<img
						loading="lazy"
						data-aos="fade-up"
						data-aos-once="true"
						class="hero__avatar secondary"
						src="img/avatar-1.png"
						alt="avatar"
					/>
				</div>
				<p
					data-aos="fade-up"
					data-aos-once="true"
					data-aos-delay="100"
					class="hero__typo"
				>
					Hello, I'm Anteste.
				</p>
				<p
					data-aos="fade-up"
					data-aos-once="true"
					data-aos-delay="200"
					class="hero__sub"
				>
					I'm a creative full-stack developer.
				</p>
			</div>
		</div>

		<div class="about" id="section-about">
			<div class="about__content">
				<h1 data-aos="fade-up" data-aos-once="true">About me</h1>
			</div>
		</div>

		<div class="about__container">
			<div
				data-aos="fade-up"
				data-aos-once="true"
				data-aos-delay="100"
				class="about__box"
			>
				<div class="about__wrapper">
					<div
						class="about__basic"
						data-aos="fade-up"
						data-aos-once="true"
						data-aos-delay="100"
					>
						<div class="contain">
							<h2>Basic info.</h2>
							<p>
								I started coding in the December 2017 and I am self-taught developer. I have serious passion for modern looking websites with a little bit of animations and also for back-end developpement. I love what I am doing and I am highly motivated to collaborate with someone. If you are up into some projects, <a href="#section-contact">just let me know!</a>
							</p>
						</div>
						<img
							loading="lazy"
							class="basic-icon"
							src="img/basic.svg"
							alt="basic info icon"
						/>
					</div>
					<div
						class="about__face"
						data-aos="zoom-in"
						data-aos-once="true"
						data-aos-delay="200"
					>
						 <img
							loading="lazy"
							class="face"
							src="img/avatar.png"
							alt="Avatar"
						/> 
						<img
							loading="lazy"
							class="line"
							src="img/separator.svg"
							alt="separator icon"
						/>
					</div>
					<div
						class="about__tools"
						data-aos="fade-up"
						data-aos-once="true"
						data-aos-delay="200"
					>
						<div class="container">
							<div class="tools__p">
								<img
									loading="lazy"
									class="tools-icon"
									src="img/tools.svg"
									alt="tools icon"
								/>
								<p>
									PhpStorm, Adobe Photoshop, Git
									Html/Css, JS, PHP, Symfony, Wordpress.
								</p>
							</div>
							<div class="tools__h2">
								<h2>Tools that I use.</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="projects" id="section-projects">
			<h1 data-aos="fade-up" data-aos-once="true">My projects</h1>
			<div class="container">
				<div class="projects__boxes">
					<div
						data-aos="fade-up"
						data-aos-once="true"
						class="projects__box bg-pt"
					>
						<img
							loading="lazy"
							class="projects__box--bg bg-pt-img"
							src="img/bg-pt.jpg"
							alt="Travel Agency background"
						/>
						<a
							class="link-pt"
							href="https://anteste.yo.fr/travel-agency"
							target="_blank"
							rel="noopener"
							>Click to view</a
						>
					</div>
					<div
						data-aos="fade-up"
						data-aos-once="true"
						class="projects__box bg-sch"
					>
						<img
							loading="lazy"
							class="projects__box--bg bg-sch-img"
							src="img/bg-sch.jpg"
							alt="image-hoster background"
						/>
						<a
							class="link-sch"
							href="https://anteste.yo.fr/image-hoster"
							target="_blank"
							rel="noopener"
							>Click to view</a
						>
					</div>
					<div
						data-aos="fade-up"
						data-aos-once="true"
						class="projects__box bg-cz5p"
					>
						<img
							loading="lazy"
							class="projects__box--bg bg-cz5p-img"
							src="img/bg-dj.jpg"
							alt="dojrzewaj.pl background"
						/>
						<a
							class="link-cz5p"
							href="https://anteste.yo.fr/portfolio-1"
							target="_blank"
							rel="noopener"
							>Click to view</a
						>
					</div>
					<div
						data-aos="fade-up"
						data-aos-once="true"
						class="projects__box bg-dj"
					>
						<img
							loading="lazy"
							class="projects__box--bg bg-dj-img"
							src="img/bg-cz5p.jpg"
							alt="dojrzewaj.pl background"
						/>
						<a
							class="link-dj"
							href="https://anteste.yo.fr/portfolio-2"
							target="_blank"
							rel="noopener"
							>Click to view</a
						>
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contact" id="section-contact">
			<h1 data-aos="fade-up" data-aos-once="true">Contact me</h1>
			<form
				data-aos="fade-up"
				data-aos-once="true"
				data-aos-delay="100"
				method="POST"
				action="https://formspree.io/xaypjwog"
			>
				<input type="text" name="name" placeholder="Name" aria-label="name" />
				<input
					type="email"
					name="email"
					placeholder="Email"
					aria-label="email"
				/>
				<br />
				<textarea
					name="message"
					placeholder="Message"
					aria-label="message"
				></textarea>
				<br />
				<button type="submit">
					<div class="btn-text">Send</div>
				</button>
			</form>
		</div>

		<div class="footer">
			<div>
				<a href="./resume.pdf" target="_blank" rel="noopener"
					><img
						loading="lazy"
						src="img/resume.svg"
						alt="resume"
						class="social-logo"
				/></a>
				<a href="mailto:contact@anteste.yo.fr"
					><img loading="lazy" src="img/mail.svg" alt="mail" class="social-logo"
				/></a>
				<a class="my-logo-footer" href="#"
					><img
						loading="lazy"
						src="img/avatar.png"
						alt="logo"
						class="social-logo my-logo"
				/></a>
				<a href="https://github.com/Anteste" target="_blank" rel="noopener"
					><img
						loading="lazy"
						src="img/github.svg"
						alt="github"
						class="social-logo"
				/></a>
				<a
					href="https://www.linkedin.com/in/ilyasse-alami-533baa193/"
					target="_blank"
					rel="noopener"
					><img
						loading="lazy"
						src="img/linkedin.svg"
						alt="linkedin"
						class="social-logo"
				/></a>
			</div>
			<p>Anteste &copy; 2020</p>
		</div>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script>
			// AOS INIT
			AOS.init();

			// SCROLLABLE NAVBAR
			$(document).scroll(function() {
				var scrl = $(this).scrollTop();
				if (scrl > 450) {
					$('.navbar').addClass('navbar__scroll');
				} else {
					$('.navbar').removeClass('navbar__scroll');
				}
				if (scrl < 451) {
					$('.navbar__home').addClass('active');
				} else {
					$('.navbar__home').removeClass('active');
				}
				if (scrl > 450 && scrl < 1601) {
					$('.navbar__about').addClass('active');
				} else {
					$('.navbar__about').removeClass('active');
				}
				if (scrl > 1600 && scrl < 2200) {
					$('.navbar__projects').addClass('active');
				} else {
					$('.navbar__projects').removeClass('active');
				}
				if (scrl > 2200) {
					$('.navbar__contact').addClass('active');
				} else {
					$('.navbar__contact').removeClass('active');
				}
			});

			// MOBILE NAV
			$('.hamburger').click(function() {
				$('.sidenav').toggleClass('sidenav--open');
			});

			// CHANGE AVATAR
			$('.primary').mouseover(function() {
				$('.primary').css('display', 'none');
				$('.secondary').css('display', 'block');
			});
			$('.secondary').mouseout(function() {
				$('.primary').css('display', 'block');
				$('.secondary').css('display', 'none');
			});

			// PROJECT'S OPACITY
			$('.bg-tl').mouseover(function() {
				$('.link-tl').css('opacity', '1');
			});
			$('.bg-tl').mouseout(function() {
				$('.link-tl').css('opacity', '0');
			});
			$('.bg-cm').mouseover(function() {
				$('.link-cm').css('opacity', '1');
			});
			$('.bg-cm').mouseout(function() {
				$('.link-cm').css('opacity', '0');
			});
			$('.bg-pp').mouseover(function() {
				$('.link-pp').css('opacity', '1');
			});
			$('.bg-pp').mouseout(function() {
				$('.link-pp').css('opacity', '0');
			});
			$('.bg-sch').mouseover(function() {
				$('.link-sch').css('opacity', '1');
			});
			$('.bg-sch').mouseout(function() {
				$('.link-sch').css('opacity', '0');
			});
			$('.bg-dj').mouseover(function() {
				$('.link-dj').css('opacity', '1');
			});
			$('.bg-dj').mouseout(function() {
				$('.link-dj').css('opacity', '0');
			});
			$('.bg-cz5p').mouseover(function() {
				$('.link-cz5p').css('opacity', '1');
			});
			$('.bg-cz5p').mouseout(function() {
				$('.link-cz5p').css('opacity', '0');
			});
			$('.bg-pt').mouseover(function() {
				$('.link-pt').css('opacity', '1');
			});
			$('.bg-pt').mouseout(function() {
				$('.link-pt').css('opacity', '0');
			});

			// OPEN PROJECTS
			$('.bg-sch').click(function() {
				window.open('https://anteste.yo.fr/image-hoster');
			});
			$('.bg-cz5p').click(function() {
				window.open('https://anteste.yo.fr/portfolio-1');
			});
			$('.bg-dj').click(function() {
				window.open('https://anteste.yo.fr/portfolio-2');
			});
			$('.bg-pt').click(function() {
				window.open('https://anteste.yo.fr/travel-agency');
			});

			// SCALE PROJECTS
			$('.bg-sch-img').hover(function() {
				$('.bg-sch').toggleClass('scale');
			});
			$('.bg-tl-img').hover(function() {
				$('.bg-tl').toggleClass('scale');
			});
			$('.bg-cm-img').hover(function() {
				$('.bg-cm').toggleClass('scale');
			});
			$('.bg-pp-img').hover(function() {
				$('.bg-pp').toggleClass('scale');
			});
			$('.bg-dj-img').hover(function() {
				$('.bg-dj').toggleClass('scale');
			});
			$('.bg-cz5p-img').hover(function() {
				$('.bg-cz5p').toggleClass('scale');
			});
			$('.bg-pt-img').hover(function() {
				$('.bg-pt').toggleClass('scale');
			});

			$('.hamburger').click(function() {
				$('.icon').toggleClass('close');
			});

			// SERVICE WORKER
			if ('serviceWorker' in navigator) {
				navigator.serviceWorker
					.register('/sw.js')
					.then(reg => console.log('service worker registered'))
					.catch(err => console.log('service worker not registered', err));
			}
		</script>
	</body>
</html>
