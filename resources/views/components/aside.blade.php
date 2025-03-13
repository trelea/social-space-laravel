<aside class="h-screen border-r border-gray-200 p-10 flex flex-col justify-between fixed shadow-md z-50 bg-base-200/25 w-96">
  <div class="flex flex-col gap-10">
    <div class="flex items-center gap-2 text-base-100 bg-primary/75 p-2 rounded w-full justify-center">
      <label for="" class="text-2xl font-semibold">Social Space</label>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-orbit hover:animate-spin"><circle cx="12" cy="12" r="3"/><circle cx="19" cy="5" r="2"/><circle cx="5" cy="19" r="2"/><path d="M10.4 21.9a10 10 0 0 0 9.941-15.416"/><path d="M13.5 2.1a10 10 0 0 0-9.841 15.416"/></svg>
    </div>
    <section class="flex flex-col gap-4">
      <ul class="flex flex-col gap-2">
        <li class="text-gray-800 hover:bg-slate-200 p-1 px-2 rounded">
          <a href="{{route('home.view')}}" class="flex gap-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
            <label for="" class="text-lg">Home</label>
          </a>
        </li>
        <li class="text-gray-800 hover:bg-slate-200 p-1 px-2 rounded">
          <a href="{{route('popular.view')}}" class="flex gap-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
            <label for="" class="text-lg">Popular</label>
          </a>
        </li>
        <li class="text-gray-800 hover:bg-slate-200 p-1 px-2 rounded">
          <a href="{{route('categories.create.view')}}" class="flex gap-4 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            <label for="" class="text-lg">New Post</label>
          </a>
        </li>
      </ul>
      <hr class="opacity-25"/>

      <ul class="flex flex-col gap-2">
        <li><label for="" class="text-gray-400 font-semibold">TOPICS</label></li>
        @foreach ($categories as $category)
          <li>
            <a href="/categories/{{$category->id}}" class="text-gray-500 font-semibold text-base flex items-center gap-1 hover:hover:bg-slate-200 rounded p-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-gray-400"><path d="m9 18 6-6-6-6"/></svg>
              <label for="">{{$category->category}}</label>
            </a>
          </li>
        @endforeach
      </ul>
    </section>
  </div>
  
  <div>
    @if ($user)
      <button class="flex items-center gap-2 text-start" popovertarget="popover-1">
        <div class="avatar avatar-placeholder">
          <div class="bg-neutral text-neutral-content w-10 h-10 rounded-full">
            <span class="text-base">{{$user->name[0]}}</span>
          </div>
        </div>
        <ul>
          <li class="font-semibold text-sm">{{$user->email}}</li>
          <li class="text-gray-600 text-xs">{{$user->name}}</li>
        </ul>
      </button>
      <ul class="dropdown menu rounded-box bg-base-100 shadow-sm w-[400px]" popover id="popover-1" style="position-anchor:--anchor-1">
        <li>
          <a href="" class="flex items-center gap-3 px-4 py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-pen"><path d="M2 21a8 8 0 0 1 10.821-7.487"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="8" r="5"/></svg>
            <label for="" class="text-sm font-semibold">My Profile</label></a>
        </li>
        <li>
          <a href="" class="flex items-center gap-3 px-4 py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg>
            <label for="" class="text-sm font-semibold">Setting</label></a>
        </li>
        <li>
          <form action="{{route('logout.action')}}" method="POST" class="text-red-500 w-full">
            @csrf
            @method('POST')
            <button class="flex items-center px-2 py-1 gap-2 w-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
              <label for="" class="text-sm font-semibold">Logout</label></button>
          </form>
        </li>
      </ul>
    @else
      <a href="{{route('login.view')}}" class="flex items-center gap-2 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
        <label for="" class="font-semibold text-lg cursor-pointer">Login</label>
      </a> 
    @endif
  </div>
  


</aside>