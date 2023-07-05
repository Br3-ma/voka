<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;100&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <script>
        // Hide the preloader when the page finishes loading
        window.addEventListener('load', function() {
            var preloader = document.querySelector('.preloader');
            preloader.style.display = 'none';
        });
    </script>
    <style>
        /* Styling for the preloader */
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: #fff;
          display: flex;
          justify-content: center;
          align-items: center;
          z-index: 9999;
        }
        .spinner {
            margin: 100px auto;
            width: 40px;
            height: 40px;
            position: relative;
        }
    
        .cube1, .cube2 {
            background-color: #333;
            width: 15px;
            height: 15px;
            position: absolute;
            top: 0;
            left: 0;
            
            -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
            animation: sk-cubemove 1.8s infinite ease-in-out;
        }
    
        .cube2 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }
    
        @-webkit-keyframes sk-cubemove {
            25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
            50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
            75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
            100% { -webkit-transform: rotate(-360deg) }
        }
    
        @keyframes sk-cubemove {
        25% { 
            transform: translateX(42px) rotate(-90deg) scale(0.5);
            -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
        } 50% { 
            transform: translateX(42px) translateY(42px) rotate(-179deg);
            -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
        } 50.1% { 
            transform: translateX(42px) translateY(42px) rotate(-180deg);
            -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
        } 75% { 
            transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
            -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
        } 100% { 
            transform: rotate(-360deg);
            -webkit-transform: rotate(-360deg);
        }
        }

        /* Shake effect */
        @keyframes shake {
            0% { transform: translateX(0); }
            20% { transform: translateX(-10px); }
            40% { transform: translateX(10px); }
            60% { transform: translateX(-10px); }
            80% { transform: translateX(10px); }
            100% { transform: translateX(0); }
        }

        .shake {
            animation: shake 0.5s;
        }
        .PillList-item {
cursor: pointer;
display: inline-block;
float: left;
font-size: 14px;
font-weight: normal;
line-height: 20px;
margin: 0 12px 12px 0;
text-transform: capitalize;
}

.PillList-item input[type="checkbox"] {
display: none;
}
.PillList-item input[type="checkbox"]:checked + .PillList-label {
background-color: #1da1f2;
border: 1px solid #1da1f2;
color: #fff;
padding-right: 16px;
padding-left: 16px;
}
.PillList-label {
border: 1px solid #1da1f2;
border-radius: 20px;
color: #1c94e0;
display: block;
padding: 7px 28px;
text-decoration: none;
}
.PillList-item
input[type="checkbox"]:checked
+ .PillList-label
.Icon--checkLight {
display: inline-block;
}
.PillList-item input[type="checkbox"]:checked + .PillList-label .Icon--addLight,
.PillList-label .Icon--checkLight,
.PillList-children {
display: none;
}
.PillList-label .Icon {
width: 12px;
height: 12px;
margin: 0 0 0 12px;
}
.Icon--smallest {
font-size: 12px;
line-height: 12px;
}
.Icon {
background: transparent;
display: inline-block;
font-style: normal;
vertical-align: baseline;
position: relative;
}
*{
    margin: 0;
    padding: 0;
    outline: none;
}

body{
    width: 100vw;
    height: 100vh;
	font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
    background: #f8f8f8;
    background: linear-gradient(to right, #ffffff , #f5f4f7);
}

.login{
    min-height:500px;
    width: 60%;
    height: 80%;
    position: absolute;
    left: 50%;
    top: 50%;
    display: flex;
    border-radius: 5px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    background-color: #fafafa;
}

.main-login{
    width: 60%;
    height: 100%;
    text-align: center;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
    background-color: rgb(255, 255, 255);
}

@media only screen and (max-width: 1000px) {
    .main-login {
      width: 100%;
      border-radius: 5px;
    }
    .banner{
        display: none;
    }
    .main-login h1{
        font-size: 25px;
    }
    .facebook{
        font-size: 13px;
    }
  }

  @media only screen and (max-width: 600px) {
    .login{
        width: 100%;
        height: 100%;
        margin-top: 25px;
    }
    .main-login {
      width: 100%;
      border-radius: 5px;
    }
    .banner{
        display: none;
    }
    .main-login h1{
        font-size: 25px;
    }
    .facebook{
        font-size: 13px;
    }
  }

.main-login h1{
    color: #610069;
}

.put{
    max-width: 300px;
    width: 60%;
    height: 40px;
    color: #1e1325;
    background-color: rgb(234, 234, 234);
    outline: none;
    border-radius: 3px;
    margin: 0 auto;
    margin: 10px;
    padding-left: 10px;
    border: 2px solid transparent;
    transition: .4s;
}

.put:not(:placeholder-shown) > .sub{
    background-color: #55be9b;
    color: rgb(234, 234, 234);
}

.sub:hover{
    background-color: #a055be;
    color: rgb(234, 234, 234);
}
.subgmail:hover{
    background-color: #ff0000;
    color: rgb(234, 234, 234);
}
.subfb:hover{
    background-color: #0c0a8d;
    color: rgb(234, 234, 234);
}

.main-login .put:not(:placeholder-shown){
    border-bottom: 2px solid #ac55be;
}

.sub{
    max-width: 310px;
    width: 62%;
    height: 40px;
    color: #ffffff;
    background-color: rgb(68, 5, 87);
    outline: none;
    border-radius: 3px;
    margin: 0 auto;
    margin: 10px;
    border: 2px solid transparent;
    transition: .4s;
    cursor: pointer;
}

.subgmail{
    max-width: 310px;
    width: 62%;
    height: 40px;
    color: #ffffff;
    background-color: rgb(204, 47, 47);
    outline: none;
    border-radius: 3px;
    margin: 0 auto;
    margin: 10px;
    border: 2px solid transparent;
    transition: .4s;
    cursor: pointer;
}

.subfb{
    max-width: 310px;
    width: 62%;
    height: 40px;
    color: #ffffff;
    background-color: rgb(52, 38, 235);
    outline: none;
    border-radius: 3px;
    margin: 0 auto;
    margin: 10px;
    border: 2px solid transparent;
    transition: .4s;
    cursor: pointer;
}

.main-login input::placeholder{
    color: #55be9b8f;
}

.pass{
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 500;
    font-size: 15px;
    color: #753f95;
    text-decoration: none;
    display: flex;
    width: fit-content;
    margin-left: 20%;
}

.shw{
    position: absolute;
    border-radius: 5px;
    z-index: 2;
    border: none;
    cursor: pointer;
    color: #1b1b1b;
    background-color: transparent;
    transform: translateX(-55px) translateY(22px);
}

.banner{
    width: 40%;
    height: 100%;
    text-align: center;
    color: aliceblue;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    background-color: #9642b8;
    /* background-color: rgb(255, 189, 127); */
}

.banner h4{
    width: 80%;
    z-index: 100 !important;
    margin: 0 auto;
    font-family: 'Roboto', sans-serif;
}

.p-b{
    color: #e5e5e5;
    margin-bottom: 3px;
    font-family: 'Roboto', sans-serif;
}

.lines{
    margin-top: 20px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
}

.line{
    width: 50px;
    height: 1px;
    margin: 5px;
    background-color: #e5e5e5;
}

.pp{
    margin-top: 10px;
}

.contain{
    z-index: 100 !important;
    position: absolute;
}

.google{
    display: flex;
    margin: 0 auto;
    margin-top: 20px;
    justify-content: center;
    align-items: center;
}

.facebook{
    display: flex;
    margin: 0 auto;
    margin-top: 20px;
    justify-content: center;
    align-items: center;
    color:white;
    background-color: #1778F2;
}

.logo2{
    width: 40px;
    height: 100%;
    background-image: url("https://github.com/ixl-math/imgs/blob/main/facebook-7-512%20(2).png?raw=true");
    background-size: 18px;
    background-position: center;
    background-repeat: no-repeat;
}

.logo{
    width: 40px;
    height: 100%;
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png");
    background-size: 18px;
    background-position: center;
    background-repeat: no-repeat;
}

.main-btn{
    width: 130px;
    padding: 10px;
    margin-top: 15px;
    color: aliceblue;
    cursor: pointer;
    border-radius: 50px;
    border: 2px solid aliceblue;
    background-color: transparent;
    transition: .4s;
}

.main-btn:hover{
    background-color: #a055be;
}

.top{
    width: 100%;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
}

.top button {
    margin: 5px;
    padding: 5px;
    cursor: pointer;
    transition: .6s;
    color: #55be9b;
    background-color: transparent;
    border: 3px solid transparent;
    outline: none;
}

.top button:hover {
    border-bottom: 3px solid #9755be;
}

.blob:nth-child(1){
    position: absolute;
    bottom: 0;
    right: 0;
    width: 200px;
    height: 200px;
    z-index: 1;
    border-top-left-radius: 100%;
    background-color: #ddc0ee;
}

.blob:nth-child(2){
    top: 0;
    left: 0;
    width: 100px;
    height: 100px;
    z-index: 1;
    border-bottom-right-radius: 100%;
    background-color: #682f74;
} 
</style>
</head>

<body>
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <div class="text-primary">
        <div class="border py-3 px-6">
            <div class="flex justify-between" style="padding: 2%">
                <a href="{{ route('welcome') }}"  class="flex d-flex items-center justify-content-center justify-center">
                    <img width="50" class="text-red-500" src="{{ asset('public/img/logo.png') }}">
                </a>
            </div>
        </div>
    </div>
    <main class="login">
        <div class="main-login">
            <div class="top">
                {{-- <button>Sign In</button><button>Sign Up</button> --}}
            </div>
            <x-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <h4 style="color: #17011b">Log in or sign up below</h4>
                    <br>
                    <small style="color:#a09999;margin-top:5px; margin-bottom:5px">
                        By continuing, you agree to Vookamba’s <a href="#">Terms of Service</a> and<br> acknowledge
                        Vookamba’s <a href="#">Privacy Policy</a>.
                    </small>
                </div>
                <br>
                <input class="usr put" placeholder="Email or Username" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <br>
                <input id="pass" class="pss put" placeholder="Password" type="password" name="password" required autocomplete="current-password" >
                <button id="bhde" onclick="show()" class="shw" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </button>
                @if (Route::has('password.request'))
                    <a class="pass" href="{{ route('password.request') }}">Forgot Password</a>
                @endif
                <button id="btn" class="sub" type="submit" >Log In</button>
                <div class="lines">
                    <div style="background-color: #a5a5a5;" class="line"></div>
                        <p style="color: #a5a5a5;" class="p-b">or</p>
                        <div style="background-color: #a5a5a5;" class="line"></div>
                    </div>
                    <a style="border: 2px solid;" id="btn" class="subfb pic facebook"><div class="logo2"></div>Sign in with Facebook</a>
                    <a style="border: 2px solid;" id="btn" class="subgmail pic google"><div class="logo"></div>Sign in with Google</a>
                </div>
            </form>
            <div class="banner">
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="contain">
                    <h1>Welcome Back!</h1>
                    <h4>We are happy to have you back, please sign back in to continue</h4>
                    <div class="lines">
                        <div class="line"></div>
                        <p class="p-b">or</p>
                        <div class="line"></div>
                    </div>
                    <p class="pp">Dont have an account don't worry</p>
                    <br>
                    <a href="{{ route('register') }}" style="margin-top:10px" class="main-btn">Sign Up today</a>
                </div>
            </div>
    </main>

    <script>
        function show() {
            var x = document.getElementById("pass");
            var y = document.getElementById("bhde");
            if (x.type === "password") {
                x.type = "text";
                y.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">\
                        <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>\
                        <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>\
                        <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>\
                    </svg>';
             } else {
                x.type = "password";
                y.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">\
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>\
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>\
                    </svg>';
            }
        }
    </script>
</body>
</html>