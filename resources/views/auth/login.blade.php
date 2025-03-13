<x-layout-root>
  <main class="w-screen h-screen flex justify-center items-center">
    <div class="card bg-base-100 shrink-0 shadow-2xl w-[500px]">
      <div class="card-body">
        <h1 class="text-center font-semibold text-3xl">Login</h1>
        <form class="fieldset" method="POST" action="{{route('login.action')}}">
          @csrf
          @method('POST')

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

          {{-- submit --}}
          <button class="btn btn-neutral mt-4" type="submit">Login</button>

          {{-- catch errors --}}
          @if ($errors->any())
            <ul class="text-center">
              @foreach ($errors->all() as $err)
              <li>
                <p class="text-red-500 pt-1">{{$err}}</p>
              </li>
              @endforeach
            </ul>
          @endif

        </form>

        <p class="text-center text-sm">Don't have an account ?<a href="{{route('register.view')}}" class="text-primary font-semibold ml-1">Sign up</a></p>
      </div>
    </div>
  </main>
</x-layout-root>