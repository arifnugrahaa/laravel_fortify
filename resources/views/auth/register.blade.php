<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name="name" placeholder="Your Name" value="{{ old('name')}}">

                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password')
                    is-invalid
                @enderror" id="exampleInputPassword1" placeholder="password">
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Password Confirmation</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')
                    is-invalid
                @enderror" id="exampleInputPassword2" placeholder="password confirmation">
            </div>

            <div class="mb-3">
                <input type="submit" value="Register" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>
</html>
