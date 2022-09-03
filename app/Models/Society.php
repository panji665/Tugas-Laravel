<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Regional;

class Society extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function regional()
    {
        return $this->belongsTo(Regional::class, 'regional_id');
    }
    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
    public function spots()
    {
        return $this->hasMany(Spot::class,'regional_id','regional_id');
    }
    public function vaccination()
    {
        return $this->hasMany(Vaccination::class);
    }
}
