<aside id="mainSidebar">
	<?php
	$post_id = 26321;
	$post = get_post($post_id);
	if ($post) {
		echo do_shortcode($post->post_content);
	}
	?>
</aside>