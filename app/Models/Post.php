<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * 
 * @property int $id
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

	protected $fillable = [
		'titulo',
		'texto',
		'imagem'
	];
}
