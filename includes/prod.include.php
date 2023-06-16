<style type="text/css">
	#prod_container{
		display: inline-flex;
	}
	.prod{
		background-color: white;
		box-shadow: 0px 5px 5px rgba(225, 225, 225, 0.9);
		width: 120px;
		border-radius: 20px;
		margin: 20px;
	}
	.prod-img{
		width: 120px;
		border-radius: 20px 20px 0 0;
	}
	.prod-cont{
		padding: 0 20px 5px 20px ;
	}
	.btn{
		background-color: green;
		color: white;
		border-radius: 5px;
		padding: 5px;
		border: none;
		text-decoration: none;

	}
	#btn_sect{
		margin-top: 10px;
	}
</style>
<div id="prod_container">
<?php
	require_once('./db/prod.php');

	foreach ($products as $product) {
		
	// echo $product['prod_name'];
?>

<div class="prod">
	<div><img src="./assets/img/<?php echo $product['prod_img']; ?>" class="prod-img" alt="Produt Image"></div>
	<div class="prod-cont">
		<h4><?php echo $product['prod_name'] ?></h4>
		<span>$<?php echo $product['prod_cost'] ?></span><br>
		<small><em><?php echo $product['category']; ?></em></small><br>
		<div id="btn_sect"><small><a class="btn" href="./functions/addToCart.php?id='<?php echo $product['id']; ?>'">Add to Cart</a></small></div>
	</div>
</div>

<?php
	}
?>

</div>