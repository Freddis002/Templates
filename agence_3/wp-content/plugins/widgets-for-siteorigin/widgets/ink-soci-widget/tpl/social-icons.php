<div class="iw-so-social-icons iw-text-<?php echo esc_attr( $align ); ?>">

    <?php foreach( $icons as $icon ) { ?>

        <a href="<?php echo sow_esc_url( $icon['link'] ); ?>" class="iw-so-social-icon iw-so-social-icon-<?php echo esc_attr( $icon['network'] ); ?>">
            <?php echo siteorigin_widget_get_icon( $icon['icon'] ); ?>
        </a>

    <?php } ?>

</div>