<?php
include("inc/data.php");
$pageTitle = "Prop Making";
include("inc/header.php");
include("inc/nav.php");
?>


<div class="columns splat edges">

  <?php
    foreach ($props as $key => $value) {


// TODO: don't know why i made these variables when i could have just used $value["example"] stright in??🤔
      $title = $value["title"];
      $desc = $value["desc"];
      $client = $value["client"];
      $year = $value["year"];
      $hero = $value["hero"];
      $img = $value["img"];

      echo '<a href="'
      . $value["hero"]
      . '" data-lightbox="'
      . $value["title"]
      . '" data-title="<h1>'
      . $value["title"]
      . ' <h1><h2> '
      . $value["client"]
      . ' '
      . $value["year"]
      . '</h2><p>'
      . $value["desc"]
      . '</p>">
        <div class="splat-item">
          <img class="splat-img" src=" '
          . $value["hero"]
          .'" alt="">
            <div class="splat-label flex-col justify-center text-center">
                  <p class="label-text">'
                  . $value["title"]
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
