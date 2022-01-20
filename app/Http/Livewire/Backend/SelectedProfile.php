<?php

namespace App\Http\Livewire\Backend;

use App\Models\Backend\Faqs;
use App\Models\Backend\FaqsLike;
use App\Models\Backend\FriendRequest;
use App\Models\Backend\Notification\FriendRequestNotification;
use App\Models\Backend\UserEducationalInfo;
use App\Models\FollowAndUnfollow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SelectedProfile extends Component
{
  use WithPagination, WithFileUploads;
  #public variables
  public $selected_username, $user, $userEduDetails, $friends, $all_questions, $totalFollowers, $totalFollowing;
  #public variables
  public $question, $faq_id, $faq_image;
  #variable with value
  public $pagination_page = 7;

  /**
   * Mount function
   */
  public function mount($username)
  {
    $this->selected_username = $username;
    $this->user = User::where('username', $this->selected_username)->first();
    $this->userEduDetails = UserEducationalInfo::where('username', $this->selected_username)->first();
    $this->friends = FriendRequest::where('receiver_username', $username)->where('action', 'success')->orWhere('sender_username', $username)->where('action', 'success')->get();
    $this->all_questions = Faqs::where('username', $this->selected_username)->orderBy('id', 'DESC')->get();

    # Followers and Following
    $this->totalFollowers = FollowAndUnfollow::where('receiver_username', $this->selected_username)->get();
    $this->totalFollowing = FollowAndUnfollow::where('sender_username', $this->selected_username)->get();
  }
  
  /**
   * Load more function
   */
  public function LoadMore()
  {
    $this->pagination_page += 5;
  }

  /**
   * Forum like function
   */
  public function like($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'dislike') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'like';
        $like->save();
      }elseif ($checkExist->action == 'like') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'like';
      $like->save();
    }
  }

  /**
   * Forum dislike function
   */
  public function dislike($faq_id)
  {
    $like = new FaqsLike();
    $checkExist = FaqsLike::where('username', Auth::user()->username)->where('faq_id', $faq_id)->first();
    if ($checkExist) {
      if ($checkExist->action == 'like') {
        $checkExist->delete();
        $like->username = Auth::user()->username;
        $like->faq_id = $faq_id;
        $like->action = 'dislike';
        $like->save();
      }elseif ($checkExist->action == 'dislike') {
        $checkExist->delete();
      }
    }else {
      $like->username = Auth::user()->username;
      $like->faq_id = $faq_id;
      $like->action = 'dislike';
      $like->save();
    }
  }

  /**
   * Follow and unfollow function
   */

  # follow function
  public function follow($username)
  {
    $follow = new FollowAndUnfollow();
    $follow->sender_username = Auth::user()->username;
    $follow->receiver_username = $username;
    $follow->action = "follow";
    $follow->save();
  }

  # unfollow function
  public function unfollow($username)
  {
    FollowAndUnfollow::where('sender_username', Auth::user()->username)->where('receiver_username', $username)->where('action', 'follow')->delete();
  }

  /**
   * Friend request related functions
   */

  # add friend function
  public function addFriend($username)
  {
    $friend = new FriendRequest();
    $friend->sender_username = Auth::user()->username;
    $friend->receiver_username = $username;
    $friend->action = "in-process";
    $friend->save();
    $this->SendRequestNotification($username);
  }

  # send friend request notification
  public function SendRequestNotification($username)
  {
    $existNotification = FriendRequestNotification::where('sender_username', Auth::user()->username)->where('receiver_username', $username)->first();
    if ($existNotification) {
      $existNotification->sender_username = Auth::user()->username;
      $existNotification->receiver_username = $username;
      $existNotification->action = "sent";
      $existNotification->save();
    }else{
      $notify = new FriendRequestNotification();
      $notify->sender_username = Auth::user()->username;
      $notify->receiver_username = $username;
      $notify->action = "sent";
      $notify->save();
    }
  }

  # cancel friend request function
  public function cancelSendRequest($username)
  {
    FriendRequest::where('sender_username', Auth::user()->username)->where('receiver_username', $username)->where('action', 'in-process')->delete();
  }

  # confirm friend request
  public function confirmReceivedRequest($username)
  {
    FriendRequest::where('sender_username', $username)->where('receiver_username', Auth::user()->username)->where('action', 'in-process')->update([
      'action'=>'success'
    ]);
    // $this->confirmReceivedRequestNotification($username);
  }

  # received friend request notification
  // public function confirmReceivedRequestNotification($username)
  // {
  //   $notify = new FriendRequestNotification();
  //   $notify->sender_username = $username;
  //   $notify->receiver_username = Auth::user()->username;
  //   $notify->action = "received";
  //   $notify->save();
  // }

  # unfriend a user
  public function unfriend($username)
  {
    FriendRequest::where('sender_username', Auth::user()->username)->where('receiver_username', $username)->where('action', 'success')->orWhere('sender_username', $username)->where('receiver_username', Auth::user()->username)->where('action', 'success')->delete();
  }

  # cancel send friend request
  public function cancelReceivedRequest($username)
  {
    FriendRequest::where('sender_username', $username)->where('receiver_username', Auth::user()->username)->where('action', 'in-process')->delete();
  }

  /**
   * Render function
   */
  public function render()
  {
    return view('livewire.backend.selected-profile');
  }
}
