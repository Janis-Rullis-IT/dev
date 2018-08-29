<?php
/**
 * #ISSUE_NO Manipulate with users in the specified gender.
 */
namespace App\Models\Accounts\User;

class UserByGender extends \App\Models\Accounts\User
{

	static $genderField = 'gender';
	static $genderValue = '';

	/**
	 * #ISSUE_NO Forces to only manipulate with users who's `self::$genderField` is `self::$genderValue`.
	 */
	protected static function boot()
	{
		parent::boot();

		static::addGlobalScope(function (Builder $builder) {
			$builder->where(static::$genderField, static::$genderValue);
		});
	}

	/**
	 * #ISSUE_NO User.save() but also sets `self::$genderField` = `self::$genderValue`.
	 * @param array $options
	 * @return boolean
	 */
	public function save(array $options = [])
	{
		$this->{static::$genderField} = static::$genderValue;
		return parent::save();
	}
}
