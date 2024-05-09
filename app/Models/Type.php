<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\FAQ;
class Type extends Model
{
    use HasFactory;
    public function Service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }
}
