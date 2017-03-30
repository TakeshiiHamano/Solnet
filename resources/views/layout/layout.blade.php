<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

  <link rel="icon" href="../img/mtdeveloper.jpg">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="containers">
      <nav class="navbar navbar-default" style="background: #000000; border-color: #000000;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="padding: 0px; padding-top: 10px;"><img src="../img/logo-solnet.png" alt="" style="height: 30px; padding: 0px;"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Nosotros</a></li>
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Soluciones</a></li>
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Testimonios</a></li>
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Proyectos</a></li>
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Clientes</a></li>
              <li><a href="#" style="color:#d6d6d6; font-size: 15px;">Contáctenos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#d6d6d6; font-size: 15px;">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background: #000000;">
                  <li><a href="#" style="color: gray;"></a></li>
                  <li><a href="#" style="color:gray;">Another action</a></li>
                  <li><a href="#" style="color:gray;">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>
<div class="wrapper">
  <div class="arrow animated bounce">
    <div class="figure">
    </div>
  </div>
</div>

@yield('body')
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter">
          <a class="navbar-brand" href="#" style="padding: 0px; padding-top: 10px;"><img src="../img/logo-solnet.png" alt="" style="height: 30px; padding: 0px;"></a>
        </div>
        <br> <br>
        <p><i class="fa fa-map-pin"></i>Platinum Plaza I Calle Dean Valdivia 148, Torre 1, Piso 11 San Isidro, Lima 27.</p>
        <p><i class="fa fa-phone"></i> Teléfono: +51 1 4800651 <br> Movil #977557673 | + 51 975.429.500 CEO.</p>
        <p><i class="fa fa-envelope"></i> E-mail: ventas@solnet.cc</p>
        <br>
      </div>
      <div class="col-md-4 col-sm-6 paddingtop-bottom">
        <h6 class="heading7"></h6>
        <ul class="footer-ul">
          <li><a href="/"> Nosotros</a></li>
          <li><a href="/desarrollo"> Soluciones</a></li>
          <li><a href="/soporte"> Clientes</a></li>
          <li><a href="/gestion"> Proyectos</a></li>
        </ul>
      </div>


      <div class="col-md-4 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Twitter</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">YouTube</a></blockquote>
          </div>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Google Plus</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/javascript.js')}}"></script>
<script src="{{asset('js/jquery.bootpag.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script> 
wow = new WOW
({ boxClass: 'wow', 
  animateClass: 'animated', 
  offset: 0, 
  mobile: true, 
  live: true })
wow.init();
</script>
  
<script>
  $(function() {
    $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
  });
</script>
<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<script>
  $(document).ready(function($) {

  $(window).on('scroll', function() {

    //ADD .TIGHT
    if ($(window).scrollTop() + $(window).height() > $('.wrapper').outerHeight()) {
      $('body').addClass('tight');
    } else {
      $('body').removeClass('tight');
    }
  });

  //BACK TO PRESENTATION MODE
  $("html").on("click", "body.tight .wrapper", function() {
    $('html, body').animate({
      scrollTop: $('.wrapper').outerHeight() - $(window).height()
    }, 500);
  });

});
</script>
</body>
</html> 

