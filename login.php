<!DOCTYPE html>
<html>
<head>

    <link href="style.css" rel="stylesheet" type="text/css">
    
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
 <style>
    
    /*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }


/*  GROUPING  */
.group:before,
.group:after {
	content:"";
	display:table;
}
.group:after {
	clear:both;
}
.group {
    zoom:1; /* For IE 6/7 */
}

/*  GRID OF THREE  */
.span_3_of_3 {
	width: 100%;
}
.span_2_of_3 {
	width: 66.1%;
}
.span_1_of_3 {
	width: 32.2%;
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 600px) {
	.col { margin: 1% 0 1% 0%;}
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
}
     </style>
    
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="authenticate.php" method="post">
<label for="username">
<i class="fas fa-user"></i>
</label>
<input type="text" name="username" placeholder="Username" id="username" required>
<label for="password">
<i class="fas fa-lock"></i>
</label>
<input type="password" name="password" placeholder="Password" id="password" required>
<input type="submit" value="Login">
<p class="logthing">New user? <a href="register_form.php">register</a></p>
</form>
</div>


    </body>

</html>

