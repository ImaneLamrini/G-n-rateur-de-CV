<?php
require_once('tcpdf/tcpdf.php');

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$profil=$_POST['descpro'];
$fileTmpName = $_FILES['photo']['tmp_name'];
$extension = pathinfo($fileTmpName, PATHINFO_EXTENSION);
$uniqueFilename = uniqid() . '.' . $extension;
$fileDestination = 'uploads/' . $uniqueFilename;

// Création d'une instance de TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Paramètres du document
$pdf->SetCreator('Créateur du CV');
$pdf->SetAuthor($nom . ' ' . $prenom);
$pdf->SetTitle('CV de ' . $nom . ' ' . $prenom);
$pdf->SetSubject('CV');
$pdf->SetKeywords('CV, données personnelles, compétences, expériences');

// Ajout d'une page
$pdf->AddPage();

move_uploaded_file($fileTmpName, __DIR__ . '/uploads/' . $uniqueFilename);

// Contenu du CV
$content = "
<center><h1>$nom $prenom</h1></center>
<img src=\"$fileDestination\">
<p class='profil'> $profil </p>
<br>
<h2>Contact</h2>
<br>
<p><ul> Email: $email </ul></p>
<p><ul> Téléphone: $telephone </ul></p>
";
//Formations
$content .= "<h2>Formations</h2>";
for ($i = 1; $i <= 3; $i++) {
    if (!empty($_POST['formation' . $i]) && !empty($_POST['period' . $i]) && !empty($_POST['diplome' . $i])) {
        $content .= "<p>Formation $i:</p>";
        $content .= "<p>- Centre de formation: " . $_POST['formation' . $i] . "</p>";
        $content .= "<p>- Période: " . $_POST['period' . $i] . "</p>";
        $content .= "<p>- Diplôme obtenu: " . $_POST['diplome' . $i] . "</p>";
    }
}
// Compétences
$content .= "<h2>Compétences</h2><ul>";
foreach ($_POST['competences'] as $competence) {
    $content .= "<li>$competence</li>";
}
$content .= "</ul>";
if(!empty($_POST['competence'])){
    $content .= "<h4>Autres compétences: </h4>";
    $content .= "<p>{$_POST['competence']}</p>";
}

// Expériences
$content .= "<h2>Expériences</h2>";

if (!empty($_POST['entreprise1']) && !empty($_POST['periode1']) && !empty($_POST['description1'])) {
    $content .= "<p>Poste 1:</p>";
    $content .= "<p>- Entreprise: " . $_POST['entreprise1'] . "</p>";
    $content .= "<p>- Période: " . $_POST['periode1'] . "</p>";
    $content .= "<p>- Description: " . $_POST['description1'] . "</p>";
}

if (!empty($_POST['entreprise2']) && !empty($_POST['periode2']) && !empty($_POST['description2'])) {
    $content .= "<p>Poste 2:</p>";
    $content .= "<p>- Entreprise: " . $_POST['entreprise2'] . "</p>";
    $content .= "<p>- Période: " . $_POST['periode2'] . "</p>";
    $content .= "<p>- Description: " . $_POST['description2'] . "</p>";
}
if(!empty($_POST['expadd'])){
    $content .= "<h4>Autes expériences: 
                        - {$_POST['expadd']}</h4>";
}
// Langues
$content .= "<h2>Langues</h2><ul>";
foreach ($_POST['langues'] as $langue) {
    $content .= "<li>$langue</li>";
}
$content .= "</ul>";
// Ajout du contenu au document PDF
$pdf->writeHTML($content, true, false, true, true, '');

// Nom du fichier PDF
$filename = 'cv_' . $nom . '_' . $prenom . '.pdf';

// Sauvegarde du PDF sur le serveur
$pdf->Output(__DIR__ . '/uploads/' . $filename, 'F');

// Redirection vers la page de confirmation avec le nom du fichier PDF
header("Location: confirmation.php?filename=$filename");
exit();
?>