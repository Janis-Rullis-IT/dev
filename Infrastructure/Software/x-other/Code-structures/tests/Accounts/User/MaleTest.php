<?php

/**
 * #ISSUE_NO Test males.
 */
use \App\Models\Accounts\User\ByGender\Male;
use \App\Models\Accounts\User\ByGender\Female;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MaleTest extends TestCase
{

	use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();
	}

	public function testUserTest()
	{
		$maleCnt = Male::count();
		$this->assertEquals(Male::insertIfNotExist('invalid-email'), 'user.email_invalid');
		$email = rand() . '@test.local';
		$this->assertFalse(Male::doesExist($email));
		$male = Male::insertIfNotExist($email);
		$this->assertNotEmpty($male->email);
		$this->assertTrue(Male::doesExist($email));
		$this->assertFalse(Female::doesExist($email));
		$this->assertGreaterThan($maleCnt, Male::count());
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($male->$field, $val);
		}
		$this->assertEquals($male->id, Male::insertIfNotExist($email)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($male->id, Male::insertIfNotExist('2' . $email)->id, 'Should insert a new one.');
	}
}
