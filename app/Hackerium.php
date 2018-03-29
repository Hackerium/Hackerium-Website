<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Hackerium
 *
 * @property int $id
 * @property string $title
 * @property string $keypoint
 * @property string $location
 * @property string $description
 * @property \Carbon\Carbon|null $starts_by
 * @property \Carbon\Carbon|null $ends_by
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereEndsBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereKeypoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereStartsBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Hackerium whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Participant[] $participant
 */
class Hackerium extends Model
{
    public function participant()
    {
        return $this->hasMany(Participant::class);
    }
}
