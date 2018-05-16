<div class="container">
  <div class="row">
    <div class="cols-sm-12 text-center">
      <?php

        include('conn/db_cms_connect.php');

        $varShowCatInfo = $GLOBALS["resultShowCatInfo"];

					 while($rowShowCatInfo = mysqli_fetch_assoc($varShowCatInfo)) { ?>
						 	 <a href="<?php echo $rowShowCatInfo['catName']; ?>.php">
                 <div class="category_results">
    							 <img class="category_image" src="data:img/png;base64,<?php echo base64_encode( $rowShowCatInfo['image'] ); ?>"/>
      						 <h3 class="category_name" id="<?php echo $rowShowCatInfo['catName']; ?>"><?php echo $rowShowCatInfo['catName']; ?></h3>
      					 </div>
               </a>
				<?php	 }  ?>
    </div>
  </div>
</div>
