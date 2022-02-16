<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use Livewire\WithPagination;

class EmailMarketing extends Component
{
  # query string variables
  protected $queryString = [
    'topic',
    'tabName'=>['except'=>''],
  ];
  public $topic, $tabName;

  /**
   * Set topic function
   */
  public function setTopic($topicName)
  {
    $this->topic = $topicName;
    $this->tabName = '';
  }
  
  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing');
  }
}
