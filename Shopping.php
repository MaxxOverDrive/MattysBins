<?php include('conn/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Matty's Bins!</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Ebay Affiliate Scripts-->
	<script>window._epn = {campaign:5338262386};</script>
	<script src="https://epnt.ebay.com/static/epn-smart-tools.js"></script>
</head>
<body>

	<?php include('mainNav.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1>Shopping Departments</h1>
				<?php
					include("conn/db_cms_connect.php");
					$varShowSubCatInfo = $GLOBALS['resultShowSubCatInfo'];

					while($rowShowSubCatInfo = mysqli_fetch_assoc($varShowSubCatInfo)) {
						echo '<div class="category_results">';
						echo '<img class="category_image" src="data:img/png;base64,'.base64_encode( $rowShowSubCatInfo['image'] ).'"/>';
						echo '<h3 class="category_name">' . $rowShowSubCatInfo['subCatName'] . '</h3>';
						echo '</div>';
					}
				?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 text-center">
				<h1>Shopping Bin</h1>
				<div id="shoppingPageWrap">
					<?php

						$varShopping = $GLOBALS['resultShopping'];

						while($rowShopping = mysqli_fetch_assoc($varShopping)) {
							$search = array('&quot;', '&lt;', '&gt;');
							$replace = array('"', '<', '>');
							$subject = $rowShopping['affilAdCode'];
							echo str_replace($search, $replace, $subject);
						}

					?>
				</div>
			</div>
		</div>
	</div>
	<script>
	(function(u){document.write('<img style="text-decoration:none;border:0;padding:0;margin:0" src="'+u+'&mpt='+Math.floor(Math.random()*9e9)+'"><a target="_blank" href="'+u.replace(/roverimp/,'rover')+'&mpre=https%3A%2F%2Frover.ebay.com%2Frover%2F1%2F711-53200-19255-0%2F1%3Fff3%3D4%26toolid%3D11800%26pub%3D5575373090%26campid%3D5338262386%26mpre%3Dhttps%253A%252F%252Fwww.ebay.com%252Fitm%252F15-PERSON-TENT-BASE-CAMP-CABIN-OZARK-TRAIL-3-ROOM-CAMPING-FAMILY-INSTANT-SEASONS%252F152917756987%253F_trkparms%253Daid%25253D555019%252526algo%25253DPL.BANDIT%252526ao%25253D1%252526asc%25253D20150817211758%252526meid%25253D094ac480353a40aab255635c6d470547%252526pid%25253D100507%252526rk%25253D1%252526rkt%25253D1%252526%252526itm%25253D152917756987%2526_trksid%253Dp2045573.c100507.m3226">15 PERSON TENT BASE CAMP CABIN OZARK TRAIL 3 ROOM CAMPING FAMILY INSTANT SEASONS | eBay</a>')})('/\/rover.ebay.com/roverimp/1/711-53200-19255-0/1?ff3=4&toolid=11800&pub=5575373090&campid=5338262386')
	</script><br />

	<img style="text-decoration:none;border:0;padding:0;margin:0" src="/\/rover.ebay.com/roverimp/1/711-53200-19255-0/1?ff3=4&toolid=11800&mpt=[CACHEBUST]">
<a target="_blank" href="/\/rover.ebay.com/rover/1/711-53200-19255-0/1?ff3=4&toolid=11800&pub=5575373090&campid=5338262386&mpre=https%3A%2F%2Fwww.ebay.com%2Fitm%2FAlienware-15-6-i7-7820HK-16GB-RAM-512GB-SSD-Gaming-Laptop-AW15R3-7390SLV%2F332293663054%3Fhash%3Ditem4d5e3ee94e%3Ag%3AvgYAAOSwnK9ZXWpu">Alienware 15.6" i7-7820HK 16GB RAM 512GB SSD Gaming Laptop - AW15R3-7390SLV | eBay</a>

	<?php include('result.php'); ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php mysqli_close($conn); ?>
