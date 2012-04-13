<div class="column-post">
   	<div id="tagcloud-box" class="cf">
		<div class="tagcloud-d">
           	<h3>标签云</h3>
			<p><?php wp_tag_cloud('smallest=12&largest=12&unit=px&format=flat&orderby=count&order=RAND'); ?></p>
			<span class="rand-link"><a href="<?php echo home_url( '/' ); ?>author/g">随机一下</a></span>
		</div>
	</div>
</div>