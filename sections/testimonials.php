<link href="<?php bloginfo('template_directory'); ?>/assets/swiper.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/testimonials.css" rel="stylesheet">

<section class="testimonials">
    <div class="wrap wrap--x-large">
        <div class="inner">
            <div class="header">
                <?php $testimonials_title = get_field('testimonials_title'); ?>
                <h3 class="medium"><?php echo $testimonials_title; ?></h3>
            </div>
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper">
                <?php if(have_rows('testimonials')): ?>
                    <?php while(have_rows('testimonials')): the_row(); ?>
                        <?php $testimonial_quote = get_sub_field('testimonial_quote'); ?>
                        <?php $testimonial_name = get_sub_field('testimonial_name'); ?>
                        <?php $testimonial_image = get_sub_field('testimonial_image'); ?>
                        <div class="swiper-slide">
                            <div class="testimonial">
                                <div class="testimonial-image">
                                    <img 
                                        src="<?php bloginfo('template_directory'); ?>/assets/preload.gif" 
                                        data-src="<?php echo esc_url($testimonial_image['url']); ?>" 
                                        alt="<?php echo $testimonial_image['alt']; ?>" 
                                        width="<?php echo $testimonial_image['width']; ?>" 
                                        height="<?php echo $testimonial_image['height']; ?>"
                                        class="preload"
                                    >
                                </div>
                                <div class="testimonial-content">
                                    <p><?php echo $testimonial_quote; ?></p>
                                    <p><?php echo $testimonial_name; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/assets/swiper.js" defer></script>
<script>
    const initSlider = () => {
        const sliderContainer = document.querySelector('.swiper-testimonials')
        const swiper = new Swiper(sliderContainer, {
            speed: 500,
            spaceBetween: 0,
            slidesPerView: 1,
            // autoHeight: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
                pauseOnMouseEnter: true,
            },
            loop: true,
            init: false,
        });
        swiper.init();
    }
    window.addEventListener('DOMContentLoaded', initSlider)
</script>