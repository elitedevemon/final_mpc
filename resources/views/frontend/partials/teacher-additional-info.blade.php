<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:click="$toggle('haveYoutubeChannel')">
  <label class="form-check-label" for="exampleCheck1">Have YouTube Channel? <i class="fa fa-spinner fa-spin" wire:loading wire:target='haveYoutubeChannel'></i></label>
</div>
@if($haveYoutubeChannel)
  <!-- Youtube channel link-->
  <div class="input-group">
    <input type="url" id="channelLink" placeholder="Enter your YouTube channel link" class="form-control bg-info border @error('channelLink') is-invalid @enderror" wire:model='channelLink'>
    <button class="btn btn-primary" wire:click='previewChannelThumbnail' wire:loading.attr='disabled'>Preview <i class="fa fa-spinner fa-spin" wire:loading wire:target='previewChannelThumbnail'></i></button>
  </div>
  @error('channelLink')
    <small class="text-danger invalid-feedback">{{ $message }}</small>
  @enderror
  @if($channelDetails)
    <div class="text-center">
      <img src="{{ $channelDetails['snippet']['thumbnails']['medium']['url'] }}" alt="YouTube channel Thumbnail" height="150px" width="150px" class="my-2 rounded-circle">
    </div>
  @endif

  <!--Youtube Studio screenshot section-->
  <h4 class="fw-bold mt-2">Youtube Studio screenshot
    <i class="fa fa-question-circle" title="Go to www.youtube.com and click YouTube Studio>dashboard and take screenshot."></i>: 
    <small class="d-block">Go to www.youtube.com and click YouTube Studio>dashboard and take screenshot.</small>
  </h4>
  <div class="position-relative  text-center"
    x-data="{ isUploading: false, progress: 5 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false; progress = 5"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
  >
    <img src="{{ $screenshotYoutubeStudio?$screenshotYoutubeStudio->temporaryUrl():'https://www.clipartmax.com/png/middle/231-2319690_copy-icon-mono-general-icons-2-softicons-com-rh-softicons-copy-and.png' }}" alt="" height="150px" class="w-75">
    
    <label for="screenshot" class="position-absolute translate-middle border border-light rounded-circle" style="cursor: pointer"><img src="https://www.freeiconspng.com/uploads/camera-icon-circle-21.png" alt="" height="30px" width="30px">
    </label>
    <input type="file" accept="image/*" name="screenshot" id="screenshot" class="d-none" wire:model='screenshotYoutubeStudio'>
    <div x-show="isUploading">
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`" x-text="`${progress}%`"></div>
      </div>
    </div>
  </div>
@endif


<!--Selfie section-->
<h4 class="fw-bold mt-2">Selfie
  <i class="fa fa-question-circle" title="Take a selfie where your face is clear"></i>: 
  <small class="d-block">Take a selfie where your face is clear</small>
</h4>
<div class="position-relative text-center"
x-data="{ isUploading: false, progress: 5 }"
x-on:livewire-upload-start="isUploading = true"
x-on:livewire-upload-finish="isUploading = false; progress = 5"
x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>
  <img src="{{ $selfie?$selfie->temporaryUrl():'https://cdn4.iconfinder.com/data/icons/e-commerce-181/512/477_profile__avatar__man_-512.png' }}" alt="" height="150px" width="150px" class="rounded-circle">
  
  <label for="selfie" class="position-absolute translate-middle top-50 border border-light rounded-circle" style="cursor: pointer"><img src="https://www.freeiconspng.com/uploads/camera-icon-circle-21.png" alt="" height="30px" width="30px">
  </label>
  <input type="file" accept="image/*" name="selfie" id="selfie" class="d-none" wire:model='selfie'>
  <div x-show="isUploading">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`" x-text="`${progress}%`"></div>
    </div>
  </div>
</div>

<!--Document front section-->
<h4 class="fw-bold mt-2">Document front
  <i class="fa fa-question-circle" title="Front side of your NID, Passport or Driving license"></i>: 
  <small class="d-block">Front side of your NID, Passport or Driving license</small>
</h4>
<div class="position-relative text-center"
x-data="{ isUploading: false, progress: 5 }"
x-on:livewire-upload-start="isUploading = true"
x-on:livewire-upload-finish="isUploading = false; progress = 5"
x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>
  <img src="{{ $documentFront?$documentFront->temporaryUrl():'https://www.clipartmax.com/png/middle/231-2319690_copy-icon-mono-general-icons-2-softicons-com-rh-softicons-copy-and.png' }}" alt="" height="150px" class="w-75">
  
  <label for="document_front" class="position-absolute translate-middle border border-light rounded-circle" style="cursor: pointer"><img src="https://www.freeiconspng.com/uploads/camera-icon-circle-21.png" alt="" height="30px" width="30px">
  </label>
  <input type="file" accept="image/*" name="document front" id="document_front" class="d-none" wire:model='documentFront'>
  <div x-show="isUploading">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`" x-text="`${progress}%`"></div>
    </div>
  </div>
</div>

<!--Document back section-->
<h4 class="fw-bold mt-2">Document back
  <i class="fa fa-question-circle" title="Back side of your NID, Passport or Driving license"></i>: 
  <small class="d-block">Back side of your NID, Passport or Driving license</small>
</h4>
<div class="position-relative text-center"
x-data="{ isUploading: false, progress: 5 }"
x-on:livewire-upload-start="isUploading = true"
x-on:livewire-upload-finish="isUploading = false; progress = 5"
x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress"
>
  <img src="{{ $documentBack?$documentBack->temporaryUrl():'https://www.clipartmax.com/png/middle/231-2319690_copy-icon-mono-general-icons-2-softicons-com-rh-softicons-copy-and.png' }}" alt="" height="150px" class="w-75">
  
  <label for="document_back" class="position-absolute translate-middle border border-light rounded-circle" style="cursor: pointer"><img src="https://www.freeiconspng.com/uploads/camera-icon-circle-21.png" alt="" height="30px" width="30px">
  </label>
  <input type="file" accept="image/*" name="document back" id="document_back" class="d-none" wire:model='documentBack'>
  <div x-show="isUploading">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width: ${progress}%`" x-text="`${progress}%`"></div>
    </div>
  </div>
</div>

<!-- Get teacher information -->
<h4 class="fw-bold mt-2">Write something about your profession
  <i class="fa fa-question-circle" title="The institution name where have you teach."></i>: 
  <small class="d-block">Profession details like instution name, start teaching etc</small>
</h4>
<textarea rows="5" class="form-control bg-info border @error('professionalDescription') is-invalid @enderror" wire:model='professionalDescription' placeholder="Please write something about your profession"></textarea>