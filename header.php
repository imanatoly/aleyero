<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; 
     charset=<?php bloginfo('charset'); ?>" />	
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
     <!-- leave this for stats please -->

     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

     <?php wp_get_archives('type=monthly&format=link'); ?>
     <?php //comments_popup_script(); // off by default ?>
     <?php wp_head(); ?>

	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/site.css"/>


    <meta property="og:image" th:content="${config.site_host}+${content.image}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:site_name" content="Aloe Vera Network"/>
    <meta property="og:url" th:content="${config.site_host}+'/'+${content.uri}"/>
    <meta property="og:title" th:content="${content.title}"/>
    <meta property="og:description" th:content="${content.description}"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@lretcetera"/>
    <meta name="twitter:title" content="Aloe Vera Network"/>
    <meta name="twitter:description" th:content="${content.description}"/>
    <meta name="twitter:image:src" th:content="${config.site_host}+${content.image}"/>

</head>
