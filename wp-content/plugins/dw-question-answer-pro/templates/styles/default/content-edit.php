<?php
/**
 * The template for editing question and answer
 *
 * @package DW Question & Answer
 * @since DW Question & Answer 1.0.1
 */
?>

<?php
$comment_id = isset( $_GET['comment_edit'] ) && is_numeric( $_GET['comment_edit'] ) ? $_GET['comment_edit'] : false;
$edit_id = isset( $_GET['edit'] ) && is_numeric( $_GET['edit'] ) ? $_GET['edit'] : ( $comment_id ? $comment_id : false );
if ( !$edit_id ) return;
$type = $comment_id ? 'comment' : ( 'dwqa-question' == get_post_type( $edit_id ) ? 'question' : 'answer' );
$post_id = $comment_id ? $comment_id : $edit_id;
?>
<?php if ( dwqa_current_user_can( 'edit_' . $type, $edit_id ) || dwqa_current_user_can( 'manage_' . $type ) ) : ?>
	<?php do_action( 'dwqa_before_edit_form' ); ?>
	<form method="post" class="dwqa-content-edit-form" enctype="multipart/form-data">
		<?php if ( 'dwqa-question' == get_post_type( $edit_id ) ) : ?>
		<?php $title = dwqa_question_get_edit_title( $edit_id ) ?>
		<p>
			<label for="question_title"><?php _e( 'Title', 'dwqa' ) ?></label>
			<input type="text" name="question_title" value="<?php echo $title ?>" tabindex="1">
		</p>
		<?php endif; ?>
		<?php $content = call_user_func( 'dwqa_' . $type . '_get_edit_content', $edit_id ); ?>
		<p><?php dwqa_init_tinymce_editor( array( 'content' => $content, 'textarea_name' => $type . '_content', 'wpautop' => true ) ) ?></p>
		<?php if ( 'dwqa-question' == get_post_type( $edit_id ) ) : ?>
		<p>
			<label for="question-category"><?php _e( 'Category', 'dwqa' ) ?></label>
			<?php $category = wp_get_post_terms( $edit_id, 'dwqa-question_category' ); ?>
			<?php
				wp_dropdown_categories( array(
					'name'          => 'question-category',
					'id'            => 'question-category',
					'taxonomy'      => 'dwqa-question_category',
					'show_option_none' => __( 'Select question category', 'dwqa' ),
					'hide_empty'    => 0,
					'quicktags'     => array( 'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,spell,close' ),
					'selected'      => isset( $category[0]->term_id ) ? $category[0]->term_id : false,
				) );
			?>
		</p>
		<p>
			<label for="question-tag"><?php _e( 'Tag', 'dwqa' ) ?></label>
			<input type="text" class="" name="question-tag" value="<?php dwqa_get_tag_list( get_the_ID(), true ); ?>" >
		</p>
		<?php endif; ?>
		<?php do_action('dwqa_after_show_content_edit', $edit_id); ?>
		<?php do_action( 'dwqa_before_edit_submit_button' ) ?>
		<input type="hidden" name="<?php echo $type ?>_id" value="<?php echo $edit_id ?>">
		<?php wp_nonce_field( '_dwqa_edit_' . $type ) ?>
		<input type="submit" name="dwqa-edit-<?php echo $type ?>-submit" class="dwqa-btn dwqa-btn-primary" value="<?php _e( 'Save Changes', 'dwqa' ) ?>" >
	</form>
	<?php do_action( 'dwqa_after_edit_form' ); ?>
<?php else : ?>
	<p class="dwqa-alert dwqa-alert-info"><?php _e( 'You don\'t have permission to do this action.', 'dwqa' ) ?></p>
<?php endif; ?>