<?php

namespace App\Models\Superadmin\Exam;

use App\Models\Backend\Exam\ExamResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamTopic extends Model
{
    use HasFactory;

    # get result query
    public function getResult()
    {
      return $this->hasOne(ExamResult::class, 'topic_id', 'id');
    }
}
