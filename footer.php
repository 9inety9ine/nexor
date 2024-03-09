    <footer>
        <div class="wrap wrap--x-large">
            <div class="inner">
                <div class="column column-1">
                    <div class="column-title">
                        <h4>Links</h4>
                        <div class="menus-container">
                            <div class="menu">
                            <?php if(have_rows('footer_menus', 'option')): ?>
                            <?php while(have_rows('footer_menus', 'option')): the_row(); ?>
                                <?php if(have_rows('footer_menu')): ?>
                                    <nav>
                                        <ul>
                                        <?php while(have_rows('footer_menu')): the_row(); ?>
                                            <?php $link_label = get_sub_field('link_label'); ?>
                                            <?php $link_target = get_sub_field('link_target'); ?>
                                            <li><a href="<?php echo $link_label; ?>" aria-label="<?php echo $link_label; ?>"><span><?php echo $link_label; ?></span></a></li>
                                        <?php endwhile; ?>
                                        </ul>
                                    </nav>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                            <div class="menu">
                            <?php if(have_rows('footer_menus_2', 'option')): ?>
                            <?php while(have_rows('footer_menus_2', 'option')): the_row(); ?>
                                <?php if(have_rows('footer_menu')): ?>
                                    <nav>
                                        <ul>
                                        <?php while(have_rows('footer_menu')): the_row(); ?>
                                            <?php $link_label = get_sub_field('link_label'); ?>
                                            <?php $link_target = get_sub_field('link_target'); ?>
                                            <li><a href="<?php echo $link_label; ?>" aria-label="<?php echo $link_label; ?>"><span><?php echo $link_label; ?></span></a></li>
                                        <?php endwhile; ?>
                                        </ul>
                                    </nav>
                                <?php endif; ?>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column column-2">
                    <div class="column-title">
                        <h4>Subscribe to our newsletter</h4>
                        <form>
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <button class="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="<?php bloginfo('template_directory'); ?>/assets/application.js" defer></script>

</body>
</html>