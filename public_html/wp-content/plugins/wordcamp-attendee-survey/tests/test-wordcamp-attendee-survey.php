<?php

namespace WordCamp\AttendeeSurvey\Tests;

use WP_UnitTestCase;

defined( 'WPINC' ) || die();

/**
 * Class Test_AttendeeSurvey
 *
 * @group wordcamp-attendee-survey
 */
class Test_AttendeeSurvey extends WP_UnitTestCase {
	/**
	 * @covers \WordCamp\SpeakerFeedback\Spam\get_consolidated_meta_string()
	 */
	public function test_get_consolidated_meta_string() {
		$this->assertEquals( true, false );
	}
}