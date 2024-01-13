<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
 * @property Carbon $data
 * @property string $titulo
 * @property string $texto
 * @property string $imagem
 *
 * @package App\Models
 */
class Post extends Model
{
	protected $table = 'posts';
	public $timestamps = false;

	protected $casts = [
		'data' => 'datetime'
	];

	protected $fillable = [
		'data',
		'titulo',
		'texto',
		'imagem'
	];
}
