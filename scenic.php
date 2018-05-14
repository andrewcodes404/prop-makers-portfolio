<?php
include("inc/data.php");
$pageTitle = "Scenic Painting";
include("inc/header.php");
include("inc/nav.php");
?>


<div class="columns splat">

  <?php
    foreach ($scenic as $key => $value) {

      $title = $value["title"];
      $desc = $value["desc"];
      $client = $value["client"];
      $year = $value["year"];
      $hero = $value["hero"];
      $img = $value["img"];

      echo '<a href="'
      . $hero
      . '" data-lightbox="'
      . $title
      . '" data-title="<h1>'
      . $title
      . ' <h1><h2> '
      . $client
      . ' '
      . $year
      . '</h2><p>'
      . $desc
      . '</p>">
        <div class="splat-item">
          <img class="splat-img" src=" '
          . $hero
          .'" alt="">
            <div class="splat-label flex-col justify-center text-center">
                  <p class="label-text">'
                  . $title
                  . '</p>
            </div>

            <div class="splat-label-mobile"><span>'
              . $value["title"]
              .'  | <i class="fa fa-eye"></i></span>
            </div>
            
        </div>
      </a>';


      foreach ($value["img"] as $value) {
        echo '
        <a href="'
        . $value
        . '" data-lightbox="'
        . $title
        . '" data-title="<h1>'
        . $title
        . ' <h1><h2> '
        . $client
        . ' '
        . $year
        . '</h2><p>'
        . $desc
        . '</p>">
        ';
      }
  }

  ?>

</div>

<?php
include("inc/footer.php");
?>
