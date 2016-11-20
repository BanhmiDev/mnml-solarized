<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <meta name="viewport" content="width=device-width">
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <?php wp_head(); ?>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Website",
        "publisher": {
            "@type": "Organization",
            "name": "<?php bloginfo('name'); ?>",
            "logo": "<?php site_icon_url(); ?>"
        },
        "url": "<?php bloginfo('url'); ?>",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php bloginfo('url'); ?>"
        },
        "description": "<?php bloginfo('description'); ?>"
    }
    </script>
</head>

<body class="<?php body_class(); ?>">
    <header id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <div id="page">
