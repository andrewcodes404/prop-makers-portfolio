<?php
include("inc/data.php");
$pageTitle = "Prop Making";
include("inc/header.php");
include("inc/nav.php");
?>


<div class="columns splat edges">

  <?php
    foreach ($props as $key => $value) {


// INFO -- why did i put $values into variables---> so i can use them in the next foreach...ithink
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

            <div class="splat-label flex-col justify-center text-center ">
                  <span class="label-text">'
                  . $value["title"]
                  . '</span>
            </div>

            <p class="splat-label-mobile">'
              . $value["title"]
              .'  | <i class="fa fa-eye"></i>
            </p>

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
