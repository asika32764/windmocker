<?php
/**
 * Part of Mocker project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Mocker\Controller\Form;

use Mocker\Model\FormModel;
use Mocker\View\Form\FormHtmlView;
use Phoenix\Controller\Display\ItemDisplayController;
use Windwalker\Core\Controller\Controller;

/**
 * The GetController class.
 * 
 * @since  1.0
 */
class GetController extends ItemDisplayController
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'form';

	/**
	 * Property itemName.
	 *
	 * @var  string
	 */
	protected $itemName = 'form';

	/**
	 * Property listName.
	 *
	 * @var  string
	 */
	protected $listName = 'forms';

	/**
	 * Property model.
	 *
	 * @var  FormModel
	 */
	protected $model;

	/**
	 * Property view.
	 *
	 * @var  FormHtmlView
	 */
	protected $view;

	/**
	 * prepareExecute
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		parent::prepareExecute();
	}
}
