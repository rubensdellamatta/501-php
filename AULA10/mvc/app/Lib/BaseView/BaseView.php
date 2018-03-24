<?php 

namespace Lib\BaseView;

class BaseView
{
	private $header = BASEDIR . 'app/View/layout/_header.php';
	private $footer = BASEDIR . 'app/View/layout/_footer.php';

	public function render(string $view,array $data = null){
		$container = BASEDIR . 'app/View/' . $view . '.php';
		$this->loadPage($container,$data);
	}
	private function loadPage(string $container,$data){

		if (is_array($data)) {
			extract($data);
			unset($data);
		}

		include $this->header;
		include $container;
		include $this->footer;
	}
}