<!DOCTYPE HTML>
<html>
	<head lang="fr">
		<title>Blind Test App</title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/styles.css" />
	</head>

	<body>
		<section class="wrapper">
			<h1>Blind Test Application</h1>
			<div class="english">
				<button class="button-english">Version Française</button>
				<details>
					<summary>Click here to see more informations</summary>
					<ul>
						<li>Easy to use</li>
						<li>Fast to understand</li>
						<li>Have fun without installing anything</li>
					</ul>

					<h2>How to play ?</h2>

					<ul>
						<li>Just go on <a href="http://www.youtube.com" target="_blank">Youtube</a>.</li>
						<li>Choose anything you want</li>
						<li>When you are on the video, go on "Share" button <img src="capt1.png" /></li>
						<li>Then click on "Integrate" button and copy on your clipboard (CTRL+C) the part you see there in blue (well into the src="") <img src="capt2.png" width="700" /></li>
						<li>You just now have to past it in the input right here.</li>
						<li>Finally, just give your friends the URL link of your page so they can enjoy and try to find the music !</li>
					</ul>
				</details>
				<form method="get" action="Enter.php">
					<input type="text" name="muzik" placeholder=" Copy and Paste the Youtube link here." required/>
					<input type="submit" value="Generate link" />
				</form>
			</div>

			<div class="french">
				<button class="button-french">English Version</button>
				<details>
					<summary>Cliquer ici pour plus d'informations</summary>
					<ul>
						<li>Facile à utiliser</li>
						<li>Rapide à comprendre</li>
						<li>Amusez-vous sans installer quoique ce soit</li>
					</ul>

					<h2>Comment l'utiliser?</h2>

					<ul>
						<li>Allez simplement sur <a href="http://www.youtube.com" target="_blank">Youtube</a>.</li>
						<li>Choisissez ce que vous voulez.</li>
						<li>Quand vous êtes sur la vidéo, cliquez simplement sur le bouton "Partager" <img src="capt1.png" /></li>
						<li>Cliquez ensuite sur le bouton "Intégrer" et copiez (CTRL+C) la partie que vous voyez sur l'image ci-dessous en bleue (bien entre les guillemets du src=""). <img src="capt2.png" width="700" /></li>
						<li>Maintenant, il n'y a plus qu'à coller cela dans le champ ci-dessous.</li>
						<li>Pour finir, il ne vous reste qu'à donner à vos amis l'URL générée et vous pourrez tous écouter la musique et faire chercher à la deviner !</li>
					</ul>
				</details>
				<form method="get" action="Enter.php">
					<input type="text" name="muzik" placeholder=" Copy and Paste the Youtube link here."/>
					<input type="submit" value="Générer le lien" />
				</form>
			</div>
		</section>

		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>