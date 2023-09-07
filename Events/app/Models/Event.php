<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    protected $primaryKey = "id";
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id',"name",'startDate','endDate'];
}