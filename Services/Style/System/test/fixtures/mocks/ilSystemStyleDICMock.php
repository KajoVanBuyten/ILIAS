<?php
require_once("libs/composer/vendor/autoload.php");

require_once("ilSystemStyleLanguageMock.php");



/* Copyright (c) 2016 Timon Amstutz <timon.amstutz@ilub.unibe.ch> Extended GPL, see docs/LICENSE */

/**
 * Class ilLanguageMock
 */
class ilSystemStyleDICMock extends ILIAS\DI\Container {
	/**
	 * @return	ilLanguageMock
	 */
	public function language() {
		return new ilSystemStyleLanguageMock();
	}
}