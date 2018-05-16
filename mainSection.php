<div class='container' id="mainSectionContainer">
  <div class='row text-center' id="featuredItemSection">
   <h2>Featured Items</h2>
    <div class="col-sm-12" id="featuredShoppingWrap">
      <?php

      $varShopping = $GLOBALS['resultShopping'];

      while($rowShopping = mysqli_fetch_assoc($varShopping)) {

        $search = array('&quot;', '&lt;', '&gt;');
        $replace = array( '"', '<', '>');
        $subject = $rowShopping['affilAdCode'];
        echo "<div class='affilAds'>" . str_replace($search, $replace, $subject) . "</div>";
      }
      ?>

    </div>
  </div>
  <div class="row text-center" id="featuredEducationSection">
    <div class="col-sm-6 col-sm-offset-3">
      <h2>Featured Education</h2>
      <?php

        $varEducation = $GLOBALS['resultEducation'];

        while($rowEducation = mysqli_fetch_assoc($varEducation)) {
          $search = array('&quot;', '&lt;', '&gt;');
          $replace = array('"', '<', '>');
          $subject = $rowEducation['affilAdCode'];
          echo str_replace($search, $replace, $subject);
        }

      ?>

    </div>
  </div>
  <div class="row text-center" id="featuredTravelSection">
    <div class="col-sm-6 col-sm-offset-3">
      <h2>Travel Specials</h2>
      <?php

        $varTravel = $GLOBALS['resultTravel'];

        while($rowTravel = mysqli_fetch_assoc($varTravel)) {

          $search = array('&quot;', '&lt;', '&gt;');
          $replace = array( '"', '<', '>');
          $subject = $rowTravel['affilAdCode'];
          echo str_replace($search, $replace, $subject);
        }
      ?>
    </div>
  </div>
</div>
