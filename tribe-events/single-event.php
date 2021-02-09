<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Custom Code Inserted in line 76, adds Gravity Forms RSVP Form. The
 * rest of the file is unaltered from source.
 *
 * @package TribeEventsCalendar
 * @version 1.0.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">

	<p class="tribe-events-back">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
	</p>

	<!-- Notices -->
	<?php tribe_the_notices();

	if(get_field('no_banner_header')){
		the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' );
	}
	?>
	<div class="tribe-events-schedule tribe-clearfix">
		<?php echo tribe_events_event_schedule_details( $event_id, '<h2>', '</h2>' ); ?>
		<?php if ( tribe_get_cost() ) : ?>
			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?>
	</div>

	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- Event featured image, but exclude link -->
			<?php ?>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
			<?php
			$removeRsvp = get_field("remove_rsvp");
			if (!$removeRsvp){
				?>
                <!-- FORM: HEAD SECTION -->

                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="referrer" content="no-referrer-when-downgrade">
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded", function(){
                        const FORM_TIME_START = Math.floor((new Date).getTime()/1000);
                        let formElement = document.getElementById("tfa_0");
                        if (null === formElement) {
                            formElement = document.getElementById("0");
                        }
                        let appendJsTimerElement = function(){
                            let formTimeDiff = Math.floor((new Date).getTime()/1000) - FORM_TIME_START;
                            let cumulatedTimeElement = document.getElementById("tfa_dbCumulatedTime");
                            if (null !== cumulatedTimeElement) {
                                let cumulatedTime = parseInt(cumulatedTimeElement.value);
                                if (null !== cumulatedTime && cumulatedTime > 0) {
                                    formTimeDiff += cumulatedTime;
                                }
                            }
                            let jsTimeInput = document.createElement("input");
                            jsTimeInput.setAttribute("type", "hidden");
                            jsTimeInput.setAttribute("value", formTimeDiff.toString());
                            jsTimeInput.setAttribute("name", "tfa_dbElapsedJsTime");
                            jsTimeInput.setAttribute("id", "tfa_dbElapsedJsTime");
                            jsTimeInput.setAttribute("autocomplete", "off");
                            if (null !== formElement) {
                                formElement.appendChild(jsTimeInput);
                            }
                        };
                        if (null !== formElement) {
                            if(formElement.addEventListener){
                                formElement.addEventListener('submit', appendJsTimerElement, false);
                            } else if(formElement.attachEvent){
                                formElement.attachEvent('onsubmit', appendJsTimerElement);
                            }
                        }
                    });
                </script>

                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=ef0f21b053cc575f34317757ab64b007f7e59d81" rel="stylesheet" type="text/css" />

                <link href="https://www.tfaforms.com/uploads/themes/theme-73690.css" rel="stylesheet" type="text/css" />
                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=ef0f21b053cc575f34317757ab64b007f7e59d81" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=ef0f21b053cc575f34317757ab64b007f7e59d81"></script>
                <script type="text/javascript">
                    wFORMS.behaviors.prefill.skip = false;
                </script>
                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_US.js?v=ef0f21b053cc575f34317757ab64b007f7e59d81"></script>

                <!-- FORM: BODY SECTION -->
                <div class="wFormContainer" >
                    <div class="wFormHeader"></div>
                    <style type="text/css"></style><div class=""><div class="wForm" id="4857189-WRPR" dir="ltr">
                            <div class="codesection" id="code-4857189"></div>
                            <h3 class="wFormTitle" id="4857189-T">Zoom Registration</h3>
                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4857189" role="form">
                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_122-D"><div class="inputWrapper"><input type="text" id="tfa_122" name="tfa_122" value="Event" default="Event" readonly data-wforms-nooverwrite="disabled" title="Campaign Name" class=""></div></div>
                                <input type="hidden" id="tfa_121" name="tfa_121" value="" class=""><div id="tfa_12" class="section inline group">
                                    <div class="oneField field-container-D    " id="tfa_8-D">
                                        <label id="tfa_8-L" class="label preField reqMark" for="tfa_8">First Name</label><br><div class="inputWrapper"><input type="text" id="tfa_8" name="tfa_8" value="" aria-required="true" title="First Name" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_10-D">
                                        <label id="tfa_10-L" class="label preField reqMark" for="tfa_10">Last Name</label><br><div class="inputWrapper"><input type="text" id="tfa_10" name="tfa_10" value="" aria-required="true" title="Last Name" class="required"></div>
                                    </div>
                                </div>
                                <div id="tfa_118" class="section inline group">
                                    <div class="oneField field-container-D    " id="tfa_2-D">
                                        <label id="tfa_2-L" class="label preField reqMark" for="tfa_2">Email</label><br><div class="inputWrapper"><input type="text" id="tfa_2" name="tfa_2" value="" aria-required="true" title="Email" class="validate-email required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_117-D">
                                        <label id="tfa_117-L" class="label preField " for="tfa_117">Confirm email address</label><br><div class="inputWrapper"><input type="text" id="tfa_117" name="tfa_117" value="" title="Confirm email address" class="validate-email"></div>
                                    </div>
                                </div>
                                <div id="tfa_120" class="section inline group">
                                    <div class="oneField field-container-D    " id="tfa_53-D">
                                        <label id="tfa_53-L" class="label preField reqMark" for="tfa_53">State</label><br><div class="inputWrapper"><select id="tfa_53" name="tfa_53" title="State" aria-required="true" class="calc-states required"><option value="">Please select...</option>
                                                <option value="tfa_54" id="tfa_54" class="calcval-AL">AL</option>
                                                <option value="tfa_55" id="tfa_55" class="calcval-AK">AK</option>
                                                <option value="tfa_56" id="tfa_56" class="calcval-AZ">AZ</option>
                                                <option value="tfa_57" id="tfa_57" class="calcval-AR">AR</option>
                                                <option value="tfa_58" id="tfa_58" class="calcval-CA">CA</option>
                                                <option value="tfa_59" id="tfa_59" class="calcval-CO">CO</option>
                                                <option value="tfa_60" id="tfa_60" class="calcval-CT">CT</option>
                                                <option value="tfa_61" id="tfa_61" class="calcval-DE">DE</option>
                                                <option value="tfa_62" id="tfa_62" class="calcval-DC">DC</option>
                                                <option value="tfa_63" id="tfa_63" class="calcval-FL">FL</option>
                                                <option value="tfa_64" id="tfa_64" class="calcval-GA">GA</option>
                                                <option value="tfa_65" id="tfa_65" class="calcval-HI">HI</option>
                                                <option value="tfa_66" id="tfa_66" class="calcval-ID">ID</option>
                                                <option value="tfa_67" id="tfa_67" class="calcval-IL">IL</option>
                                                <option value="tfa_68" id="tfa_68" class="calcval-IN">IN</option>
                                                <option value="tfa_69" id="tfa_69" class="calcval-IA">IA</option>
                                                <option value="tfa_70" id="tfa_70" class="calcval-KS">KS</option>
                                                <option value="tfa_71" id="tfa_71" class="calcval-KY">KY</option>
                                                <option value="tfa_72" id="tfa_72" class="calcval-LA">LA</option>
                                                <option value="tfa_73" id="tfa_73" class="calcval-ME">ME</option>
                                                <option value="tfa_74" id="tfa_74" class="calcval-MD">MD</option>
                                                <option value="tfa_75" id="tfa_75" class="calcval-MA">MA</option>
                                                <option value="tfa_76" id="tfa_76" class="calcval-MI">MI</option>
                                                <option value="tfa_77" id="tfa_77" class="calcval-MN">MN</option>
                                                <option value="tfa_78" id="tfa_78" class="calcval-MS">MS</option>
                                                <option value="tfa_79" id="tfa_79" class="calcval-MO">MO</option>
                                                <option value="tfa_80" id="tfa_80" class="calcval-MT">MT</option>
                                                <option value="tfa_81" id="tfa_81" class="calcval-NE">NE</option>
                                                <option value="tfa_82" id="tfa_82" class="calcval-NV">NV</option>
                                                <option value="tfa_83" id="tfa_83" class="calcval-NH">NH</option>
                                                <option value="tfa_84" id="tfa_84" class="calcval-NJ">NJ</option>
                                                <option value="tfa_85" id="tfa_85" class="calcval-NM">NM</option>
                                                <option value="tfa_86" id="tfa_86" class="calcval-NY">NY</option>
                                                <option value="tfa_87" id="tfa_87" class="calcval-NC">NC</option>
                                                <option value="tfa_88" id="tfa_88" class="calcval-ND">ND</option>
                                                <option value="tfa_89" id="tfa_89" class="calcval-OH">OH</option>
                                                <option value="tfa_90" id="tfa_90" class="calcval-OK">OK</option>
                                                <option value="tfa_91" id="tfa_91" class="calcval-OR">OR</option>
                                                <option value="tfa_92" id="tfa_92" class="calcval-PA">PA</option>
                                                <option value="tfa_93" id="tfa_93" class="calcval-RI">RI</option>
                                                <option value="tfa_94" id="tfa_94" class="calcval-SC">SC</option>
                                                <option value="tfa_95" id="tfa_95" class="calcval-SD">SD</option>
                                                <option value="tfa_96" id="tfa_96" class="calcval-TN">TN</option>
                                                <option value="tfa_97" id="tfa_97" class="calcval-TX">TX</option>
                                                <option value="tfa_98" id="tfa_98" class="calcval-UT">UT</option>
                                                <option value="tfa_99" id="tfa_99" class="calcval-VT">VT</option>
                                                <option value="tfa_100" id="tfa_100" class="calcval-VA">VA</option>
                                                <option value="tfa_101" id="tfa_101" class="calcval-WA">WA</option>
                                                <option value="tfa_102" id="tfa_102" class="calcval-WV">WV</option>
                                                <option value="tfa_103" id="tfa_103" class="calcval-WI">WI</option>
                                                <option value="tfa_104" id="tfa_104" class="calcval-WY">WY</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_4-D">
                                        <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">Zip Code</label><br><div class="inputWrapper"><input type="text" id="tfa_4" name="tfa_4" value="" aria-required="true" min="00000" max="99999" title="Zip Code" class="validate-integer required"></div>
                                    </div>
                                </div>
                                <div class="oneField field-container-D    " id="tfa_106-D">
                                    <label id="tfa_106-L" class="label preField " for="tfa_106">As a voter, I identify most strongly as:</label><br><div class="inputWrapper"><select id="tfa_106" name="tfa_106" title="As a voter, I identify most strongly as:" class=""><option value="">Please select...</option>
                                            <option value="tfa_107" id="tfa_107" class="">Republican</option>
                                            <option value="tfa_108" id="tfa_108" class="">Liberal</option>
                                            <option value="tfa_109" id="tfa_109" class="">Conservative</option>
                                            <option value="tfa_110" id="tfa_110" class="">Independent</option>
                                            <option value="tfa_111" id="tfa_111" class="">Democrat</option></select></div>
                                </div>
                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_113-D" role="group" aria-labelledby="tfa_113-L" data-tfa-labelledby="-L tfa_113-L"><div class="inputWrapper"><span id="tfa_113" class="choices vertical "><span class="oneChoice"><input type="checkbox" value="tfa_114" class="" checked data-default-value="true" id="tfa_114" name="tfa_114" aria-labelledby="tfa_114-L" data-tfa-labelledby="tfa_113-L tfa_114-L"><label class="label postField" id="tfa_114-L" for="tfa_114"><span class="input-checkbox-faux"></span>Email me about progress nationally and in my state</label></span></span></div></div>
                                <div class="actions" id="4857189-A"><input type="submit" data-label="Register" class="primaryAction" id="submit_button" value="Register"></div>
                                <div style="clear:both"></div>
                                <input type="hidden" value="4857189" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="39a04c1bbe381816c52f3b3b1c114d32" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="" name="tfa_dbWorkflowSessionUuid" id="tfa_dbWorkflowSessionUuid"><input type="hidden" value="11" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
                            </form>
                        </div></div><div class="wFormFooter"><p class="supportInfo"><a target="new" class="contactInfoLink" href="https://www.tfaforms.com/forms/help/4846892">Contact Information</a><br></p></div>
                    <p class="supportInfo" >
                    </p>
                </div>

                <?php
			};
			?>
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
<?php
