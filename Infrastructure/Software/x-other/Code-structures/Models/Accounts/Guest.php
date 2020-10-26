<?php
/**
 * #ISSUE_NO Operate with guests / not-registered users.
 */
namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{

	use SoftDeletes;

	protected $table = 'guests';

	/**
	 * #ISSUE_NO Get a `where` part for a query builder.
	 * @param integer $sessionId
	 * @return QueryBuilder
	 */
	public static function getWhere($sessionId)
	{
		return static::where('session_id', $sessionId)->orderBy('id', 'DESC');
	}

	/**
	 * #ISSUE_NO Collect one by a session_id.
	 * @param string $sessionId|:40
	 * @return Guest|null
	 */
	public static function findBySessionId($sessionId)
	{
		return static::getWhere($sessionId)->first();
	}

	/**
	 * #ISSUE_NO Check if a record with such session_id exist.
	 * @param string $sessionId|:40
	 * @return boolean
	 */
	public static function doesExist($sessionId)
	{
		return static::isValid($sessionId) ? static::getWhere($sessionId)->count() > 0 : false;
	}

	public static function isValid($sessionId)
	{
		return empty($sessionId) || strlen($sessionId) !== 40;
	}

	/**
	 * #ISSUE_NO Insert only if it does not exist.
	 * @param string $sessionId|:40
	 * @return Guest|boolean
	 */
	public static function insertIfNotExist($sessionId)
	{
		if (!static::isValid($sessionId)) {
			return 'guest.session_id_invalid';
		}

		$item = static::findBySessionId($sessionId);
		if (empty($item)) {
			$item = new static;
			return $item->insertOne($sessionId);
		}
		return $item;
	}

	/**
	 * #ISSUE_NO Insert by passing it's session_id.
	 * @param string $sessionId|:40
	 * @return Guest|boolean
	 */
	private function insertOne($sessionId)
	{
		$this->session_id = $sessionId;
		if ($this->save()) {
			return static::find($this->id);
		}
		return false;
	}
}
