<!DOCTYPE html>
<html amp>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <?php //wp_head(); ?>
<link rel="canonical" href="<?php bloginfo('url'); ?>" />
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

<style amp-custom>
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;}ol,ul{list-style:bullet;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}body{font-family:Verdana,serif;font-size:13px;line-height:1.7;}a,a:active,a:visited{text-decoration:none;border-bottom:1px solid #839496;padding-bottom:2px;}a:hover{background-color:#839496;color:#000000;}p{margin-bottom:15px;}ul,ol{padding:0 0 18px 30px;}ol li,ul li{margin-top:0;margin-bottom:0;}em,i{font-style:italic;}strong,b{font-weight:bold;}small{font-size:0.85em;}sup{vertical-align:super;font-size:0.85em;}sub{vertical-align:sub;font-size:0.85em;}code{font:1em Monaco,Courier,Monospace;}blockquote{margin:22px 22px;padding:0 20px;border-left:2px solid #000000;font-size:1.2em;font-style:italic;line-height:1.5em;}acronym,abbr{cursor:help;letter-spacing:1px;border-bottom:1px dashed;}h1{font-size:17px;margin:0 0 10px 0;}h2{font-size:15px;margin:0 0 10px 0;}h3{font-size:14px;margin:0 0 10px 0;}.clear{clear:both;}.float-left{float:left;}.float-right{float:right;}.text-left{text-align:left;}.text-right{text-align:right;}.text-center{text-align:center;}.text-justify{text-align:justify;}.img-left{float:left;margin:4px 10px 4px 0;}.img-right{float:right;margin:4px 0 4px 10px;}.img-middle{vertical-align:middle;}.nopadding{padding:0;}.nounderline{text-decoration:underline;}#page{width:500px;margin:0 auto;position:relative;}#header{width:500px;margin:40px auto 50px auto;}#header h1{font-size:32px;margin-bottom:-5px;}#header h1 a{border:none;}#blog-logo img{max-width:484px;height:auto;}#coverimg{width:100%;height:200px;background-repeat:no-repeat;background-position:center top;-moz-box-shadow:inset 0 0 10px 1px #000;-webkit-box-shadow:inset 0 0 10px 1px #000;box-shadow:inset 0 0 10px 1px #000;border-bottom:4px solid #073642;}#blog-logo,#blog-logo:hover,#blog-logo:active{background-color:transparent;border:none;}#footer{width:500px;margin:50px auto 20px auto;padding-top:10px;font-size:0.85em;border-top:1px solid #073642;}#content{width:600px;margin:0 auto;}#sidebar{position:absolute;text-align:right;width:160px;top:0;left:-240px;}#sidebar li{list-style:none;margin:2px 0;}#sidebar a{border:none;font-family:"Helvetica Neue","Helvetica",serif;font-size:1.2em;padding:2px 4px;}#sidebar .bio{margin-top:40px;font-size:0.8em;}#sidebar .bio img.avatar{width:95px;height:95px;border-radius:95px;}article{margin-bottom:40px;}article h1{font-size:17px;margin:0 0 10px 0;}article h1 a{border:none;}article h1 a.anchor{margin-left:8px;}article img{display:block;text-align:left;max-width:600px;height:auto;margin:0 auto 1em auto;}article .meta{padding-top:6px;font-size:0.85em;font-style:italic;}img.left{float:left;margin:0 1em 1em 0;}img.right{float:right;margin:0 0 1em 1em;}img.center{display:block;text-align:center;margin:0 auto 1em auto;}pre code{display:block;background-color:#073642;color:#93a1a1;border:1px solid #2d6472;border-radius:3px 3px 3px 3px;overflow:auto;padding:6px 10px;margin-top:10px;margin-bottom:15px;}code[class*="language-"],pre[class*="language-"]{-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none;white-space:pre;white-space:pre-wrap;word-break:break-all;word-wrap:break-word;font-family:Menlo,Monaco,"Courier New",monospace;font-size:1em;line-height:1.5;text-shadow:0;}.postnavigation{padding-top:10px;text-align:center;font-size:0.85em;}.postnavigation .left{float:left;}.postnavigation .right{float:right;}@media all and (max-width: 870px) {#page,#content,#footer{width:inherit;padding-left:10px;padding-right:10px;}#header{width:inherit;padding-left:20px;padding-right:20px;}#sidebar{position:relative;text-align:left;width:100%;left:0;margin:10px 10px 20px 10px;}#sidebar nav ul{margin:0;padding:0;}#sidebar nav select.mnav{display:block;margin-bottom:15px;}#sidebar .bio{display:none;}}@font-face{font-family:'solarthemeicons';src:url('../fonts/solarthemeicons.eot');src:url('../fonts/solarthemeicons.eot#iefix') format('embedded-opentype'),url('../fonts/solarthemeicons.woff') format('woff'),url('../fonts/solarthemeicons.ttf') format('truetype'),url('../fonts/solarthemeicons.svg#solarthemeicons') format('svg');font-weight:normal;font-style:normal;}[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"solarthemeicons";font-style:normal;font-weight:normal;speak:none;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1.7;}.icon-sun:before{content:'\e801';}.icon-anchor:before{content:'\e800';}.icon-anchor{font-size:65%;}.token.comment,.token.prolog,.token.doctype,.token.cdata{color:#93a1a1;}.token.punctuation{color:#586e75;}.namespace{opacity:.7;}.token.null,.token.operator,.token.boolean,.token.number{color:white;}.token.property{color:#b58900;}.token.tag{color:#268bd2;}.token.string{color:#2aa198;}.token.selector{color:#6c71c4;}.token.attr-name{color:white;}.token.entity,.token.url,.language-css .token.string,.style .token.string{color:#2aa198;}.token.attr-value,.token.keyword,.token.control,.token.directive,.token.unit{color:#859900;}.token.statement,.token.regex,.token.atrule{color:#2aa198;}.token.placeholder,.token.variable{color:#268bd2;}.token.important{color:#dc322f;font-weight:bold;}.token.entity{cursor:help;}table{width:100%;border-collapse:collapse;margin:1em 0 3em;}table td{padding:.5em;}table thead{font-weight:600;border-bottom:1px solid #073642;}table tbody tr:nth-child(even){background-color:#05303a;border-top:1px solid #05303a;border-bottom:1px solid #05303a;}table tfoot{border-top:1px solid #ecf0f1;}input{padding:2px 4px;}html,body{background-color:#002a35;color:#839496;}a,a:visited,a:active{color:#2aa198;border-color:#073642;}a:hover{background-color:#073642;border-color:#073642;color:#2aa198;}h1,h2,h3{color:white;}h1 a,h1 a:visited,h1 a:active{color:white;}h1 a:hover{background-color:#073642;border-color:#073642;color:white;}article h1 a.anchor{color:#2aa198;}blockquote{border-color:white;}#sidebar a:hover{color:#2aa198;background-color:#073642;}#footer{border-color:#073642;}#sidebar #searchform input {width: 100px;margin-top: 10px;border-radius: 0px;margin-bottom: 20px;}
</style>

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

<body>
    <header id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>

    <div id="page">

<div id="sidebar">
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>

 	<form method="GET" id="searchform" action="<?php echo home_url('/'); ?>" target="_top">
    		<input type="search" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s">
	</form>
</div>

    <div id="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>

        <div class="nav-previous"><?php next_posts_link('Older posts'); ?></div>
        <div class="nav-next"><?php previous_posts_link('Newer posts'); ?></div>

    </div>
    </div>

    <footer id="footer">
        <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('title') ?>. Powered by <a href="http://wordpress.org">Wordpress</a></p>
    </footer>

</body>
</html>

