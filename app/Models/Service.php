<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\FAQ;
class Service extends Model
{
    use HasFactory;
    public function types()
    {
        return $this->hasMany(Type::class);
    }
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }
}
