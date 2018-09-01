<?php

/**
 * #ISSUE_NO Test females.
 */
use \App\Models\Accounts\User\ByGender\Female;
use \App\Models\Accounts\User\ByGender\Male;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FemaleTest extends TestCase
{

	use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();
	}

	public function testUserTest()
	{
		$femaleCnt = Female::count();
		$this->assertFalse(Female::insertIfNotExist('invalid-email'));
		$email = rand() . '@test.local';
		$this->assertFalse(Female::doesExist($email));
		$female = Female::insertIfNotExist($email);
		$this->assertNotEmpty($female);
		$this->assertTrue(Female::doesExist($email));
		$this->assertFalse(Male::doesExist($email));
		$this->assertGreaterThan($femaleCnt, Female::count());
		$required = ['email' => $email];
		foreach ($required as $field => $val) {
			$this->assertEquals($female->$field, $email);
		}
		$this->assertEquals($female->id, Female::insertIfNotExist($email)->id, 'Should not add a duplicate.');
		$this->assertNotEquals($female->id, Female::insertIfNotExist('2' . $email)->id, 'Should insert a new one.');
	}
}
