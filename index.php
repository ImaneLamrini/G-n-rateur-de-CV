<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création de CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Création de votre CV</h1>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/f484a3fc-d848-430d-b3d8-ac0f482d9da8/egwNVtBe9H.json" background="##fff" speed="1" style="width: 300px; height: 300px" loop  autoplay direction="1" mode="normal"></lottie-player>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <h2>Informations Personnelles</h2>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" maxlength="50" required>
        <br><br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" maxlength="50" required><br>
        <br> <label for="photo">Photo de profil :</label>
        <input type="file" name="photo" id="photo" **name="photo"**><br><br> 
        <label for="descpro">Description de profil:</label>
        <textarea name="descpro" id="descpro" cols="30" rows="10" maxlength="150"></textarea><br> <br>
        <h2>Contact</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
        <br><br>
        <label for="telephone">Téléphone:</label>
        <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}">
        <br>
        
        <h2>Formations</h2>
        <p>Formation 1</p>
        <label for="formation1">Centre de formation:</label>
        <input type="text" name="formation1" id="formation1"><br>
        <br>
        <label for="period1">Période:</label>
        <input type="text" name="period1" id="period1" pattern="[a-zA-Zéûôîçèàù]+ [0-9]{4} à [a-zA-Zéûôîçèàù]+ [0-9]{4}" placeholder="exemple: Janvier 2023 à Janvier 2023"><br>
        <br>
        <label for="diplome1">Diplome obtenu:</label>
        <select name="diplome1" id="diplome1">
            <option value="BAC">BAC</option>
            <option value="DEUG">DEUG</option>
            <option value="DUT">DUT</option>
            <option value="BTS">BTS</option>
            <option value="LICENCE">LICENCE</option>
            <option value="MASTER">MASTER</option>
            <option value="INGENIEUR">INGENIEUR</option>
            <option value="DOTORAT">DOTORAT</option>
            <option value="AUTRE">AUTRE</option>
        </select>
        <br>
        <p>Formation 2</p>
        <label for="formation2">Centre de formation:</label>
        <input type="text" name="formation2" id="formation2"><br>
        <br>
        <label for="period2">Période:</label>
        <input type="text" name="period2" id="period2" pattern="[a-zA-Zéûôîçèàù]+ [0-9]{4} à [a-zA-Zéûôîçèàù]+ [0-9]{4}" placeholder="exemple: Janvier 2023 à Janvier 2023"><br>
        <br>
        <label for="diplome2">Diplome obtenu:</label>
        <select name="diplome2" id="diplome2">
            <option value="BAC">BAC</option>
            <option value="DEUG">DEUG</option>
            <option value="DUT">DUT</option>
            <option value="BTS">BTS</option>
            <option value="LICENCE">LICENCE</option>
            <option value="MASTER">MASTER</option>
            <option value="INGENIEUR">INGENIEUR</option>
            <option value="DOTORAT">DOTORAT</option>
            <option value="AUTRE">AUTRE</option>
        </select>
        <br>
        <h2>Compétences</h2>
        <ul>
            <li><input type="checkbox" name="competences[]" value="HTML"> HTML</li>
            <li><input type="checkbox" name="competences[]" value="CSS"> CSS</li>
            <li><input type="checkbox" name="competences[]" value="JavaScript"> JavaScript</li>
            <li><input type="checkbox" name="competences[]" value="PHP"> PHP</li>
            <li><input type="checkbox" name="competences[]" value="SQL"> SQL</li>
        </ul>
        <textarea name="competence" id="competence" cols="30" rows="10" placeholder="Entrez vos autres compétences"></textarea>
        <h2>Expériences</h2>
        <p>Poste 1</p>
        <label for="entreprise1">Entreprise:</label>
        <input type="text" name="entreprise1" id="entreprise1" maxlength="50"><br>
        <br>
        <label for="periode1">Période:</label>
        <input type="text" name="periode1" id="periode1" pattern="[a-zA-Zéûôîçèàù]+ [0-9]{4} à [a-zA-Zéûôîçèàù]+ [0-9]{4}" placeholder="exemple: Janvier 2023 à Janvier 2023"><br>
        <br>
        <label for="description1">Description:</label>
        <textarea name="description1" id="description1"maxlength="300"></textarea>
        <br>
        <p>Poste 2</p>
        <label for="entreprise2">Entreprise:</label>
        <input type="text" name="entreprise2" id="entreprise2" maxlength="50"><br>
        <br>
        <label for="periode2">Période:</label>
        <input type="text" name="periode2" id="periode2" pattern="[a-zA-Zéûôîçèàù]+ [0-9]{4} à [a-zA-Zéûôîçèàù]+ [0-9]{4}" placeholder="exemple: Janvier 2023 à Janvier 2023"><br>
        <br>
        <label for="description2">Description:</label>
        <textarea name="description2" id="description2" maxlength="300"></textarea>
        <br><br>
        <textarea name="expadd" id="expadd" cols="30" rows="10" maxlength="200"placeholder="Entrez vos autres expériences"></textarea>
        <h2>Langues</h2>
        <ul>
            <li><input type="checkbox" name="langues[]" value="FRANCAIS"> FRANCAIS</li>
            <li><input type="checkbox" name="langues[]" value="ENGLAIS"> ENGLAIS</li>
            <li><input type="checkbox" name="langues[]" value="ARABE"> ARABE</li>
            <li><input type="checkbox" name="langues[]" value="AUTRES"> AUTRES</li>
            </ul>
        <input type="submit" value="Créer mon CV ">
    </form>
</body>
</html>
