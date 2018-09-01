<?php

/**
 * #ISSUE_NO Test users.
 */
use \App\Models\Accounts\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

	use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();
	}

	public function testUserTest()
	{
		$userCnt = User::count();
		$this->assertFalse(User::insertIfNotExist('invalid-email'));
		$email = rand() . '@test.local';
		$this->assertFalse(User::doesExist($email));
		$user = User::insertIfNotExist($email);
		$this->assertNotEmpty($user);
		$this->assertTrue(User::doesExist($email));
		$this->assertGreaterThan($userCnt, User::count());
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($user->$field, $email);
		}
		$this->assertEquals($user->id, User::insertIfNotExist($email)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($user->id, User::insertIfNotExist('2' . $email)->id, 'Should insert a new one.');
	}
}
