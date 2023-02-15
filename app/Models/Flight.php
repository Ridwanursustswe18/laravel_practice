<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use HasUlids;
    // protected static function booted()
    // {
    //     static::addGlobalScope('ancient', function (Builder $builder) {
    //         $builder->where('created_at', '<', now()->subYears(2000));
    //     });
    // }
    public function scopeActive($query)
    {
        $query->where('name', 'emirates');
    }
}
