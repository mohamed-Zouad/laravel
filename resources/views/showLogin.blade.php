<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <form method="post" action="{{route('login')}}">
        @csrf
        <label for="nomuser">Nom D'utilisateur : </label>
        <input type="text" name="nomuser"><br/><br/>
        <label for="password">Mot De Passe : </label>
        <input type="password" name="password"><br/><br/>
        <input type="submit" value="Se Connecter">
    </form>
</body>
</html>
