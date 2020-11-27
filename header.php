<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
        <meta name="description" content="Bringing your ideas to life, through websites, applications, and custom solutions tailored to you. Let's start building together">
        <meta name="author" content="Kanyesigye Akbr">
        <title><?=$pageName?> | RTL Development Studio</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animsition.min.css" rel="stylesheet">
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">
        <link href="css/socicon.css" rel="stylesheet">
        <link href="css/ionicons.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="css/jquery.pagepiling.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">



        <meta property="og:url" content="https://studio.rtl.ug" />
        <meta property="og:title" content="<?=$pageName?> | RTL Development Studio" />
        <meta property="og:description" content="Bringing your ideas to life, through websites, applications, and custom solutions tailored to you. Let's start building together">
        <meta property="og:image" content="https://studio.rtl.ug/img/og-image-fb.jpg">
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="en_GB" />
        
        <!-- Twitter cards -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:creator" content="@kanyeceejay">
        <meta property="twitter:image" content="https://studio.rtl.ug/img/og-image-twitter.jpg">
        <meta property="twitter:site" content="@kanyeceejay">

        <script type="application/ld+json">
			{
			  "@context": "https://schema.org",
			  "@type": "Organization",
			  "name": "RTL Development Studio",
			  "url": "https://studio.rtl.ug",
			  "logo": "https://studio.rtl.ug/img/logo/rtl-logo-1.jpg",
			  "contactPoint": {
			    "@type": "ContactPoint",
			    "telephone": "+256776734087",
			    "contactType": "customer service",
			    "availableLanguage": "en"
			  },
			  "sameAs": [
			    "https://twitter.com/rtlug",
                "https://www.facebook.com/rtlug/",
                "https://www.linkedin.com/company/rootless-technologies-limited/"
			  ]
			}
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-D46HKN832P"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D46HKN832P');
        </script>
    </head>
    <body class="theme-yellow dark-horizontal">
        <div class="animsition">
            <div class="wrapper">
                <header id="header" class="header header-fixed">
                    <div class="container-fluid clearfix">
                        <div class="brand">
                            <a href="https://studio.rtl.ug" class="animsition-link" data-animsition-out-class="fade-out" data-text="Home">
                                <div class="brand-name"><img src="img/rtl-logo-1.png" style="width:60px;margin-top:-5px;"> </div>
                                <div class="brand-text">
                                    RTL Dev Studio
                                </div>
                            </a>
                        </div>
                        <button class="nav-toggle-btn a-nav-toggle">
                            <span class="nav-toggle-title">Menu</span>
                            <span class="nav-toggle nav-toggle-sm">
                                <span class="stick stick-1"></span>
                                <span class="stick stick-2"></span>
                                <span class="stick stick-3"></span>
                            </span>
                        </button>
                        <div class="header-content d-none d-md-block">
                            <div class="header-contacts">
                                <div class="header-contact-item">
                                    <a href="tel:+256776734087" class="phone-link">+256776734087</a>
                                </div>
                                <div class="header-contact-divider">/</div>
                                <div class="header-contact-item">
                                    <a href="mailto:sales@rtl.ug" class="mail-link">
                                        <span class="__cf_email__" data-cfemail="d9bab6b7adb8baad99b5bcaeb0aaaaadacbdb0b6f7bab6b4">sales@rtl.ug</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hide-menu a-nav-toggle"></div>
                    <div class="menu">
                        <div class="menu-main" id="accordion">
                            <ul>
                                <li <?php if($pageName=='Home'){echo'class="active"';}?>>
                                    <a href="index" class="animsition-link" data-animsition-out-class="fade-out" data-text="Home">Home</a>
                                </li>
                                <li <?php if($pageName=='Portfolio'){echo'class="active"';}?>>
                                  <a href="portfolio" class="animsition-link" data-animsition-out-class="fade-out" data-text="Portfolio">Portfolio</a>
                              </li>
                              <li>
                                  <a href="https://github.com/rtl-ug" data-text="Github" target="_blank" rel="nofollow">Github</a>
                              </li>
                            </ul>
                        </div>
                        <div class="menu-footer">
                            <ul class="social social-rounded">
                                <li>
                                    <a href="https://twitter.com/rtlug" target="_blank" rel="nofollow">
                                        <i class="socicon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/rootless-technologies-limited" target="_blank" rel="nofollow">
                                        <i class="socicon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/rootless-technologies-limited/" target="_blank" rel="nofollow">
                                        <i class="socicon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="menu-copyright">
                                &copy;<script>  document.write((new Date()).getFullYear());</script> <strong>RTL</strong>
                                . All Rights Reserved.<br/>
                            </div>
                        </div>
                    </div>
                </header>