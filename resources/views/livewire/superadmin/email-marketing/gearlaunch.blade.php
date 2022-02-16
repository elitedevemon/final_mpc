<div>
  <div class="container py-4">
    <label for="addreceiver">Add Receiver: <small class="text-success">{{ Session::has('success')?session()->get('success'):'' }}</small></label>
    <div class="row mb-3">
      <div class="col-5">
        <input type="text" placeholder="Enter Receiver Name" class="form-control @error('name') is-invalid @enderror" wire:model.defer='name'>
<<<<<<< HEAD
      </div>
      <div class="col-6">
        <input type="email" placeholder="Enter Receiver Email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
=======
        @error('name')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>
      <div class="col-6">
        <input type="email" placeholder="Enter Receiver Email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
>>>>>>> origin/main
      </div>
      <div class="col-1 text-center">
        <button class="btn btn-primary" wire:click='addReceiver' wire:loading.attr='disabled'>Add <i class="fas fa-spinner fa-spin" wire:loading wire:target='addReceiver'></i></button>
      </div>
    </div>
    <label for="">Send Email:</label>
    <input type="text" placeholder="Enter subject" class="form-control mt-2" wire:model.defer=subject>
    <textarea cols="30" rows="10" placeholder="Enter your message" class="form-control mt-2" wire:model.defer='message'></textarea>
    <!--Adding input field-->
    @foreach ($inputs as $key => $value)
      <div class="row mt-2">
        <div class="col-4">
          <input type="text" class="form-control" placeholder="Enter product image link" wire:model.defer='imageLink.{{ $value }}'>
        </div>
        <div class="col-3">
          <input type="text" class="form-control" placeholder="Enter product link" wire:model.defer='productLink.{{ $value }}'>
        </div>
        <div class="col-3">
          <input type="text" class="form-control" placeholder="Enter product title" wire:model.defer='productTitle.{{ $value }}'>
        </div>
        <div class="col-1">
          <input type="number" class="form-control" placeholder="Price" wire:model.defer='productPrice.{{ $value }}'>
        </div>
        <div class="col-1">
          <button class="btn btn-danger" wire:click='removeInputField({{ $key }})' wire:loading.attr='disabled'><span wire:loading.class='d-none' wire:target='removeInputField({{ $key }})'>Remove</span> <i class="fa fa-spinner fa-spin" wire:loading wire:target='removeInputField({{ $key }})'></i></button>
        </div>
      </div>
    @endforeach
    <!--end adding input field-->

    <button class="btn btn-success mt-2" wire:click='addProductInputField({{ $i }})' wire:loading.attr='disabled'>Add product <i class="fa fa-spinner fa-spin" wire:loading wire:target='addProductInputField'></i></button>

    <button class="btn btn-primary mt-2" wire:click='sendGearlaunchMail' wire:loading.attr='disabled'>Send <i class="fa fa-spinner fa-spin" wire:loading wire:target='sendGearlaunchMail'></i></button>
  </div>
</div>
