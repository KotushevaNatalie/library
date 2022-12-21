<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Библиотека</title>
    <link rel="stylesheet" href="act.css" media="screen">
<link rel="stylesheet" href="book.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="act.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Bez-imeni-U4Zy-cotL-transformed.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="book">
    <meta property="og:type" content="">
  </head>
  <body class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-header u-palette-1-dark-3 u-header" id="sec-53ef"><div class="u-clearfix u-sheet u-sheet-1">
          <img src="images/Bez-imeni-U4Zy-cotL-transformed.png" class="u-logo-image u-logo-image-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.html" style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="О-нас.html" style="padding: 10px 20px;">О нас</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Контакты.html" style="padding: 10px 20px;">Контакты</a>

</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="library.php" style="padding: 10px 20px;">Библиотека</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Главная.html">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="library.php">Библиотека</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="book.php"></a>
</li></ul>
</div>
            </div>
        
          </div>
        </nav>
        
      </div></header>
        
        
        
   
    <section class="u-clearfix u-section-2" id="sec-ce9b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            
          <div class="header-down">
         
         <?php 
          require('database.php');
          $id = $_GET['id'];

          $sql = mysqli_query($conn, "SELECT * FROM `literature` WHERE `id`=".$id);
          while ($result = mysqli_fetch_array($sql)) {
               echo '<h1>'.$result['name'].'</h1>'.
               '<h2><br>'.$result['author'].
               '</h2><h3><br>Год: '.$result['year'].
               '</h3><br><h4> '.$result['type'].
               '<br>Описание: '.$result['description'].'</h4>'.
               '<h5><a href="'.$result['link'].'">Ознакомиться</a></h5>';
           }
         
          ?>



          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-dark-3 u-footer" id="sec-4433"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-small-text u-text u-text-variant u-text-1">saecubed@gmail.com<br>+7 950 994 3074
        </p>
      </div></footer>
    
  
</body></html>