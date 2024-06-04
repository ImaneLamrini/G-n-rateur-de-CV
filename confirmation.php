<?php
// Récupération du nom du fichier PDF depuis l'URL
$filename = $_GET['filename'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Téléchargement du CV</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Votre CV est prêt à être téléchargé</h1>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/7f847776-b7f3-447e-81dc-c3ad1c393f8d/PUd4FOnztz.json" background="##fff" speed="1" style="width: 300px; height: 300px;" loop autoplay direction="1" mode="normal"></lottie-player>
    <p>Cliquez sur le lien ci-dessous pour télécharger votre CV :</p>
    <a href="uploads/<?php echo $filename; ?>" download>Télécharger mon CV</a>
</body>
</html>
