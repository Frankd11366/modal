<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@100..700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Bienvenido al:</h1>

    <div id="imagen">
        <img src="./autocom.png">

    </div>

    <div id="formulario">
        <button type="button" class="m-5 btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ingresa tus datos
        </button>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Porfavor ingresa tus datos personales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Grado</label>
                            <input type="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellidos</label>
                            <input type="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Catálogo</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" href="./index.php">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>