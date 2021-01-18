<?php
//$connect=mysqli_query()



?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">

	
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

</script>
<h1 style="text-align:center;font-size:50px;color:antiquewhite;">CART</h1>


<br /><br /> <br />




    <?php

        $connect = mysqli_connect("localhost", "root", "", "final");
 		$query="select * from cart_table ORDER BY 'id'";
 		$result=mysqli_query($connect,$query);
        $r=mysqli_num_rows($result);
		$count=1;
		$ini=0;
        echo "<table border='1' cellpadding='10' id='tbl' align='center'>";
        echo "<tr><th>Item</th><th>Restaurant Name</th><th>Price</th><th>Quantity</th></tr>";
        while($row = mysqli_fetch_array($result))
         {
          echo '<td>' . $row['item_name'] . '</td>';
          echo '<td>' . $row['restaurant_name'] . '</td>';
          echo '<td >' . $row['price'] . '</td>';
		  echo '<td ><input type="number" name="qty'.$count.'" id="qty'.$count.'" step="1" value="1"></td></tr>';
		  $ini=$ini+$row['price'];
		  $count=$count+1;
          }
         echo "</table>";

		echo "<br />
		<br />
		<p style='color:antiquewhite; font-size:40px; margin-right:200' align='center' > TOTAL <span id='total'> Rs. ".$ini."</span></p>";
		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		var list=[];
		var c='.$r.';
		var j;
		for(j=1;j<=c;j++)
		{
			list.push(j);
		}
		var table=document.getElementById("tbl");
			$(document).ready(function(){
			jQuery.each(list,function(i,value){
				$("#qty"+value).change(function(){
  					var total=0;
					var k,p,q;
					if($("#qty"+value).val()==0){
						$(this).parent().parent().hide();
					}
					for(k=1;k<=c;k++){
						q=$("#qty"+k).val();
						p=table.rows[k].cells[2].innerHTML;
						var prod = q*p;
						total=total+prod;		
					}
					document.getElementById("total").innerHTML="Rs. "+total;
					
  				});
			})
  			
			});
						
		</script>';
		 
		

                  

    ?>


<form action="order.php" method="post" align="center">
    <input class="orderbtn" align="center" type="submit" name="order" value="Order Now!" />
</form>

</body>

</html>