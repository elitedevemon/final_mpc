<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqImages extends Model
{
  use HasFactory;

  /**
   * Make relation with Faqs Models
   * return @var faq_id
   */
  public function faqPoster()
  {
    return $this->hasOne('App\Models\Backend\Faqs', 'id', 'faq_id');
  }
}
