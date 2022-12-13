<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'activity',
        'name_comppany',
        'type_company',
        'Message',
        'type_contact',
    ];

    const HOMECONTECT = 0;
    const PAGECONTENTUS = 1;
}
