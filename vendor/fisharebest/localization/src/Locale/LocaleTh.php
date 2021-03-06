<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTh;

/**
 * Class LocaleTh - Thai
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTh extends AbstractLocale implements LocaleInterface {
	public function endonym() {
		return 'ไทย';
	}

	public function language() {
		return new LanguageTh;
	}
}
