<?php

/**
 * Part of the tueena lib
 *
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @link http://tueena.org/
 * @author Bastian Fenske <bastian.fenske@tueena.org>
 * @file
 */

declare(strict_types=1);
namespace tueenaLib\now\spec;

use tueenaLib\now\Now;

class NowTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function Invoking_an_instance_returns_a_DateTimeImmutable_of_the_current_time()
	{
		// given
		$target = new Now;
		$timeStampBeforeCall = new \DateTimeImmutable;

		// when
		$result = $target();

		// then
		$timeStampAfterCall = new \DateTimeImmutable;
		$this->assertInstanceOf(\DateTimeImmutable::class, $result);
		$this->assertGreaterThanOrEqual($timeStampBeforeCall, $result);
		$this->assertLessThanOrEqual($timeStampAfterCall, $result);
	}
}
