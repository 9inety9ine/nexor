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

                            <a href="<?php echo $slide_click_target; ?>" class="slide" style="background: url(<?php echo $slide_bg; ?>) no-repeat 50% 50% / cover;">
                                <div class="slide-content">
                                    <div class="text">
                                        <span class="title"><?php echo $slide_title; ?></span>
                                        <span class="strapline"><?php echo $slide_text; ?></span>
                                    </div>
                                    <div class="icon">ICON</div>
                                </div>
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
        </div>
    </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/assets/services.js" defer></script>