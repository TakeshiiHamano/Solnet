@extends('layout.layout')
@section('title')
    Solnet
@stop
@section('body')
<section class="presentation">
	<div class="row">
		<div class="col-sm-4 wow bounceInDown">
			<figure class="img-figure">
				<img src="../img/quienes.png" alt="">
			</figure>
			<div class="texto">
				<h2><span style="color:black;">Quiénes </span>somos?</h2>
				<p>SolNet entiende las necesidades de nuestros clientes atendiendo la vertical Educación, con soluciones Ruckus WiFi Inteligente y Superior, soluciones de conferencias Web, colaboración, Campus virtual.</p>
			</div>
		</div>
		<div class="col-sm-4 wow bounceInDown">
			<figure class="img-figure">
				<img src="../img/mision.png" alt="">
			</figure>
			<div class="texto">
				<h2>Misión</h2>
				<p>"Entreguemos Valor y Oportunidades a los Negocios de nuestros Clientes".</p>
			</div>
		</div>
		<div class="col-sm-4 wow bounceInDown">
			<figure class="img-figure">
				<img src="../img/vision.png" alt="">
			</figure>
			<div class="texto">
				<h2>Visión</h2>
				<p>"Ser reconocidos por nuestros clientes como la empresa que le da confianza en Soluciones de Tecnología de la Información".</p>
			</div>
		</div>
	</div>
</section>
<section class="tools">
	<h1>Soluciones</h1>
	<div class="row wow fadeInLeft">
		<div class="col-sm-12 col-md-6 box">
			<figure class="img-figure">
				<img src="../img/ruckus.png" alt="">
			</figure>
			<div class="texto">
				<h2>Ruckus Wireless</h2>
				<p>Proveemos productos Ruckus, nombrada Pionero de la Tecnologia por el Foro Económico Mundial, los productos Ruckus Wireless son ampliamente reconocidos por desarrollar la industria del primer Smart tecnología Wi-Fi.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 box">
			<figure class="img-figure">
				<img src="../img/conferencia.jpg" alt="">
			</figure>
			<div class="texto">
				<h2>Greenberry</h2>
				<p>Proveemos soluciones de e-learning y colaboración, Campus Virtual y Video Conferencia empleando tecnología innovadora, y trabajando junto a nuestros clientes para construir la mejor experiencia educativa.</p>
			</div>
		</div>
	</div>
	<div class="row wow fadeInRight">
		<div class="col-sm-12 col-md-6 box">
			<figure class="img-figure">
				<img src="../img/hotel.png" alt="">
			</figure>
			<div class="texto">
				<h2>Hotelería</h2>
				<p>Puedes invertir muchísimo en habitaciones elegantes y sofisticados ambientes. Pero si los huéspedes no tienen una conexión inalámbrica continua, para todos sus dispositivos y aplicaciones multimedia, en cada rincón del hotel, no volverán.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 box">
			<figure class="img-figure">
				<img src="../img/video.png" alt="">
			</figure>
			<div class="texto">
				<h2>Video Vigilancia</h2>
				<p>Brindamos el servicio de implementación de video vigilancia con toda la seguridad y transparencia que la empresa le ofrece.</p>
			</div>
		</div>
	</div>
</section>
<section class="testimonials">
	<h1>Testimonios</h1>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-color: black;"></li>
        <li data-target="#myCarousel" data-slide-to="1" style="border-color: black;"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active wow fadeInDown">
          <div class="container-testimonials">
            <div class="carousel-capttion">
              <div class="row carousel-rows">
              	<div class="col-md-6 col-sm-12 carousel-col">
              		<div class="row carousel-row">
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-fig">
								<img src="../img/team/takeshi.png" alt="" style="height: 200px;">
							</figure>
              			</div>
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-figure">
								<img src="../img/comillas.png" alt="">
							</figure>
							<div class="texto">
								<h2>Ernesto Perez</h2>
								<h3>CEO Rapid</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident eum optio, labore, odit id aut voluptas temporibus, molestias accusamus nobis illo odio mollitia itaque veritatis sequi! Nisi, praesentium illum?</p>
							</div>
              			</div>	              		
					</div>
              	</div>
              	<div class="col-md-6 col-sm-12 carousel-col">
	              	<div class="row carousel-row">
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-fig">
								<img src="../img/team/takeshi.png" alt="" style="height: 200px;">
							</figure>
              			</div>
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-figure">
								<img src="../img/comillas.png" alt="">
							</figure>
							<div class="texto">
								<h2>Rodrigo Balta</h2>
								<h3>CEO Transper</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident eum optio, labore, odit id aut voluptas temporibus, molestias accusamus nobis illo odio mollitia itaque veritatis sequi! Nisi, praesentium illum?</p>
							</div>
              			</div>	              		
					</div>
              	</div>
              </div>
            </div>
          </div>
        </div>
        <div class="item wow fadeInDown">
          <div class="container-testimonials">
            <div class="carousel-capttion">
              <div class="row carousel-rows">
              	<div class="col-md-6 col-sm-12 carousel-col">
              		<div class="row carousel-row">
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-fig">
								<img src="../img/team/takeshi.png" alt="" style="height: 200px;">
							</figure>
              			</div>
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-figure">
								<img src="../img/comillas.png" alt="">
							</figure>
							<div class="texto">
								<h2>Juan Alvarez</h2>
								<h3>CEO Tiipus</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident eum optio, labore, odit id aut voluptas temporibus, molestias accusamus nobis illo odio mollitia itaque veritatis sequi! Nisi, praesentium illum?</p>
							</div>
              			</div>	              		
					</div>
              	</div>
              	<div class="col-md-6 col-sm-12 carousel-col">
	              	<div class="row carousel-row">
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-fig">
								<img src="../img/team/takeshi.png" alt="" style="height: 200px;">
							</figure>
              			</div>
              			<div class="col-sm-6 carousel-col">
              				<figure class="img-figure">
								<img src="../img/comillas.png" alt="">
							</figure>
							<div class="texto">
								<h2>Carlos Romero</h2>
								<h3>CEO Ostern</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident eum optio, labore, odit id aut voluptas temporibus, molestias accusamus nobis illo odio mollitia itaque veritatis sequi! Nisi, praesentium illum?</p>
							</div>
              			</div>	              		
					</div>
              	</div>
              </div>
            </div>
          </div>
    </div><!-- /.carousel -->
</section>
<section class="project">
	<h1>Nuestros proyectos</h1>
	<h3>Proyectos realizados en distintas entidades públicas y privadas a nivel nacional.</h3>
	<div class="row wow fadeInDown">
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project1" style="background-color:#3498db; height: 250px;"><h1>Proyecto #1</h1></figure>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project2" style="background-color:#3498db;  height: 250px;"><h1>Proyecto #2</h1></figure>
				</div>
			</div>
		</div>
		
	</div>
	<div class="row wow fadeInDown">
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project3" style="background-color:#3498db; height: 250px;"><h1>Proyecto #3</h1></figure>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project4" style="background-color:#3498db; height: 250px;"><h1>Proyecto #4</h1></figure>
				</div>
			</div>
		</div>
	</div>
	<div class="row wow fadeInDown">
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project5" style="background-color:#3498db; height: 250px;"><h1>Proyecto #5</h1></figure>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12" style="padding-left: 10px; padding-right: 10px; padding-top: 10px;">
			<div class="hover12 column">
				<div>
					<figure id="project6" style="background-color:#3498db; height: 250px;"><h1>Proyecto #6</h1></figure>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="client">
	<h1>Nuestros Clientes</h1>
	<div class="row wow fadeInDown">
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo1" style="margin-bottom: 30px;"></figure></a>
		</div>
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo2" style="margin-bottom: 30px;"></figure></a>		
		</div>
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo3" style="margin-bottom: 30px;"></figure></a>
		</div>
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo4" style="margin-bottom: 30px;"></figure></a>
		</div>
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo5" style="margin-bottom: 30px;"></figure></a>
		</div>
		<div class="col-sm-6 col-md-2">
			<a href=""><figure id="logo6" style="margin-bottom: 30px;"></figure></a>
		</div>
	</div>
</section>
<section class="contacto" style="background: #5b5b5b;">
	<div class="row">
		<div class="col-md-6 col-md-12 wow flipInX">
			<figure id="mapa" style="height: 500px">
			</figure>
		</div>
		<div class="col-md-6 col-md-12">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-3">
          <div class="panel panel-default" style="width: 400px; margin-top: 40px;">
            <div class="panel-heading">
              <h3 class="panel-title">Si deseas solicitar cotización de nuestros productos. Llena el siguiente formulario y en breve nos pondremos en contacto.</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Apellidos">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
                </div>

                <div class="form-group">
                  <input type="telephone" name="telephone" id="telephone" class="form-control input-sm" placeholder="Teléfono">
                </div>

                <div class="form-group">
                	<textarea name="message" id="message" cols="40" rows="5"></textarea>
                </div>
                <input type="submit" value="Solicitar" class="btn btn-primary btn-block">
              
              </form>
            </div>
          </div>
        </div>
  </div>
  </div>
</div>
</div>
</section>
@stop
      
   
   
    