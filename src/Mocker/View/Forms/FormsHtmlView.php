<?php
/**
 * Part of Mocker project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Mocker\View\Forms;

use Phoenix\View\ListView;

/**
 * The FormsHtmlView class.
 * 
 * @since  1.0
 */
class FormsHtmlView extends ListView
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'forms';

	/**
	 * prepareData
	 *
	 * @param \Windwalker\Data\Data $data
	 *
	 * @return  void
	 */
	protected function prepareData($data)
	{
	}

	/**
	 * setTitle
	 *
	 * @param string $title
	 *
	 * @return  static
	 */
	public function setTitle($title = null)
	{
		return parent::setTitle($title);
	}
}
