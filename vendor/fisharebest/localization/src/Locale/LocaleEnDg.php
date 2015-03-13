<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnDg
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnDg extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryDg;
	}
}