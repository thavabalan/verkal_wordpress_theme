<?php get_header( ); ?>
      
<div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="history">
                        <div class="history-head">வரலாற்றில் இன்று</div>
                        <div class="history-body"></div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="rem">
                        <div class="rem-header">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/veervanakakm.gif" alt="" class="rem-img img-fluid  mx-auto d-block">
                        </div>
                        <div class="rem-body">
                            <div class="row">
                            <?php query_posts('cat=163&posts_per_page=1');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                <div class="col-sm-6 big">
                                    <div class="big-img">
                                        <img src="<?php the_post_thumbnail_url() ?> alt="" class="img-fluid">
                                    </div>
                                    <div class="big-title-div">
                                        <h3 class="big-title">

									<a href="<?php the_permalink()?>"><?php the_title();?></a>
                                        </h3>
                                    </div>
                                </div>

                                <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>
                                    <div class="col-sm-6">
                            <?php query_posts('cat=163&posts_per_page=5&offset=1');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                                    <div class="row">
                                        <div class="col-sm-3 small-rem mx-auto">
                                            <img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-sm-9">
                                            <h3 class="small-rem">
                                            <a href="<?php the_permalink()?>"> <?php the_title()?></a>

                                            </h3>
                                        </div>
                                    </div>
                                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">

                        <a href="https://music.verkal.com/"><img src="<?php bloginfo('template_url'); ?>/assets/images/kaankal.gif" alt="" class="img-fluid side1"></a>
                        <a href="http://eelamheroes.com/"><img src="<?php bloginfo('template_url'); ?>/assets/images/eelam hero.gif" alt="" class="img-fluid side2"></a>
                        <a href="http://tamileelamarchive.com/"><img src="<?php bloginfo('template_url'); ?>/assets/images/aavanakkaapkam.png" alt="" class="img-fluid side3"></a>

                </div>
            </div>
        </div>
        <div class="container p-1">
            <div class="row ">
                <div class="col-sm-9">
                    <div class="row p-1">
                        <!--அடிக்கற்கள்-->
                <div class="col-sm-4 small ">
                    <div class="small-inner">
                        <div class="small-header">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/adikarkal.gif" alt="" class="img-fluid">
                        </div>
                        <?php query_posts('cat=246&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        <div class="row mt-2 pl-1">
                            <div class="col-sm-3">
                                <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-9">
                                <div class="small-title">
                                    <h6 class="small-head"><?php the_title( )?>
                                    </h6>
                                </div>
                                <div class="row readmore">
                                    <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                    <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                    <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>

                       
                    </div>
                 </div>
                 <!--அழியாச்சுடர்கள்-->
                <div class="col-sm-4 small ">
                    <div class="small-inner">
                    <div class="small-header">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/aliysudarkal.gif" alt="" class="img-fluid">
                    </div>
                    <?php query_posts('cat=271&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title();?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>               
                <!--Small-->

                </div></div>
                <!--போராளிகள் குருதிச்சுவடுகள்-->
                <div class="col-sm-4 small ">
                    <div class="small-inner">
                    <div class="small-header">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/pks.gif" alt="" class="img-fluid">
                    </div>
                    <?php query_posts('cat=164&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   
                <!--Small-->

        
                </div>
            </div>
        </div>
        <div class="row p-1">
            <!--உயிராயுதங்கள்-->
            <div class="col-sm-4 small">
                <div class="small-inner">
                    <div class="small-header">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/naatuppatralarkal.gif" alt="" class="img-fluid">
                    </div>
                    <?php query_posts('cat=216&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   

                </div>
             </div>
             <!--வீரத்தளபதிகள்-->
            <div class="col-sm-4 small">
                <div class="small-inner">
                <div class="small-header">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thesathin kural.gif" alt="" class="img-fluid">
                </div>
                <?php query_posts('cat=167&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   

            </div>
        </div>
        <!--சமர்க்களநாயகர்கள்-->
            <div class="col-sm-4 small">
                <div class="small-inner">
                <div class="small-header">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/thiyaka thebam.gif" alt="" class="img-fluid">
                </div>
                <?php query_posts('cat=166&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   

            <!--Small-->

             
            </div>
        </div>
    </div>

    <div class="row p-1">
        <!--உயிராயுதங்கள்-->
        <div class="col-sm-4 small">
            <div class="small-inner">
                <div class="small-header">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/varalaru.gif" alt="" class="img-fluid">
                </div>
                <?php query_posts('cat=173&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   
            </div>
         </div>
         <!--வீரத்தளபதிகள்-->
        <div class="col-sm-4 small">
            <div class="small-inner">
            <div class="small-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/eekiyar.gif" alt="" class="img-fluid">
            </div>
            <?php query_posts('cat=204&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   
        </div>
    </div>
    <!--சமர்க்களநாயகர்கள்-->
        <div class="col-sm-4 small">
            <div class="small-inner">
            <div class="small-header">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/inappadukolaikal.gif" alt="" class="img-fluid">
            </div>
            <?php query_posts('cat=192&posts_per_page=4');?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="row mt-2 pl-1">
                        <div class="col-sm-3">
                            <img src="<?php the_post_thumbnail_url(  )?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-9">
                            <div class="small-title">
                                <h6 class="small-head"><?php the_title( )?>
                                </h6>
                            </div>
                            <div class="row readmore">
                                <div class="col-sm-4 readmore-box"><a href="<?php the_permalink()?>" class="read"><p class="read">படிக்க</p></a></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பகிர</p></div>
                                <div class="col-sm-4  readmore-box"><p class="read">பிரதி</p></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else:
                                        // No posts.
                                        endif;
                                        wp_reset_query(); ?>   
        </div>
    </div>
</div>
</div>
<?php get_sidebar( ); ?>

            
            
<?php get_footer( ); ?>