<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Channel
 *
 * @property int $id
 * @property string $titulo
 * @property string $url
 * @property string $foto
 *
 * @package App\Models
 */
class Channel extends Model
{
	protected $table = 'channels';
	public $timestamps = false;

	protected $fillable = [
		'titulo',
		'url',
		'foto'
	];
}
