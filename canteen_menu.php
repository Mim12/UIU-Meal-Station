<html>
<head>
<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link rel="stylesheet" href="canteen_menu_styles.css" class="rel">

<title>Services Section</title>
<style>
    
</style>
</head>
<body>
<nav>
        <div class="nav-left">
            <a href="canteen_menu.php"><img src="../img/UIUMS.png" class="logo"></a> 
        </div>
        <div class="nav-middle">
            <ul>
                <li><a href="login.php">Logout</a></li>
            </ul>
            
        </div>
        <div class="nav-right">
            <div class="user online"><img src="../img/user.png"></div>
        </div>
    </nav> 

  <!-- services section CSS start-->


<style>
    body{
	margin:0px;
	padding: 0px;
	background-color: #FFFFFF;
	font-family: calibri;
}
a{
	text-decoration:none;
}
.services{
	width:100%;
	height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: space-evenly;
	align-items: center;
}
.s-heading{
	text-align:center;
}
.s-heading h1{
	color:#576975;
	font-size: 3rem;
	font-weight: 400;
	letter-spacing: 1px;
	margin: 0px;
}
.s-heading p{
	color: rgba(87,105,117,0.60);
	font-size: 1rem;
	margin: 5px;
	text-align: center;
}
.s-box-container{
	width:100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.s-box{
	display:flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	width:400px;
	padding: 20px 25px;
	height: 500px;
	box-sizing: border-box;
	margin: 30px;
	position: relative;
}
.s-box img{
	height: 200px;
}
.s-box h1{
	color:#576975;
	letter-spacing: 1px;
	font-size: 1.5rem;
	margin-bottom: 8px;
	
}
.s-box p{
	color: rgba(87,105,117,0.90);
	text-align: center;
}
.s-btn{
	width: 140px;
	height: 40px;
	border-radius: 20px;
	border:1px solid rgba(74,144,226,0.50);
	display: flex;
	justify-content: center;
	align-items: center;
	color:#576975;
	margin-top:10px; 
}
.bar{
	width: 100px;
	height: 6px;
	position: absolute;
	left: 50%;
	top: 0%;
	transform: translateX(-50%);
	background-color:#4a90e2; 
	border-radius: 0px 0px 10px 10px;
	display: none;
	animation: bar 0.5s;
}
.s-box:hover{
	box-shadow: 2px 2px 30px rgba(0,0,0,0.08);
	transition: all ease 0.3s;
}
.s-btn:hover{
	background-color:#4a90e2;
	border: 1px solid #4a90e2;
	color:#FFFFFF;
	transition: all ease 0.3s;
}
.s-box:hover .bar{
	display: block;
}
@keyframes bar{
	0%{
		width:0px;
	}
	100%{
		width:100px;
	}
}
@media(max-width:1050px){
	.s-box-container{
		flex-wrap: wrap;
		
	}	
	.services{
		height: auto;
	}
	.s-heading{
		margin: 15px;
	}
	.s-box{
		flex-grow: 1;
	}
	
}

/*footer*/
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height: 9%;
   width: 100%;
   background-color: darkcyan;
   color: white;
   text-align: center;
}

</style>

<!-- services section CSS end-->

<!-- services section start-->

<section class="services">
	<!--heading---------------->
	<div class="s-heading">
	<h1>Cafe<font color="#4a90e2">te</font>ria</h1>
	<p>We Provide The Best In Class Servies For Our Customers</p>
	</div>
	<!--services-box-container------------------->
	<div class="s-box-container">
	<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="1" src="../img/khan's kitchen.jpg" />
	<!--servies-name---------->
	<h1>Khan_kitchen</h1>
	<!--details------>
   <p>Come and have a look at our food services</p>
   <a class="s-btn" href="khan's_kitchen_fd.php">Menu</a>
     
	</div>
		<!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="2" src="../img/vikrampur kitchen.jpg" />
	<!--servies-name---------->
	<h1>Vikrampur Kitchen</h1>
	<!--details------>
		<p>Enjoy your days with our foods</p>
		<a class="s-btn" href="vikrampur_kitchen_fd.php">Menu</a>
    </div>

    <!--service-box-1---------------->	
	<div class="s-box">
	<!--top-bar-------->
	<div class="bar"></div>
	<!--img---------->
	<img alt="2" src="../img/Olympic kitchen.jpg" />
	<!--servies-name---------->
	<h1>Olympic Kitchen</h1>
	<!--details------>
		<p>Stay Hungry Stay with us</p>
		<a class="s-btn" href="olympic_kitchen_fd.php">Menu</a>
    </div>
	</section>

     <!-- services section end-->              
</body>
</html>