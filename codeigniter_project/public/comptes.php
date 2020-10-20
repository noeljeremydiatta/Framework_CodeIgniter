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
    <div class="title">Formulaire d'ajout de compte</div><br/>
       <fieldset class="form"><br/>
          <form action="compteController" method="POST">
              <div>
                  <label for="epargne">Compte Epargne</label>
                  <input type="radio" name="tyco" id="epargne"  value="epargne">
                  <label for="courant">Compte Courant</label>
                  <input type="radio" name="tyco" id="courant"  value="courant">
                  <label for="bloque">Compte Bloqué</label>
                  <input type="radio" name="tyco" id="bloque"  value="bloque">
              </div><br/>
              <div class="group">
                  <label for="numag">Num agence :</label>
                  <input type="number" name="agence" id="numag"/>
               </div><br/>
               <div class="group">
                  <label for="rib">RIB :</label>
                  <input type="number" name="rib" id="rib"/>
                </div><br/>
                <div class="group">
                  <label for="numco">Num compte :</label>
                  <input type="number" name="numcompte" id="numco"/>
                </div><br/>
                <div class="group">
                  <label for="montant">Montant :</label>
                  <input type="number" name="montant" id="montant"/>
                </div><br/>
                <div class="group">
                  <label for="sal">Salaire :</label>
                  <input type="number" name="salaire" id="sal"/>
                </div><br/>
                <div class="group">
                  <label for="prof">Profession :</label>
                  <input type="text" name="profession" id="prof"/>
                </div><br/>
                <div>
                  <label for="frais">Frais d'ouveture </label>
                  <input type="checkbox" name="frais" id="frais"/>
                </div><br/>
                <div>
                  <label for="agios">Agios trimestriel </label>
                  <input type="checkbox" name="agios" id="agios"/>
                </div><br/>
                
                <div class="bout">
                    <input type="submit" name="envoyer" id="envoyer" value="envoyer">
                    <input type="reset" name="annuler" id="annuler" value="annuler">
                </div>

          </form><br/>
        </fieldset> <br><br/>

        <fieldset class="formu">
        <div class="tab">Liste des comptes</div><br/>
        <table border ="1">
        <tr>
        <td>ID</td>
        <td>type compte</td>
        <td>Num Agence</td>
        <td>RIB</td>
        <td>numero compte</td>
        <td>Montant inintial</td>
        <td>Salaire</td>
        <td>Profession</td>
        <td>Frais</td>
        <td>Agios</td>
        </tr>
        </table>
        </fieldset>   
    </section>
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
