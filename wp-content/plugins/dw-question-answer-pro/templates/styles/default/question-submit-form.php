<?php
/**
 * The template for displaying single answers
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.0.1
 */
	global $dwqa_shortcode_atts;

	if ( isset( $dwqa_shortcode_atts['category'] ) && $dwqa_shortcode_atts['category'] !='') {
		$dwqa_category = get_term_by('slug', $dwqa_shortcode_atts['category'], 'dwqa-question_category');
	}
?>

<?php do_action( 'dwqa_before_question_submit_form' ); ?>
<?php if ( dwqa_current_user_can( 'post_question' ) ) : ?>
	<form method="post" class="dwqa-content-ask-form" enctype="multipart/form-data">
		<p class="dwqa-search">
			<label for="question_title"><?php _e( 'Title', 'dwqa' ) ?></label>
			<?php $title = isset( $_POST['question-title'] ) ? $_POST['question-title'] : ''; ?>
			<input type="text" data-nonce="<?php echo wp_create_nonce( '_dwqa_filter_nonce' ) ?>" id="question-title" name="question-title" value="<?php echo esc_attr( $title ) ?>" tabindex="1">
		</p>
		<?php $content = isset( $_POST['question-content'] ) ? $_POST['question-content'] : ''; ?>
		<p><?php dwqa_init_tinymce_editor( array( 'content' => $content, 'textarea_name' => 'question-content', 'id' => 'question-content' ) ) ?></p>
		<?php global $dwqa_general_settings; ?>
		<?php if ( isset( $dwqa_general_settings['enable-private-question'] ) && $dwqa_general_settings['enable-private-question'] && is_user_logged_in() ) : ?>
		<p>
			<label for="question-status"><?php _e( 'Status', 'dwqa' ) ?></label>
			<select class="dwqa-select" id="question-status" name="question-status">
				<optgroup label="<?php _e( 'Who can see this?', 'dwqa' ) ?>">
					<option value="publish"><?php _e( 'Public', 'dwqa' ) ?></option>
					<option value="private"><?php _e( 'Only Me &amp; Admin', 'dwqa' ) ?></option>
				</optgroup>
			</select>
		</p>
		<?php endif; ?>
		<p>
			<label for="question-category"><?php _e( 'Category', 'dwqa' ) ?></label>
			<?php

				if(isset($dwqa_category) && isset($dwqa_category->term_id) && $dwqa_category->term_id>0){
					echo '<span>'. $dwqa_category->name .'</span>';
					echo '<input type="hidden" name="question-category" value="'. $dwqa_category->term_id .'">';
				}else{
					wp_dropdown_categories( array(
						'name'          => 'question-category',
						'id'            => 'question-category',
						'taxonomy'      => 'dwqa-question_category',
						// 'show_option_none' => __( 'Select question category', 'dwqa' ),
						'hide_empty'    => 0,
						'quicktags'     => array( 'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close' ),
						'selected'      => isset( $_POST['question-category'] ) ? esc_attr( $_POST['question-category'] ) : false,
					) );
				}
			?>
		</p>
		<p>
			<label for="question-tag"><?php _e( 'Tag', 'dwqa' ) ?></label>
			<?php $tags = isset( $_POST['question-tag'] ) ? $_POST['question-tag'] : ''; ?>
			<input type="text" class="dwqa-question-tags" name="question-tag" value="<?php echo esc_attr( $tags ) ?>" >
		</p>
		<?php if ( dwqa_current_user_can( 'post_question' ) && !is_user_logged_in() ) : ?>
		<p>
			<label for="_dwqa_anonymous_email"><?php _e( 'Your Email', 'dwqa' ) ?></label>
			<?php $email = isset( $_POST['_dwqa_anonymous_email'] ) ? $_POST['_dwqa_anonymous_email'] : ''; ?>
			<input type="email" class="dwqa-question-anonymous-email" name="_dwqa_anonymous_email" value="<?php echo sanitize_email( $email ) ?>" >
		</p>
		<p>
			<label for="_dwqa_anonymous_name"><?php _e( 'Your Name', 'dwqa' ) ?></label>
			<?php $name = isset( $_POST['_dwqa_anonymous_name'] ) ? $_POST['_dwqa_anonymous_name'] : ''; ?>
			<input type="text" class="dwqa-question-anonymous-name" name="_dwqa_anonymous_name" value="<?php echo esc_attr( $name ) ?>" >
		</p>
		<?php endif; ?>
		<?php do_action( 'dwqa_before_question_submit_button' ) ?>
		<?php wp_nonce_field( '_dwqa_submit_question' ) ?>
		<?php dwqa_load_template( 'captcha', 'form' ); ?>
		<?php do_action('dwqa_show_captcha_question')?>
		<input type="submit" name="dwqa-question-submit" class="dwqa-btn dwqa-btn-primary" value="<?php _e( 'Submit', 'dwqa' ) ?>" >
		<?php do_action( 'dwqa_after_question_submit_button' ) ?>
	</form>
<?php else : ?>
	<?php if ( is_user_logged_in() ) : ?>
		<div><?php _e( "You doesn't have permission to post a question", 'dwqa' ) ?></div>
	<?php else : ?>
		<?php dwqa_load_template( 'login', 'form' ) ?>
	<?php endif; ?>
<?php endif; ?>
<?php do_action( 'dwqa_after_question_submit_form' ); ?>