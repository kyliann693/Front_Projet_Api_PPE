<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <nav class="side-nav">
              <ul class="nav-menu">
                <li class="nav-item"><a href="gestion_utilisateur.php"><i class="fas fa-tachometer-alt"></i><span class="menu-text">Gestion utilisateur</span></a></li>
                <li class="nav-item"><a href="gestion_entreprise.php"><i class="fas fa-user"></i><span class="menu-text">Gestion entreprise</span></a></li>
                <li class="nav-item"><a href="gestion_vehicules.php"><i class="fas fa-file-alt"></i><span class="menu-text">Gestion véhicule</span></a></li>
                <li class="nav-item"><a href="gestion_agences.php"><i class="fas fa-play "></i><span class="menu-text">Gestion des agences</span></a></li>
                <li class="nav-item active"><a href="gestion_agence_only.php"><i class="fas fa-sign-out-alt"></i><span class="menu-text">Gestion d'une agence</span></a></li>
                <div class="center_submit_nav">
                    <button class="submit_deconnexion">Déconnexion</button>
                </div>
            </ul>
          </div>
        <section></section>
        <footer></footer>
        <script>
            $(function() {
			$("li").click(function(e) {
			  e.preventDefault();
			  $("li").removeClass("active");
			  $(this).addClass("active");
			});
		});
        </script>

    </body>
</html>