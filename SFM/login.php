<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
<meta name="viewport" content ="width=device-width,initial-scale=1.0,user-scalable=yes" />

</head>

<body>
	<main>
		<header class = "head1">
	 <div class="menu">
		 <ul>
			 <li><a href="About.html">About us</a></li>
		 <li><a href="Q&A.html">Q & A</a></li>
		 </ul>

			<input type = "text" name = "search" class = "search" placeholder = "search">
	 </div>
	 </header>
    	<header class = "head2">
<div class = "container">
    <div class="Logo">
     <img scr =" " alt = ""/>
    </div>
    <div class="Name">
     <p> Omega Center</p>
    </div>
	     <div class="info">
       <p>15184511</p>
	    <br>
	   <p>Smoha Square</p>
    </div>
</div>

	</header>
	<header class = "head3">
				<div class="menu2">
 <ul>
	 <li><a href="OmegaHome.html">Home</a></li>
 <li><a href="Patient.html">Patient</a></li>
 <li><a href="Contact.html">Contact</a></li>
 <li><a href="Servicies.html">Services</a></li>
 </ul>
</div>
</header>

  <div class = "form">
    <form name = "form" method = "post" action = "log_handler.php">
    	<p> </p>
      <div>
        <label for="email" id="label1">Email Address: <span class="required">*</span> </label>
        <input type="email" name="email" placeholder="your@email.com" required="required" id ="email" />
      </div>
      <p> </p>
      <div>
        <label for="password" id = "label2">Password: <span class="required">*</span> </label>
        <input type="password" name="password"  required="required" id = "password"/>
      </div>
      <p id ="wrong"> </p>

      <div>
		  <input  type="submit" name = "submit" value="Submit" class = "button" id = "login" />
</div>
 </form>
</div>
<p class = "p">if you don't have an account
<a href = "SignUp.html">signup</a></p>




<footer>
<div class = "foot">
<ul>
<li><a href="OmegaHome.html">Home</a></li>
<li><a href="About.html">About Us</a></li>
<li><a href="Student.html">Students</a></li>
<li><a href="Contact.html">Contact Us</a></li>
<li><a href="doctors.html">Doctors</a></li>
</ul>

<p class = "CR1">abduelrahman mohamed , 18101711</p>
<p class = "CR">&copy;A</p>
</div>
</footer>
<script src = "login.js"></script>

  </main>
  </body>
  </html>
