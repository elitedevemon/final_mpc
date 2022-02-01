<?php

namespace App\Models\Superadmin\Exam;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
  use HasFactory;

  public function getTopic()
  {
    return $this->hasOne(ExamTopic::class, 'id', 'topic_id');
  }
}
