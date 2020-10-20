<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenue à la Banque du Peuple</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="menu">
		<ul>
			<li class="menu-item hidden"><a href="home.php">Accueil</a></li>
			<li class="menu-item hidden"><a href="clients.php">Gestion de Clients</a>
			</li>
			<li class="menu-item hidden"><a href="comptes.php">Gestion de comptes</a></li>
			
		</ul>
	</div>

	<div class="heroe">

		<h1>Bienvenue à la Banque du Peuple</h1>

		<h2>La Banque au service du peuple</h2>

	</div>

</header>

<!-- CONTENT -->

<div class="further">
    <section>
    <div class="title">Formulaire d'ajout de client</div><br/>
       <fieldset class="form"><br/>
          <form action="clientController" method="POST">     
          <div id ="first">
                  <label for="newcli">Nouveau Client</label>
                  <input type="radio" name="stacli" id="newcli" value="nouveau">
                  <label for="cliexi">Client Existant</label>
                  <input type="radio" name="stacli" id="cliexi"  value="existant">
          </div><br>
          <div id="second">
                  <label for="cliphy">Client physique</label>
                  <input type="radio" name="typecli" id="cliphy" value="physique">
                  <label for="climo">Client Moral</label>
                  <input type="radio" name="typecli" id="climo"  value="moral">
          </div><br>
              
        <div class="group">
                  <label for="nom">Nom :</label>
                  <input type="text" name="nom" id="nom"/><br><br/>
                  <label for="prenom">Prénom :</label>
                  <input type="text" name="prenom" id="prenom"/><br><br/>
                  <label for="adresse">Adesse :</label>
                  <input type="text" name="adresse" id="adresse"/><br><br/>
                  <label for="email">Email :</label>
                  <input type="email" name="email" id="email"/><br><br/>
                  <label for="telephone">Téléphone :</label>
                  <input type="tel" name="telephone" id="telephone"/><br><br/>
        </div>
        <div class="group">
                  <label for="nomem">Nom employeur :</label>
                  <input type="text" name="nomem" id="nomem"/><br><br/>
                  <label for="raison">Raison sociale :</label>
                  <input type="text" name="raison" id="raison"/><br><br/>
                  <label for="adem">Adresse employeur :</label>
                  <input type="text" name="adem" id="adem"/><br><br/>
        </div>
        <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
        </div>
          </form><br/>
          </fieldset>
          <fieldset class="formu">
        <div class="tab">Liste des clients</div><br/>
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Statut</td>
        <td>Type</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Email</td>
        <td>Tel:</td>
        <td>Employeur</td>
        <td>Raison</td>
        <td>Adresse employeur</td>
        </tr>
        </table> 
      </div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> @ Jeremy P3 Simplon Auf Promo3</p>

	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>

