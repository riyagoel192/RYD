<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<table>
		<th>TABLES</th>
		<th>
			<div class="search-container">
    			<form action="#">
      				<input type="text" placeholder="Search.." name="search">
      				<button type="submit"><i class="fa fa-search"></i></button>
    			</form>
  			</div>
		</th>
		<th>
			<div id="btn-table">
				<a href="">TABLES</a>
			</div>
		</th>
		<th>
			<div id="btn-kot">
				<a href="">KOT</a>
			</div>
		</th>
		<th>
			<div id="btn-logout">
				<a href="">LOGOUT</a>
			</div>
		</th>
		<th>
			<span id="dot">
				<img src="https://www.orange.ngo/wp-content/uploads/2016/01/CUTE-GIRL-HAIR-FB-DP.jpg" id="img">
			</span>
		</th>
	</table>

	<hr>

	
	<table>
		<th>For Table</th>
		<th>
			<div style="border: 1px solid black;height: 30px;width: 100px;padding-top: 10px;margin-left: -100px;"><?php  echo $_GET['id']; ?></div>	
		</th>
	</table>

	<div id="sub-div">
		<table>
			<th>STARTER</th>
			<th>MAIN COURSE</th>
			<th>DESERT</th>
			<th>DRINK</th>
		</table>
	</div>

	<div id="sub-div2">
		<table>
			<tr>
				<th>FOOD NAME</th>
				<th>RUPEES</th>
				<th>ADD</th>
				<th>DEL</th>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Burger</div></td>
		    	<td style="margin-left: 50px;position: absolute;">50.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Pizza</div></td>
		    	<td style="margin-left: 50px;position: absolute;">150.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Dosa</div></td>
		    	<td style="margin-left: 50px;position: absolute;">120.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Malai Chaap</div></td>
		    	<td style="margin-left: 50px;position: absolute;">200.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Gulab Jamun</div></td>
		    	<td style="margin-left: 50px;position: absolute;">400.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Noodles</div></td>
		    	<td style="margin-left: 50px;position: absolute;">250.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Oreo Shake</div></td>
		    	<td style="margin-left: 50px;position: absolute;">90.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		    <tr>
		    	<td><div class="boxes">Mojito</div></td>
		    	<td style="margin-left: 50px;position: absolute;">70.00</td>
		    	<td style="margin-left: 230px;position: absolute;">+</td>
		    	<td style="margin-left: 390px;position: absolute;">-</td>
		    </tr>

		</table>

		<hr>

		<p style="text-align: center;">
			Special Note/Instructions<br><br>
			<textarea rows="1" cols="50" style="margin-left: 0px;">Type anything...</textarea>
		</p>
	</div>

	<div id="sum-div">

	</div>

	<div id="final">
		<table>
			<th>Total</th>
			<th><div id="total"></div></th>
			<th><a href="#">Back</a></th>
			<th><a href="#">CheckOut</a></th>
		</table>
	</div>



	<div id="main-div">
		<div class="circle">
			<img src="https://www3.pictures.zimbio.com/mp/wwj1hrnad01x.jpg" class="food"> 		
		</div>

		<div class="circle">
			<img src="https://www.oetker.in/Recipe/Recipes/oetker.in/in-en/baking/image-thumb__52711__RecipeDetail/pizza-pollo-arrosto.jpg" class="food"> 
		</div>

		<div class="circle">
			<img src="https://lh3.googleusercontent.com/proxy/8hdXYzSTbMVXHniyZuVh3NXKFIUrL8djLZ5oEnH3AOZeVFOkOTVEUr4MEPPOZEK3RU2567mXf4K7F6iDC1t2vSSLkFo1gdzlXrkXWmdc33G-8fYo06jlH89nziorLlUBFAwv-PZNO1vfDty-NCzLSZ70wCUetvonl_If9H14m7jajQd-hkUi86X5" class="food"> 
		</div>

		<div class="circle">
			<img src="https://usercontent2.hubstatic.com/14180157_f1024.jpg" class="food"> 
		</div>

		<div class="desc">Burger</div>
		<div class="desc">Pizza</div>
		<div class="desc">Dosa</div>
		<div class="desc">Malai Chaap</div>

		<div class="circle">
			<img src="https://lh3.googleusercontent.com/proxy/Zp-PjH_Z05SQiZ8jB-oSPqSfwd_hp4ElGSVXm-74PsyvfVw_L1r9C2XRiNHn549v_jy9mhVK_In48igMWzY-N7cqOP_YUtN6QhH1g-5G--0u719op5wEkAI4mh_k" class="food"> 
		</div>

		<div class="circle">
			<img src="https://s3.ap-south-1.amazonaws.com/mumbai.urbanpiper.com/media/bizmedia/2019/12/27/Chilli_Garlic_Noodles_Veg_COMPRESSED.jpg" class="food"> 
		</div>

		<div class="circle">
			<img src="https://images.sweetauthoring.com/recipe/53860_977.jpg" class="food"> 
		</div>

		<div class="circle">
			<img src="https://www.thespruceeats.com/thmb/MqGv7imLKyo0hh5be9SKDdLxtH8=/668x668/smart/filters:no_upscale()/mojito-5a8f339fba61770036ec61d8.jpg" class="food"> 
		</div>

		<div class="desc">Gulab Jamun</div>
		<div class="desc">Noodles</div>
		<div class="desc">Oreo Shake</div>
		<div class="desc">Mojito</div>

	</div>


</body>
</html>