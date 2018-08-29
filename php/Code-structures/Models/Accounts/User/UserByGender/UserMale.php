<?php
/**
 * #ISSUE_NO Manipulate with male users.
 */
namespace App\Models\Accounts\UserByGender;

class UserMale extends \App\Models\Accounts\User\UserByGender
{

	static $genderField = 'gender';
	static $genderValue = 'male';

}
