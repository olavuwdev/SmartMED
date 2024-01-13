<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialtyType
 *
 * @property int $id
 * @property string $titulo
 *
 * @property Collection|Specialist[] $specialists
 *
 * @package App\Models
 */
class SpecialtyType extends Model
{
	protected $table = 'specialty_types';
	public $timestamps = false;

	protected $fillable = [
		'titulo'
	];

	public function specialists()
	{
		return $this->hasMany(Specialist::class, 'id_tipo');
	}
}
