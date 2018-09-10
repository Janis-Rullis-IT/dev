<?php
/**
 * #ISSUE_NO Operate with users.
 */
namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{

	use SoftDeletes;

	protected $table = 'users';

	/**
	 * #ISSUE_NO Get a `where` part for a query builder.
	 * @param string $email
	 * @return QueryBuilder
	 */
	public static function getWhere($email)
	{
		return static::where('email', $email)->orderBy('id', 'DESC');
	}

	/**
	 * #ISSUE_NO Collect one by email.
	 * @param string $email
	 * @return User|null
	 */
	public static function findByEmail($email)
	{
		return static::getWhere($email)->first();
	}

	/**
	 * #ISSUE_NO Check if a record with such email exist.
	 * @param string $email
	 * @return boolean
	 */
	public static function doesExist($email)
	{
		return static::isValidEmail($email) ? static::getWhere($email)->count() > 0 : false;
	}

	/**
	 * #ISSUE_NO Get formatted email (like, remove spaces before and after).
	 * @param string $email
	 * @return string
	 */
	public static function getFormattedEmail($email)
	{
		$email = trim($email);
		return $email;
	}

	/**
	 * #ISSUE_NO Check if the email is valid.
	 * @param string $email
	 * @param boolean $autoFormat = true
	 * @return boolean
	 */
	public static function isValidEmail($email, $autoFormat = true)
	{
		$email = $autoFormat ? static::getFormattedEmail($email) : $email;
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	/**
	 * #ISSUE_NO Insert only if it does not exist.
	 * @param string $email
	 * @param boolean $validateEmail = true
	 * @return User|boolean
	 */
	public static function insertIfNotExist($email, $validateEmail = true)
	{
		// #ISSUE_NO Require the email to be in a valid format.
		if ($validateEmail) {
			if (!static::isValidEmail($email)) {
				return 'user.email_invalid';
			}
		}

		$item = static::findByEmail($email);
		if (empty($item)) {
			$item = new static;
			return $item->insertOne($email);
		}
		return $item;
	}

	/**
	 * #ISSUE_NO Insert by passing it's email.
	 * @param string $email
	 * @return User|boolean
	 */
	private function insertOne($email)
	{
		$this->email = static::getFormattedEmail($email);
		if ($this->save()) {
			return static::find($this->id);
		}
		return false;
	}
}
