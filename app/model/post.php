<?php

namespace Model;

/**
 * class Post
 */
class Post extends Base
{
	
	// data configuration
	protected
		$fieldConf = array(
			'title' => array(
				'type' => \DB\SQL\Schema::DT_VARCHAR256,
				'nullable'=>false,
				'required'=>true,
			),
			'slug' => array(
				'type' => \DB\SQL\Schema::DT_VARCHAR256,
				'nullable'=>false,
				'required' => true,
			),
			'image' => array(
				'type' => \DB\SQL\Schema::DT_VARCHAR256,
			),
			'teaser' => array(
				'type' => \DB\SQL\Schema::DT_TEXT,
			),
			'text' => array(
				'type' => \DB\SQL\Schema::DT_TEXT,
				'required' => true,
			),
			'publish_date' => array(
				'type' => \DB\SQL\Schema::DT_DATE
			),
			'created_at' => array(
				'type' => \DB\SQL\Schema::DT_DATETIME
			),
			'published' => array(
				'type' => \DB\SQL\Schema::DT_BOOLEAN,
				'default'=>false,
			),			
			'enable_comments' => array(
				'type' => \DB\SQL\Schema::DT_BOOLEAN,
				'default'=>true,
			),
		),
		$table = 'posts',
		$db = 'DB';
}