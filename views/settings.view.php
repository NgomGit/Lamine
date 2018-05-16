
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/settings.css"/>
    
</head>
<body>
     <form method="POST" action="../actions/settings.action.php">
    
        <filedset>
            <legend> Parametres de votre profile </legend>
    
            <input type="text" name="numero" id="numero" placeholder="Numero de Telephone"  required />
            <input type="text" name="date_naiss" id="date_naiss" placeholder="Date de Naissance " required />
           
            <label>
                Sexe 
            </label>
                <select name="sexe">
                    
                    <option name="feminin" value="f"> F </option>
                    <option name="masculin" value="m">M </option>
                    
                </select>

        </filedset><br/><br/>

        <input type="submit" name="envoyer" id="envoyer" value="Completer mon profile" /><br/><br/>
        
        <a href="profile.view.php">Pas maintenant </a>
        


     </form>


</body>
</html>