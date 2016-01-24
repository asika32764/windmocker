<?php
/**
 * Part of Mocker project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Mocker\Controller\Form;

use Mocker\Model\FormModel;
use Phoenix\Controller\AbstractSaveController;
use Windwalker\Data\Data;

/**
 * The SaveController class.
 * 
 * @since  1.0
 */
class SaveController extends AbstractSaveController
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
	 * Property useTransaction.
	 *
	 * @var  bool
	 */
	protected $useTransaction = false;

	/**
	 * postSave
	 *
	 * @param Data $data
	 *
	 * @return  void
	 */
	protected function postSave(Data $data)
	{
		parent::postSave($data);
	}
}
