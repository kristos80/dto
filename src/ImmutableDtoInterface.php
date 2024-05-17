<?php
declare(strict_types=1);

namespace Kristos80\Dto;

interface ImmutableDtoInterface {

	/**
	 * @param string $parameterName
	 * @param mixed $value
	 * @return $this
	 */
	public function with(string $parameterName, mixed $value): static;
}
