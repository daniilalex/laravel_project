<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\ServiceModel
 *
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceModel whereId($value)
 * @mixin Eloquent
 */
class ServiceModel extends Model
{
    use HasFactory;

    protected $table = 'services';
    
    protected $fillable = [
        'title',
        'description',
        'price',
        'duration',
    ];

}
