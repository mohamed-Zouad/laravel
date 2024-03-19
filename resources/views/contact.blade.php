<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @extends( 'layouts.master' )
    @section('title')
      Contact
    @endsection

    @section('content')


    <form method="post" action="{{route('merciContact')}}">
        @csrf
        @error('name')
        <div style="color:red" >{{ $message }}</div>
         @enderror
        <label for="name">Name : </label>
        <input type="text" name="name"><br/><br/>

        @error('email')
        <div style="color:red">{{ $message }}</div>
        @enderror
        <label for="email">Email : </label>
        <input type="email" name="email"><br/><br/>

        @error('sujet')
        <div style="color:red">{{ $message }}</div>
        @enderror
        <label for="sujet">Sujet : </label>
        <input type="text" name="sujet"><br/><br/>


        @error('message')
        <div style="color:red">{{ $message }}</div>
        @enderror
        <label for="message">Message : </label>
        <textarea name="message" ></textarea><br/><br/>

        <input type="submit" value="Envoyer">
    </form>
    @endsection
</body>
</html>
