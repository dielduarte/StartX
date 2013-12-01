<!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Tema Livre</title>
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet"  href="../css/lightbox.css" />

      <script type="text/javascript" src="../js/jquery-1.7.2.js"></script>
      <script type="text/javascript" src="../js/lightbox.js"></script>


  </head>
  <body >
    <div class='container'>

      <!--=======================================
        NAME OF PROJECT AND SOCIAL NETWORKS
      ===========================================-->
      <div class="row medspace">
        <div class="span4 offset4">
          <h1><?php if(isset($_POST['name'])){ echo $_POST['name'];} ?></h1>  
        </div>
        <div class="span3">
          <span class='' ><a href=<?php if(isset($_POST['facebook'])){ echo 'https://'. $_POST['facebook'];} ?> target=_blank>Facebook</a> | <a href=<?php if(isset($_POST['twitter'])){ echo 'https://'. $_POST['twitter'];} ?> target=_blank>Twitter</a></span>
        </div>
      </div>
      <div class="row">
        <div class="span4 offset5">
          <span class="minleftspace"><?php if(isset($_POST['yourname'])){ echo $_POST['yourname'];} ?></span>
        </div>
      </div>

      <!--============================
         DESCRIPTION FAST OF PROJECT
      ================================-->
      <div class="row minspace">
        <div class="span7 offset2">
          <p> <?php if(isset($_POST['description'])){ echo wordwrap($_POST['description'], 80, "</br>", true);} ?>
          </p>
        </div>
      </div>

      <!--==========================
               GALLERY
      =============================-->
      <div class="row medspace">
        <div class="span12">
          <h2><span><?php if(isset($_POST['titlegallery'])){ echo $_POST['titlegallery'];} ?></span></h2> 
      </div>
      <div class="row">
          <ul class="medleftspace">
            <li> 
              <a href="../img/foto.png" rel="lightbox[roadtrip]" title="" >
                  <img src= "../img/foto.png"    class ="image"/> 
              </a>  
            </li>
            <li>           
              <a href="../img/foto.png" rel="lightbox[roadtrip]" title="" >
                  <img src= "../img/foto.png"    class ="image"/> 
              </a>   
            </li>
            <li>  
              <a href="../img/foto.png" rel="lightbox[roadtrip]" title="" >
                  <img src= "../img/foto.png"    class ="image"/> 
              </a>  
            </li>
            <li>  
              <a href="../img/foto.png" rel="lightbox[roadtrip]" title="" >
                  <img src= "../img/foto.png"    class ="image"/> 
              </a>  
            </li>
          </ul>  
        </div>  
        
      </div>
        

      <!--=========================
            ABOUT PROJECT
      =============================-->
      <div class="row medspace">
        <div class="span12">
          <h2><span><?php if(isset($_POST['abouttitle'])){ echo $_POST['abouttitle'];} ?></span></h2>
          <p>
            <?php if(isset($_POST['abouttext'])){ echo wordwrap($_POST['abouttext'], 160, "</br>", true);} ?>
          </p> 
        </div> 
      </div>

      <!--==========================
        DOWNLOAD PROJECT
      ==============================-->
      <div class="row maxspace">
        <div class="span4 offset3">
          <h1><span><?php if(isset($_POST['titledownload'])){ echo $_POST['titledownload'];} ?></span></h1>
        </div> 
      </div>
      <div class="row minspace">
        <div class="span2 offset4">
          <button class="btn btn-large btn-success" type="button"><i class='icon-download icon-white'></i> BAIXAR</button>
        </div>
        <div class="span4 minleftspace">
          <small><?php if(isset($_POST['subtitledownload'])){ echo $_POST['subtitledownload'];} ?></small>
        </div>
      </div>

      <!--=========================
        HOW USE TITLE
      =============================-->
      <div class="row medspace">
        <div class="span12">
          <h2><span> <?php if(isset($_POST['howusetitle'])){ echo $_POST['howusetitle'];} ?></span></h2>

          <!--==========================
              HOW USE ACCORDION 
          ==============================-->
            <div class="accordion minspace" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    <?php if(isset($_POST['title1'])){ echo $_POST['title1'];} ?>
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p><?php if(isset($_POST['subtitle1'])){ echo $_POST['subtitle1'];} ?></p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                   <?php if(isset($_POST['title2'])){ echo $_POST['title2'];} ?>
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p><?php if(isset($_POST['subtitle2'])){ echo $_POST['subtitle2'];} ?></p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                    <?php if(isset($_POST['title3'])){ echo $_POST['title3'];} ?>
                  </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p><?php if(isset($_POST['subtitle3'])){ echo $_POST['subtitle3'];} ?></p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefor">
                    <?php if(isset($_POST['title4'])){ echo $_POST['title4'];} ?>
                  </a>
                </div>
                <div id="collapsefor" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p><?php if(isset($_POST['subtitle4'])){ echo $_POST['subtitle4'];} ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--================================
              CONTACT  AND HELP
        ====================================-->
        <div class="row medspace">

          <!--CONTACT-->
          <div class="span8">
            <h2><span><?php if(isset($_POST['titlecontact'])){echo $_POST['titlecontact'];}else{echo 'Contato';} ?></span></h2>
              <table>
                <tr>
                  <td><input type="text" placeholder="Nome" name="nome" value="" required></td>
                  <td><input type="email" placeholder="E-mail" name="email" value="" required></td>
                </tr>
                <tr>
                  <td COLSPAN=2><textarea rows=5  placeholder="Texto" required></textarea></td>
                </tr>
                <tr>
                  <td COLSPAN=2><button class="btn btn-success" type="button" style= "float:right;">Enviar</button></td>
                </tr>
              </table>
          </div>

          <!--HELP-->
          <div class="span4">
              <h2><span><?php if(isset($_POST['titlehelp'])){echo $_POST['titlehelp'];}else{echo 'AJUDA';} ?></span></h2>
              <p><?php if(isset($_POST['help'])){echo wordwrap($_POST['help'], 50, "</br>", true);}else{echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, eaque, distinctio, vitae, quis nostrum repellat quae illum esse mollitia maxime facilis officiis asperiores fugiat ex delectus nihil ad illo! Illum.';} ?></p>
              
          </div>
        </div>
        <!--=============================
          FOOTER
        =================================-->
        <div class="row medspace">
          <div class="span12">
            <p><small><?php if(isset($_POST['footer'])){echo $_POST['footer'];} ?></small></p>
          </div>  
        </div>

    </div>
       <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>