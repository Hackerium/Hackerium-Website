<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Participant
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Hackerium[] $hackerium
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $user
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $hackerium_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participant whereHackeriumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Participant whereUserId($value)
 */
class Participant extends Model
{
    public function hackerium()
    {
        return $this->belongsTo(Hackerium::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
