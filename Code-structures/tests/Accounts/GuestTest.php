<?php

/**
 * #ISSUE_NO Test guest users.
 */
use \App\Models\Accounts\Guest;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GuestTest extends TestCase
{

	use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();
	}

	public function testGuestTest()
	{
		$this->assertFalse(Guest::isValid('123'));
		$guestCnt = Guest::count();
		$sessionId = sha1(rand());
		$this->assertTrue(Guest::isValid($sessionId));
		$this->assertFalse(Guest::doesExist($sessionId));
		$guest = Guest::insertIfNotExist($sessionId);
		$this->assertNotEmpty($guest);
		$this->assertTrue(Guest::doesExist($sessionId));
		$this->assertGreaterThan($guestCnt, Guest::count());
		$required = ['session_id' => $sessionId];
		foreach ($required as $field => $val) {
			$this->assertEquals($guest->$field, $sessionId);
		}
		$this->assertEquals($guest->id, Guest::insertIfNotExist($sessionId)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($guest->id, Guest::insertIfNotExist(sha1(rand()))->id, 'Should insert a new one.');
	}
}
