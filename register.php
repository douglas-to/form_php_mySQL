<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <script src="bootstrap/js/bootstrap.min.js" defer></script>
    <title>Form PHP com mySQL</title>
</head>
<body>
    <div class="container mt-5 auth-credentials m-b-xxl">
        <form action="php/signupform-process.php" method="post">

            <div class="form-group mb-4">
                <input name="userName" type="text" class="form-control" placeholder="Coloque seu nome"/>
            </div>

            <div class="form-group mb-4">
                <input name="userEmail" type="email" class="form-control" placeholder="examplo@cotadorprime.com.br"/>
            </div>

            <div class="form-group mb-4">
                <input name="userPassword" type="password" class="form-control mt" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679"/>
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary">Cadastre-se</button>  
            </div>   
        </form>
    </div>
</body>
</html>