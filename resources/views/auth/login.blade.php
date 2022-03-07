<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tubill::Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
    </head>

    
    <body>
        <div class="container">
            <div class ="a">
                <div class ="img">
                    <img src="tubill.png" alt="">
                </div>
            </div>
            <div class ="b">
                <div class ="img2">
                    <img src="wel.png" alt="">
                </div>
            
            
                <div class="form"> 
                    <form method="POST" action = "">
                        @csrf 
                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email" placeholder="Email">
                        <span class = text-danger>@error ('email') {{ $message }} @enderror</span>
                        <input id="pass" type="password" class="form-control" name="password"  placeholder="Password">
                        <span class = text-danger>@error ('password') {{ $message }} @enderror</span>
                        <button class="btns" type = "submit">{{ __('Login') }}</button>
                    </form>
                </div>
            </div>
        </div>  
    </body>
</html>