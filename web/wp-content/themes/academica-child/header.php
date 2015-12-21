<?php
/**
 * @package Academica
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19812029-15', 'auto');
  ga('send', 'pageview');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter29983229 = new Ya.Metrika({id:29983229,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/29983229" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<?php $header_image = get_header_image(); ?>

	<div id="header" class="clearfix" <?php if ( ! empty( $header_image ) ) : ?> style="background-image: url('<?php echo $header_image; ?>');" <?php endif; ?>>

		<?php if ( ! empty( $header_image ) ) : ?><div class="header_overlay"><?php endif; ?>

			<div class="inner-wrap">

				<div id="logo" class="<?php academica_logo_position(); ?>">
					<?php if ( ! academica_has_logo() ) : ?> <h1 id="site-title"> <?php endif; ?>

						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?> - <?php bloginfo( 'description' ); ?>" rel="home">

							<?php
							if ( ! academica_has_logo() ) :
								bloginfo( 'name' );
							else:
								academica_logo();
							endif;
							?>

						</a>

					<?php if ( ! academica_has_logo() ) : ?> </h1> <?php endif; ?>

					<p id="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- end #logo -->

			</div><!-- end .inner-wrap -->

		<?php if ( ! empty( $header_image ) ) : ?></div><!-- end .header_overlay --><?php endif; ?>

	</div><!-- end #header -->

	<div id="wrap">