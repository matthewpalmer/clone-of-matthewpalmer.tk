
<div class = "container">
	<div class = "header">
	<h1 id="one">Matthew Palmer</h1>
	<h1 id="two">Designer</h1>
	<h1 id="three">Developer</h1>
	<h1 id="blog">Blog</h1>
	</div>
	<div class = "postlist">
	<?php if(has_posts()): ?>
	<span class = "recentarticles">LATEST POSTS</span>
		<ul>
		
		
		
		
			<a href="<?php echo article_url(); ?>"><li><?php echo article_title(); ?></li></a>
		
		
		</ul>
	</div>
	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
		<?php endif; ?>	

</div>

