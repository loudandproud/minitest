<?php
 $enable_footer_widget_area = esc_attr(onetone_option('enable_footer_widget_area',''));
?>
<!--Footer-->
		<footer>
        <?php if( $enable_footer_widget_area == '1' ):?>
				<div class="container">
					<div class="row">
						<div class="sky-calltoaction">
							Join Now and Start Your SKY Advantage
						</div>
						<div class="sky-phone">604.239.0760 ext 110</div>
						<div class="sky-email"><a href="mailto:advantage@skyhelicopters.ca" class="sky-eamail-a">advantage@skyhelicopters.ca</a>
						</div>
						<div class="sky-address">
							<address>
								170 - 18799 Airport Way, Pitt Meadows, BC V3Y 2B4
							</address>
						</div>
					</div>
				</div>
            <?php endif;?>		
		</footer>
	</div>
    <?php wp_footer();?>
	<script>
   	function setHeight(){
	    var windowHeight = jQuery(window).innerHeight();//get window's height
	    jQuery('#section-1').css('height',windowHeight);//Set window's height to section1 height
   	}
   	setHeight();
   	jQuery(window).resize(function(){
   		setHeight();
   	});
	</script>
</body>
</html>