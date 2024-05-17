<?php
declare(strict_types=1);

namespace Kristos80\Dto;

use ReflectionClass;
use ReflectionException;

abstract readonly class Dto implements ImmutableDtoInterface {

	/**
	 * @param string $parameterName
	 * @param mixed $value
	 * @return $this
	 * @throws ReflectionException
	 */
	final public function with(string $parameterName, mixed $value): static {
		$reflectionClass = new ReflectionClass($this);

		$args = [];
		foreach($reflectionClass->getConstructor()->getParameters() as $parameter) {
			$args[$parameter->getName()] = $reflectionClass->getProperty($parameter->getName())->getValue($this);
			if($parameter->getName() === $parameterName) {
				$args[$parameter->getName()] = $value;
			}
		}

		return $reflectionClass->newInstance(...$args);
	}
}
