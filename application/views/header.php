<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<title>CircleBase</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<base href="<?php echo site_url();?>"/>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	<div class="col-md-10 col-md-offset-1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="welcome/index">CircleBase</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=<?php if(isset($current) && $current=='index') echo 'active';?>><a  href="<?php echo site_url('welcome/index')?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class=<?php if(isset($current) && $current=='search') echo 'active';?>><a href="<?php echo site_url('welcome/search')?>"><span class="glyphicon glyphicon-search"></span> Search</a></li>
		<li class=<?php if(isset($current) && $current=='stats') echo 'active';?>><a  href="<?php echo site_url('welcome/stats')?>"><span class="glyphicon glyphicon-stats"></span> Stats</a></li>
        <li class=<?php if(isset($current) && $current=='documentation') echo 'active';?>><a  href="<?php echo site_url('welcome/documentation')?>"><span class="glyphicon glyphicon-book"></span> Manual</a></li>
		<li class=<?php if(isset($current) && $current=='download') echo 'active';?>><a  href="<?php echo site_url('welcome/download')?>"><span class="glyphicon glyphicon-download"></span> Download</a></li>
		<li class=<?php if(isset($current) && $current=='links') echo 'active';?>><a  href="<?php echo site_url('welcome/links')?>"><span class="glyphicon glyphicon-random"></span> Links</a></li>
        <li class=<?php if(isset($current) && $current=='contact') echo 'active';?>><a  href="<?php echo site_url('welcome/contact')?>"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div><!-- /.container-fluid -->
</nav>

