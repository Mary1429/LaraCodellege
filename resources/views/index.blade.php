<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous">
    </script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="carousel.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Sweet's Reposteria</title>
</head>
<body>
        <nav class="navbar navbar-light" id="barra">
                <a class="navbar-brand" href="#" id="logo">
                  <img  src="img/logosweetsreposteria.jpeg" width="30" height="30">
                </a>
                <a href="#">Inicio</a>
                <a href="#productos">Productos</a>
                <a href=""><img src="img/name.PNG" alt="" height="45"></a>
                <a href="#contactos">Contactos</a>
                <a href="#nosotros">Nosotros</a>
                <a href="/login">Login</a>
              </nav>

              <div id="barra2">
              <a id="menu_on">
                <span></span>
                <span></span>
                <span></span>
              </a>
              <img src="img/name.PNG" alt="" height="30" style="margin: auto"/>
              <nav id="nav2">
                  <ul>
                    <li><a class="menu" href="#">Inicio</a></li>
                    <li><a class="menu" href="#productos">Productos</a></li>
                    <li><a class="menu" href="#contactos">Contactos</a></li>
                    <li><a class="menu" href="#nosotros">Nosotros</a></li>
                  </ul>
                </nav>
              </div>


              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="img/c1.jpg" alt="Chania" style="height:715px;">
                        <div class="carousel-caption">
                          <h3>Pasteles</h3>
                          <p>Gran variedad de pasteles para todo tipo de eventos especial: compleaños, bodas, despedidas, etc...</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/c2.jpg" alt="Chicago" style="height:715px;">
                        <div class="carousel-caption">
                          <h3>Cupcakes</h3>
                          <p>Cupcakes de gran variedad de sabores y decoraciones...</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/c3.jpg" alt="New York" style="height:715px;">
                        <div class="carousel-caption">
                          <h3>Postres</h3>
                          <p>Ofresemos una gran variedad de postres...</p>
                        </div>
                      </div>
                    </div>

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                  <div class="parallax"></div>

                  <div class="div1">
                    <div class="container" id="productos">
                      <div class="row">
                        <div class="col-6">
                            <h1>La mejor reposteria</h1>
                        </div>

                        <div class="col-3 prod div-img" >
                          <img class="img" src="img/pay.PNG" title="pay" alt="pay" width="100%">
                          <p class="text">Pastel carajillo</p>
                        </div>
                        <div class="col-3 prod div-img">
                            <img src="img/pastelchocolate.PNG"  class="imagenanimeUi imageborder ima2 ImgR img" alt="" width="100%">
                            <p class="text">Nutellisimo</p>
                        </div>


                        <div class="col-6">
                          <h3 id="inSweet" >En Sweet's Reposteria podras encontrar gran variedad de postres como pasteles, cupcakes, gelatinas, galletas, trufas, chocolateria y mas...</h3>
                          <a href="Productos.html"><img src="img/row.png" alt="" width="30%"></a>
                      </div>
                      <div class="col-3 prod div-img">
                          <img src="img/pastel2.PNG" alt="pay"class="imagenanimeDd ima3 ImgR img" width="100%">
                          <p class="text">Frutadiccion</p>
                      </div>
                      <div class="col-3 prod div-img">
                          <img src="img/nose.PNG" alt="" class="imagenanimeDi ima4 ImgR img" width="100%">
                          <p class="text">Jellorange</p>
                      </div>

                      </div>
                  </div>
                </div>

                  <div class="parallax"></div>

                  <div class="div1">
                  <div class="container" id="nosotros">
                    <div class="row">
                      <div class="col-2">

                      </div>
                      <div class="col-8" >
                        <h2>Nosotros</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum doloribus est esse officia laudantium optio dicta, pariatur ducimus aliquid hic neque quibusdam, nemo ratione error dolor! Laborum labore cupiditate aut!
                        Assumenda recusandae a, debitis rem unde dolorem nobis eaque consequatur id ullam eius laudantium iste labore temporibus ad. Veritatis nemo in numquam a sapiente repellat perspiciatis ea quisquam tenetur laborum?
                        Ratione eaque laudantium aut aperiam modi eum ipsum possimus aspernatur hic suscipit quisquam nihil tempore optio velit corrupti ipsa, sapiente odit delectus. Voluptatum impedit itaque ipsam quis aut dolores ab.
                        Numquam quos itaque ratione suscipit. Quibusdam quis asperiores beatae iste! Iusto facilis delectus explicabo, obcaecati repudiandae quas, qui officia cum exercitationem nulla distinctio facere cupiditate eligendi voluptatibus corporis doloribus tempora?
                      </h3>
                      </div>
                      <div class="col-2">

                      </div>
                    </div>
                  </div>
                </div>

                  <div class="parallax"></div>

                  <div class="div1">
                    <div class="container">
                        <div class="row">
                          <div class="col-1">

                          </div>
                          <div class="col-10" id="contactos">
                              <div id="contact">
                                <h2 class="cont">Contactanos</h2>
                                <h4 class="cont"><p>Av. Eugenio Garza Sada, Av. Ciencia y Tecnología 902, 20328 Pocitos, Ags.</p><p><hr></p><p>priskartz@gmail.com</p><p>+52 449 654 8732</p></h4>
                              </div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.139514623804!2d-102.34108998551513!3d21.929187385517565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429efd3cb91a13f%3A0xa3ef12cfa3d78da5!2sSofttek!5e0!3m2!1ses-419!2smx!4v1572896526230!5m2!1ses-419!2smx" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                          </div>
                          <div class="col-1">

                          </div>
                        </div>
                      </div>
                    </div>
                    <footer>
                      <p>Posted by: Softtek</p>
                      <p>Contact information: <a href="mailto:someone@example.com">
                        priskartz@gmail.com</a>.</p>
                      <p> </p>
                    </footer>
  </body>
</html>
