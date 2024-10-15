<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=contain">
		
		<!-- Basic Meta Tags -->
		<title><?php echo $articleTitle; ?></title>
		<meta name="title" content="<?php echo $articleTitle; ?>">
		<meta name="description" content="<?php echo $articleDescription; ?>">
		<meta name="author" content="Kristian Windsor">
		<meta property="article:published_time" content="<?php echo $datePublished; ?>">

		<!-- Open Graph -->
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $articleTitle; ?>">
		<meta property="og:description" content="<?php echo $articleDescription; ?>">
		<meta property="og:image" content="https://kristianwindsor.com/blog/<?php echo $articleUrl.'/'.$imageUrl; ?>">
		<meta property="og:url" content="https://kristianwindsor.com/blog/<?php echo $articleUrl.'/'; ?>">
		
		<!-- Twitter -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content="<?php echo $articleTitle; ?>">
		<meta name="twitter:description" content="<?php echo $articleDescription; ?>">
		<meta name="twitter:image" content="https://kristianwindsor.com/blog/<?php echo $articleUrl.'/'.$imageUrl; ?>">
		<meta name="twitter:site" content="@KristianWindsor" />

		<!-- Robots -->
		<meta name="robots" content="index, follow">

		<!-- Fonts + Stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
		<link rel="stylesheet" href="../../style.css">
		
		<!-- Favicon + Theme Color -->
		<link rel="apple-touch-icon" sizes="180x180" href="../../icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../../icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../../icon/favicon-16x16.png">
		<link rel="manifest" href="../../icon/manifest.json">
		<link rel="mask-icon" href="../../icon/safari-pinned-tab.svg" color="#61cae9">
		<link rel="shortcut icon" href="../../icon/favicon.ico">
		<meta name="msapplication-config" content="../../icon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body id="body" class="blog">
		<div id="breadcrumb">
			<a href="/">Home</a> --> <a href="../">Blog</a> --> <a href=<?php echo '"../'.$articleUrl.'"'.'>'.$articleTitle?></a>
		</div>
		<div id="blog-post">