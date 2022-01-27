<div>
  <div class="app-content main-content pt-3">
    <div class="side-app">
      @php
        #Like related query
        $checklike = App\Models\Backend\ForumLike::where('username', Auth::user()->username)->where('slug', $post->slug)->where('action', 'like')->first();
        $total_like = App\Models\Backend\ForumLike::where('slug', $post->slug)->where('action', 'like')->get();

        #Dislike related query
        $checkdislike = App\Models\Backend\ForumLike::where('username', Auth::user()->username)->where('slug', $post->slug)->where('action', 'dislike')->first();
        $total_dislike = App\Models\Backend\ForumLike::where('slug', $post->slug)->where('action', 'dislike')->get();
      @endphp
      <!-- Row -->
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
          <div class="card overflow-hidden">
            <div class="item7-card-img px-4 pt-4">
              <a href="javascript:void(0);"></a>
              <img src="{{ asset('superadmin/assets/images/photos/blog.jpg') }}" height="250px" alt="img" class="cover-image br-7 w-100">
            </div>
            <div class="card-body">
              <a href="javascript:void(0);" class="mt-4"><h4 class="font-weight-semibold">{{ $post->title }}</h4></a>
              <blockquote>{{ $post->short_desc }}</blockquote>
              <p>@php echo($post->text) @endphp</p>
              <div class="item7-card-desc d-md-flex mb-5">
                <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary brround border-secondary"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ date('M-d-Y', strtotime($post->created_at)) }}</div></a>
                <a href="javascript:void(0);" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-success-transparent text-success brround border-success"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ $superadamin_name->name }}</div></a>
                <div class="ms-auto mb-2">
                  <a class="me-0 d-flex" href="#firstComment"><i class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent text-warning brround border-warning"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">{{ count($total_comments) }} Comments</div></a>
                </div>
              </div>
              <div class="media py-3 mt-0 border-top">
                <div class="media-user me-2">
                  <div class="avatar-list avatar-list-stacked">
                    <span class="avatar brround bg-primary {{ count($total_like)>0?'':'d-none' }}">+{{ count($total_like) }}</span>
                    <span class="avatar brround ms-3 bg-danger {{ count($total_dislike)>0?'':'d-none' }}">+{{ count($total_dislike) }}</span>
                  </div>
                </div>
                <div class="ms-auto">
                  <div class="d-flex">
                    <a href="javascript:void(0)" title="Like"  wire:click="like('{{ $post->slug }}')" class="new ms-3 mt-2"><i class="p-3 text-{{ $checklike?'primary':'success' }} br-7 bg-{{ $checklike?'primary':'success' }}-transparent fe fe-thumbs-up  fs-16 text-icon"></i></a>
                    <a href="javascript:void(0)" title="Dislike" wire:click="dislike('{{ $post->slug }}')" class="new ms-3 mt-2"><i class="p-3 text-{{ $checkdislike?'danger':'success' }} br-7 bg-{{ $checkdislike?'danger':'success' }}-transparent fe fe-thumbs-down  fs-16 text-icon"></i></a>
                    {{-- <a href="javascript:void(0)" class="new ms-3 mt-2"><i class="p-3 text-secondary br-7 bg-secondary-transparent fe fe-share-2  fs-16 text-icon"></i></a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Comments-->
          <div class="card" wire:poll="comments">
            <div class="card-header">
              <h3 class="card-title">{{ count($total_comments) }} Comments</h3>
            </div>
            <div class="card-body">
              @foreach ($comments as $comment)
                <div class="d-sm-flex p-5 sub-review-section border subsection-color br-tl-0 br-tr-0" id="{{ $loop->first?'firstComment':'' }}">
                  @php
                    $user = App\Models\User::where('username', $comment->username)->first();
                  @endphp
                  <div class="d-flex me-3">
                    <a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$user->username]) }}"><img class="media-object brround avatar-md" alt="64x64" src="{{ $user->profile_image }}"> </a>
                  </div>
                  <div class="media-body Comments1">
                    <h5 class="mt-0 mb-1 font-weight-semibold"><a href="{{ route('show.selected.profile', ['language'=>app()->getLocale(), 'username'=>$user->username]) }}">{{ $user->name }}</a> <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success {{ $user->email_verified_at?'':'d-none' }}"></i></span></h5>
                    <p class="font-13  mb-2 mt-2">
                      {{ $comment->comment }}
                    </p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Comment" class="mt-1"><span class="badge bg-info">{{ $user->role }}</span><span class="badge bg-danger ms-1">{{ $user->level }}</span></a>
                    <div class="d-flex float-md-end mb-2">
                      @php
                        #Like related queries
                        $check_comment_like = App\Models\Backend\ForumCommentLike::where('username', $user->username)->where('post_id', $post->id)->where('comment_id', $comment->id)->where('action', 'like')->first();

                        $total_comment_like = App\Models\Backend\ForumCommentLike::where('post_id', $post->id)->where('comment_id', $comment->id)->where('action', 'like')->get();

                        #Dislike related queries
                        $check_comment_dislike = App\Models\Backend\ForumCommentLike::where('username', $user->username)->where('post_id', $post->id)->where('comment_id', $comment->id)->where('action', 'dislike')->first();

                        $total_comment_dislike = App\Models\Backend\ForumCommentLike::where('post_id', $post->id)->where('comment_id', $comment->id)->where('action', 'dislike')->get();
                      @endphp
                      <a href="javascript:void(0)" class="new ms-lg-3 mt-5 mt-md-2" wire:click="commentLike('{{ $comment->id }}')" title="Like"><i class="p-3 text-{{ $check_comment_like?'primary':'success' }} br-7 bg-{{ $check_comment_like?'primary':'success' }}-transparent fe fe-thumbs-up  fs-16 text-icon"><small class="text-primary {{ count($total_comment_like)>0?'':'d-none' }}">{{ count($total_comment_like) }}</small></i></a>
                      <a href="javascript:void(0)" class="new ms-3 mt-5 mt-md-2" wire:click="commentDislike('{{ $comment->id }}')" title="Dislike"><i class="p-3 text-{{ $check_comment_dislike?'danger':'success' }} br-7 bg-{{ $check_comment_dislike?'danger':'success' }}-transparent fe fe-thumbs-down  fs-16 text-icon"><small class="text-danger {{ count($total_comment_dislike)>0?'':'d-none' }}">{{ count($total_comment_dislike) }}</small></i></a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="text-center pb-4 {{ count($total_comments)<$pagination_page?'d-none':'' }}">
              <button class="btn btn-primary w-25" wire:click="loadMore" wire:loading.attr="disabled">
                <span wire:loading.class="d-none" wire:target="loadMore">Load More</span>
                <span wire:loading wire:target="loadMore">Loading...</span>
              </button>
            </div>
          </div>
          <!--/Comments-->

          <div class="card mb-lg-0">
            <div class="card-header">
              <h3 class="card-title">Add a Comment</h3>
            </div>
            <div class="card-body">
              <div class="mt-2">
                <div class="form-group">
                  <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write a comment" wire:model="comment"></textarea>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary" wire:click="PostComment('{{ $post->id }}')">
                  <span wire:loading.class="d-none" wire:target="PostComment">Send Comment</span>
                  <span wire:loading wire:target="PostComment">Processing...</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Row-->


    </div>
  </div>
</div>
