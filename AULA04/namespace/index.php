<?php 
namespace Site;
require 'view.php';
require 'model.php';
use Model\Pessoa as ModelPessoa;
use View\Pessoa as ViewPessoa;
use DateTime as Data;
$viewPessoa = new ViewPessoa();
$modelPessoa = new ModelPessoa();
$data = new Data();
print_r($data);