<?php

namespace App\Http\Livewire\Backend;

use App\Models\Settings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DockerSetting extends Component
{
  /**
   * Theme color changer function
   */
  public function themeColorChanger($action)
  {
    $checkExist = Settings::where('username', Auth::user()->username)->first();
    if ($checkExist) {
      $checkExist->is_night = $action;
      $checkExist->update();
    }else {
      $themecolor = new Settings();
      $themecolor->username = Auth::user()->username;
      $themecolor->is_night = $action;
      $themecolor->save();
    }
    return back();
  }

  /**
   * Header color changer
   */
  public function headerChanger($color)
  {
    $checkExist = Settings::where('username', Auth::user()->username)->first();
    if ($checkExist) {
      $checkExist->header_color = $color;
      $checkExist->update();
    }else {
      $themecolor = new Settings();
      $themecolor->username = Auth::user()->username;
      $themecolor->header_color = $color;
      $themecolor->save();
    }
    return back();
  }

  /**
   * Menu color changer function
   */
  public function menuColorChanger($color)
  {
    $checkExist = Settings::where('username', Auth::user()->username)->first();
    if ($checkExist) {
      $checkExist->menu_color = $color;
      $checkExist->update();
    }else {
      $themecolor = new Settings();
      $themecolor->username = Auth::user()->username;
      $themecolor->menu_color = $color;
      $themecolor->save();
    }
    return back();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.docker-setting');
  }
}
