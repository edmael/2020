<?php

function head($title = '')
{
    ?>

    <!DOCTYPE HTML>
    <html>
    	<head>
    		<title>MERGE-it 2020<?php echo (empty($text) ? '' : " $title") ?></title>
    		<meta charset="utf-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    		<meta name="description" content="" />
    		<meta name="keywords" content="libertà digitali, opensource, freesoftware, software libero, creative commons, pubblica amministrazione, impresa, torino, aprile" />

    		<link rel="stylesheet" href="/assets/css/main.css" />
    		<link rel="stylesheet" href="/assets/css/leaflet.css" />

    		<meta property="og:site_name" content="MERGE-it 2020" />
    		<meta property="og:title" content="MERGE-it 2020" />
    		<meta property="og:url" content="https://merge-it.net/" />
    		<meta property="og:image" content="https://merge-it.net/images/fb.png" />
    		<meta property="og:type" content="website" />
    		<meta property="og:country-name" content="Italy" />
    		<meta property="og:email" content="info@merge-it.net" />
    		<meta property="og:locale" content="it_IT" />
    	</head>
    	<body class="is-preload">
    		<div id="wrapper">

    <?php
}

function footer()
{
        ?>

    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/browser.min.js"></script>
    <script src="/assets/js/breakpoints.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/leaflet.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq || [];
        _paq.push(['disableCookies']);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//stats.madbob.org/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '7']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
    </script>
    <noscript><p><img src="//stats.madbob.org/matomo.php?idsite=7&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->
</body>
</html>

        <?php
}

function contacts()
{
    ?>

    <section id="contacts">
        <header>
            <h2>Get in touch</h2>
        </header>
        <div class="content">
            <p>Per metterti in contatto con l'organizzazione di <strong>MERGE-it</strong> usa i contatti indicati accanto.</p>

            <div class="supporters">
                <h5>Con il patrocinio di</h5>
                <p>
                    <img alt="Città di Torino" src="images/citta_torino.jpg">
                </p>
            </div>
        </div>
        <footer>
            <ul class="items">
                <li>
                    <h3>Email</h3>
                    <a href="mailto:info@merge-it.net">info@merge-it.net</a>
                </li>
                <li>
                    <h3>Telefono</h3>
                    <a href="tel:00393487254214">+39 3487254214</a>
                </li>
                <li>
                    <h3>Online</h3>
                    <ul class="icons">
                        <li><a href="https://twitter.com/merge_it" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://github.com/merge-it" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                    </ul>
                </li>
            </ul>
        </footer>
    </section>

    <div class="copyright">CC-BY-3.0. Design: <a href="https://html5up.net/paradigm-shift">HTML5 UP</a>.</div>

    <?php
}

function page($data)
{
    head($data['title']);

    ?>

    <br>

	<section>
		<header>
			<h2><?php echo $data['title'] ?></h2>
		</header>
		<div class="content">
			<section>
				<header>
                    <?php if(isset($data['subtitle'])): ?>
	                   <h3><?php echo $data['subtitle'] ?></h3>
                   <?php endif ?>
                    <p>
                        <?php echo $data['details'] ?>
                    </p>
				</header>
				<div class="content">
                    <?php foreach($data['contents'] as $row): ?>
                        <p>
                            <?php echo $row ?>
                        </p>
                    <?php endforeach ?>

                    <hr>

                    <p>
                        <a href="/index.php" class="button primary">Torna alla Homepage</a>
                    </p>
				</div>
			</section>
		</div>
	</section>

    <?php

    contacts();
    footer();
}
