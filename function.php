<?php
function headerNav($header_nav) {

 foreach($header_nav as $headerMenu) {
                
                echo '<li><a href="'.$headerMenu['link'].'">'.$headerMenu['title'].'</a></li>';
            }

        }

 function news_card($newsCard)
{
    foreach ($newsCard as $new) {
        echo '<div class="news-card">
                  <img src="' . $new['image'] . '" alt="' . $new['alt'] . '"/> 
                  <div class="news-card-content">
                      <h3 class="card-title">' . $new['title'] . '</h3>
                      <p class="card-title ">' . $new['text'] . '</p>
                      <a href="' . $new['button'] . '" class="button button-small">' . $new['buttonText'] . '</a>
                  </div>
              </div>';
      }
      

 }



 function fotoGallery($foto) {
    foreach ($foto as $grid) {
        echo '
                <img src="' . $grid['imge'] . '" alt="' . $grid['alt'] . '"/>';
                        
      }

 }


function footerNav($nav) {
    echo '<ul id="footerlist">';
    foreach ($nav as $footerMenu) {
        echo '<li><a href="' . $footerMenu['link'] . '">' . $footerMenu['title'] . '</a></li>';
    }
    echo '</ul>';
}


function footer2($nav) {
    echo '<div class="footer-text">';
    foreach ($nav as $footerTextMenu) {
        echo '<p>' . $footerTextMenu['text'] . '</p>';
        echo '<a href="tel:' . $footerTextMenu['tele'] . '">' . $footerTextMenu['tele'] . '</a>';
        echo '<a href="mailto:' . $footerTextMenu['link'] . '">' . $footerTextMenu['link'] . '</a>';
    }
    echo '</div>';
}

 
