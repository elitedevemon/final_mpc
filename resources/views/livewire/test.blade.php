<div>
  <!-- Title -->
  <x-slot name="title">Login | MPC Method</x-slot>

  <!--Session timeout-->
  <x-slot name="sessionTimeOut"></x-slot>
  <!--end session-->

  <x-slot name="styles"></x-slot>
  <x-slot name="scripts"></x-slot>
  
  <form wire:submit.prevent='testing'>
    <input type="text" wire:model='email'>
    <input type="password" wire:model='password'>
  
      <input type="checkbox" wire:model='remember_me'>
      <a href="{{ route('reset.forgotten.password', app()->getLocale()) }}">Forget password ?</a>
      <button type="submit" wire:loading.attr='disabled'>Log In <i class="fa fa-spinner fa-spin" wire:loading wire:target='login'></i></button>
  </form>
  @error('testing')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
                      