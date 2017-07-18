<?php 

/*
*Titel Function that Echo The Page Titel In Case The Page 
*Has The Variable $pageTitle And Echo Defule Titel If Not Has this Variable 

function getTitle () {

		global $pageTitle;

		if(isset($pageTitle)){

			echo $pageTitle;

		}else {


			echo 'Default';
		}

}*/


/*
**  Home Redirect  Function  [This Function Accept Parameters]    **
**  Parameters :												  **
**				1-$errorMsg = Echo The Error Message              **
**				2-$seconde  = Seconde Before Redirecting          **
*/                                                                
function redirectHome($errorMsg,$goToPage = "index.php"){
			
	echo "<div class=''>  </div>";
	echo "<div  class='alert alert-info'>$errorMsg <br> You Well Be Redirecting To Home Page After 5 Seconds.</div>";
		
		// Function Available To Redirect to Any URL
		//Use Refresh instead of location For Wait Some Second Before Redirecting
		header("refresh:3;url=$goToPage");
		exit(); 
}





/*
**Check Items Function In Database [Function Accept Parametrs]
**Parametrs:
**			1-Select = The Item To Select [Example : User ,item ,category] 
**			2-From   = The Table To Select From [Example : Users ,items ,categories]
**			3-Value  = The Value Of Select [Example : Ahmed ,Box ,Electronics]
*/

function checkItem($Select,$From,$Value){

		global $con;

		$statement =$con ->prepare("SELECT $Select FROM $From WHERE $Select = ?");

		$statement ->execute(array( $Value));

		$count = ($statement -> rowCount());
		return $count;

}





/*
** Count Number Of Items Function 
**Function To Count  Number Of Items Row
**Parametrs:
**			1-$items=the items to count
**			2-$table=the table to count from		
**			
*/

function countItems($items,$table){

	global $con;

	$stmt2=$con->prepare("SELECT COUNT($items) FROM $table");

	$stmt2->execute();

	return $stmt2->fetchColumn();

}



/*
** Get Latest Recourd Function  V1.0
** Function to Get Latest items From database [ Users , Items , commants ]
** Parametrs: 
**			1-$Select = Field  To Select  
**			2-$Table = The Table to Choose From	
**			3-$Order = The Field Used of Order ترتيب
**			4-$limit = Number Of Record To Get 
*/

function getLatest($Select,$Table,$Order,$limit){

	global $con ;

	$getStmt = $con->prepare("SELECT $Select FROM $Table ORDER BY $Order DESC LIMIT $limit");
	$getStmt ->execute();
	$rows=$getStmt->fetchAll();

	return $rows ;

}


















