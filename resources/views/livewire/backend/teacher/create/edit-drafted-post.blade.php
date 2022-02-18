<div>
  <!--Page header-->
    <div class="page-header">
      <div class="page-leftheader">
          <h4 class="page-title mb-0 text-primary">Edit Drafted Blog</h4>
      </div>
    </div>
  <!--End Page header-->

  <!-- Main content here-->
  @if (Session::has('succ_message'))
    <div class="alert alert-success">{{ session()->get('succ_message') }}</div>
  @endif
  <form wire:submit.prevent enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-9">
        <input type="text" name="title" placeholder="Enter title" class="form-control" value="" wire:model='title'>
      </div>
      <div class="col-md-3">
        <input type="file" name="photo" class="form-control" value="" wire:model='photo'>
      </div>
    </div>
    <textarea name="short_desc" rows="2" class="form-control my-2" placeholder="Enter your short description" wire:model="shortDescription"></textarea>
    <div wire:ignore>
      <textarea name="blogText" wire:model='blogText' class="form-control"></textarea>
    </div>
    {{-- <input type="submit" value="Save" name="save" class="btn btn-primary mt-2">
    <input type="submit" value="Draft" name="draft" class="btn btn-primary mt-2"> --}}

    <!-- post button-->
    <button class="btn btn-success mt-2" wire:loading.attr='disabled' wire:target='photo' wire:click='ckEditor'>Post <i class="fa fa-spinner fa-spin" wire:loading wire:target='ckEditor'></i></button>
    {{-- Save as draft button --}}
    <button class="btn btn-primary mt-2" wire:loading.attr='disabled' wire:target='photo' wire:click='saveDraft'>Save as draft <i class="fa fa-spinner fa-spin" wire:loading wire:target='saveDraft'></i></button>


    <!-- alert svg section-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>
    <!-- end alert svg-->

    <!-- if post saved successfuly -->
    @if(Session::has('postSaved'))
      <div class="alert alert-info alert-dismissable fade show d-flex align-items-center mt-2" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="info:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          <strong>{{ session()->get('postSaved') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @endif

    <!-- if post drafted successfuly -->
    @if(Session::has('postDrafted'))
      <div class="alert alert-info alert-dismissable fade show d-flex align-items-center mt-2" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="info:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          <strong>{{ session()->get('postDrafted') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @endif

    <!-- if there have any duplicate post-->
    @error('title')
      <div class="alert alert-danger alert-dismissable fade show mt-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @enderror
    
    <!-- if there have another file type-->
    @error('photo')
      <div class="alert alert-danger alert-dismissable fade show mt-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @enderror
    
    <!-- if there have empty short description-->
    @error('shortDescription')
      <div class="alert alert-danger alert-dismissable fade show mt-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @enderror

    <!-- if there have empty blog text-->
    @error('blogText')
      <div class="alert alert-danger alert-dismissable fade show mt-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @enderror

    <!-- if draft already exist-->
    @error('alreadyExist')
      <div class="alert alert-danger alert-dismissable fade show mt-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          {{ $message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</button>
      </div>
    @enderror
  </form>
</div>

@push('js')
  <script>
    const editor = CKEDITOR.replace('blogText');
    editor.on('change', function(event){
        console.log(event.editor.getData())
        @this.set('blogText', event.editor.getData());
    })
  </script>
@endpush