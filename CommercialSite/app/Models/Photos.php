<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Photos
 *
 * @property int $id
 * @property string $photo_path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Photos newModelQuery()
 * @method static Builder|Photos newQuery()
 * @method static Builder|Photos query()
 * @method static Builder|Photos whereCreatedAt($value)
 * @method static Builder|Photos whereId($value)
 * @method static Builder|Photos wherePhotoPath($value)
 * @method static Builder|Photos whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_path',
    ];
}
