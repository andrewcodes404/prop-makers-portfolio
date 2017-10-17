<?php
include("inc/data.php");
$pageTitle = "Sculpture";
include("inc/header.php");
include("inc/nav.php");
?>

<div class="columns splat">

  <?php
    foreach ($sculpture as $key => $value) {

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
