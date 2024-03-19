<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('form-inscription') }}" method="POST">
        @csrf
        <h2>Confirmation de mot de passe</h2>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-mdright">Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control
@error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color: red">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-mdright">Confirm Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control
@error('password') is-invalid @enderror"
                    name="password_confirmation" required autocomplete="current-password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12 text-center">
                <input type="submit" value="Envoyer !" class="btn btn-primary">
            </div>
        </div>
    </form>
    <ul class="error">
        @foreach ($errors->all() as $error)
            <li style="color: red">{{ $error }}</li>
        @endforeach
    </ul>
    {{session('success')}}
</body>
</html>
