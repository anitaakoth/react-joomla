<?php

defined('_JEXEC') or die;

class CarsController extends JControllerLegacy
{
	public function display($cachable = false, $urlparams = array())
	{
		$vName = $this->input->get('view', 'cars');
		$this->input->set('view', $vName);

		parent::display($cachable);
	}
}
