<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class About
 *
 * @property int $id
 * @property string $text_quem_somos
 * @property string $text_missoes
 * @property string $text_valores
 *
 * @package App\Models
 */
class About extends Model
{
	protected $table = 'about';
	public $timestamps = false;

	protected $fillable = [
		'text_quem_somos',
		'text_missoes',
		'text_valores',
        'text_visao'
	];
}
