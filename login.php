<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <section class="container d-flex justify-content-center align-items-center" style="height:90vh;">
            <form method="POST" id="loginForm" action="./Controllers/auth.php" class="d-flex align-items-center flex-column justify-content-center">
                <h1>Login</h1>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ingresa email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ingrese contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="./Js/alerts.js"></script>

</html>