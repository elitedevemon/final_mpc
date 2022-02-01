<?php

namespace App\Models\Backend\Exam;

use App\Models\Superadmin\Exam\ExamQuestion;
use App\Models\Superadmin\Exam\ExamTopic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
  use HasFactory;

  # get topic value
  public function getTopic()
  {
    return $this->hasOne(ExamTopic::class, 'id', 'topic_id');
  }

  # get question value
  public function getQuestion()
  {
    return $this->hasMany(ExamQuestion::class, 'topic_id', 'topic_id');
  }

  # get user details
  public function getUser()
  {
    return $this->hasOne(User::class, 'username', 'username');
  }
}
