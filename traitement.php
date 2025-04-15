<!-- traitement.php --><?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'reservation';
$username = 'root';
$password = ''; // ou ton mot de passe MySQL
$pdo = new PDO("mysql:host=$host;port=3308;dbname=$dbname;charset=utf8", $username, $password);
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
// Insérer les données dans la table
$sql = "INSERT INTO users (nom, email, motdepasse, role) VALUES (:nom, :email, :motdepasse, :role)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nom' => $nom, 'email' => $email, 'motdepasse' => $password, 'role' => $role]);
echo "Données enregistrées avec succès !";?>