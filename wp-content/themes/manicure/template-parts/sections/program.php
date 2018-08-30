<section class="section program" id="program">
    <div class="container-fluid">
        <div class="program_content">
            <?php if (get_field('program-title')): ?>
                <div class="program_title"><?php the_field('program-title') ?></div>
            <?php endif; ?>
            <?php if (get_field('program-subtitle')): ?>
                <div class="program_subtitle"><?php the_field('program-subtitle') ?></div>
            <?php endif; ?>
            <?php if (have_rows('program-list')): ?>
                <ul class="program_list">
                    <?php while (have_rows('program-list')): the_row(); ?>
                        <?php if (get_sub_field('program-item-bg')): ?>
                            <li class="program_item">
                                <div class="program_img"
                                     style="background-image: url(<?php the_sub_field('program-item-bg'); ?>)">
                                    <?php if (get_sub_field('program-time')): ?>
                                        <div class="program_time"><?php the_sub_field('program-time'); ?></div>
                                    <?php endif; ?>

                                </div>
                                <?php if (get_sub_field('program-title-item')): ?>
                                    <div class="program_text">
                                        <div class="program_text-bold"><?php the_sub_field('program-title-item'); ?></div>
                                        <?php if (get_sub_field('program-desc-item')): ?>
                                            <p class="program_text-desc"><?php the_sub_field('program-desc-item'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div class="program_bottom">
                <?php if (get_field('program-bottom-title')): ?>
                    <div class="program_attention"><?php the_field('program-bottom-title') ?></div>
                <?php endif; ?>
                <?php if (get_field('program-bottom-desc')): ?>
                    <div class="program_bottom-desc">
                        <?php the_field('program-bottom-desc') ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>