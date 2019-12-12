<?php include 'inc/start.php'; ?>

<?php include 'inc/topnav.php'; ?>

<div style="height: 50px;"></div>



<?php  

		$get_product_id = $_GET['product_id'];

	    if (isset($_POST['add_to_cart'])) {
	        
	        if (isset($_SESSION['shopping_cart'])) {
	            $item_array_id = array_column($_SESSION['shopping_cart'], "item_id");
	            if (!in_array($_GET['product_id'], $item_array_id)) {
	                $count = count($_SESSION['shopping_cart']);
	                $item_array = array(
	                        'item_id' => $_GET['product_id'], 
	                        'item_name' => $_POST['hidden_name'], 
	                        'item_price' => $_POST['hidden_price'],
	                        'quantity' => $_POST['quantity']);
	                $_SESSION['shopping_cart'][$count] = $item_array;
	                echo "<script>alert('Product Added to Cart')</script>";
	                echo '<script>window.location.href=\'details.php?product_id='.$get_product_id.'</script>';
	                header("location: details.php?product_id=$get_product_id");
	            }else{
	                echo "<script>alert('Already Added')</script>";
	                echo '<script>window.location.href=\'details.php?product_id='.$get_product_id.'</script>';
	            }
	        }else{
	            $item_array = array(
	                        'item_id' => $_GET['product_id'], 
	                        'item_name' => $_POST['hidden_name'], 
	                        'item_price' => $_POST['hidden_price'],
	                        'quantity' => $_POST['quantity']);
	            $_SESSION['shopping_cart'][0] = $item_array;
	        }

	    }
	?>










<section>
    <div class="container">
        <div class="row">
            <?php //include 'inc/sidenav.php'; ?>



            <?php  
	            	

	            	if (!isset($_GET['product_id']) && !isset($_GET['add'])) {
	            		//header('location: index.php');
	            	}else{
	            		

	                    $query = "SELECT * FROM tbl_products WHERE product_id = '$get_product_id'";
	                    $result = mysqli_query($con,$query);

	                    if ($result) {
	                        $i = 0;
	                        while($row = mysqli_fetch_assoc($result)){

	                            $product_name       = $row['product_name'];
	                            $product_price      = $row['product_price'];
	                            $product_details    = $row['product_details'];
	                            $product_image      = $row['product_image'];

	                            $product_cat_id     = $row['product_cat_id'];

	                            $query2 = "SELECT tbl_category.cat_name AS cat FROM tbl_category INNER JOIN tbl_products ON tbl_category.cat_id = '$product_cat_id' ";
	                            $result2 = mysqli_query($con,$query2);
	                            while($row2 = mysqli_fetch_assoc($result2)){
	                                $cat_name = $row2['cat'];
	                            }
	                        }
	                    }
	            	}


                ?>

            <div class="col-md-12 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="dashboard/uploads/<?php echo $product_image; ?>" alt="" />
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <!--/product-information-->
                            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2>
                                <?php echo $product_name ?>
                            </h2>
                            <p>Web ID:
                                <?php echo $get_product_id ?>
                            </p>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
									<span>TK <?php echo $product_price ?></span>
                            <label>Quantity:</label>

                            <form action="details.php?action=add&product_id=<?php echo $get_product_id; ?>" method="post" class="pull-right">

                                <input type="text" hidden name="hidden_name" value="<?php echo $product_name; ?>">
                                <input type="text" hidden name="hidden_price" value="<?php echo $product_price; ?>">

                                <input type="text" name="quantity" value="1" />
                                <button type="submit" name="add_to_cart" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
                            </form>

                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> Non-Brand</p>
                            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="category-tab shop-details-tab">
                    <!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details">
                            <div class="col-sm-12">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <p>
                                            <?php echo $product_details; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tag">

                            <div class="col-sm-12">
                                <div class="single-products">
                                    <div class="productinfo text-center">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/category-tab-->


            </div>
        </div>
    </div>
</section>



<?php include 'inc/footer.php'; ?>

<?php include 'inc/end.php'; ?>
