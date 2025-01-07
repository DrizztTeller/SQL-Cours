<?php

$host = "localhost:3307";
$dbname = "boutique";
$username = "root";
$password = "";


// phpinfo();
// print_r(get_loaded_extensions());



try {
  //PDO: on verra plus tard
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  // var_dump('BDD connectée');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // $pdo->exec("CREATE DATABASE IF NOT EXISTS boutique");
  // $pdo->exec("USE boutique");
  // $utilisateurs = "CREATE TABLE utilisateurs (
  //                id INTEGER PRIMARY KEY AUTO_INCREMENT,
  //                nom VARCHAR(255),
  //                email VARCHAR(255),
  //                date_inscription DATE
  //            );
  //        ";
  // $donnesUtilisateurs = "INSERT INTO utilisateurs (nom, email, date_inscription) 
  //           VALUES 
  //           ('Jean Dupont', 'jean@example.com', '2025-01-06'),
  //           ('Marie Durand', 'marie.durand@example.com', '2025-01-06'),
  //           ('Paul Martin', 'paul.martin@example.com', '2025-01-06'),
  //           ('Lucie Leroy', 'lucie.leroy@example.com', '2025-01-06'),
  //           ('Pierre Lefevre', 'pierre.lefevre@example.com', '2025-01-06'),
  //           ('Sophie Bernard', 'sophie.bernard@example.com', '2025-01-06'),
  //           ('Jacques Moreau', 'jacques.moreau@example.com', '2025-01-06'),
  //           ('Emma Thomas', 'emma.thomas@example.com', '2025-01-06'),
  //           ('Michel Robin', 'michel.robin@example.com', '2025-01-06'),
  //           ('Nathalie Richard', 'nathalie.richard@example.com', '2025-01-06'),
  //           ('André Lambert', 'andre.lambert@example.com', '2025-01-06'),
  //           ('Claire Lefevre', 'claire.lefevre@example.com', '2025-01-06'),
  //           ('Xavier Roux', 'xavier.roux@example.com', '2025-01-06'),
  //           ('Isabelle Morin', 'isabelle.morin@example.com', '2025-01-06'),
  //           ('François Blanchard', 'francois.blanchard@example.com', '2025-01-06'),
  //           ('Catherine Pires', 'catherine.pires@example.com', '2025-01-06'),
  //           ('Julien Dupuis', 'julien.dupuis@example.com', '2025-01-06'),
  //           ('Véronique Garcia', 'veronique.garcia@example.com', '2025-01-06'),
  //           ('David Lefevre', 'david.lefevre@example.com', '2025-01-06'),
  //           ('Monique Lefevre', 'monique.lefevre@example.com', '2025-01-06'),
  //           ('Robert Leclerc', 'robert.leclerc@example.com', '2025-01-06'),
  //           ('Chantal Girard', 'chantal.girard@example.com', '2025-01-06'),
  //           ('Alain Fournier', 'alain.fournier@example.com', '2025-01-06'),
  //           ('Denise Morel', 'denise.morel@example.com', '2025-01-06'),
  //           ('Louis Lambert', 'louis.lambert@example.com', '2025-01-06'),
  //           ('Sébastien Vidal', 'sebastien.vidal@example.com', '2025-01-06'),
  //           ('Marina Vasseur', 'marina.vasseur@example.com', '2025-01-06'),
  //           ('Nicolas Faure', 'nicolas.faure@example.com', '2025-01-06'),
  //           ('Florence Marchand', 'florence.marchand@example.com', '2025-01-06'),
  //           ('Gérard Hubert', 'gerard.hubert@example.com', '2025-01-06'),
  //           ('Martine Lemoine', 'martine.lemoine@example.com', '2025-01-06'),
  //           ('Thierry Leclerc', 'thierry.leclerc@example.com', '2025-01-06'),
  //           ('Bernadette Lefevre', 'bernadette.lefevre@example.com', '2025-01-06'),
  //           ('Dominique Cormier', 'dominique.cormier@example.com', '2025-01-06'),
  //           ('René Briand', 'rene.briand@example.com', '2025-01-06'),
  //           ('Annie Faye', 'annie.faye@example.com', '2025-01-06'),
  //           ('Jacqueline Pires', 'jacqueline.pires@example.com', '2025-01-06'),
  //           ('Bernard Lefevre', 'bernard.lefevre@example.com', '2025-01-06'),
  //           ('Ludivine Barbe', 'ludivine.barbe@example.com', '2025-01-06'),
  //           ('Patricia Duval', 'patricia.duval@example.com', '2025-01-06'),
  //           ('Michel Girard', 'michel.girard@example.com', '2025-01-06'),
  //           ('Géraldine Fouquet', 'geraldine.fouquet@example.com', '2025-01-06'),
  //           ('Aline Vidal', 'aline.vidal@example.com', '2025-01-06'),
  //           ('Claude Beaufort', 'claude.beaufort@example.com', '2025-01-06'),
  //           ('Lucie Roux', 'lucie.roux@example.com', '2025-01-06'),
  //           ('Éric Perrin', 'eric.perrin@example.com', '2025-01-06'),
  //           ('Benoît Charles', 'benoit.charles@example.com', '2025-01-06'),
  //           ('Catherine Roussel', 'catherine.roussel@example.com', '2025-01-06'),
  //           ('Christophe Lefevre', 'christophe.lefevre@example.com', '2025-01-06'),
  //           ('Thierry Duval', 'thierry.duval@example.com', '2025-01-06'),
  //           ('Françoise Barret', 'francoise.barret@example.com', '2025-01-06'),
  //           ('Lucia Lefevre', 'lucia.lefevre@example.com', '2025-01-06'),
  //           ('Alice Dupuis', 'alice.dupuis@example.com', '2025-01-06'),
  //           ('Michel Pires', 'michel.pires@example.com', '2025-01-06');
  //       ";
  // $commandes = "CREATE TABLE commandes (
  //               id INTEGER PRIMARY KEY AUTO_INCREMENT,
  //               ref VARCHAR(255),
  //               date DATE,
  //               montant DECIMAL(10,2),
  //               id_utilisateur INTEGER,
  //               FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id)
  //           );
  //       ";
  // $donneesCommandes = "INSERT INTO commandes (ref, date, montant, id_utilisateur) 
  //           VALUES 
  //           ('CMD001', '2025-01-06', 199.99, 1),
  //           ('CMD002', '2025-01-06', 49.99, 2),
  //           ('CMD003', '2025-01-06', 150.00, 3),
  //           ('CMD004', '2025-01-06', 75.50, 4),
  //           ('CMD005', '2025-01-06', 200.00, 5),
  //           ('CMD006', '2025-01-06', 130.45, 6),
  //           ('CMD007', '2025-01-06', 99.99, 7),
  //           ('CMD008', '2025-01-06', 60.00, 8),
  //           ('CMD009', '2025-01-06', 80.90, 9),
  //           ('CMD010', '2025-01-06', 125.30, 10),
  //           ('CMD011', '2025-01-06', 300.00, 11),
  //           ('CMD012', '2025-01-06', 150.75, 12),
  //           ('CMD013', '2025-01-06', 89.99, 13),
  //           ('CMD014', '2025-01-06', 45.00, 14),
  //           ('CMD015', '2025-01-06', 180.50, 15),
  //           ('CMD016', '2025-01-06', 110.00, 16),
  //           ('CMD017', '2025-01-06', 200.25, 17),
  //           ('CMD018', '2025-01-06', 75.90, 18),
  //           ('CMD019', '2025-01-06', 145.60, 19),
  //           ('CMD020', '2025-01-06', 250.00, 20),
  //           ('CMD021', '2025-01-06', 60.50, 21),
  //           ('CMD022', '2025-01-06', 190.30, 22),
  //           ('CMD023', '2025-01-06', 80.00, 23),
  //           ('CMD024', '2025-01-06', 120.90, 24),
  //           ('CMD025', '2025-01-06', 220.75, 25),
  //           ('CMD026', '2025-01-06', 30.99, 26),
  //           ('CMD027', '2025-01-06', 140.60, 27),
  //           ('CMD028', '2025-01-06', 90.30, 28),
  //           ('CMD029', '2025-01-06', 200.00, 29),
  //           ('CMD030', '2025-01-06', 110.00, 30),
  //           ('CMD031', '2025-01-06', 80.00, 31),
  //           ('CMD032', '2025-01-06', 300.00, 32),
  //           ('CMD033', '2025-01-06', 175.90, 33),
  //           ('CMD034', '2025-01-06', 55.00, 34),
  //           ('CMD035', '2025-01-06', 70.00, 35),
  //           ('CMD036', '2025-01-06', 160.00, 36),
  //           ('CMD037', '2025-01-06', 50.75, 37),
  //           ('CMD038', '2025-01-06', 40.50, 38),
  //           ('CMD039', '2025-01-06', 150.00, 39),
  //           ('CMD040', '2025-01-06', 110.50, 40),
  //           ('CMD041', '2025-01-06', 100.99, 41),
  //           ('CMD042', '2025-01-06', 225.60, 42),
  //           ('CMD043', '2025-01-06', 250.00, 43),
  //           ('CMD044', '2025-01-06', 60.00, 44),
  //           ('CMD045', '2025-01-06', 120.90, 45),
  //           ('CMD046', '2025-01-06', 180.00, 46),
  //           ('CMD047', '2025-01-06', 200.00, 47),
  //           ('CMD048', '2025-01-06', 95.50, 48),
  //           ('CMD049', '2025-01-06', 130.00, 49),
  //           ('CMD050', '2025-01-06', 160.00, 50);
  //       ";

  // $pdo->exec($utilisateurs);
  // $pdo->exec($commandes);
  // $pdo->exec($donnesUtilisateurs);
  // $pdo->exec($donneesCommandes);

  // return $pdo;
} catch (PDOException $e) {
  echo $e->getMessage();
}

// var_dump($_SERVER);
// function getItems ($connect, string $table) {
//meme chose PDO comme type de $connect (objet issu de la classe PDO)
function getItems(PDO $pdo, string $table)
{
  // on écrit la requête SQL
  $query = "SELECT * FROM $table";

  // on réalise une préparation de la requête (statement)
  $stmt = $pdo->prepare($query);

  // on exécute la requête
  $stmt->execute();

  // on  retourne les données sous forme d'un tableau associatif
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getItems2(PDO $pdo, string $table,string $table2)
{
  // on écrit la requête SQL
  $query = "SELECT $table.id, $table.ref, $table.date, $table.montant, $table2.nom, $table2.email FROM $table LEFT JOIN $table2 ON $table.id_utilisateur = $table2.id";

  // on réalise une préparation de la requête (statement)
  $stmt = $pdo->prepare($query);

  // on exécute la requête
  $stmt->execute();

  // on  retourne les données sous forme d'un tableau associatif
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$utilisateurs = getItems($pdo, 'utilisateurs');
$commandes = getItems($pdo,'commandes');
$commandes2 = getItems2($pdo,'commandes', 'utilisateurs');
$datas;

// print_r($utilisateurs);



// $pdo->exec("CREATE DATABASE IF NOT EXISTS boutique");
//     $pdo->exec("USE boutique");
//     $utilisateurs = "CREATE TABLE utilisateurs (
//             id INTEGER PRIMARY KEY AUTO_INCREMENT,
//             nom VARCHAR(255),
//             email VARCHAR(255),
//             date_inscription DATE
//         );
//     ";
//     $donnesUtilisateurs = "INSERT INTO utilisateurs (nom, email, date_inscription) 
//         VALUES 
//         ('Jean Dupont', 'jean@example.com', '2025-01-06'),
//         ('Marie Durand', 'marie.durand@example.com', '2025-01-06'),
//         ('Paul Martin', 'paul.martin@example.com', '2025-01-06'),
//         ('Lucie Leroy', 'lucie.leroy@example.com', '2025-01-06'),
//         ('Pierre Lefevre', 'pierre.lefevre@example.com', '2025-01-06'),
//         ('Sophie Bernard', 'sophie.bernard@example.com', '2025-01-06'),
//         ('Jacques Moreau', 'jacques.moreau@example.com', '2025-01-06'),
//         ('Emma Thomas', 'emma.thomas@example.com', '2025-01-06'),
//         ('Michel Robin', 'michel.robin@example.com', '2025-01-06'),
//         ('Nathalie Richard', 'nathalie.richard@example.com', '2025-01-06'),
//         ('André Lambert', 'andre.lambert@example.com', '2025-01-06'),
//         ('Claire Lefevre', 'claire.lefevre@example.com', '2025-01-06'),
//         ('Xavier Roux', 'xavier.roux@example.com', '2025-01-06'),
//         ('Isabelle Morin', 'isabelle.morin@example.com', '2025-01-06'),
//         ('François Blanchard', 'francois.blanchard@example.com', '2025-01-06'),
//         ('Catherine Pires', 'catherine.pires@example.com', '2025-01-06'),
//         ('Julien Dupuis', 'julien.dupuis@example.com', '2025-01-06'),
//         ('Véronique Garcia', 'veronique.garcia@example.com', '2025-01-06'),
//         ('David Lefevre', 'david.lefevre@example.com', '2025-01-06'),
//         ('Monique Lefevre', 'monique.lefevre@example.com', '2025-01-06'),
//         ('Robert Leclerc', 'robert.leclerc@example.com', '2025-01-06'),
//         ('Chantal Girard', 'chantal.girard@example.com', '2025-01-06'),
//         ('Alain Fournier', 'alain.fournier@example.com', '2025-01-06'),
//         ('Denise Morel', 'denise.morel@example.com', '2025-01-06'),
//         ('Louis Lambert', 'louis.lambert@example.com', '2025-01-06'),
//         ('Sébastien Vidal', 'sebastien.vidal@example.com', '2025-01-06'),
//         ('Marina Vasseur', 'marina.vasseur@example.com', '2025-01-06'),
//         ('Nicolas Faure', 'nicolas.faure@example.com', '2025-01-06'),
//         ('Florence Marchand', 'florence.marchand@example.com', '2025-01-06'),
//         ('Gérard Hubert', 'gerard.hubert@example.com', '2025-01-06'),
//         ('Martine Lemoine', 'martine.lemoine@example.com', '2025-01-06'),
//         ('Thierry Leclerc', 'thierry.leclerc@example.com', '2025-01-06'),
//         ('Bernadette Lefevre', 'bernadette.lefevre@example.com', '2025-01-06'),
//         ('Dominique Cormier', 'dominique.cormier@example.com', '2025-01-06'),
//         ('René Briand', 'rene.briand@example.com', '2025-01-06'),
//         ('Annie Faye', 'annie.faye@example.com', '2025-01-06'),
//         ('Jacqueline Pires', 'jacqueline.pires@example.com', '2025-01-06'),
//         ('Bernard Lefevre', 'bernard.lefevre@example.com', '2025-01-06'),
//         ('Ludivine Barbe', 'ludivine.barbe@example.com', '2025-01-06'),
//         ('Patricia Duval', 'patricia.duval@example.com', '2025-01-06'),
//         ('Michel Girard', 'michel.girard@example.com', '2025-01-06'),
//         ('Géraldine Fouquet', 'geraldine.fouquet@example.com', '2025-01-06'),
//         ('Aline Vidal', 'aline.vidal@example.com', '2025-01-06'),
//         ('Claude Beaufort', 'claude.beaufort@example.com', '2025-01-06'),
//         ('Lucie Roux', 'lucie.roux@example.com', '2025-01-06'),
//         ('Éric Perrin', 'eric.perrin@example.com', '2025-01-06'),
//         ('Benoît Charles', 'benoit.charles@example.com', '2025-01-06'),
//         ('Catherine Roussel', 'catherine.roussel@example.com', '2025-01-06'),
//         ('Christophe Lefevre', 'christophe.lefevre@example.com', '2025-01-06'),
//         ('Thierry Duval', 'thierry.duval@example.com', '2025-01-06'),
//         ('Françoise Barret', 'francoise.barret@example.com', '2025-01-06'),
//         ('Lucia Lefevre', 'lucia.lefevre@example.com', '2025-01-06'),
//         ('Alice Dupuis', 'alice.dupuis@example.com', '2025-01-06'),
//         ('Michel Pires', 'michel.pires@example.com', '2025-01-06');
//     ";
//     $commandes = "CREATE TABLE commandes (
//             id INTEGER PRIMARY KEY AUTO_INCREMENT,
//             ref VARCHAR(255),
//             date DATE,
//             montant DECIMAL(10,2),
//             id_utilisateur INTEGER,
//             FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id)
//         );
//     ";
//     $donneesCommandes = "INSERT INTO commandes (ref, date, montant, id_utilisateur) 
//         VALUES 
//         ('CMD001', '2025-01-06', 199.99, 1),
//         ('CMD002', '2025-01-06', 49.99, 2),
//         ('CMD003', '2025-01-06', 150.00, 3),
//         ('CMD004', '2025-01-06', 75.50, 4),
//         ('CMD005', '2025-01-06', 200.00, 5),
//         ('CMD006', '2025-01-06', 130.45, 6),
//         ('CMD007', '2025-01-06', 99.99, 7),
//         ('CMD008', '2025-01-06', 60.00, 8),
//         ('CMD009', '2025-01-06', 80.90, 9),
//         ('CMD010', '2025-01-06', 125.30, 10),
//         ('CMD011', '2025-01-06', 300.00, 11),
//         ('CMD012', '2025-01-06', 150.75, 12),
//         ('CMD013', '2025-01-06', 89.99, 13),
//         ('CMD014', '2025-01-06', 45.00, 14),
//         ('CMD015', '2025-01-06', 180.50, 15),
//         ('CMD016', '2025-01-06', 110.00, 16),
//         ('CMD017', '2025-01-06', 200.25, 17),
//         ('CMD018', '2025-01-06', 75.90, 18),
//         ('CMD019', '2025-01-06', 145.60, 19),
//         ('CMD020', '2025-01-06', 250.00, 20),
//         ('CMD021', '2025-01-06', 60.50, 21),
//         ('CMD022', '2025-01-06', 190.30, 22),
//         ('CMD023', '2025-01-06', 80.00, 23),
//         ('CMD024', '2025-01-06', 120.90, 24),
//         ('CMD025', '2025-01-06', 220.75, 25),
//         ('CMD026', '2025-01-06', 30.99, 26),
//         ('CMD027', '2025-01-06', 140.60, 27),
//         ('CMD028', '2025-01-06', 90.30, 28),
//         ('CMD029', '2025-01-06', 200.00, 29),
//         ('CMD030', '2025-01-06', 110.00, 30),
//         ('CMD031', '2025-01-06', 80.00, 31),
//         ('CMD032', '2025-01-06', 300.00, 32),
//         ('CMD033', '2025-01-06', 175.90, 33),
//         ('CMD034', '2025-01-06', 55.00, 34),
//         ('CMD035', '2025-01-06', 70.00, 35),
//         ('CMD036', '2025-01-06', 160.00, 36),
//         ('CMD037', '2025-01-06', 50.75, 37),
//         ('CMD038', '2025-01-06', 40.50, 38),
//         ('CMD039', '2025-01-06', 150.00, 39),
//         ('CMD040', '2025-01-06', 110.50, 40),
//         ('CMD041', '2025-01-06', 100.99, 41),
//         ('CMD042', '2025-01-06', 225.60, 42),
//         ('CMD043', '2025-01-06', 250.00, 43),
//         ('CMD044', '2025-01-06', 60.00, 44),
//         ('CMD045', '2025-01-06', 120.90, 45),
//         ('CMD046', '2025-01-06', 180.00, 46),
//         ('CMD047', '2025-01-06', 200.00, 47),
//         ('CMD048', '2025-01-06', 95.50, 48),
//         ('CMD049', '2025-01-06', 130.00, 49),
//         ('CMD050', '2025-01-06', 160.00, 50);
//     ";

//     $pdo->exec($utilisateurs);
//     $pdo->exec($commandes);
//     $pdo->exec($donnesUtilisateurs);
//     $pdo->exec($donneesCommandes);


?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Mohammad_ABDUL" />
  <meta name="description" content="Document" />
  <title>Document</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<body>
<table>
    <thead>
      <tr>
        <?php 
        $datas = $commandes2;
        if (!empty($datas)): ?>
          <?php foreach (array_keys($datas[0]) as $key): ?>
            <th scope="col"><?= htmlspecialchars($key) ?></th>
          <?php endforeach; ?>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datas as $data): ?>
        <tr>
          <?php foreach ($data as $value): ?>
            <td><?= htmlspecialchars($value) ?></td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
</table>

</body>

</html>