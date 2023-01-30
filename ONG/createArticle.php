<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abraraw</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="../ONG/css.css/Blogs.css">
    <link rel="stylesheet" href="../ONG/css.css/estilo.css">


</head>

<body>


    <div class="wrapper">
        <div class="sidebar">
            <img src="../ONG/ongimg/img2.jpg" alt="abraraw4@gmail.com" class="logo">
            <ul>
                <li><a href="../ONG/index.html"><i class="fas fa-home"></i>Home</a></li>
                <!-- <li><a href="#"><i class="fas fa-user"></i>Profile</a></li> -->
                <li><a href="../ONG/createArticle.html"><i class="fas fa-address-card"></i>Create Article</a></li>
                <!-- <li><a href="#"><i class="fas fa-project-diagram"></i>portfolio</a></li> -->
                <li><a href="../ONG/Blogs.html"><i class="fas fa-blog"></i>Blogs</a></li>
                <li><a href="../ONG/contacto.html"><i class="fas fa-address-book"></i>Contact</a></li>
                <!-- <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li> -->
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>

            </div>
        </div>


        <!-- 
            $autor = $_POST["autor"];
            $fecha = $_POST["fecha"];
            $adjuntar = $_POST["adjuntar"];
            $titulo = $_POST["titulo"];
            $textArticle = $_POST["textArticle"];
         -->



        <div class="main_content">
            <div class="tus_articulos_new_article">
                <h1>CREAR ARTICULO</h1>
            </div>

            <form action="../ONG/ClassArticle/ClassStudent.php" method="post" id="consulta">

                <div class="centro_inputs">
                    <div class="caja_momento">
                        <input type="file" class="create_article_adjuntar" name="adjuntar" id="consulta">
                    </div>
                    <div class="caja_nombre">
                        <input type="text" placeholder="Nombre de autor" name="autor" class="create_article_author" id="consulta">
                    </div>
                    <div class="caja_nombre">
                        <input type="text" placeholder="Apellido de Autor" name="apellido" class="create_article_author" id="consulta">
                    </div>

                    <div class="caja_titulo">
                        <input type="text" placeholder="Titulo del articulo" name="titulo" class="create_article_titular" id="consulta">
                        <input type="text" placeholder="Subtitulo del articulo" name="subtitulo" class="create_article_titular" id="consulta">
                    </div>

                    <div class="caja_texto">
                        <textarea name="textArticle" id="info_input_text_area" cols="30" rows="10" id="consulta"></textarea>
                    </div>

                    <div class="caja_button">
                        <input type="submit" value="Confirmar" name="btn1" class="button_confirmar" id="consulta" onclick="validateArticle()"></input>
                        <input type="submit" value="Cancelar" name="btn2 " class="button_cancelar"></input>
                    </div>

                </div>
            </form>


        </div>
    </div>
    <script src="../ong/JS/app.js"></script>
</body>



    <!-- //administrador
//lector
//periodista -->

</html>