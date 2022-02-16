<div>
  <div class="container py-4">
    <label for="addreceiver">Add Receiver: <small class="text-success">{{ Session::has('success')?session()->get('success'):'' }}</small></label>
    <div class="row mb-3">
      <div class="col-5">
        <input type="text" placeholder="Enter Receiver Name" class="form-control @error('name') is-invalid @enderror" wire:model.defer='name'>
      </div>
      <div class="col-6">
        <input type="email" placeholder="Enter Receiver Email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
      </div>
      <div class="col-1 text-center">
        <button class="btn btn-primary" wire:click='addReceiver' wire:loading.attr='disabled'>Add <i class="fas fa-spinner fa-spin" wire:loading wire:target='addReceiver'></i></button>
      </div>
    </div>
    <label for="">Send Email:</label>
    <input type="text" placeholder="Enter title" class="form-control">
    <input type="text" placeholder="Enter subject" class="form-control mt-2">
    <textarea cols="30" rows="10" placeholder="Enter your message" class="form-control mt-2"></textarea>
  </div>
</div>
