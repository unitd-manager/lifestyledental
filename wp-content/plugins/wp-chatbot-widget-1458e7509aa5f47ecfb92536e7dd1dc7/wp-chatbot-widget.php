<?php 
	 /*
						Plugin Name: Chatbot Widget Script
						Description: This plugin is used to load the chatbot widget.
						Version:     1.0
						License:     GPL2 etc
						*/

						add_action( 'wp_footer', 'my_bot_scripts' );
						function my_bot_scripts(){
							wp_enqueue_script('jquery', '', array(), '1.12.4', true);
						?>
<script defer type='text/javascript'>
(function() {
    var s1 = document.createElement('script'),
        s0 = document.getElementsByTagName('script')[0];
    s1.async = true;
    s1.src = 'https://www.konversable.com/site/chatbot.js?bot_id=1458e7509aa5f47ecfb92536e7dd1dc7';
    s1.charset = 'UTF-8';
    //s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1, s0);
})();
</script>
<?php
						}
					?>