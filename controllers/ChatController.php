<?php

namespace app\controllers;

class ChatController extends \app\core\Controller
{
	public string $layout = 'chat-layout';
	public function index()
	{
		return $this->render('chat');
	}
}