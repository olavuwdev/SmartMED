<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FeaturedInfo
 * 
 * @property int $id
 * @property string $titulo
 * @property string $link
 *
 * @package App\Models
 */
class FeaturedInfo extends Model
{
	protected $table = 'featured_info';
	public $timestamps = false;

	protected $fillable = [
		'titulo',
		'link'
	];
}
