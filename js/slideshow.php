<?php $slideshow_delay = of_get_option('ttrust_slideshow_delay'); ?>
<?php $slideshow_delay = ($slideshow_delay != "") ? $slideshow_delay : '6'; ?>

<script type="text/javascript">
//<![CDATA[

jQuery(window).load(function() {			
	jQuery('.flexslider').flexslider({
		slideshowSpeed: <?php echo $slideshow_delay . '000'; ?>,  
		directionNav: true,					
		animation: "fade"		
	});  
});

//]]>
</script>