<?php 
namespace View;
class View
{
	public function render(array $data){
		extract($data);
		include 'src/hello.php';
	}
}