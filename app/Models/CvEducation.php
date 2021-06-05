<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvEducation extends Model
{
    use HasFactory;

    public function cv(){
        return $this->belongsTo(Cv::class);
    }

    protected $fillable = [
        'cv_id',
        'education',
        'exam_score',
        'university',
        'specialty',
        'profession',
        'admission_year',
        'graduation_year'
    ];
}
