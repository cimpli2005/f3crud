<?php

namespace Controller;

/**
 * Abstract class Base
 */
abstract class Base
{
	
	/** @var \View\Base */
	protected $response;

	/**
	 * set a new view
	 * @param \View\Base $view
	 */
	public function setView(\View\Base $view)
	{
		$this->response = $view;
	}

	/**
	 * init the View
	 */
	public function beforeroute($f3)
	{
		$this->response = new \View\Frontend();
	}

	/**
	 * kick start the View, which creates the response
	 * based on our previously set content data.
	 * finally echo the response or overwrite this method
	 * and do something else with it.
	 * @return string
	 */
	public function afterroute()
	{
		if (!$this->response) {
			trigger_error('No view has been set.');			
		}
		echo $this->response->render();
	}	
}