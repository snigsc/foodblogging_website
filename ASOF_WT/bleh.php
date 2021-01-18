<?php
 $connect = mysqli_connect("localhost", "root", "", "final");
 $query="select * from blog_table ORDER BY 'id' DESC";
 $result=mysqli_query($connect,$query);
 $rows=mysqli_fetch_assoc($result);

?>

<html>

    <head>
        
        <title>Tandoor</title>
        
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
        <!--Menu Bar-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="NavBar.css">
        
        <!--StyleSheet-->
        <link rel="stylesheet" type="text/css" href="5_Restaurants.css">
        
        <!--Top Button-->
        
        <link rel="stylesheet" type="text/css" href="TopButton.css">
        
        <!--Checkbox-->
        <link rel="stylesheet" type="text/css" href="5_checkbox.css">
        
        <!--Blog Modal-->
        <link rel="stylesheet" type="text/css" href="5_Blog.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       
    </head>

    <body>
        
       <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        
        <div class="navbar">
            
            <a href="3_ChooseCuisine.html"><i class="fa fa-home" style="font-size:24px"></i>&nbsp;Home</a>
            <a href="#"><i class="fa fa-plus" style="font-size:24px"></i>&nbsp;Upload</a>
            
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-cutlery" style="font-size:20px"></i>&nbsp;Cuisines&nbsp;</button>
                <div class="dropdown-content">
                    <a href="4_Indian.html">Indian</a>
                    <a href="4_Italian.html">Italian</a>
                    <a href="4_PanAsian.html">Pan-Asian</a>
                    <a href="4_FastFood.html">Fast Food</a>
                    <a href="4_Desserts.html">Desserts</a>
                    <a href="4_Continental.html">Continental</a>                    
                </div>
            </div>
            
            <div class="dropdown" style="float: right">
                <button class="dropbtn" style="font-size: 28;padding: 10 15"><i class="fa fa-user-circle-o"></i></button>
                <div class="dropdown-content2">
                    <a href="#">Cart</a>
                    <a href="ChangePass.html">Change password</a>
                    <a href="1_Home.html">Log Out</a>
                </div>
            </div>
                    
        
        </div>

        
        <div class="rest_name"></div>
        <div style="padding-left: 10px;"> 
            <div class="text">
            <h1 style="font-size: 50; color:white;" id="rn">TANDOOR</h1>  
            <div class="details">
                <a href="https://goo.gl/maps/4CE6EPw31yj8mRTr7" target="_blank"><i class='fa fa-map-marker' style='color:red;font-size:30;float:left;'></i></a>
                <p style="font-size:18;">&nbsp; MG Road, Craig Park Layout, Ashok Nagar, Bengaluru, Karnataka 560001</p>
                <i class='fa fa-phone' style='font-size:25;float:left;color:forestgreen'></i>
                <p style="font-size:18;">&nbsp; 080 2559 6961</p>
            </div>
            </div> 
           
        </div>
        <br/><br/>
          
                
            <div class = "row">
                

               <!-- <div class = "col-sm-5" style="overflow: auto">-->

                    <button class="name">MENU</button>

                    

                    <form action="#" method="post" class="menu">
                        <table>
                            <tr>
                            <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://www.vegrecipesofindia.com/wp-content/uploads/2013/07/corn-chaat-recipe-14-1.jpg" style="height:200px;width:200px;float:left;"><br/><br/>
                              <span style="color:green;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Corn Chat</p>
                                 <span class="shop-item-price">Rs.110</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input type="submit" value="ADD"  class="btn btn-primary shop-item-button" id="o1" name="o1"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o1"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Corn Chat','Tandoor','110')");
							
							
						}
						
						
						
						   ?>
                            <br/>
                            </td>
                            <td style="padding-top:0px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="http://www.sanjeevkapoor.com/UploadFiles/RecipeImages/Dilli-Aloo-Kachalu-Chaat.jpg" style="height:200px;width:200px;float:left;margin-top:52px;"><br/><br/>
                                <span style="color:green;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Tawa Aloo Chat</p>
                                 <span class="shop-item-price">Rs.135</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input style="margin-left:140px;margin-top:-30px" type="submit" value="ADD" class="btn btn-primary shop-item-button" id="o2" name="o2"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o2"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Tawa Aloo Chat','Tandoor','135')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>
                            <td style="padding-top:0px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://5.imimg.com/data5/BR/BM/MY-61335283/snacks-500x500.jpg" style="height:200px;width:200px;float:left;margin-top:56px;"><br/><br/>
                                <span style="color:green;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Veg Cocktail Samosa</p>
                                 <span class="shop-item-price">Rs.110</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input style="margin-left:145px;margin-top:-30px" type="submit" value="ADD" class="btn btn-primary shop-item-button" id="o3" name="o3"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o3"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Veg Cocktail Samosa','Tandoor','110')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td></tr>
                        <tr>
                            <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://www.whiskaffair.com/wp-content/uploads/2016/02/Achari-Paneer-Tikka-4-500x500.jpg" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:green;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Paneer Tikka</p>
                                 <span class="shop-item-price">Rs.335</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input style="margin-left:130px;margin-top:-25px;" type="submit" value="ADD" class="btn btn-primary shop-item-button" id="o4" name="o4"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o4"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Paneer Tikka','Tandoor','335')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>    
                            <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://delhilivelondon.com/wp-content/uploads/2016/09/Mixed-Vegetarian-Platter-2.jpg" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:green;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Veg Platter</p>
                                 <span class="shop-item-price">Rs.550</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input type="submit" style="margin-left:145px;margin-top:-25px;"  value="ADD" class="btn btn-primary shop-item-button" id="o5" name="o5"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o5"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Veg Platter','Tandoor','550')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>
                             <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://10play.com.au/ip/s3/2019/06/14/5ba88f0a28a02decdd1f68600842a3b4-344906.jpg?image-profile=image_medium&io=landscape" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:red;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Tandoori Lobster</p>
                                 <span class="shop-item-price">Rs.2100</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input style="margin-left:145px;margin-top:-25px;" type="submit" value="ADD" class="btn btn-primary shop-item-button" id="o6" name="o6"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o6"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Tandoori Lobster','Tandoor','2100')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>
                            
                            
                            
                        </tr>
                        <tr>
                            <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://cdn.shopify.com/s/files/1/2264/6159/files/Mrs_Balbir_Singh_s_-_Grilled_Tandoori_Pomfret_Fish_Recipe_grande.png?v=1552230850" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:red;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Tandoori Pomfret</p>
                                 <span class="shop-item-price">Rs.1025</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input type="submit" style="margin-left:130px;margin-top:-25px;" value="ADD" class="btn btn-primary shop-item-button" id="o7" name="o7"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o7"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Tandoori Pomfret','Tandoor','1025')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>
                            
                              <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="http://irepo.primecp.com/2017/10/351683/Tandoori-Chicken-Tikka-with-Lemon-and-Sage_ExtraLarge1000_ID-2483976.jpg?v=2483976" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:red;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p style="color: white">&nbsp;&nbsp;Chicken Tikka</p>
                                 <span class="shop-item-price">Rs.400</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input type="submit" style="margin-left:145px;margin-top:-25px;" value="ADD" class="btn btn-primary shop-item-button" id="o8" name="o8"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o8"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Chicken Tikka','Tandoor','400')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                                </td>
                         <td style="padding-top:20px;padding-left:50px;padding-right: :80px;">
                        
                        <img class="item-image" src="https://flavoursrestaurants.com/wp-content/uploads/2018/02/Awadhi-Chicken-Tikka-BD-2.000-300x300.jpg" style="height:200px;width:200px;float:left;"><br/><br/>
                                <span style="color:red;font-size: 30px;float: left;margin-top: -9px;">&#8865;</span><p id="i9" style="color: white">&nbsp;&nbsp;Tandoor ki Shaan</p>
                                 <span id="p9" class="shop-item-price">Rs.625</span>
                                    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form method="post"><input type="submit" style="margin-left:145px;margin-top:-25px;" value="ADD" class="btn btn-primary shop-item-button" id="o9" name="o9"></form>
						<?php
						$conn = mysqli_connect("localhost", "root", "", "final");		
						if(isset($_POST["o9"])){
						mysqli_query($conn, "INSERT INTO cart_table(item_name,restaurant_name,price) VALUES ('Tandoor ki Shaan','Tandoor','625')");
							
							
						}
						
						
						
						   ?>
                        <br/>
                             
                               </td>
                            
                            
                        </tr>
                        

                        </table>
                    </form>
                </div>

                    
                    
                
               <section>
                 <nav>
                  
                                <p class="recblog" align="center" style="font-family:Lucida Sans Unicode;font-size: 20px;margin-top: -145px;">RECOMMENDED BLOGS</p>
                     



  
  

 
    
                    
                    <br/><br/>
                    
                    
                    <div class="row">
                        
                        <div class="col-sm-5" style="overflow: hidden">
                            <div class="blogimg"><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['img'] ).''; ?>" height="150"/></div>
                        </div>
                        
                        <p class="blogtitle">&nbsp;<?php echo $rows['blog_title']; ?></p>
                        <p class="by">&nbsp;<?php echo $rows['blogger_name']; ?></p>
                        <br />
                        <br />
                        
                        &nbsp;&nbsp;<button style="margin-bottom: 60px;" type="button" id="readbutton" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" >Read</button>
                    </div>
                    
                         
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title"><?php echo $rows['blog_title']; ?></h2>
                                        <h4>By <?php echo $rows['blogger_name']; ?></h4>
                                    </div>
                                    <div class="modal-body">
                          
                                    
                                
                                        <p><?php echo $rows['blog']; ?></p>
                                    </div>
                                
                                    <div class="modal-footer">  
                                        <button type="button" class="btn btn-default">Like!&nbsp;<i class="fa fa-heart" style="font-size:18px;color:red;opacity:0.65;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <br/><br/>
                      <?php $temp=mysqli_next_result($connect);
					 		$rows=mysqli_fetch_assoc($result)  ?>
                       
                                        <div class="row">
                        
                        <div class="col-sm-5" style="overflow: hidden">
                            <div class="blogimg"><img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($rows['img'] ).''; ?>" height="150" /></div>
                        </div>
                        
                        <p class="blogtitle">&nbsp;<?php echo $rows['blog_title']; ?></p>
                        <p class="by">&nbsp;<?php echo $rows['blogger_name']; ?></p>
                        <br />
                        &nbsp;&nbsp;<button style="margin-bottom: -130px" type="button" id="readbutton" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" >Read</button>
                        
                        
                    </div>
                     
                    
                         
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title"><?php echo $rows['blog_title']; ?></h2>
                                        <h4>By <?php echo $rows['blogger_name']; ?></h4>
                                    </div>
                                    <div class="modal-body">
                          
                                    
                                
                                        <p><?php echo $rows['blog']; ?>.</p>
                                    </div>
                                
                                    <div class="modal-footer">  
                                        <button type="button" class="btn btn-default">Like!&nbsp;<i class="fa fa-heart" style="font-size:18px;color:red;opacity:0.65;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </nav>   
                    
                    
                </section>
                <!--<div class="RightContent">

                <div class="col-sm-7" style=": auto">
                    
                    <button class="name">BLOGS</button>
                    
                    <br/><br/>
                    
                    <!--Blog1 starts here
                    <div class="row">
                        
                        <div class="col-sm-5" style="overflow: auto">
                            <div class="blogimg"><img src="tandoor1.png" height="150"/></div>
                        </div>
                        
                        <p class="blogtitle">Title1</p>
                        <p class="by">/author's name/</p>
                        
                        <button type="button" id="readbutton" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read</button>
                    </div>
                    
                        <!-- Modal 
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h2 class="modal-title">Title1</h2>
                                        <h4>By _____</h4>
                                    </div>
                                    <div class="modal-body">
                          
                                        <!--Images
                                
                                        <p>Text goes here..</p>
                                    </div>
                                
                                    <div class="modal-footer">  
                                        <button type="button" class="btn btn-default">Like!&nbsp;<i class="fa fa-heart" style="font-size:18px;color:red;opacity:0.65;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <!--Blog1 ends here
                
                </div>-->
            
<script type="text/javascript" src="TopButton.js"></script>
    </body>

</html>

