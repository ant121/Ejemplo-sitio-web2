<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Datos Estudiante</title>
</head>
<body>
<B></B>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <center>
                        <h3 class="display-5 titulos">Datos del Estudiante</h3>
                        </center>
                            <?php
                                $nombre=$_POST['txtnombre'];
                                $apellido=$_POST['txtapellido'];
                                $codigo=$_POST['txtcodigo'];
                                $email=$_POST['txtemail'];
                                $celular=$_POST['txtcelular'];
                                $genero=$_POST['txtgenero']; 
                                $target_path = "uploads/";
                                $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
                                echo "<p>";          
                                echo "<B>Nombres: </B>";
                                echo $nombre;
                                echo "<br/> <B>Apellidos: </B>";
                                echo $apellido;
                                echo "<br/> <B>Código del Estudiante: </B>";
                                echo $codigo;
                                echo "<br/> <B>e-mail: </B>";
                                echo $email;
                                echo "<br/> <B>Celular: </B>";
                                echo $celular;
                                echo "<br/> <B>Género: </B>";
                                echo $genero;
                                echo "<br/> <B>Foto: </B> <br/>";
                                if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
                                    $file_name=$_FILES['uploadedfile']['name'];
                                    echo "<img src='uploads/$file_name' >";
                                } else{
                                echo "Ha ocurrido un error, trate de nuevo!";
                                }

                                echo "<br/> <B>Estudia Actualmente: </B>";
                                if(isset($_POST['VEstudiar'])=="Estudios"){
                                    echo "Si";
                                }else{
                                    echo "No";
                                }
                                echo "</p>";
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
