<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title style="font-family: Monotype Corsiva;">Tally Tracker</title>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'/>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/new_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
<link href="css/table.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="javascript/validate.js"></script>
<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
<script>
$(function(){
        $("#matchDate").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#from").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        })
    });

$(function(){
        $("#matchDate1").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#from").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        })
    });

</script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper" class="container">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Tally Tracker </a></h1>
		</div>
        <?php 
        if(isset($_SESSION['admin']))
        { ?>
		<div id="menu">
			<ul>
                <li class="current_page_item" ><a>Welcome <?php echo $_SESSION['admin']; ?>,</a></li>
                <li><a href="sudo_welcome.php">Homepage</a></li>
                <li><a href="guest_welcome.php">Reports</a></li>
                <li><a href="logout.php">Log Out</a></li>
				<!--<li class="current_page_item"><a href="index.php">Homepage</a></li>
				<li class="current_page_item"><a href="#">Blog</a></li>
				<li class="current_page_item"><a href="#">Photos</a></li>
				<li class="current_page_item"><a href="#">About</a></li>
				<li class="current_page_item"><a href="#">Contact</a></li>-->
			</ul>
		</div>
        <!-- END of the Header for the ADMIN -->
        <!-- Begin of Header for Guests  -->
        <?php
} 
    elseif (isset($_SESSION['guest']))
    {?>
        		<div id="menu">
			<ul>
                <li class="current_page_item" ><a>Welcome <?php echo $_SESSION["guest"]; ?>,</a></li>
                <li><a href="guest_welcome_page.php">Homepage</a></li>
                <li><a href="guest_welcome.php">Reports</a></li>
                <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
     <?php   } ?>    
	</div>
	<div></div>
	</div>
	<!-- end #header -->
 	<div id="page">
		<div id="content">
			<div class="post">