<?php  if ( $register = get_event_registration_method() ) :
	wp_enqueue_script( 'wp-event-manager-event-registration' );
$zoom_url_events = get_field('zoom_url');
	if($register->type):
	?>
	<div class="event_registration registration">

		
		<a href="<?php echo esc_url( $zoom_url_events ); ?>" target="_blank"><button class="events-jh-btn">Join Here</button></a>


	</div>
	<?php endif; ?>
<?php endif; ?>