<html>

<head>
    <title>Company Blog</title>
        <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div id="topbar">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="logo"></a>
        <div id="toplinks"><?php wp_list_pages( '&title_li=' ); ?>
        </div>
    </div>

    <div id="banner">
        <div id="title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></div><br>
        <span class="cta"><?php echo get_bloginfo( 'description' ); ?></span>
    </div>