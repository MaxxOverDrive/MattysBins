<?php



$conn = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if(!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
else {

  $sqlShopping = "SELECT affilAdCode FROM AffiliateAds WHERE className = 'Shopping'";
	$sqlTravel = "SELECT affilAdCode FROM affiliateAds WHERE className = 'Travel'";

	$resultShopping = mysqli_query($conn, $sqlShopping);
	$resultTravel = mysqli_query($conn, $sqlTravel);

  if(mysqli_num_rows($resultShopping) > 0) {
    $GLOBALS['resultShopping'] = $resultShopping;
  }
  else {
    echo "No Results Found!";
  }

	if(mysqli_num_rows($resultTravel) > 0) {
		$GLOBALS['resultTravel'] = $resultTravel;
	}
	else {
		echo "No Results Found!";
	}
}

?>
