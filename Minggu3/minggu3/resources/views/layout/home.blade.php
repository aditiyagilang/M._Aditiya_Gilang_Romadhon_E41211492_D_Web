<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="navbar-item">
                <div class="logo">

                </div>
                <div class="navigasi">

                </div>
                <div class="hamburger">

                </div>
            </div>
        </div>
        <div class="content"></div>
        <div class="footer"></div>
    </div>
</body>
</html>

<style>
    .container{
        width: auto;
        height: 2000px;
        position: relative;
    }

    .navbar{
        height: 50px;
        background-color: aqua;
        justify-content: center;
    }

    .navbar-item{
        display: flex;
    }

    .logo{
        position: relative;
        top: 10%;
        left: 10%;
        height: 40px;
        width: 40px;
        margin-right: 100px;
        background-color: blue;
    }

    .navigasi{
        position: relative;
        height: 40%;
        width: 60%;
        background-color: blue;
    }

    .hamburger{

    }
    
    .content{
        width: 100%;
        height: 1700px;
        background-color: blueviolet;
    }

    .footer{
        width: 100%;
        height: 200px;
        background-color: yellow;
    }
   
</style>