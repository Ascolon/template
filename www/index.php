<!DOCTYPE html>
 <?php 
     //require_once('config.php');

    require_once 'Twig/Autoloader.php';
    Twig_Autoloader::register();

    $loader = new Twig_Loader_Filesystem('template');
    $twig = new Twig_Environment($loader);

    $slider = $twig->loadTemplate('slider.html');
    $about = $twig->loadTemplate('about.html');
    $servic = $twig->loadTemplate('services.html');


?>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Услуги строительной техники</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="res/css/bootstrap.css" rel="stylesheet">
    <link href="res/css/min-style.css" rel="stylesheet">
    <script src="res/js/vue.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!--HEADER BEGIN-->
  <div class="container-fluid">
      <div class="row header">
          <div class="col-md-12 top-line"></div>
            <div class="col-md-12 top-head padding">
              <div class="col-md-2 arenda-img">
                  <a href="#"><img src="res/img/logos.png"></a>
              </div>
              <div class="col-md-2 arenda-text">
                  Услуги строительной<br>техники
              </div>
              <div class="col-md-3 col-md-offset-5 adress">
                  г. Москва,  ул.Горького, 25<br>   +7 (495) 228-21-17
            </div>
          </div>
          <div class="col-md-12 menu-head padding">
              <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="col-md-1">
                              <a class="navbar-brand" href="#">
                                <img alt="Brand" src="res/img/log.png">
                              </a>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse col-md-8" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a class="menu-link" href="#">КАТАЛОГ ТЕХНИКИ</a></li>
                                <li><a class="menu-link" href="#">УСЛУГИ</a></li>
                                <li><a class="menu-link" href="#">ВЫПОЛНЕННЫЕ РАБОТЫ</a></li>
                                <li><a class="menu-link" href="#">О КОМПАНИИ</a></li>
                                <li><a class="menu-link" href="#">КОНТАКТЫ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
          </div>
      </div>
  </div>
  <!--HEADER END-->
  
  
  
  
  <!--######################-->
  <!--####----CONTENT---####-->
  <!--######################-->
  <div class="container-fluid">
      <?php
         //Часть карусели
         echo $slider->render(array());
        
         //Часть про технику
         echo $about->render(array());
      
         //Часть про услуги
         echo $servic->render(array());
      ?>
      
      
      
      
      
      
      
      
      
      <div class="container-fluid map-and-footer">
          <div class="row">
              <div class="col-md-12">
                  <iframe src="https://yandex.ru/map-widget/v1/-/CBQxuCDVwA" width="100%" height="400px" frameborder="0"></iframe>
              </div>
          </div>
      </div>
      <div class="row footer">
          <div class="padding">
              <div class="col-md-2 footer-img">
                  <a href="#"><img src="res/img/footer.png"></a>
              </div>
              <div class="col-md-7 footer-menu">
                  <ul class="footer-menu-ul">
                      <li><span class="glyphicon glyphicon-chevron-right"></span><font color="white">Главная</font></li>
                      <li>Каталог техники</li>
                      <li>Услуги</li>
                  </ul>
                  <ul class="footer-menu-ul-second">
                      <li>Выполненые работы</li>
                      <li>О компании</li>
                      <li>Контакты</li>
                  </ul>
              </div>
              <div class="col-md-3 footer-copyright">
                  <div class="col-md-12 itex-copyright">© Aйтекс start 2016</div>
                  <div class="col-md-12"><img class="itex-logo" src="res/img/A.png" alt=""><a href="#">itexstart.ru</a></div>
            </div>
          </div>
      </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/js/main.js"></script>
  </body>
</html>
