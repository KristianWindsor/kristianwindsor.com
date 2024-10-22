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
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400..700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../style.css">
		
		<!-- Favicon + Theme Color -->
		<link rel="icon" type="image/png" href="/icon/favicon-48x48.png" sizes="48x48" />
		<link rel="icon" type="image/svg+xml" href="/icon/favicon.svg" />
		<link rel="shortcut icon" href="/icon/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png" />
		<link rel="manifest" href="/icon/site.webmanifest" />
	</head>
	<body id="body" class="blog">
		<div id="breadcrumb">
			<a href="/">Home</a> --> <a href="../">Blog</a> --> <a href=<?php echo '"../'.$articleUrl.'"'.'>'.$articleTitle?></a>
		</div>
		<div id="blog-post">