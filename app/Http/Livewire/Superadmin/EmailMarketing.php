<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;

class EmailMarketing extends Component
{
  # query string variables
  protected $queryString = ['topic'];
  public $topic;

  /**
   * Set topic function
   */
  public function setTopic($topicName)
  {
    $this->topic = $topicName;
  }
  
  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing');
  }
}
