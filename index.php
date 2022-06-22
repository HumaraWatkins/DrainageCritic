<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
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

    <div class="section group">
	<div class="col span_1_of_3">
	Logo
	</div>
	<div class="col span_2_of_3">
	menu
	</div>
</div>
<div class="section group">
	<div class="col span_3_of_3">
	This is carrosel
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
	This is column 2
	</div>
	<div class="col span_1_of_3">
	This is column 3
	</div>
</div>
    
</body>
</html>
