<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="border-top"></div>
<div id="icons">
        <ul id="icony">
            <!--li>
                <a href="https://www.motorossi.me/" class="motorossi"><span>MotoRossi</span><i class="entypo-direction"></i></a>
            </li-->
            <!--li>
                <a href="https://www.rossimeacham.com" class="blog"><span>Blog</span><i class="entypo-book"></i></a>
            </li-->
            <li>
                <a href="https://github.com/CorradoRossi" class="github"><span>Github</span><i class="fab fa-github"></i></a>
            </li>
            <li>
                <a href="https://linkedin.com/in/rossimeacham" class="linkedin"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
            </li>
            <li>
                <a href="https://dribbble.com/CorradoRossi" class="dribbble"><span>dribbble</span><i class="fab fa-dribbble"></i></a>
            </li>
            <li>
                <a href="https://instagram.com/corradorossi/" class="instagram"><span>instagram</span><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/metastash" class="twitter"><span>Twitter</span><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="https://soundcloud.com/user-348552759" class="soundcloud"><span>soundcloud</span><i class="fab fa-soundcloud"></i></a>
            </li>
        </ul>
    </div>

    </div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<a href="<?php echo esc_url( __( 'https://motorossi.me/', 'twentyfifteen' ) ); ?>" class="imprint">
				<?php printf( __( 'Made with ❤️ and ☕ by %s', 'twentyfifteen' ), 'MotoRossi' ); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
