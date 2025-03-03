<?php
include('data.php');


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bon Hotel </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"/>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-flex">
          <img src="Assets/images/logo.png" alt="logo" />
          <ul id="my-list">
          <?php 
            foreach($header as $headerMenu) {
                
                echo '<li><a href="'.$headerMenu['link'].'">'.$headerMenu['title'].'</a></li>';
            }
            
            ?>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <section class="first-section" id="first-section">
        <div class="first-section-content">
          <h1 class="main-title">WELCOME TO BON HOTEL</h1>
          <p class="description">Good people. Good thinking. Good feeling.</p>
          <a href="#" class="button"> EXPLORE </a>
        </div>
      </section>
      <section class="second-section" id="second-section">
        <div class="container">
          <h2 class="secondary-title">Rooms & Rates</h2>
          <div class="rooms-gallery">
            <?php
        
        foreach ($roomsCard as $room) {
            echo '<div class="rooms-card">
                    <img src="' . $room['image'] . '" alt="' . $room['alt'] . '"/>
                    <div style="background: linear-gradient(180deg, rgba(255, 255, 255, 0) 7.48%, #000000 100%);
                         position: absolute; top: 0; bottom: 0; left: 0; right: 0;" class="overlay"></div>
                    <div class="cards-content">
                        <h3 class="card-title">' . $room['title'] . '</h3>
                        <a href="#" class="button button-small">Check Rates</a>
                    </div>
                  </div>';
        }
    ?>
    
          </div>
        </div>
      </section>
      <section class="third-section" id="third-section">
        <div class="container">
          <div class="contact-us">
            <h2 class="secondary-title">Get a room already!</h2>
            <a href="#" class="button">Book Now</a>
          </div>
        </div>
      </section>
    </main>
    <footer> 
      <div class="container">
        <div class="footer-content">
          <img src="Assets/images/logo1.png" alt="footer logo">
          <ul id="footerlist"> 
          <?php 
           foreach($footer as $footerMenu) {
                  
                 echo '<li><a href="'.$footerMenu['link'].'">'.$footerMenu['title'].'</a></li>';
            }
            
            ?> 
          </ul>
          <div class="footer-text">
          <?php 
            foreach ($footerText as $footerTextMenu) {
                echo '<div>' 
                    . '<p>' . $footerTextMenu['text'] . '</p>' 
                    . '<a href="tel:' . $footerTextMenu['tele'] . '">' . $footerTextMenu['tele'] . '</a>' 
                    . '<a href="mailto:' . $footerTextMenu['link'] . '">' . $footerTextMenu['link'] . '</a>' 
                    . '</div>';
                }
              ?>  
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
