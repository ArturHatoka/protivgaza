	<title><?php echo $seo['title']; if(isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p']>1){ echo ' (Страница '.$_GET['p'].')'; } ?></title>
	<meta name="description" content="<?=$seo['description']?>" />
	<meta name="keywords" content="<?=$seo['keywords']?>" />
	<meta property="og:image" content="/<?=$additional[100]?>" />
	<meta name="twitter:image" content="/<?=$additional[100]?>" />
	<meta name="vk:image" content="/<?=$additional[100]?>" />
	<base  />
    <script>var ipUser="<?=$_SERVER['REMOTE_ADDR']?>";</script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="/assets/app/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/app/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/app/css/lightgallery.css" type="text/css" rel="stylesheet" />
    <link href="/assets/app/css/style.css" rel="stylesheet" />
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?=$additional[6]?>
	<?=$additional[7]?>