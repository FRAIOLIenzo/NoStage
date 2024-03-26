<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Se connecter</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style/style_navbar.css" />
    <link rel="stylesheet" href="style/style_connecter.css" />
    <link rel="stylesheet" href="style/style_footer.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
    />
  </head>
  <body>
  <?php include 'Navbar.php'; ?>

  <?php
  session_start();
  var_dump($_SESSION); 

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$pseudo = $_POST['email'];
$mot_de_passe = $_POST['password'];
$username= "sql11692929"; 
$password= "lBxIuH8Sie";
try {
    $db = new PDO('mysql:host=sql11.freesqldatabase.com;dbname=sql11692929', $username, $password);
    }
 catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
}

$query = $db->prepare("SELECT * FROM compte WHERE adresse_mail=:pseudo AND mot_de_passe=:mot_de_passe");
$query->bindParam(':pseudo', $pseudo);
$query->bindParam(':mot_de_passe', $mot_de_passe);
$query->execute();

if ($query->rowCount() > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $id_utilisateur = $row['id_compte'];
    session_start();
    $_SESSION['adresse_mail'] = $row['adresse_mail'];
    $_SESSION['connected'] = 1;
    $_SESSION['name'] = $row['prenom'];
    $_SESSION['lastname'] = $row['nom'];
    unset($_SESSION['username']); // Remove 'adresse_mail' key from the session if it exists
      
    header("location:/Page_acceuil.php");
} else {
    echo "Identifiants incorrects.";
}
}
if (isset($_SESSION['connected']) && $_SESSION['connected']) {
  header("Location: Page_acceuil.php");
  exit();
}
?>
    <div class="box">
      <div class="box_connexion">
        <div class="box_connexion_contenu">
          <form action="" method="post">
          <label class="text_connexion">Se connecter</label>
          <input
            class="email"
            type="email"
            id="email"
            name="email"
            placeholder="Adresse email"
            required
          />
          <div class="box_password">
            <input
              class="password"
              type="password"
              id="password"
              name="password"
              placeholder="Mot de passe"
            />
            <button class="btn_password">afficher</button>
          </div>
          <a class="lien_changer_mdp" href="Changer_mdp.php">Mot de passe oublié ?</a>
          <div class="box_btn">
          <button type="submit" class="btn_connexion">Se connecter</button>
          </div>
          </form>

        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>

    <script src="js/js_connecter.js" async defer></script>
  </body>
</html>
