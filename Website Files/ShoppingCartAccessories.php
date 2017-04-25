<!DOCTYPE html>
<html>
<head><title>Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

<!-- Header -->
<?php
$thisPage="cart";//This is to highlight the current page in red
include("WebsiteHeader.php");
?>
<!--Header-->
<script>

	/*ON CLICK LOGIN FUNCTION FOR NON SIGNED IN USERS */
	/*Takes user to the Login Screen*/
	function login(){
		location.href="login.php";
	}

	/*Following functions are for popping up and close details about products*/

	// PRODUCT 1
	function product1View(){
		document.getElementById('product1Summary').style.display='block';
		document.getElementById('fade').style.display='block';
	}
	function product1Close(){
		document.getElementById('product1Summary').style.display='none';
		document.getElementById('fade').style.display='none';
	}
	
	// PRODUCT 2
	function product2View(){
		document.getElementById('product2Summary').style.display='block';
		document.getElementById('fade').style.display='block';
	}
	function product2Close(){
		document.getElementById('product2Summary').style.display='none';
		document.getElementById('fade').style.display='none';
	}
	
	// PRODUCT 3
	function product3View(){
		document.getElementById('product3Summary').style.display='block';
		document.getElementById('fade').style.display='block';
	}
	function product3Close(){
		document.getElementById('product3Summary').style.display='none';
		document.getElementById('fade').style.display='none';
	}
	
	// PRODUCT 4
	function product4View(){
		document.getElementById('product4Summary').style.display='block';
		document.getElementById('fade').style.display='block';
	}
	function product4Close(){
		document.getElementById('product4Summary').style.display='none';
		document.getElementById('fade').style.display='none';
	}

</script>




<div class="contentDiv">




	<h2>Shopping Cart</h2>

	<!--Categories Nav Bar goes here-->
	<a class="productsSubMenu" href="ShoppingCartShoes.php">Shoes </a> <a>| </a> <a class="productsSubMenu" href="ShoppingCartClothing.php">Clothing </a> <a>| </a><a class="productsSubMenu" href="ShoppingCartAccessories.php"><font class="fontRed">Accessories</font></a>

	<!-- Checkout Button-->
	<?php
		if(isset($_SESSION["session1"])){
			// View for logged in user
			// Checkout Button
			echo"<form name=checkoutButtonForm method=POST action=checkoutAction.php>";
				echo"<input type=submit class=checkoutButton style=float:right value=Proceed&nbsp;To&nbsp;Checkout>";
				echo"<br/><br/>";
			echo"</form>";
  								
			

		}else{
			// View for non logged in user
			// Checkout Button
			echo"<form name=checkoutButtonForm >";
				echo"<a href=login.php ><input type=button class=checkoutButton style=float:right value=Start&nbsp;Shopping&nbsp;></a>";
				echo"<br/><br/>";
			echo"</form>";
			
		}
	?>




	<!--All Products-->
	<div class="productsContainerDiv">
		<?php
  		
		// Product 1 ///////////////////////////////////////////////////////////////////
		
		echo"<div class=productDiv style=margin-left: 0>";
			
				// Which product is going to be referred at this iteration
				$referenceProduct = "PA001";

				// Thumbnai image is got from database
				include("connectToDatabase.php");
				$productThumbImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
				$productThumbImgExecute = mysqli_query($con,$productThumbImgQuery);
				$productThumbImgRow = mysqli_fetch_array($productThumbImgExecute);
				$productThumbImg = $productThumbImgRow['productImageLocation'];

				echo"<img src=".$productThumbImg." alt=Accesories width=180px><br/><br/>";
				
				// Name, Price and details are got from the database
				$productThumbDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
				$productThumbDetailsExecute = mysqli_query($con,$productThumbDetailsQuery);
				$productThumbDetailsRow = mysqli_fetch_array($productThumbDetailsExecute);
				$productThumbName = $productThumbDetailsRow['productName'];
				$productThumbPrice = $productThumbDetailsRow['productPrice'];

				echo"<a class=shoppingCartProductName>".$productThumbName."</a><br/>";
				echo"<a class=shoppingCartProductPrice>LKR ".$productThumbPrice."</a><br/><br/>";
			
				$viewAction = "product1View()";
				echo"<input type=button class=shoppingCartButton value=View onclick=".$viewAction.">";
			
			
		echo"</div>";



		//Summary
		echo"<div id=product1Summary class=shoppingCartProductSummaryPopup>";
			echo"<br/>";
			echo"<div class=productSummaryDiv>";
				echo"<div class=shoppingCartSummaryImage>";
					
						// Description image is got from database
						include("connectToDatabase.php");
						$productDescriptionImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
						$productDescriptionImgExecute = mysqli_query($con,$productDescriptionImgQuery);
						$productDescriptionImgRow = mysqli_fetch_array($productDescriptionImgExecute);
						$productDescriptionImg = $productDescriptionImgRow['productImageLocation'];
					
						echo"<img src=".$productDescriptionImg." alt=Accessories width=355px>";
					
				echo"</div>";
				echo"<div class=shoppingCartSummaryDetails>";
					
						// Name, Price and details are got from the database
						include("connectToDatabase.php");
						$productDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
						$productDetailsExecute = mysqli_query($con,$productDetailsQuery);
						$productDetailsRow = mysqli_fetch_array($productDetailsExecute);
						$productName = $productDetailsRow['productName'];
						$productPrice = $productDetailsRow['productPrice'];
						$productDescription = $productDetailsRow['productDescription'];

						echo"<h3 style=font-size:180%>".$productName."</h3>";
						echo"<font class=fontRed><b>LKR ".$productPrice."</b></font>";
						echo"<p>".$productDescription."</p>"; 

					
					echo"<form name=formPA001 method=post action=addToCartAccessoriesAction.php>";
						
							include("connectToDatabase.php");
							$productQuery = "select availableQty from productsDummy where productId='$referenceProduct'";
							$productExecute = mysqli_query($con,$productQuery);
							$productRow = mysqli_fetch_array($productExecute);
							$productQty = $productRow['availableQty'];
		  					
  							if(isset($_SESSION["session1"])){
		  						// View for logged in user
  								
  								// Getting the available quantity from the database
								echo"<a><b>Quantity&nbsp;</b></a>";
								echo"<input type=text name=pa001Qty size=2 required>";
								echo"<a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock : ".$productQty."</b></a>";
								echo"<br/><br/>";

								echo"<input type=submit class=shoppingCartButton value=Add To Cart >&nbsp;";
								$closeAction = "product1Close()";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = ".$closeAction."></a>";

							}else{
								// View for non logged in user
								echo"<a><b>Stock : ".$productQty."</b></a>";
								echo"<p><font class=fontRed> * You need to be logged in to purchase this item </font></p>";
								echo"<input type=button class=shoppingCartButton value=Login onclick=login()>&nbsp;";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = product1Close()></a>";
							}
  						
					echo"</form>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
		

		// Product 1 ///////////////////////////////////////////////////////////////////

		// Product 2 ///////////////////////////////////////////////////////////////////
		
		echo"<div class=productDiv style=margin-left: 0>";
			
				// Which product is going to be referred at this iteration
				$referenceProduct = "PA002";

				// Thumbnai image is got from database
				include("connectToDatabase.php");
				$productThumbImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
				$productThumbImgExecute = mysqli_query($con,$productThumbImgQuery);
				$productThumbImgRow = mysqli_fetch_array($productThumbImgExecute);
				$productThumbImg = $productThumbImgRow['productImageLocation'];

				echo"<img src=".$productThumbImg." alt=Accesories width=180px><br/><br/>";
				
				// Name, Price and details are got from the database
				$productThumbDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
				$productThumbDetailsExecute = mysqli_query($con,$productThumbDetailsQuery);
				$productThumbDetailsRow = mysqli_fetch_array($productThumbDetailsExecute);
				$productThumbName = $productThumbDetailsRow['productName'];
				$productThumbPrice = $productThumbDetailsRow['productPrice'];

				echo"<a class=shoppingCartProductName>".$productThumbName."</a><br/>";
				echo"<a class=shoppingCartProductPrice>LKR ".$productThumbPrice."</a><br/><br/>";
			
				$viewAction = "product2View()";
				echo"<input type=button class=shoppingCartButton value=View onclick=".$viewAction.">";
			
			
		echo"</div>";



		//Summary
		echo"<div id=product2Summary class=shoppingCartProductSummaryPopup>";
			echo"<br/>";
			echo"<div class=productSummaryDiv>";
				echo"<div class=shoppingCartSummaryImage>";
					
						// Description image is got from database
						include("connectToDatabase.php");
						$productDescriptionImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
						$productDescriptionImgExecute = mysqli_query($con,$productDescriptionImgQuery);
						$productDescriptionImgRow = mysqli_fetch_array($productDescriptionImgExecute);
						$productDescriptionImg = $productDescriptionImgRow['productImageLocation'];
					
						echo"<img src=".$productDescriptionImg." alt=Accessories width=355px>";
					
				echo"</div>";
				echo"<div class=shoppingCartSummaryDetails>";
					
						// Name, Price and details are got from the database
						include("connectToDatabase.php");
						$productDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
						$productDetailsExecute = mysqli_query($con,$productDetailsQuery);
						$productDetailsRow = mysqli_fetch_array($productDetailsExecute);
						$productName = $productDetailsRow['productName'];
						$productPrice = $productDetailsRow['productPrice'];
						$productDescription = $productDetailsRow['productDescription'];

						echo"<h3 style=font-size:180%>".$productName."</h3>";
						echo"<font class=fontRed><b>LKR ".$productPrice."</b></font>";
						echo"<p>".$productDescription."</p>"; 

					
					echo"<form name=formPA002 method=post action=addToCartAccessoriesAction.php>";
						
							include("connectToDatabase.php");
							$productQuery = "select availableQty from productsDummy where productId='$referenceProduct'";
							$productExecute = mysqli_query($con,$productQuery);
							$productRow = mysqli_fetch_array($productExecute);
							$productQty = $productRow['availableQty'];
		  					
  							if(isset($_SESSION["session1"])){
		  						// View for logged in user
  								
  								// Getting the available quantity from the database
								echo"<a><b>Quantity&nbsp;</b></a>";
								echo"<input type=text name=pa002Qty size=2 required>";
								echo"<a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock : ".$productQty."</b></a>";
								echo"<br/><br/>";

								echo"<input type=submit class=shoppingCartButton value=Add To Cart >&nbsp;";
								$closeAction = "product2Close()";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = ".$closeAction."></a>";

							}else{
								// View for non logged in user
								echo"<a><b>Stock : ".$productQty."</b></a>";
								echo"<p><font class=fontRed> * You need to be logged in to purchase this item </font></p>";
								echo"<input type=button class=shoppingCartButton value=Login onclick=login()>&nbsp;";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = product2Close()></a>";
							}
  						
					echo"</form>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
		

		// Product 2 ///////////////////////////////////////////////////////////////////

		// Product 3 ///////////////////////////////////////////////////////////////////
		
		echo"<div class=productDiv style=margin-left: 0>";
			
				// Which product is going to be referred at this iteration
				$referenceProduct = "PA003";

				// Thumbnai image is got from database
				include("connectToDatabase.php");
				$productThumbImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
				$productThumbImgExecute = mysqli_query($con,$productThumbImgQuery);
				$productThumbImgRow = mysqli_fetch_array($productThumbImgExecute);
				$productThumbImg = $productThumbImgRow['productImageLocation'];

				echo"<img src=".$productThumbImg." alt=Accesories width=180px><br/><br/>";
				
				// Name, Price and details are got from the database
				$productThumbDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
				$productThumbDetailsExecute = mysqli_query($con,$productThumbDetailsQuery);
				$productThumbDetailsRow = mysqli_fetch_array($productThumbDetailsExecute);
				$productThumbName = $productThumbDetailsRow['productName'];
				$productThumbPrice = $productThumbDetailsRow['productPrice'];

				echo"<a class=shoppingCartProductName>".$productThumbName."</a><br/>";
				echo"<a class=shoppingCartProductPrice>LKR ".$productThumbPrice."</a><br/><br/>";
			
				$viewAction = "product3View()";
				echo"<input type=button class=shoppingCartButton value=View onclick=".$viewAction.">";
			
			
		echo"</div>";



		//Summary
		echo"<div id=product3Summary class=shoppingCartProductSummaryPopup>";
			echo"<br/>";
			echo"<div class=productSummaryDiv>";
				echo"<div class=shoppingCartSummaryImage>";
					
						// Description image is got from database
						include("connectToDatabase.php");
						$productDescriptionImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
						$productDescriptionImgExecute = mysqli_query($con,$productDescriptionImgQuery);
						$productDescriptionImgRow = mysqli_fetch_array($productDescriptionImgExecute);
						$productDescriptionImg = $productDescriptionImgRow['productImageLocation'];
					
						echo"<img src=".$productDescriptionImg." alt=Accessories width=355px>";
					
				echo"</div>";
				echo"<div class=shoppingCartSummaryDetails>";
					
						// Name, Price and details are got from the database
						include("connectToDatabase.php");
						$productDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
						$productDetailsExecute = mysqli_query($con,$productDetailsQuery);
						$productDetailsRow = mysqli_fetch_array($productDetailsExecute);
						$productName = $productDetailsRow['productName'];
						$productPrice = $productDetailsRow['productPrice'];
						$productDescription = $productDetailsRow['productDescription'];

						echo"<h3 style=font-size:180%>".$productName."</h3>";
						echo"<font class=fontRed><b>LKR ".$productPrice."</b></font>";
						echo"<p>".$productDescription."</p>"; 

					
					echo"<form name=formPA003 method=post action=addToCartAccessoriesAction.php>";
						
							include("connectToDatabase.php");
							$productQuery = "select availableQty from productsDummy where productId='$referenceProduct'";
							$productExecute = mysqli_query($con,$productQuery);
							$productRow = mysqli_fetch_array($productExecute);
							$productQty = $productRow['availableQty'];
		  					
  							if(isset($_SESSION["session1"])){
		  						// View for logged in user
  								
  								// Getting the available quantity from the database
								echo"<a><b>Quantity&nbsp;</b></a>";
								echo"<input type=text name=pa003Qty size=2 required>";
								echo"<a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock : ".$productQty."</b></a>";
								echo"<br/><br/>";

								echo"<input type=submit class=shoppingCartButton value=Add To Cart >&nbsp;";
								$closeAction = "product3Close()";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = ".$closeAction."></a>";

							}else{
								// View for non logged in user
								echo"<a><b>Stock : ".$productQty."</b></a>";
								echo"<p><font class=fontRed> * You need to be logged in to purchase this item </font></p>";
								echo"<input type=button class=shoppingCartButton value=Login onclick=login()>&nbsp;";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = product3Close()></a>";
							}
  						
					echo"</form>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
		

		// Product 3 ///////////////////////////////////////////////////////////////////


		// Product 4 ///////////////////////////////////////////////////////////////////
		
		echo"<div class=productDiv style=margin-left: 0>";
			
				// Which product is going to be referred at this iteration
				$referenceProduct = "PA004";

				// Thumbnai image is got from database
				include("connectToDatabase.php");
				$productThumbImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
				$productThumbImgExecute = mysqli_query($con,$productThumbImgQuery);
				$productThumbImgRow = mysqli_fetch_array($productThumbImgExecute);
				$productThumbImg = $productThumbImgRow['productImageLocation'];

				echo"<img src=".$productThumbImg." alt=Accesories width=180px><br/><br/>";
				
				// Name, Price and details are got from the database
				$productThumbDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
				$productThumbDetailsExecute = mysqli_query($con,$productThumbDetailsQuery);
				$productThumbDetailsRow = mysqli_fetch_array($productThumbDetailsExecute);
				$productThumbName = $productThumbDetailsRow['productName'];
				$productThumbPrice = $productThumbDetailsRow['productPrice'];

				echo"<a class=shoppingCartProductName>".$productThumbName."</a><br/>";
				echo"<a class=shoppingCartProductPrice>LKR ".$productThumbPrice."</a><br/><br/>";
			
				$viewAction = "product4View()";
				echo"<input type=button class=shoppingCartButton value=View onclick=".$viewAction.">";
			
			
		echo"</div>";



		//Summary
		echo"<div id=product4Summary class=shoppingCartProductSummaryPopup>";
			echo"<br/>";
			echo"<div class=productSummaryDiv>";
				echo"<div class=shoppingCartSummaryImage>";
					
						// Description image is got from database
						include("connectToDatabase.php");
						$productDescriptionImgQuery = "select productImageLocation from products where productId='$referenceProduct'";
						$productDescriptionImgExecute = mysqli_query($con,$productDescriptionImgQuery);
						$productDescriptionImgRow = mysqli_fetch_array($productDescriptionImgExecute);
						$productDescriptionImg = $productDescriptionImgRow['productImageLocation'];
					
						echo"<img src=".$productDescriptionImg." alt=Accessories width=355px>";
					
				echo"</div>";
				echo"<div class=shoppingCartSummaryDetails>";
					
						// Name, Price and details are got from the database
						include("connectToDatabase.php");
						$productDetailsQuery = "select productName,productPrice,productDescription from products where productId='$referenceProduct'";
						$productDetailsExecute = mysqli_query($con,$productDetailsQuery);
						$productDetailsRow = mysqli_fetch_array($productDetailsExecute);
						$productName = $productDetailsRow['productName'];
						$productPrice = $productDetailsRow['productPrice'];
						$productDescription = $productDetailsRow['productDescription'];

						echo"<h3 style=font-size:180%>".$productName."</h3>";
						echo"<font class=fontRed><b>LKR ".$productPrice."</b></font>";
						echo"<p>".$productDescription."</p>"; 

					
					echo"<form name=formPA004 method=post action=addToCartAccessoriesAction.php>";
						
							include("connectToDatabase.php");
							$productQuery = "select availableQty from productsDummy where productId='$referenceProduct'";
							$productExecute = mysqli_query($con,$productQuery);
							$productRow = mysqli_fetch_array($productExecute);
							$productQty = $productRow['availableQty'];
		  					
  							if(isset($_SESSION["session1"])){
		  						// View for logged in user
  								
  								// Getting the available quantity from the database
								echo"<a><b>Quantity&nbsp;</b></a>";
								echo"<input type=text name=pa004Qty size=2 required>";
								echo"<a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock : ".$productQty."</b></a>";
								echo"<br/><br/>";

								echo"<input type=submit class=shoppingCartButton value=Add To Cart >&nbsp;";
								$closeAction = "product4Close()";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = ".$closeAction."></a>";

							}else{
								// View for non logged in user
								echo"<a><b>Stock : ".$productQty."</b></a>";
								echo"<p><font class=fontRed> * You need to be logged in to purchase this item </font></p>";
								echo"<input type=button class=shoppingCartButton value=Login onclick=login()>&nbsp;";
								echo"<input type=reset class=shoppingCartButton value=Cancel onclick = product4Close()></a>";
							}
  						
					echo"</form>";
				echo"</div>";
			echo"</div>";
		echo"</div>";
		

		// Product 4 ///////////////////////////////////////////////////////////////////

		

		?>

		<div id="fade" class="black_overlay"></div> <!--Black overlay (Common for every product)-->
		
	</div>
</div>

<?php
	$pageEditor="senthuran"; //This is to show the page editor's name in footer
	include("WebsiteFooter.php")
?>
</body>
</html>