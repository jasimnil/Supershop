<?php include 'inc/start.php'; ?>
	
	<?php include 'inc/topnav.php'; ?>
	
	<div style="height: 50px;"></div>
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->


			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			<?php  
			    if (isset($_GET["action"])){
			        if ($_GET["action"] == "delete") {
			           
			            foreach ($_SESSION['shopping_cart'] as $key => $value) {
			                if ($value['item_id'] == $_GET['id']) {
			                    unset($_SESSION['shopping_cart'][$key]);
			                    echo "<script>alert('Item has been removed')</script>";
			                    header("location: cart.php");
			                }
			            }
			        }
			    }
			?>





			<section id="cart_items">
				<div class="container">
					<div class="table-responsive cart_info">
						<table class="table table-condensed text-center">
							<thead>
								<tr class="cart_menu">
									<td>#</td>
									<td class="image">Item</td>
									<td class="price">Price</td>
									<td class="quantity">Quantity</td>
									<td class="total">Total</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								
								<?php 
				                    if (!empty($_SESSION['shopping_cart'])) {
				                        $total = 0;
				                        $i = 1;

				                        foreach ($_SESSION['shopping_cart'] as $key => $value) {
				                            
				                        
				                    
				                ?>


				            	
				            	<tr>
				            		<td><?php echo $i++ ?></td>
				                    <td class="cart_description">
				                    	
				                    	<h4><?php echo $value['item_name'] ?></h4>
				                    		
				                    </td>
				                    <td class="cart_price"><?php echo $value['item_price'] ?></td>
				                    <td class="cart_quantity"><?php echo $value['quantity'] ?></td>
				                    <td class="cart_total"><?php echo number_format($value['quantity'] * $value['item_price'], 2) ?></td>

				                    <td class="cart_delete"><a href="cart.php?action=delete&id=<?php echo $value['item_id']; ?>" onclick="return confirm('Are You Sure?')"><i class="fa fa-times"></i></a></td>

				                    <?php  
				                        $total = $total + ($value['quantity'] * $value['item_price']);
				                    ?>

				                    <?php }} ?>
				                </tr>



							</tbody>
						</table>
					</div>
				</div>
			</section> <!--/#cart_items-->

			<section id="do_action">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="total_area">

								<ul>
									<li>
									<?php  
										if (!isset($_SESSION['id'])) {
											echo "<h1>Please <a href=\"login.php\">Log In</a> To Check Out</h1>";
										}
									?>
									</li>

									<li><?php 
										if (isset($_SESSION['id'])) {
											echo "Hello <span>" .$full_name. "</span>";
										}
									 ?></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="total_area">
								<ul>
									<li>Cart Sub Total <span>
										<?php 
				                            if (!empty($_SESSION['shopping_cart'])) {
				                                echo number_format($total,2);
				                            }
				                        ?>
									</span></li>
									<li>Eco Tax <span>0.00</span></li>
									<li>Shipping Cost <span>Free</span></li>
									<li>Total <span>
										<?php 
				                            if (!empty($_SESSION['shopping_cart'])) {
				                                echo number_format($total,2);
				                            }
				                        ?>
									</span></li>
								</ul>
									<?php  
										if (isset($_SESSION['id'])) {
											
										
									?>

									<a class="btn btn-default check_out" href="checkout.php">Check Out</a>

									<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section><!--/#do_action-->
		</div>
	</section> <!--/#cart_items-->

	
	
	<?php include 'inc/footer.php'; ?>
	
<?php include 'inc/end.php'; ?>
	