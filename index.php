<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
		<title>HOME PAGE</title>
		 <link rel="stylesheet" href="style.css">
		 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<body>
	

<div class="navbar">
  <div class="logo">
    <img src="logo.jpg" id="logoimg" height="90px" width="100px">
  </div>

<ul id="navlist">
 
  <li class="navlist"><a class='active' href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li class="navlist"><a href="customers.php"><i class='fa fa-users' aria-hidden='true'></i> Records</a></li>
</ul>
</div>


  <div class="dark-overlay">
  	<div>
    <h1 class="title" style="color:white">First Bank </h1>

      <div class="subtitle" style="color:white">Convienience At Online Banking<br></div>
        <a href="customer.php"><a1  class="button1"><b>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Get Started </b></a1></a>
  </div>
  <style>
    a1{
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: blue;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 20px;
    overflow: hidden;
    transition: 0.2s;
}
a1:hover{
    color: blue;
    background: blue;
    box-shadow: 0 0 10px blue ,0 0 40px blue ,0 0 80px blue;
    transition-delay: 1s;
}

a1 span{
    position: absolute;
    display: block;
}
a1 span:nth-child(1){
    top: 0;
    left: -100px;
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg,transparent,blue);
}
a1:hover span:nth-child(1){
    left: 100%;
    transition: 1s;
}

a1 span:nth-child(3){
    bottom: 0;
    right: -100px;
    width: 100px;
    height: 2px;
    background: linear-gradient(270deg,transparent,blue);
}
a1:hover span:nth-child(3){
    right: 100%;
    transition: 1s;
    transition-delay: 0.5s;
}

a1 span:nth-child(2){
    top: -100px;
    right: 0;
    width: 2px;
    height: 100px;
    background: linear-gradient(180deg,transparent,blue);
}
a1:hover span:nth-child(2){
    top: 100%;
    transition: 1s;
    transition-delay: 0.25s;
}

a1 span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,blue);
}
a1:hover span:nth-child(4){
    bottom: 100%;
    transition: 1s;
    transition-delay: 0.75s;
}

  </style>


 </div>
<footer>
  <p>Developed by Jilson</p><br>
  	<ul class="foot">
  	Contact Me:
   <li><a target="_blank" class="github" href="https://github.com/JilsonCorreia "><i class="fa fa-github fa-2x"></i></a></li>	
   <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/in/jilson-correia-a82b12198/"><i class="fa fa-linkedin fa-2x"></i></a></li> 
</ul>

</footer>


 </body>
	 </html>
