<?php
include('data.php');
include('function.php');

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Archive</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-flex">
          <img src="Assets/images/logo.png" alt="logo" />
          <ul id="my-list">
          <?php
          headerNav($header);
          ?>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <section class="news-first-section">
        <div class="container">
          <h2 class="secondary-title">Rooms & Rates</h2>
          <div class="news-list">
          <?php
            news_card($news);
          ?>
        </div>
      </div>
 </section>
      <section class="news-second-section">
        <div class="container">
          <h2 class="secondary-title">Gallery</h2>
          <div class="gallery-grid">
          <?php
             fotoGallery($gallery);
           ?>
          </div>
        </div>
      </section>
    </main>
   <footer>
      <div class="container">
        <div class="footer-content">
          <img src="Assets/images/logo1.png" alt="footer logo" />
          <?php 
         footerNav($footer);
         footer2($footerText);
         ?>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
