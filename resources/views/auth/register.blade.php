<x-layout-root>
  <main class="w-screen h-screen flex justify-center items-center">
    <div class="card bg-base-100 shrink-0 shadow-2xl w-[500px]">
      <div class="card-body">
        <h1 class="text-center font-semibold text-3xl">Register</h1>
        <form class="fieldset" method="POST" action="{{route('register.action')}}">
          @csrf
          @method('POST')
          {{-- name --}}
          <label class="fieldset-label">Username</label>
          <input name="name" type="text" class="input w-full" placeholder="username" value="{{old('name')}}"/>
          @error('name')
            <p class="text-red-500">{{$message}}</p>
          @enderror

          {{-- email --}}
          <label class="fieldset-label">Email</label>
          <input name="email" type="email" class="input w-full" placeholder="Email" value="{{old('email')}}"/>
          @error('email')
            <p class="text-red-500">{{$message}}</p>
          @enderror

          {{-- password --}}
          <label class="fieldset-label">Password</label>
          <input name="password" type="password" class="input w-full" placeholder="Password" value="{{old('password')}}"/>
          @error('password')
            <p class="text-red-500">{{$message}}</p>
          @enderror

          {{-- password confirm --}}
          <label class="fieldset-label">Password Confirm</label>
          <input name="password_confirmation" type="password" class="input w-full" placeholder="Password Confirm" />
          @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
          @enderror

          {{-- submit --}}
          <button class="btn btn-neutral mt-4" type="submit">Register</button>
        </form>
        
        <p class="text-center text-sm">DHave an account ?<a href="{{route('login.view')}}" class="text-primary font-semibold ml-1">Login</a></p>
      </div>
    </div>
  </main>
</x-layout-root>