<?php get_header(); ?>
			
			<div id="main" class="ninecol first clearfix" role="main">

					     <?php while (have_posts()): the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
							    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						    </header>
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section>
						    
						    
					
					    </article>
					    
					    <?php comments_template(); ?>
					
					    <?php endwhile; ?>
			
    		</div> 
    
			<?php get_sidebar(); ?>
			<?php get_footer(); ?>
