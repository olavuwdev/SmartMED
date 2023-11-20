<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Specialist
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao_especialista
 * @property string $foto_especialista
 * @property int $id_tipo
 *
 * @property SpecialtyType $specialty_type
 *
 * @package App\Models
 */
class Specialist extends Model
{

	protected $table = 'specialists';
	public $timestamps = false;

	protected $casts = [
		'id_tipo' => 'int'
	];

	protected $fillable = [
		'nome',
		'descricao_especialista',
		'foto_especialista',
		'id_tipo'
	];

	public function specialty_type()
	{
		return $this->belongsTo(SpecialtyType::class, 'id_tipo');
	}
}
