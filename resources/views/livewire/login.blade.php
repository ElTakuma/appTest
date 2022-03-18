<div class="mg_main_layout mg_layout_left_padding">
    <h1>Login</h1>
    <hr>
    {{-- The best athlete wants his opponent at his best. --}}
    <div style="height: 30px">
        @if (session()->has('login_error'))
            <div class="alert alert-danger fixed">
                {{ session('login_error') }}
            </div>
        @endif
        @if (session()->has('loyout_message'))
            <div class="alert alert-warning fixed">
                {{ session('loyout_message') }}
            </div>
        @endif
    </div>
    <div style="padding: 60px 20% 0 20%">
        <form wire:submit.prevent='login'>
            <label style="font-weight: bolder">Email</label>
            <input type="text" wire:model="email" class="form-control">
            @error('email')<span class="small text-danger">{{ $message }}</span> @enderror
    
            <br>
            <label style="font-weight: bolder">Password</label>
            <input type="password" wire:model="password" class="form-control">
            @error('password')<span class="small text-danger">{{ $message }}</span> @enderror
    
            <br>
            <button type="submit" class="btn btn-outline-success">Login</button>
        </form>
    </div>
</div>
