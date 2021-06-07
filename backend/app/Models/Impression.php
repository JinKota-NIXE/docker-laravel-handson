<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impression extends Model
{
   //protected $table = "impressions";
   //protected $fillable = ["animal","name","message"];
   protected $guarded = [
        'id'
   ];

}
