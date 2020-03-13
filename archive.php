<?php get_header( ); ?>
<div class="container p-1">
            <div class="row ">
             <div class="col-sm-9">
                 <h1><?php the_archive_title( );?></h1>
             <?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 
                <div class="row">
                    <div class="col-sm-4 pl-10">
                        <img src="<?php the_post_thumbnail_url(  )?>" alt="<?php the_post_thumbnail_caption( )?>" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <div class="archive-title">
                            <h4><?php the_title();?>
                            </h4>
                        </div>
                        <div class="archive-ex">
                            <p><?php the_excerpt()?></p>
                        </div>
                        <div class="row readmore">
                            <div class="col-sm-4 readmore-box"><a href="<?php the_permalink();?>"><p class="read">படிக்க</p></a></div>
                            <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                            <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                        </div>
                    </div>
                </div>
                <hr>
                <?php endwhile; ?>
<?php endif; ?>
<div class="nav-previous alignleft"><?php next_posts_link( 'அடுத்து' ); ?></div>
 
 
 
<div class="nav-next alignright"><?php previous_posts_link( 'முந்தைய' ); ?></div>
 

             </div>
            
<?php get_sidebar(  ); ?>
<?php get_footer(  );?>