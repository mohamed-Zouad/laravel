<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="/show">
        @csrf
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required><br/><br/>
        <label for="prenom">prenom : </label>
        <input type="text" name="prenom" id="prenom" required><br/><br/>
        <label for="ville">ville : </label>
        <input type="text" name="ville" id="ville" required><br/><br/>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password" required><br/><br/>
        <button type="submit">Soumestre</button>
    </form>

</body>
</html>
