<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Stuvent, uw event voor een student</title>
</head>

<body>
<div class="w3-content w3-section" style="width: 100%"></div>
<img class="mySlides" src="img/img1.png" style="width:100vw">
</div>
<!--Hier is de nav bar-->
<div class="container-fluid ">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <ul>
                <li> <a href="Index.html">Home</a></li>
                <li class="active"><a class="active" href="login.html">Login</a></li>
                <li><a href="signup.html">Registreren</a></li>
                <li><a href="about.html">Over Stuvent</a></li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>




    <div class="register">
        <form class="form-group">
            <br>
            <h2>Inloggen</h2>
            <hr>



            <div class="form-group login">
                <label for="email_address">Studentnummer</label>
                <input type="email" class="form-control" id="email_addr" placeholder="Email address" required>
                <span class="help-block"></span>
            </div>
            <div class="form-group login">
                <label for="password">Wachtwoord</label>
                <input type="password" class="form-control" id="password" placeholder="Wachtwoord"
                       required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <span class="help-block"></span>
            </div>

            <br>

            <button class="btn btn-lg btn-primary btn-block login" type="submit">Log in</button>
        </form>

    </div>


    <script src="script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>

</html>