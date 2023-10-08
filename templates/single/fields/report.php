<?php
/**
 * @author  wpWax
 * @since   6.7
<<<<<<< HEAD
 * @version 7.7.0
=======
 * @version 7.8.0
>>>>>>> 961c5d5c033b2dee6a4ed7b3eed1ef177d1f3771
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>

<?php if ( is_user_logged_in() ): ?>
	<a class="directorist-single-listing-action directorist-btn directorist-btn-sm directorist-btn-light directorist-action-report directorist-action-report-loggedin directorist-btn-modal directorist-btn-modal-js" href="#" data-directorist_target="directorist-report-abuse-modal">
		<?php directorist_icon( $icon );?><span class="directorist-single-listing-action__text"><?php esc_html_e( 'Report', 'directorist'); ?></span> 
	</a>
<?php else: ?>
	<a class="directorist-single-listing-action directorist-btn directorist-btn-sm directorist-btn-light directorist-action-report directorist-action-report-not-loggedin directorist-btn-modal directorist-btn-modal-js" href="javascript:void(0)"><?php directorist_icon( $icon );?> <span class="directorist-single-listing-action__text"> <?php esc_html_e( 'Report', 'directorist'); ?></span></a>
<?php endif; ?>

	<?php if ( is_user_logged_in() ): ?>
		<a class="directorist-action-report-loggedin" href="#"><?php directorist_icon( $icon );?></a>
	<?php else: ?>
		<a class="directorist-action-report-not-loggedin" href="#"><?php directorist_icon( $icon );?></a>
	<?php endif; ?>

	<input type="hidden" id="atbdp-post-id" value="<?php echo esc_attr( $listing->id ); ?>"/>

</div>

<div class="directorist-modal directorist-modal-js directorist-fade directorist-report-abuse-modal">

	<div class="directorist-modal__dialog">

		<div class="directorist-modal__content">

			<form id="directorist-report-abuse-form">

				<div class="directorist-modal__header">

					<h3 class="directorist-modal__header__title" id="directorist-report-abuse-modal__label"><?php esc_html_e('Report Abuse', 'directorist'); ?></h3>

					<a href="" class="directorist-modal-close directorist-modal-close-js"><span aria-hidden="true">&times;</span></a>

				</div>

				<div class="directorist-modal__body">

					<div class="directorist-form-group">

						<label for="directorist-report-message"><?php esc_html_e( 'Your Complaint', 'directorist' ); ?><span class="directorist-report-star">*</span></label>

						<textarea class="directorist-form-element" id="directorist-report-message" rows="3" placeholder="<?php esc_attr_e( 'Message...', 'directorist' ); ?>" required></textarea>

					</div>

					<div id="directorist-report-abuse-g-recaptcha"></div>

					<div id="directorist-report-abuse-message-display"></div>

				</div>

				<div class="directorist-modal__footer">

					<button type="submit" class="directorist-btn directorist-btn-primary directorist-btn-sm"><?php esc_html_e( 'Submit', 'directorist' ); ?></button>

				</div>

			</form>

		</div>

	</div>

</div>