<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Service;
class FAQ extends Model
{
    use HasFactory;
    public function Service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    public function Type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }
}
