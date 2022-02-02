<div>
  <div class="container">
    <div class="bg-light">
      <div class="row my-4 py-3 px-2">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h2 class="text-center mb-4">SignUp Form</h2>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" name="" id="" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" wire:model.defer='name'>
            <!--error message-->
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" name="" id="" class="form-control @error('username') is-invalid @enderror" placeholder="Enter an username" wire:model.defer='username'>
            <!--error message-->
            @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-at"></i></span>
            <input type="email" name="" id="" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" wire:model.defer='email'>
            <!--error message-->
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
            <input type="number" name="" id="" placeholder="Enter your phone" class="form-control @error('number') is-invalid @enderror" wire:model.defer='number'>
            <!--error message-->
            @error('number')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
            <input type="password" name="" id="" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" wire:model.defer='password'>
            <!--error message-->
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="input-group mt-2">
            <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
            <input type="password" name="" id="" placeholder="Re-type password" class="form-control @error('reTypePassword') is-invalid @enderror" wire:model.defer='reTypePassword'>
            <!--error message-->
            @error('reTypePassword')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="row my-3">
            <div class="col-6">
              <div class="form-check">
                <input type="radio" name="get_role" id="student" value="Student" class="form-check-input @error('getRole') is-invalid @enderror" wire:model.defer='getRole'>
                <label for="student" class="form-check-label">Student</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-check">
                <input type="radio" name="get_role" id="teacher" value="Teacher" class="form-check-input @error('getRole') is-invalid @enderror" wire:model.defer='getRole'>
                <label for="teacher" class="form-check-label">Teacher</label>
              </div>
            </div>
            <!--error message-->
            @error('getRole')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <button class="btn btn-success w-100 my-3" wire:click='register' wire:loading.attr='disabled' wire:target='register'>
            <span wire:target='register' wire:loading.class='d-none'>Register</span>
            <span wire:target='register' wire:loading>Loading <i class="fas fa-spinner fa-spin"></i></span>
          </button>
          <div class="text-center">
            <a href="{{ route('login', app()->getLocale()) }}" class="link-dark" style="text-decoration: underline">Already Registered?</a>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
</div>
