<div class="iw-so-alert iw-so-alert-<?php echo $size ?> <?php echo esc_attr( $class_main ); ?>">

	<?php if ( $icon ) : ?>
		<?php echo siteorigin_widget_get_icon( $icon ); ?>
	<?php endif; ?>

	<div class="iw-so-alert-msg <?php echo esc_attr( $class_message ); ?>">
		<?php echo wp_kses_post( $message ); ?>
	</div>

	<?php if ( $close ) : ?>
		<a class="close <?php echo esc_attr( $class_close ); ?>" aria-label="Dismiss alert" type="button">
			<span aria-hidden="true">&times;</span>
		</a>
	<?php endif; ?>

</div>
