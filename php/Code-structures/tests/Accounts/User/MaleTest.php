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
		$this->assertFalse(Male::insertIfNotExist('invalid-email'));
		$email = rand() . '@test.local';
		$this->assertFalse(Male::doesExist($email));
		$male = Male::insertIfNotExist($email);
		$this->assertNotEmpty($male);
		$this->assertTrue(Male::doesExist($email));
		$this->assertFalse(Female::doesExist($email));
		$this->assertGreaterThan($maleCnt, Male::count());
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($male->$field, $email);
		}
		$this->assertEquals($male->id, Male::insertIfNotExist($email)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($male->id, Male::insertIfNotExist('2' . $email)->id, 'Should insert a new one.');
	}
}
