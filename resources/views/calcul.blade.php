<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/resultcalcul">
        @csrf
        <label for="num1">FirstNumber</label>
        <input type="text" name="num1" placeholder="Enter number "><br/><br/>
        <label for="num2">SecondNumber</label>
        <input type="text" name="num2" placeholder="Enter number"><br/><br/>
        <input type="submit" value="calculer la somme">

    </form>
</body>
</html>
