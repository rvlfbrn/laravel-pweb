<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = "data";
    protected $hidden = ["created_at", "updated_at"];

    protected $fillable = [
        "fullname",
        "nik",
        "nisn",
        "email",
        "phone",
        "place_of_birth",
        "date_of_birth",
        "gender",
        "religion",
        "address",
        "postal_code",
        "high_school",
        "pass_photo",
        "ktp",
        "diploma",
        "transcript",
        "region",
        "study_program",
    ];
}
