<link href="<?php bloginfo('template_directory'); ?>/assets/hero.css" rel="stylesheet">

<?php $title = get_field('hero_title');?>
<?php $strapline = get_field('hero_strapline');?>
<?php $background = get_field('hero_background');?>
<?php $label = get_field('hero_button_label');?>
<?php $target = get_field('hero_button_target');?>
<?php $logo_text = get_field('hero_logo_text');?>

<section class="hero">
    <div class="inner">
        <div class="masthead">
            <?php if ($title) { ?>
            <h1 class="display"><?php echo $title; ?></h1>
            <?php } ?>
            <?php if ($strapline) { ?>
            <p class="large"><?php echo $strapline; ?></p>
            <?php } ?>
            <?php if ($label) { ?>
            <div class="actions">
                <a href="#" aria-label="<?php echo $label; ?>" class="button button--primary"><?php echo $label; ?></a>
            </div>
            <?php } ?>
            <div class="logos">
                <p><strong><?php echo $logo_text; ?></strong></p>
                <?php if( have_rows('hero_logos') ): ?>
                <ul>
                <?php while( have_rows('hero_logos') ): the_row(); 
                    $logo_image = get_sub_field('logo');
                    $logo_label = get_sub_field('logo_label');
                    ?>
                    <li>
                        <img 
                            src="<?php bloginfo('template_directory'); ?>/assets/preload.gif" 
                            data-src="<?php echo esc_url($logo_image['url']); ?>" 
                            alt="<?php echo $logo_image['alt']; ?>" 
                            width="<?php echo $logo_image['width']; ?>" 
                            height="<?php echo $logo_image['height']; ?>"
                            class="preload"
                        >
                        <span><?php echo $logo_label; ?></span>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <img data-src="<?php echo $background; ?>" width="2543" height="800" alt="Background Image" class="background preload">
</section>