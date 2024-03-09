<link href="<?php bloginfo('template_directory'); ?>/assets/contact.css" rel="stylesheet">

<section class="contact">
    <div class="wrap wrap--x-large">
        <div class="inner">
            <div class="content">
                <div class="content-wrapper">
                    <?php $contact_headline = get_field('contact_headline'); ?>
                    <?php $contact_strapline = get_field('contact_strapline'); ?>
                    <h2 class="large"><?php echo $contact_headline; ?></h2>
                    <div class="certified-logos">
                        <p class="large"><strong><?php echo $contact_strapline; ?></strong></p>
                        <?php if( have_rows('certified_logos') ): ?>
                        <ul>
                        <?php while( have_rows('certified_logos') ): the_row(); 
                            $certified_logo = get_sub_field('certified_logo');
                            ?>
                            <li>
                                <img 
                                    src="<?php bloginfo('template_directory'); ?>/assets/preload.gif" 
                                    data-src="<?php echo esc_url($certified_logo['url']); ?>" 
                                    alt="<?php echo $certified_logo['alt']; ?>" 
                                    width="<?php echo $certified_logo['width']; ?>" 
                                    height="<?php echo $certified_logo['height']; ?>"
                                    class="preload"
                                >
                            </li>
                        <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
            <div class="form">
                <form action="/">
                    <h3 class="large">Get in touch today</h3>
                    <p>Fill in our form and we will get back to you</p>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="tel" placeholder="Phone Number">
                    <button class="button">Get in touch</button>
                    <p class="small">We dislike spammers as much as you do. We respect your privacy and will treat your data with the respect it deserves.</p>
                </form>
            </div>
        </div>
    </div>
</section>