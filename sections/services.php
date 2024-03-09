<link href="<?php bloginfo('template_directory'); ?>/assets/services.css" rel="stylesheet">

<section class="services">
    <div class="wrap wrap--x-large">
        <div class="inner">
            <div class="header">
                <h2 class="medium">Nexor</h2>
            </div>
            <div class="service-tabs">
                <?php if(have_rows('services_tabs')): ?>
                    <?php $i = 1; ?>
                    <ul class="tab-titles">
                    <?php while(have_rows('services_tabs')): the_row(); ?>
                        <?php $title = get_sub_field('tab_title'); ?>
                        <li>
                            <button data-target="service-tab-<?php echo $i; ?>"<?php if ($i === 1) { ?> class="active"<?php } ?>>
                                <span><?php echo $title; ?></span>
                            </button>
                        </li>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if( have_rows('services_tabs') ): ?>
                    <?php $i = 1; ?>
                    <div class="tab-elements">
                    <?php while(have_rows('services_tabs')): the_row(); ?>
                        <?php $title = get_sub_field('tab_title'); ?>
                        <div class="tab<?php if ($i === 1) { ?> active<?php } ?>" id="service-tab-<?php echo $i; ?>">
                            
                            <?php if( have_rows('hero_tab_slides') ): ?>
                            <div class="slides">
                            
                            <?php while(have_rows('hero_tab_slides')): the_row(); ?>
                            
                                <?php $slide_title = get_sub_field('slide_title'); ?>
                                <?php $slide_text = get_sub_field('slide_text'); ?>
                                <?php $slide_click_target = get_sub_field('slide_click_target'); ?>
                                <?php $slide_bg = get_sub_field('slide_background'); ?>

                                <a href="<?php echo $slide_click_target; ?>" class="slide preload">
                                    <div class="slide-content">
                                        <div class="text">
                                            <span class="title"><?php echo $slide_title; ?></span>
                                            <span class="strapline"><?php echo $slide_text; ?></span>
                                        </div>
                                        <div class="icon">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                                                <path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0z M20.5,24.7c-0.8,0.9-2.1,0.9-2.9,0c-0.8-0.9-0.8-2.2,0-3.1l3.3-3.4H6.1c-1.2,0-2.1-1-2.1-2.2c0-1.2,0.9-2.2,2.1-2.2h14.8l-3.3-3.4c-0.8-0.9-0.8-2.2,0-3.1c0.8-0.9,2.1-0.9,3,0l6.8,7.2c0.4,0.4,0.6,0.9,0.6,1.5c0,0.6-0.2,1.1-0.6,1.5L20.5,24.7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/preload-services.gif" data-src="<?php echo $slide_bg; ?>" width="640" height="360" alt="<?php echo $slide_title; ?>" class="background">
                                </a>

                            <?php endwhile; ?>
                            
                            </div>
                            <?php endif; ?>

                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="our-customers">
                <?php $customers_title = get_field('customers_title'); ?>
                <div class="title">
                    <h3><?php echo $customers_title ?></h3>
                </div>
                <?php if( have_rows('customer_logos') ): ?>
                <ul>
                <?php while( have_rows('customer_logos') ): the_row(); 
                    $customer_logo = get_sub_field('customer_logo');
                    ?>
                    <li>
                        <?php echo wp_get_attachment_image( $customer_logo, 'full' ); ?>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/assets/services.js" defer></script>