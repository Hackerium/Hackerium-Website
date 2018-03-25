<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Profile
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $dob
 * @property string|null $picture
 * @property string|null $gender
 * @property string|null $bio
 * @property string|null $website
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereWebsite($value)
 * @mixin \Eloquent
 */
class Profile extends Model
{
    protected $fillable =  [
        'dob', 'picture', 'gender', 'bio', 'website',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
