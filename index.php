<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <!-- scroll reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Sistema de logeo - CRUD</title>
</head>

<body>
    <header class="container-fluid bg-dark">
        <nav class="navbar sticky-top justify-content-between align-content-center">
            <a class="navbar-brand text-center text-white" href="index.php">LOGIN</a>
            <div class="btn-group">
                <a class="btn btn-outline-info nav-link active text-white" href="#">Login</a>
                <a class="btn btn-outline-info nav-link text-white" href="#">Registro</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="d-flex justify-content-center mt-5 ">
            <div class="col-4 border text-center rounded m-5">
                <h1><i class="fas fa-user-tie"></i></h1>
                <form action="form-group p-5">
                    <input type="text" name="user" placeholder="Usuario" class="pl-2">
                    <input type="password" name="password" placeholder="Contraseña" class="mt-3 pl-2"><br>
                    <button type="submit" value="1" class="btn btn-info mt-3 mb-3">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid fixed-bottom">
        <div class="d-flex justify-content-between">
            <div class="col-6 pb-3 pl-5">Produced by | ProgrammingWorld 2019</div>
            <div class="col-6 pb-3 pr-5 text-right">
                <i class="fab fa-facebook text-black"></i>
                <i class="fab fa-youtube text-black"></i>
                <i class="fab fa-instagram text-black"></i>
                <i class="fab fa-whatsapp text-black"></i>
            </div>
        </div>
    </div>

    <!-- sripts bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>