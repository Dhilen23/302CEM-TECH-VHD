<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Homepage</title>









<!--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
-->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<link rel="stylesheet" type="text/css" href="viewcss.css">





  





</head>

<body>
    <header> 
        <a href="#" class="logo">TECH-VHD</a>

        <ul>
            <li><a href="AdminHome.php" >Home</a></li>
            <li><a href="AdminAddStock.php">Add to Stock</a></li>
            <li><a href="#" class="active">View Stocks</a></li>
            <li><a href="logout.php" class="active">LOG OUT</a></li>



        </ul>
    </header>





<section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">View Stocks</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">




    

   <div class="container py-5">
   	<div class="row mt-4">

   		<?php
   			require('config2.php');


   			$query="SELECT * FROM itemtb";
   			$query_run= mysqli_query($con,$query);
$check_item= mysqli_num_rows($query_run)>0;

if($check_item){
while($row = mysqli_fetch_array($query_run)){


?>
	

<div class="col-md-4 mt-5">
    		<div class="card">
    			<img src="<?php echo $row['itemIMG']; ?>"  width="348px" height="250px" alt="item images">
    			<div class="card-body">
    				
    				<h2 class="card-title"><?php echo $row['itemID']; ?></h2>
    				<p class="card-text">
    					Barcode: <?php echo $row['itemID']; ?>
    				</p>
    				<p class="card-text">
    					Name: <?php echo $row['itemName']; ?>
    				</p>
    				<p class="card-text">
    					Category: <?php echo $row['itemCat']; ?>
    				</p>
    				<p class="card-text">
    					Specifications: <?php echo $row['itemSpec']; ?>
    				</p>
    				<p class="card-text">
    					Manufactured Date: <?php echo $row['itemDate']; ?>
    				</p>
    				
    				
    			</div>
    		</div>
    	</div>
  



<?php
	




}

}
else
{

}

?>
</div>
</div>

</div>



    	

    	








    


<script>
	let stars = document.getElementById('stars');
	let moon = document.getElementById('moon');
	let mountain_behind = document.getElementById('mountain_behind');
	let mountain_front = document.getElementById('mountain_front');
	let text = document.getElementById('text');
	let header = document.querySelector('header');

	window.addEventListener('scroll', function(){
		let value = window.scrollY;
	    stars.style.left = value * 0.25 +'px';
	    moon.style.top = value * 1.05 +'px';
	    mountain_behind.style.top = value * 0.5 +'px';
	    mountain_front.style.top = value * 0 +'px';
	    text.style.marginRight =  value* 4 +'px';
	    text.style.marginTop = value * 1.5 +'px';
	    header.style.top = value * 0.5 + 'px';


	})
</script>




</body>

</html>
