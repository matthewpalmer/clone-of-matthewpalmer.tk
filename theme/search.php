
<div class = "container">
	<div class = "header">
	<h1 id="one">Matthew Palmer</h1>
	<h1 id="two">Designer</h1>
	<h1 id="three">Developer</h1>
	<h1 id="blog">Blog</h1>
	</div>
	<article>
<h2>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h2>
    
    <?php if(has_search_results()): ?>
        <p>We found <?php echo total_search_results(); ?> <?php echo pluralise(total_search_results(), 'result'); ?> for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
        <ul>
			<?php while(search_results()): ?>
			<li>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>">
				    <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time>
				    <h2><?php echo article_title(); ?></h2>
				</a>
			</li>
			<?php endwhile; ?>
        </ul>

        <p><?php echo search_prev(); ?> <?php echo search_next(); ?></p>

    <?php else: ?>
        <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
    <?php endif; ?>
    
</article>

</div>
<script>





</script>
</body>
</html>
