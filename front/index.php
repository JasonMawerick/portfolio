<?php
 require_once('../back/db-connect.php');
 $sql ='SELECT * FROM `projects`';
 $query =$db-> prepare($sql);
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mon portfolio de Web Designer : formé à l'Access Code School de Dijon, je conçois et développe des sites web en HTML / CSS / JS / PHP / MySQL.">
    <title>Romain Poissonnier - Designer Web</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/main.css">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
    <script src="https://kit.fontawesome.com/fe2633f6e9.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../assets/images/favicon-32x32.png">
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header text-light">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								<img class="header-logo-image" src="../assets/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center text-light">
				<div class="hero-bg"></div>
				<div class="hero-particles-container">
					<canvas id="hero-particles"></canvas>
				</div>
                <div class="container-sm">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Romain POISSONNIER</h1>
	                        <p class="hero-paragraph">Je suis concepteur et développeur Web, je me forme à l'Access Code School de Dijon : je prépare le Titre Professionnel « Designer Web » de niveau Bac+2.</p>
	                        <div class="hero-cta">
								<a class="button button-primary button-wide-mobile" href="#">Téléchargez mon CV</a>
							</div>
						</div>
						<div class="mockup-container">
							<div class="mockup-bg">
								<img src="../assets/images/iphone-hero-bg.svg" alt="iPhone illustration">
							</div>
							<img class="device-mockup" src="../assets/images/iphone-hero-rp.png" alt="iPhone Hero">
						</div>
                    </div>
                </div>
            </section>

			<section class="features-extended section">
                <div class="features-extended-inner section-inner">
					<div class="features-extended-wrap">
						<div class="container">

						<?php
							foreach ($result as $project){
						?>

							<div class="feature-extended">
								<div class="feature-extended-image">
									<div class="mockup-bg">
										<img src="../assets/images/iphone-feature-bg-01.svg" alt="iPhone Feature 01 illustration">
									</div>
									<img class="device-mockup is-revealing" src="../assets/images/<?=$project['project_picture']?>" alt="iPhone Feature 01">
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16"><?=$project['project_title']?></h3>
									<p class="m-0"><?=$project['project_context']?></p>
                                    <br>
                                    <a class="button button-primary button-wide-mobile" href="project_details.php?id=<?=$project['id']?>"><i class="fas fa-link"></i> &nbsp;&nbsp;Fiche Projet</a>
								</div>
							</div>
						<?php
							}
						?>

							<div class="feature-extended">
								<div class="feature-extended-image">
									<div class="mockup-bg">
										<img src="../assets/images/iphone-feature-bg-03.svg" alt="iPhone Feature 03 illustration">
									</div>
									<img class="device-mockup is-revealing" src="../assets/images/iphone-feature-03.png" alt="iPhone Feature 03">
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16">Projet<br> «&nbsp;a11e&nbsp;»</h3>
									<p class="m-0">Développement d'une site Web de sensibilisation aux problématiques d'accessibilité du web des personnes sourdes et malentendantes, contenant des conseils et préconisations à destination des concepteurs et développeurs Web, et appliquant ces mêmes recommandations.</p> 
                                    <p>Développé en collaboration avec Sonia ROLLAND, Tiavina RALANDISON & Luc LENEUF sur la base d'un dossier de conception fourni par Nicolas MAËS, Hervé RICHARD, Adrien RAYMOND et Adam BEDERIAT.</p>
                                    <br>
                                    <a class="button button-primary button-wide-mobile" href="#"><i class="fas fa-link"></i> &nbsp;&nbsp;Fiche Projet</a>
								</div>
							</div>
							<div class="feature-extended">
								<div class="feature-extended-image">
									<div class="mockup-bg">
										<img src="../assets/images/iphone-feature-bg-04.svg" alt="iPhone Feature 04 illustration">
									</div>
									<img class="device-mockup is-revealing" src="../assets/images/iphone-feature-04.png" alt="iPhone Feature 04">
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16">Projet<br> «&nbsp;Gwendoline Matos - Stratégie de communication&nbsp;»</h3>
									<p class="m-0">Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.</p>
                                    <a class="button button-primary button-wide-mobile" href="#"><i class="fas fa-link"></i> &nbsp;&nbsp;Fiche Projet</a>
                                    <br>
								</div>
							</div>
							<div class="feature-extended">
								<div class="feature-extended-image">
									<div class="mockup-bg">
										<img src="../assets/images/iphone-feature-bg-01.svg" alt="iPhone Feature 01 illustration">
									</div>
									<img class="device-mockup is-revealing" src="../assets/images/iphone-feature-01.png" alt="iPhone Feature 01">
								</div>
								<div class="feature-extended-body is-revealing">
									<h3 class="mt-0 mb-16">Projet<br> «&nbsp;Back-Office de Portfolio&nbsp;»</h3>
									<p class="m-0">Quam quisque id diam vel quam elementum pulvinar. Ut etiam sit amet nisl purus in mollis nunc. Odio morbi quis commodo odio aenean sed adipiscing diam donec.</p>
                                    <br>
                                    <a class="button button-primary button-wide-mobile" href="#"><i class="fas fa-link"></i> &nbsp;&nbsp;Fiche Projet</a>
								</div>
							</div>
						</div>
					</div>
                </div>
            </section>
        </main>

		<footer class="site-footer">
			<div class="footer-particles-container">
				<canvas id="footer-particles"></canvas>
			</div>
			<div class="site-footer-top">
				<section class="cta section text-light">
					<div class="container-sm">
						<div class="cta-inner section-inner">
							<div class="cta-header text-center">
								<h2 class="section-title mt-0">Recrutez-moi !</h2>
								<p class="section-paragraph">Formé à travailler en mode projet et à utiliser des outils collaboratifs, vous pourrez si vous décidez de parier sur moi compter sur mes compétences techniques autant que sur mes qualités humaines.</p>
								<div class="cta-cta">
									<a class="button button-primary button-wide-mobile" href="#"><i class="far fa-paper-plane"></i> &nbsp;&nbsp;M'ÉCRIRE</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="site-footer-bottom">
				<div class="container">
					<div class="site-footer-inner">
						<div class="brand footer-brand">
							<a href="">
								<img src="../assets/images/logo.svg" alt="Venus logo">
							</a>
						</div>
						<ul class="footer-links list-reset">
							<li>
								<a href="#">Mentions légales</a>
							</li>
							<li>
								<a href="#">Cookies</a>
							</li>
							<li>
								<a href="#">RGPD</a>
							</li>
						</ul>
						<ul class="footer-social-links list-reset">
							<li>
								<a href="https://github.com/JasonMawerick/">
                                    <i class="fab fa-github"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/in/romain-poissonnier-dev/">
                                    <i class="fab fa-linkedin-in"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
        </footer>
    </div>

    <script src="../assets/scripts/main.min.js"></script>
</body>
</html>
