<?php 
    /* --[ Homepage ] -- */ 
    get_header(); 
?>

<div class="row<?php if (IS_FLUID) echo '-fluid' ?>">
	<div class="span10">
	    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="post">
                <h1><a href="<?php the_permalink() ?>" rel="permalink"><?php the_title(); ?></a></h1>
                <div class="post-content">
                    <?php echo the_content(); ?>
                </div>

                <?php if(comments_open()): ?>
                    <div id="comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
		    </div><!--#end post-->
        <?php endwhile; endif; ?>
	</div><!--#end content -->
	<div class="span2">
		<?php get_sidebar(); ?>
	</div><!--#end sidebar -->
</div><!--.end row-fluid -->
<?php get_footer(); ?>