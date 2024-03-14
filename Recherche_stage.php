<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Recherche de stage</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style_navbar.css" />
    <link rel="stylesheet" href="style/style_footer.css" />
    <link rel="stylesheet" href="style/style_recherche_stage.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>

  <body>
  <?php include 'Navbar.php'; ?>
    <div class="container_recherche">
      <div class="box_recherche">
        <label class="text_box_recherche"
          >Commencer votre recherche d'offre de stage ici</label
        >
        <div class="input_box_recherche">
          <img
            class="img_loupe"
            src="image/loupe_recherche.png"
            alt="loupe de recherche"
          />
          <input
            class="input_recherche"
            type="text"
            id="text_recherche"
            placeholder="Tapez votre recherche ici"
          />
          <button class="btn_recherche">Rechercher</button>
        </div>
      </div>
    </div>

    <div class="container_offre_stage">
      <div class="offre_stage">
        <div class="box_domaine_stage">
          <label class="text_domaine_stage">Domaine du stage</label>
          <label class="nom_entreprise">Nom de l'entreprise</label>
          <label class="lieu_stage">Lieu du stage</label>
          <label class="remuneration_stage">Rémunération</label>
          <div class="fond_wishlist">
            <img
              class="img_wishlist"
              src="image/wishlist.png"
              alt="banniére de wishlist"
            />
          </div>
        </div>
        <div class="trait"></div>
        <div class="description_stage">
          <label class="text_description_stage">Description du stage...</label>
        </div>
        <div class="bas_offre_stage">
          <label class="date_publi">Date de publication</label>
          <label class="nb_vue">Nombre de vues</label>
        </div>
        <div class="fond_plus">
          <img
            class="img_plus"
            src="image/plus_noir.png"
            alt="bouton pour voir plus d'offre de stage"
          />
        </div>
      </div>

      <div class="offre_stage">
        <div class="box_domaine_stage">
          <label class="text_domaine_stage">Domaine du stage</label>
          <label class="nom_entreprise">Nom de l'entreprise</label>
          <label class="lieu_stage">Lieu du stage</label>
          <label class="remuneration_stage">Rémunération</label>
          <div class="fond_wishlist">
            <img
              class="img_wishlist"
              src="image/wishlist.png"
              alt="banniére de wishlist"
            />
          </div>
        </div>
        <div class="trait"></div>
        <div class="description_stage">
          <label class="text_description_stage">Description du stage...</label>
        </div>
        <div class="bas_offre_stage">
          <label class="date_publi">Date de publication</label>
          <label class="nb_vue">Nombre de vues</label>
        </div>
        <div class="fond_plus">
          <img
            class="img_plus"
            src="image/plus_noir.png"
            alt="bouton pour voir plus d'offre de stage"
          />
        </div>
      </div>
    </div>

    <footer>
      <div class="contenu_footer">
        <div class="bloc_footer_a_propos">
          <h3>A propos</h3>
          <div class="liste_a_propos">
            <li><a class="interligne" href="#"> Mentions légales</a></li>
            <li><a class="interligne" href="#"> Tous droits réservés</a></li>
            <li>
              <a class="interligne" href="#"> Politiques de confidentialité</a>
            </li>
          </div>
        </div>

        <div class="bloc_footer_nous_contacter">
          <h3>Nous contacter</h3>
          <div class="liste_nous_contacter">
            <li><a class="interligne"> 07 83 41 25 40</a></li>
            <li><a class="interligne"> 06 09 82 16 83</a></li>
            <li><a class="interligne"> 06 89 77 85 64</a></li>
          </div>
        </div>

        <div class="bloc_footer_reseaux_sociaux">
          <h3>Nos réseaux sociaux</h3>
          <div class="liste_reseaux_sociaux">
            <a href="https://www.youtube.com/">
              <img src="image/youtube.png"
            /></a>
            <a href="https://www.linkedin.com/">
              <img src="image/linkedin.png"
            /></a>
            <a href="https://twitter.com/"> <img src="image/twitterx.png" /></a>
            <a href="https://www.instagram.com/"
              ><img src="image/instagram.png"
            /></a>
          </div>
        </div>
      </div>
      <p class="noStage">© noStage 2024</p>
    </footer>
    <script src="" async defer></script>
  </body>
</html>
