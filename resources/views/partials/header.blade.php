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
    .dash-div{
        width: 100%;
        display: flex;
        background-color: #EFF2F5;
    }
    .dash-div1{
        width: 20%
    }
    .dash-div2{
        width: 50%;
    }
    .dash-div2-component{
        height: 100vh;
        overflow-y: scroll;
    }
    .dash-div3{
        width: 30%
    }
    .dash-div1_profil{
        background-color: #ffffff;
        padding: 20px;
        width: 100%;
        margin: 5px;
        height: 15%;
    }
    .dash-div1_contact{
        background-color: #ffffff;
        padding: 20px;
        width: 100%;
        margin: 5px;
        height: 15%;
    }
    .dash-div2-input{
        width: 100%;
        display: flex;
    }
    .dash-div2-input_textarea {
        width: 80%;
    }
    #textarea{
        width: 100%;
        height: 59px;
    }
    .dash-div2-input_button{
        width: 20%
    }
    .dash-div2-input_button_btn{
        width: 100%;
        height: 100%;
    }
    .dash-div3_actus{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }
    .dash-div3_actu{
        width: 48%;
        height: 100%;
        background-color: #ffffff;
        margin: 2px;
    }
    .dash-div3_actu_img{
        width: 100%;
        height: 48%;
    }
    .dash-div3_actu_title{
        font-size: 30px;
    }
    .dash-div3_actu_img-div{
        padding: 10px;
    }
    .profil-div{
        width: 100%;
        height: 100vh;
        display: flex
    }
    .profil-div1{
        width: 25%;
    }
    .profil-div2{
        width: 45%;
    }
    .profil-div3{
        width: 30%;
        background-color: #eef2f5;
    }
    .profil-div2-header{
        width: 100%;
        height: 40px;
        margin-top: 5px;
        background-color: #ffffff;
    }
    .edit-profil-div1{
        width: 25%;
    }
    .edit-profil-div2{
        width: 45%;
    }
    .edit-profil-div3{
        width: 30%;
        background-color: #eef2f5;
    }
    .edit-profil-div2{
        margin: 20px; 
        padding: 20px; 
        background-color: #fff;
    }
    .profil-image{
        background-color: #000000
    }

    @media only screen and (max-width: 1200px){
        .dash-div1{
            display: none
        }
        .dash-div3{
            display: none
        }
        .dash-div2{
            width: 100%
        }
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
        .dash-div1{
            display: none
        }
        .dash-div3{
            display: none
        }
        .dash-div2{
            width: 100%
        }
        .profil-div1{
            display: none
        }
        .profil-div2{
            width: 100%
        }
        .profil-div3{
            display: none
        }
        .profil-image{
            height: 100%;
            width: 100%;
        }
        .edit-profil-div1{
            display: none
        }
        .edit-profil-div3{

        }
        .edit-profil-div3{
            display: none
        }
        .edit-profil-div2 {
            width: 100%;
        }
        .edit-profil-div2{
            margin: 0
        }
        .form-control{
            width: 100%
        }
    }
</style>