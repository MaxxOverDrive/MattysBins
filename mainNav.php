<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div style="width: 40%;">
        <?php
          include('conn/db_cms_connect.php');
    			$varLogo = $GLOBALS['resultLogo'];

    			while($rowLogo = mysqli_fetch_assoc($varLogo)) { ?>

    				<img id="mainLogo" src="data:img/png;base64,<?php echo base64_encode( $rowLogo['logo'] ); ?>" />
    	<?php	} ?>
      </div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
        <span class="icon-bar"><span>
      </button>
    </div>
    <div class="collapse navbar-collapse col-sm-6" id="mainNavBar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shopping<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $varNavShopping = $GLOBALS['resultNavShopping'];

              while($rowNavShopping = mysqli_fetch_assoc($varNavShopping)) { ?>
                <li class='dropdownListItem' value='<?php echo $rowNavShopping['catName']; ?>'><?php echo $rowNavShopping['catName']; ?></li>
            <?php  } ?>
          </ul>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Travel<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $varNavTravel = $GLOBALS['resultNavTravel'];

              while($rowNavTravel = mysqli_fetch_assoc($varNavTravel)) { ?>
                <li value='<?php echo $rowNavTravel['catName']; ?>'><?php echo $rowNavTravel['catName']; ?></li>
            <?php  }  ?>
          </ul>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Education<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $varNavEducation = $GLOBALS['resultNavEducation'];

              while($rowNavEducation = mysqli_fetch_assoc($varNavEducation)) { ?>
                <li value='<?php echo $rowNavEducation['catName']; ?>'><?php echo $rowNavEducation['catName']; ?></li>
          <?php }  ?>
          </ul>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Financial<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $varNavFinancial = $GLOBALS['resultNavFinancial'];

              while($rowNavFinancial = mysqli_fetch_assoc($varNavFinancial)) { ?>
                <li value='<?php echo $rowNavFinancial['catName']; ?>'><?php echo $rowNavFinancial['catName']; ?></li>
            <?php  } ?>
          </ul>
        </li>
        <li><a href="login.php">Login</a></li>

      </ul>
    </div>
  </div>
</nav>
