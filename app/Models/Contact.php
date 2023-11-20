<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property string $dias
 * @property string $numero
 * @property string $email
 * @property string $twitter
 * @property string $instagram
 * @property string $facebook
 * @property string $youtube
 * @property string $telegram
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contacts';
	public $timestamps = false;

	protected $fillable = [
		'dias',
		'numero',
		'email',
		'twitter',
		'instagram',
		'facebook',
		'youtube',
		'telegram'
	];
}
