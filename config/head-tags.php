<title><?php print $page_title; ?></title>
<link rel="stylesheet" href="../styles/index.css">

<?php if ($current_page == "Index"){ ?>
	<meta name="description" content="This is the index page of the app">
	<meta name="keywords" content="index, main-app">
	
<?php } ?>

<?php if ($current_page == "Contact"){ ?>
	<meta name="description" content="This is the contact page">
	<meta name="keywords" content="contact form">
	
<?php } ?>

<?php if ($current_page == "About"){ ?>
	<meta name="description" content="About me">
	<meta name="keywords" content="">
	
<?php } ?>
