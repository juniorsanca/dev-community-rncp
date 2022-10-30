<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>DevCommunity</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/filename') }}">
</head>
<body>

<style>
    body {
        margin: 0;    
    }
    .login{
        width: 100%;
        height: 100vh;
    }
    .login-div1{
        width: 50%
    }
    .login-div2{
        width: 50%
    }
    .login-form {
        margin-top: 20%;
        padding: 20px;
    }
    .register-form{
        margin-top: 7%;
        padding: 20px;
    }
    .login_rebonjour{
        font-size: 50px;
    }
    .login_bonjour{
        font-size: 50px;
    }
    
    .login-btn{
        width: 100%;
        height: 50px;
        background-color: #000000;
        color: #ffffff;
        margin-top: 10px;
    }
    .login-div-email-input-div{
        width: 100%
    }
    .login-div-email-input{
        width: 100%
    }
    .login-div-password-input{
        width: 100%
    }
    .login-div-username-input{
        width: 100%
    }
    #azerty{
        width: 100%;
        height: 50px;
        background-color: #000000;
        color: #ffffff;
        margin-top: 10px;
        margin-bottom: 30px;
    }
    @media only screen and (max-width: 600px){
	/*Big smartphones [426px -> 600px]*/
        .login-div2 {
            width: 100%;
        }
        .login{
            height: 100%;
        }
        .login-form {
            margin-top: 25%;
            padding: 20px;
        }
        #azerty{
            margin-top: 40px
        }
        .login_bonjour{
            margin-top: 20px;
        }
    }
</style>