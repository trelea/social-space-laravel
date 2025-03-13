<x-layout>
  <div class="flex flex-col justify-center items-center h-screen gap-6">
    <h1 class="text-4xl font-bold text-gray-700">Select Category</h1>
    <ul class="grid grid-cols-3 gap-4">
      @foreach ($categories as $category)
        <li class="shadow-md">
          <a href="/categories/{{$category->id}}">
            <div class="badge badge-outline badge-primary badge-xl w-full text-2xl h-fit m-0 p-0 py-6 px-16 hover:bg-primary/25">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mouse-pointer-2"><path d="M4.037 4.688a.495.495 0 0 1 .651-.651l16 6.5a.5.5 0 0 1-.063.947l-6.124 1.58a2 2 0 0 0-1.438 1.435l-1.579 6.126a.5.5 0 0 1-.947.063z"/></svg>
              {{$category->category}}  
            </div>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</x-layout>