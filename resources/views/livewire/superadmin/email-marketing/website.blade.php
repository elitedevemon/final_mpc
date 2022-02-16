<div>
  <div class="container py-4">
    <label for="addreceiver">Add Receiver: <small class="text-success">{{ Session::has('success')?session()->get('success'):'' }}</small></label>
    <div class="row mb-3">
      <div class="col-5">
        <input type="text" placeholder="Enter Receiver Name" class="form-control @error('name') is-invalid @enderror" wire:model.defer='name'>
        @error('name')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="col-6">
        <input type="email" placeholder="Enter Receiver Email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="col-1 text-center">
        <button class="btn btn-primary" wire:click='addReceiver' wire:loading.attr='disabled'>Add <i class="fas fa-spinner fa-spin" wire:loading wire:target='addReceiver'></i></button>
      </div>
    </div>
    <label for="">Send Email:</label>
    <div>
      @if($reuseEmail)
        @foreach ($reuseEmail as $email)
          <a href="javascript:void(0);" style="border: 1px solid black; border-radius: 5px; padding: 2px;" wire:click="setQuickResponse({{ $email->id }})">{{ Str::words($email->subject, 3, '') }}</a><span wire:click="deleteQuickResponse({{ $email->id }})" style="cursor: pointer;">&times;</span>
        @endforeach
      @endif
    </div>
    <input type="text" placeholder="Enter subject" class="form-control mt-2" wire:model.defer=subject>
    <textarea cols="30" rows="10" placeholder="Enter your message" class="form-control mt-2" wire:model.defer='message'></textarea>

    <!--Send button-->
    <button class="btn btn-primary mt-2" wire:click='sendWebsiteMail' wire:loading.attr='disabled'>Send <i class="fa fa-spinner fa-spin" wire:loading wire:target='sendWebsiteMail'></i></button>
    <!--Save button-->
    <button class="btn btn-success mt-2" wire:click="saveWebsiteMail('{{ $topic }}')" wire:loading.attr='disabled'>Save<i class="fa fa-spinner fa-spin" wire:loading wire:target='saveWebsiteMail'></i></button>
  </div>
</div>
