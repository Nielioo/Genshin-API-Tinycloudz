<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApiKey extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'api_key',
        'is_active',
        'created_at',
        'updated_at',
    ];

    public static function getApiKeyByUserId($userId)
	{
		return self::where('user_id', $userId)
            ->where('is_active', true)
			->first();
	}

    public function user()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasOne(User::class, 'user_id', 'id');
	}
}
