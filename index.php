<?php

use Kristos80\Dto\Dto;

require_once __DIR__ . "/vendor/autoload.php";

final readonly class A1 extends Dto {

	public function __construct(private string $test, private string $test1) {}
}

$a1 = new A1("dummy", "dummy1");
var_dump($a1);
