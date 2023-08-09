<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_visits extends Model
{
    use HasFactory;

    protected $table = 'site_visits';
    protected $primaryKey = 'site_visit_id';
    protected $fillable = [
        'site_visit_token',
    ];
}
