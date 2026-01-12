<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    	<?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <div class="container-{breakpoint}">

  <div class="row header">
    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-4  col-xs-4">
      <logo>

        <img src="<?php bloginfo('https://wptest.local/wp-content/uploads/2024/12'); ?>/img/Логотип.png" alt="" class="img-fluid">
        
      </logo>
    </div>
    <div class="col-xxl-6 col-xl-5 col-lg-4 col-md-1 col-sm-1  col-xs-1">
    </div>
    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3  col-xs-3">
      <a class="button" href="#help">
        Оставить пожертвование
        <i class="fa fa-arrow-right"></i>
      </a>
    </div>
  </div>
  
  
  <div class="row hero_shot">
    
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12 order-xxl-1 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-xs-2">
      <br>
      <h1>
        Найди себе настоящего друга
      </h1>
      <br><br>
      <h4>В приюте "Дай лапу" все животные проходят необходимые <br> обследования и имеют паспорта</h4>
      <br>
      <a class="shelerfbutton" href="#shelter">
        Приютить
        <i class="fa fa-arrow-right"></i>
      </a>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12 order-xxl-2 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-xs-1">
      <img src="<?php bloginfo('https://wptest.local/wp-content/uploads/2024/12'); ?>/img/Счастливая-собака.jpg" alt="" class="img-fluid">
      <br><br><br>
    </div>
    
  </div>
  
  
  <div id="help" class="row help">
    
    <div class="row 1">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12 order-xxl-1 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-xs-2">
        <div class="image-containerHelp">

        <h1>Приюту постоянно требуется ваша поддержка</h1>

        </div>
        <h4>Сейчас необходимо закупить металл и прочие стройматериалы для строительства новых вольеров. Оформите пожертвование, что бы мы могли помогать большему количеству животных.</h4>
      <a class="helpbutton" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
        Оставить пожертвование
        <i class="fa fa-arrow-right"></i>
      </a>
      <br><br><br>
      </div>
      <br>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12 order-xxl-2 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-xs-1">
        <br><br>
        <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Несчастные.jpg" class="img-fluid">
        <br><br><br>
      </div>
    </div>
    <br><br>
    <div class="row 2">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12">
        <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Work Together Image.png" class="img-fluid">
      </div>


      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12  col-xs-12" >
        <br><br><br><br>
        <div class="image-containerTogether">
        <h1>Вместе мы сможем сделать мир лучше!</h1>
        </div>


      </div>
    </div>
    
  </div>
  
  
  <div id="shelter" class="row animal">
    
    <div class="row Text">
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12  col-xs-12">
        <h1 style="text-align: center;">Наши обитатели</h1>
      </div>
    </div>
    
    <div class="row animals">

      <div class="row">


        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
        <div class="card">
          <!--1-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Лира.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Лира</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
      </div>


       <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
      <div class="card">
          <!--2-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Шанель.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Шанель</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
      </div>


      <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
        <div class="card">
          <!--3-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Белка.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Белка</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
      </dir>


      </div>


      <div class="row">

        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--4-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Барни.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Барни</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>


        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--5-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Аза.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Аза</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--6-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Дженифер.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Дженифер</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>

      </div>

      <div class="row">

        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--7-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Ника.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Ника</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>


        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--8-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Бенни.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Бенни</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>


        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12  col-xs-12">
          <div class="card">
          <!--9-->
          <Image>
            <img src="<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Лаки.jpg" class="card-img-top">
          </Image>
          
          <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Лаки</h5>
          <a class="btn btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLScVWsKbK9Nd73FcWrsAagwFA2s-ng1CWHmVvrniMohzbHNZaQ/viewform?usp=dialog">
            Приютить
            <i class="fa fa-arrow-right"></i>
          </a>
          </div>
        </div>
        </div>

      </div>




    </div>


  </div>

  
  <div class="row footer">
    <div class="col-lg-12 col-12" align="center">©2024 Приют “Дай лапу” +89080469877 Все права защищены и охраняются законом</div>
  </div>
</div>
</div>
    
</body>
</html>

<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url('http://fonts.googleapis.com/css?family=Ubuntu');

.header { 
  background-color: #FDF5E6; 
  padding-left: 60px;
  padding-right: 60px;
  padding-top: 16px;
  margin-bottom: 0px;
}

logo {
  width: 328px;
  hidht: 116px;
}

a.button {
  width: 275px;
  height: 60px;
  display: inline-block;
  background: #3CB371;
  color: #FDF5E6;
  text-align: center;
  padding: 0px;
  border-radius: 8px;
  text-decoration: none;
  font-family: Raleway;
  font-size: 16px;
  line-height: 60px;
  font-weight: 275px;
  place-items: center;
}

.hero_shot { 
  background-color: #FDF5E6; 
  background-image: url("<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Найди себе.png");
  padding-top: 100px;
  padding-left: 60px;
  padding-right: 60px;
  padding-bottom: 100px;
}


h1 {
  /*color: #00cc00;*/
  font-size: 70px;
  text-align: left;
  letter-spacing: -2px;
  font-family: Ubuntu;
  line-height: 64px;
  padding-bottom: 24px;
}

h4 {
  /*color: #00cc00;*/
  font-size: 18px;
  text-align: left;
  letter-spacing: 0px;
  font-family: Raleway;
  line-height: 20px;
}

h5 {
  /*color: #00cc00;*/
  font-size: 25px;
  text-align: center;
  letter-spacing: 0px;
  font-family: Raleway;
  line-height: 25px;
}


a.shelerfbutton {
  width: 147px;
  height: 60px;
  display: inline-block;
  background: #3CB371;
  color: #FDF5E6;
  text-align: center;
  margin-top: 60px;
  padding: 0px;
  border-radius: 8px;
  text-decoration: none;
  font-family: Raleway;
  font-size: 16px;
  line-height: 60px;
  font-weight: 275px;
  place-items: center;
}


.help { 
  background-image: url("<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Приюту постоянно.png");
  background-repeat: no-repeat;
  background-position: -20px 1cm;
  padding-top: 100px;
  padding-left: 60px;
  padding-right: 60px;
  padding-bottom: 100px;
}


a.helpbutton {
  width: 275px;
  height: 60px;
  display: inline-block;
  background: #3CB371;
  color: #FDF5E6;
  text-align: center;
  padding: 0px;
  border-radius: 8px;
  text-decoration: none;
  font-family: Raleway;
  font-size: 16px;
  line-height: 60px;
  font-weight: 275px;
  place-items: center;
  margin-top: 60px;
  
}

.image-containerHelp{
  background-image: url('<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Поддержка.png');
  background-position: 0 70%;
  background-repeat: no-repeat;
  width: 100%;
  height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}


.image-containerTogether{
  background-image: url('<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Вместе.png');
  background-position: 0 40%;
  background-repeat: no-repeat;
  width: 100%;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
}



.animal { 
  background-color: #FDF5E6; 
  background-image: url("<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Найди себе.png");
  height: auto;
  padding-top: 100px;
  padding-left: 60px;
  padding-right: 60px;
  padding-bottom: 100px;
}

.Text {
  background-image: url('<?php echo get_template_directory_uri("D:\OSPanel\home\wptest.local\public\wp-content\themes\shelter");?>/img/Обитатели.png');
  background-position: 0 20%;
  background-repeat: no-repeat;
  width: 100%;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-position: center;

  font-size: 64px;
  text-align: center;
  letter-spacing: -2px;
  font-family: Ubuntu;
  line-height: 64px;
  margin-bottom: 50px;
}

.card{
  width: 378px;
  height: 499px;
  background-color: #FDF5E6;
  border: 4px dashed #CCCCCC;
  border-radius: 8px;
  margin-right: 60px;
  margin-bottom: 60px;
}


Image {
  width: 378px;
  heigh: 378px;
  float: center; /* Выстраиваем элементы по горизонтали */
   /* Отступ слева */
  border-radius: 8px; /* Радиус скругления */
  padding: 0px; /* Поля */
   }


a.btn-primary {
  width: 100%;
  height: 63px;
  display: inline-block;
  background: #3CB371;
  color: #FDF5E6;
  text-align: center;
  margin: 0px;
  border-radius: 8px;
  text-decoration: none;
  font-family: Raleway;
  font-size: 20px;
  place-items: center;
  line-height: 60px;
  font-weight: 275px;
}

.footer { 
  background-color: #FDF5E6; 
  height: auto;
  padding-top: 108px;
  padding-left: 60px;
  padding-right: 60px;
  padding-bottom: 32px;
}
</style>