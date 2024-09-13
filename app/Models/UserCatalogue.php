<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCatalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'publish',
    ];

    protected $table = 'user_catalogues';

    public function users()
    {
        return $this->hasMany(User::class, 'user_catalogue_id', 'id');
    }
}
