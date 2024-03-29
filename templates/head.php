<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Open+Sans:400,400i,600,700&amp;subset=latin-ext"
        rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/manifest.json"> -->
    <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/safari-pinned-tab.svg"
        color="#5bbad5">
    <link rel="shortcut icon" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/favicon.ico">
    <meta name="msapplication-config"
        content="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#231F20">
    <?php if (get_current_blog_id() == get_main_site_id() ) :  //angol ha true ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R471J6K4C9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-R471J6K4C9');
    </script>
    <?php else: ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3XC6XJT6CV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-3XC6XJT6CV');
    </script>
    <?php endif; ?>
</head>
