<?php 
namespace View;
class View
{
	public function render(string $view,array $data){
		extract($data);
		
		$file = BASEDIR . '/src/' . $view . '.php';
		if (file_exists($file)) {
			require $file;
	    } else {
	        echo $file;
	    }
	}
}