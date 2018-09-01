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
		$this->assertEquals(User::insertIfNotExist('invalid-email'), 'user.email_invalid');
		$email = rand() . '@test.local';
		$this->assertFalse(User::doesExist($email));
		$user = User::insertIfNotExist($email . '    ');
		$this->assertNotEmpty($user->email);
		$this->assertTrue(User::doesExist($email));
		$this->assertGreaterThan($userCnt, User::count());
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($user->$field, $val);
		}
		$this->assertEquals($user->id, User::insertIfNotExist($email)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($user->id, User::insertIfNotExist('2' . $email)->id, 'Should insert a new one.');
	}

	public function testStoreUser()
	{
		$email = rand() . '@test.local';
		$uri = "/acc/users";
		$this->post($uri, ['email' => 'invalid-email'])->seeJson(['error' => 'user.email_invalid'])->seeStatusCode(400);
		$response = $this->post($uri, ['email' => $email])->seeStatusCode(200);
		$user = json_decode($response->response->getContent())->success;
		$notEmpty = ['id', 'email', 'updated_at', 'created_at'];
		foreach ($notEmpty as $field) {
			$this->assertNotEmpty($user->$field);
		}
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($user->$field, $val);
		}
	}
}
