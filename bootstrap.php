<!DOCTYPE html>
<html lang="es">

<head>
  <!--Mostrar caracteres especiales-->
  <meta charset="UTF-8">
  <!---->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Para garantizar una representacion adecuada y el zoom tácti-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Titulo de mi pàgina-->
  <title>Aprendiendo Bootstrap</title>
</head>

<body>
  <header>
    <!--Navehgaciòn en bootstrap-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Percy Edgar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!--El cuerpo-->
  <main>
    <div class="container-fluid p-5 bg-primary text-white text-center">
      <h1>Sistema Percy Edgar</h1>
      <p>Proyecto en desarrollo ...</p>
    </div>

    <div class="container mt-5 ">
      <div class="row">
        <div class="col-sm-4 bg-success rounded">
          <h3 class="text-center">Conociendo PHp</h3>
          <p>PHP ES un lenguaje de programación de código abierto del lado del servidor que se utiliza principalmente para crear páginas web dinámicas. La abreviatura nació originariamente de “Personal Home Page Tools”, aunque hoy en día se ha convertido en el acrónimo recursivo para “PHP:Hypertext Preprocessor”</p>
        </div>
        <div class="col-sm-4 bg-warning rounded">
          <h3 class="text-center">PHP Conéctese a MySQL</h3>
          <p>Ejemplo ( MySQLi Processional )</p>
          <p class="text-white text-center bg-dark rounded">
            <!--Aquí realizamos la conexion -->
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
            // Check connection
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }
            echo "Conexion Exitosa";
            ?>
          </p>
        </div>
        <div class="col-sm-4 rounded bg-info">
          <h3 class="text-center">Lo que ya debes saber</h3>
          <p>Antes de continuar, debe tener una comprensión básica de lo siguiente:</p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
          </ul>
        </div>
      </div>
    </div>
    <section class="row">
      <section class="col">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est blanditiis perspiciatis minima quis suscipit omnis ut veritatis? Ipsum sint, architecto ad beatae pariatur, modi sunt officiis voluptas a odio quasi.</p>
      </section>
      <section class="col"></section>
    </section>

    <!--Lista no enumerada-->
    <p class="text-success">Lista no enumerada</p>
    <ul>
      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
    </ul>
    <!--Lista enumerada-->
    <p class="text-success">Lista enumerada</p>
    <ol>
      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
      <li>Lorem ipsum dolor sit amet consectetur adipisicing elit</li>
    </ol>
    <table class="table-bordered">
      <thead>
        <tr>
          <th>N°</th>
          <th>Nombre</th>
          <th>Apellidos</th>
        </tr>
      </thead>
      <td>76358945</td>
      <td>Percy Edgar</td>
      <td>Quispe Q.</td>
      <tbody>

      </tbody>
    </table>
    </section>
  </main>
  <footer></footer>
</body>

</html>