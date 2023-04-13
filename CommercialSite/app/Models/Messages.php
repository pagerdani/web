<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Messages
 *
 * @property int $id
 * @property string $user
 * @property string $subject
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Messages newModelQuery()
 * @method static Builder|Messages newQuery()
 * @method static Builder|Messages query()
 * @method static Builder|Messages whereCreatedAt($value)
 * @method static Builder|Messages whereDescription($value)
 * @method static Builder|Messages whereId($value)
 * @method static Builder|Messages whereSubject($value)
 * @method static Builder|Messages whereUpdatedAt($value)
 * @method static Builder|Messages whereUser($value)
 * @mixin Eloquent
 */
class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'subject',
        'description',
    ];
}
