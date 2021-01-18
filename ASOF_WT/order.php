<html>
    
    <head>
        <style>
            .otw{
                color: antiquewhite;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                font-size: 50px;
                position: absolute;
                top: 200;
                left: 25%;
            }
            
            body{
                background: url(https://lh3.googleusercontent.com/u0z_BqCNPSB_GU_R3g_fDTezufwzp_wjdSbE04-ONdnhHypxl0bCL99nygUViZoIkVTEMLI-VjoisR0zZyJphsRkNiNKVDmx4ZV0pX5cCGoWzQ_uY1WWYClQXqw_Rm6yxUK21kjgnJmSt27zX_NbT4VHIvD8OsypIPNfM9ImGd18Xf-CAhNFjEdh1BLjirQ2c3cKc-0OrMRuP4kpJ_r8HGnJ_4cfK8ypMPDmJUZ-KQgAacYJvG9xy8STIsuM0qEkU62XRVtTexalGK9N8ztvVu0yaUrXIQNVTZs5w5yp2gGzbV-1mPGtpvyopxb2YeFDt1KRW11FZagaljEZNgn6kvcaGLctJYlmGcy_JErCyiyRmVOAZdRY1XiQ83zn_TcmKWeZeTQLe1G58W3pHSyDIQ3DPr73L9bzEIu6_gWp8A39tpdvtg26O8UspmMwf7pR99RO27Vr60GOE3mvNbMF8wUXbxlJgME-r6OCIlbhGAx96oiJHza3Ybl9TxBpSvxO3aRss-Cdc9mSrdajogoPiYs9QVern8PIdCvnVgpL7GYtiPvQgM8ccQvWBV29GLgUogr5ZVIq4Gbm6uKeg0bTeW4PsCMQaa2IDLVpHIBY-UB1SdWUE1q4YP0BQvf2heFkGH1Vvhwl0lAqjuDAJ7UpPiGstelJklKsGiuhHPl1W1LsMYniGe9khc4e=w888-h592-no) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            }
            .back{
                border: none;
                color: maroon;
                padding: 8px 15px;
                font-size: 20px;
                background-color: antiquewhite;
                border-radius: 4px;
                text-decoration: none;
                position: absolute;
                bottom: 20px;
                right: 30px;
            }
            
        </style>
    </head>
    
    <body>
        <p class="otw" align="center">YOUR ORDER IS ON THE WAY!</p>
        <button class="back" align="center" style="text-decoration: none;"><a href="3_ChooseCuisine.html" style="text-decoration:none;">Choose Cuisine</a></button>
    </body>

</html>

<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['order']))
    {
        func();
    }
    function func()
    {
        $connect = mysqli_connect("localhost", "root", "", "final");
 		$query="DELETE FROM `cart_table` WHERE 1";
 		mysqli_query($connect,$query);
    }
?>