<?php

namespace App\Http\Livewire\Superadmin\EmailMarketing;

use App\Models\Superadmin\EmailMarketing\Fiverr;
use App\Models\Superadmin\EmailMarketing\Gearlaunch;
use App\Models\Superadmin\EmailMarketing\Youtube;
use Livewire\Component;
use Livewire\WithPagination;

class Info extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';

  protected $queryString = ['tabName'];
  public $tabName;

  /**
   * mount function
   */
  public function mount()
  {
    $this->tabName = 'fiverr';
  }

  /**
   * navTab switching
   */
  public function navTab($tabName)
  {
    $this->tabName = $tabName;
    $this->resetPage();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.superadmin.email-marketing.info',[
      'gearlaunch'=>Gearlaunch::orderBy('id', 'DESC')->paginate(15),
      'fiverr' => Fiverr::orderBy('id', 'DESC')->paginate(15),
      'youtube' => Youtube::orderBy('id', 'DESC')->paginate(15)
    ]);
  }
}
