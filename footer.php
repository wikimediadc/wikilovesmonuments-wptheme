<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
<?php wp_footer(); ?>
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.wikilovesmonuments.org/" : "http://stats.wikilovesmonuments.org/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 30);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.wikilovesmonuments.org/piwik.php?idsite=30" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
<script type="text/javascript">
( function( $ ) {

 	$( '<div id="wlm-stream-widget">' ).css( {
			height: $('#primary').height(),
			width: 250,
			position: 'relative',
			display: 'block',
			'float': 'right'
	} ).insertAfter( '#secondary' );

    $( '<link rel="stylesheet" >' ).attr( 'href', 'http://jonrobson.me.uk/wlm/p.css' ).appendTo( document.head );
    $.getScript( 'http://jonrobson.me.uk/wlm/polaroiderizer.js', function() {
        polaroiderizer( $( '#wlm-stream-widget' ),
            {
                    iiurlwidth: '200px',
                    action: 'query',
                    gcmsort: 'timestamp', gcmdir: 'desc',
                    gcmlimit: 500,
                    // SET THE CATEGORY TO PULL FROM HERE
                    //gcmtitle: 'Category:Images_from_Wiki_Loves_Monuments_2012',
                    gcmtitle: 'Category:Images_from_Wiki_Loves_Monuments_2012_in_the United States',
                    generator: 'categorymembers', format: 'json', prop: 'imageinfo', iiprop: 'url|user'
            },
            {
                dropDelay: 7000,
                // CSS PROPERTIES TO ANIMATE ON
                dropAnimation: { opacity: 1, rotate: 0 },
                fadeDuration: 6000,
                dropDuration: 1100,
initialDropDuration: 0,
                source: 'commons',
                rotationRange: 5,
                columns: 'auto',
                pollInterval: 1000 * 60 * 10 // every 10 minutes look for more
            }
        );
    } );
} ( jQuery ) );
</script>
</body>
</html>