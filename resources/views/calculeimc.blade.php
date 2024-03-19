<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Calcul De l'indice De Masse Corporelle (IMC) </h1><br/><be/>
    <form action="POST" action="/resultcalculimc">
        @csrf
        <label for="poids">Poids (en kg)</label>
        <input type="text" name="poids" required><br/><br/>
        <label for="taille">Taille (en m)</label>
        <input type="text" name="taille" required><br/><br/>
        <input type="submit" value="Calculer L'IMC">
    </form>
</body>
</html>
