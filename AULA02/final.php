<?php 
final class Foo{ protected $foo;}
class Bar extends Foo{}
echo "<pre>";
$foo = new Foo();
var_dump($foo);
$bar = new Bar();
var_dump($bar);