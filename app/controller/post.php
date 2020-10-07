<?php

namespace Controller;

class Post extends Resource {
	
	public function __construct()
	{
		parent::__construct(new \Model\Post());
		
	}
	public function getList(\Base $f3, $params) {
		$this->response->data['SUBPART'] = 'hello.html';
	}
}