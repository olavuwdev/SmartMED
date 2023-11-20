<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property string $icone
 * @property string $titulo
 * @property string $descricao
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'services';
	public $timestamps = false;

	protected $fillable = [
		'icone',
		'titulo',
		'descricao'
	];
}
