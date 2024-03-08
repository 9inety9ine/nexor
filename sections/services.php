<link href="<?php bloginfo('template_directory'); ?>/assets/services.css" rel="stylesheet">

<section class="services">
    <div class="wrap wrap--x-large">
        <div class="inner">
            <div class="service-tabs">
            <?php if( have_rows('services_tabs') ): ?>
                <?php $i = 1; ?>
                <ul class="tab-titles">
                <?php while( have_rows('services_tabs') ): the_row(); ?>
                    <?php $title = get_sub_field('tab_title'); ?>
                    <li>
                        <button data-target="service-tab-<?php echo $i; ?>"><?php echo $title; ?></button>
                    </li>
                    <?php $i++; ?>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php if( have_rows('services_tabs') ): ?>
                <?php $i = 1; ?>
                <div class="tab-elements">
                <?php while( have_rows('services_tabs') ): the_row(); ?>
                    <?php $title = get_sub_field('tab_title'); ?>
                    <div class="tab<?php if ($i === 1) { ?> active<?php } ?>" id="service-tab-<?php echo $i; ?>">
                        <span><?php echo $title; ?></span>
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