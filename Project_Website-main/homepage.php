<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Homepage</title>
    
<style>
	
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
	scroll-behavior: smooth;
}

body{
	min-height: 100vh;
	background: linear-gradient(#2b1055,#7597de);
	overflow-x: hidden;
}

header{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	padding: 30px 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
z-index: 10000;
}

header .logo{
	color:  #fff;
	font-weight: 700;
	text-decoration: none;
	font-size: 2em;
	text-transform: uppercase;
	letter-spacing:2px ;
}

header ul{
	display: flex;
	justify-content: center;
	align-items: center;

} 

header ul li{
	list-style: none;
	margin-left: 20px;
}

header ul li a{
	text-decoration:none;
	padding: 6px 15px;
	color:  #fff;
   border-radius: 20px;
}

header ul li a:hover,
header ul li a.active
{
	background:  #fff;
	color: #2b1055;


}

section{
	position:  relative;
	height: 100vh;
	padding: 100px;
	width: 100%;
display: flex;
justify-content: center;
align-items: center;
overflow: hidden;
}

section::before{
	content: '';
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 100px;
	background: linear-gradient(to top, #1c0522, transparent);
	z-index: 1000;

}

section img{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
	pointer-events: none;

}

section img#moon{
	mix-blend-mode:screen ;
}

section img#mountain_front{
	z-index: 10;

}


#text{
	position: absolute;
	color: #fff;
	right:-265px ;
	white-space: nowrap;
	font-size: 7.5vw;
    z-index: 9;

}

.sec{
	position: relative;
	background: #1c0522;
	padding: 100px;

}

.sec h2{
	font-size: 3.5em;
	margin-bottom: 10px;
	color:  #fff;

}

.sec p{
	font-size: 1.2em;
	color: #fff;

}


</style>



</head>

<body>
	<header> 
		<a href="#" class="logo">TECH-VHD</a>

        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="AdminViewStock.php">View items</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="logout.php" class="active">LOG OUT</a></li>



		</ul>
	</header>
 <section>
 	<img src="images/mainmenu/stars.png" id="stars">
 	<img src="images/mainmenu/moon.png" id="moon">
 	<img src="images/mainmenu/mountains_behind.png" id="mountain_behind">
 	<h2 id="text">TECH-VHD</h2>
 	<img src="images/mainmenu/mountains_front.png" id="mountain_front">
 </section>
<div class="sec" id="sec">
<h2>Tech-VHD</h2>
<p>We are a trusted computer accessories supplier in Malaysia. TECH-VHD provides various type of computer accessories online. Get the best quality computer accessories in terms of specification, size, durability & warranty.  Explore our wide range of popular Cables, Compatible Toner Cartridge, Headset & Speaker, Keyboard & Mouse and Laptop Battery Adapter & Network Devices, discover these to meet your needs.TECH-VHD has been established since year 2015 and began the business in Malaysia by trading new and used/refurbished IT products and spare part for few major brands such as DELL, HP, LENOVO, ASUS, Acer, Apple and etc. We are also an online to offline computer shop located at KL, Malaysia. Our main focus products are refurbished IT products, which all of our products have been inspected and repaired so they can function.<br>Throughout these years, TECH-VHD continuously diversify the business into repair and services, TECH-VHD provides repairing of IT products such as motherboard chipset repair, computer upgrade and preventive maintenance services. Furthermore, our well trained technician manage to handle ad hoc task efficiently upon request for onsite support by client.
<br>Because of the market demand for rental of ICT products is affected by the COVID-19 pandemic, TECH-VHD starts to provide rental services to SME business owner. Product includes laptop, desktop, monitor and printer. Rental period from minimum 1 month to 12 months.</p><br><br><br><br><br><br><br><br><br><br><br><br>


<p><img src="images/mainmenu/image02.png" alt="" width="200px" height="200px" align="left" /><b><br>Ease of Use</b><br>Purchasing your Techs in TECH-VHD is simple and hassle free.<br> Whatever you want, let us know.</p>
<br><br><br><br><br><br><br><br>

<p align="right"><img src="images/mainmenu/image03.png" alt="" width="200px" height="200px" align="right" /><b><br>Crazy discounts and offers</b><br>TECH-VHD provides crazy offers and discounts<br> that other companies cant.</p>
<br><br><br><br><br><br><br><br>


<p><img src="images/mainmenu/image04.png" alt="" width="200px" height="200px" align="left" /><b><br>Stunning products</b><br>Our TECH-VHD with our multi-level platform,<br> your gadgets will be so upgraded and <br> has all the latest version softwares in it.

</p>
<br><br><br><br><br><br><br><br><br>
<h2>BIG SALE, GRAB YOUR GADGETS NOW!!!</h2>



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