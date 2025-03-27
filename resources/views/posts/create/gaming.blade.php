<x-layout>
  <section class="flex flex-col items-center w-full py-10">
    {{-- MAIN FORM --}}
    <div class="w-1/2 flex flex-col gap-10">
      <h1 class="text-4xl text-start font-bold">Category: {{$category_name}}</h1>
      <form action="" class="flex flex-col gap-6">
        <x-create-main-post-form />

        <div class="w-full border-t pt-4 border-zinc-400">
          <label for="" class="text-xl font-semibold">{{$category_name}} Characteristics</label>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Platforms</legend>
            <div class="flex flex-wrap gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="platforms[]" value="pc" class="form-checkbox">
                <span class="ml-2">PC</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="platforms[]" value="playstation" class="form-checkbox">
                <span class="ml-2">PlayStation</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="platforms[]" value="xbox" class="form-checkbox">
                <span class="ml-2">Xbox</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="platforms[]" value="nintendo" class="form-checkbox">
                <span class="ml-2">Nintendo</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="platforms[]" value="mobile" class="form-checkbox">
                <span class="ml-2">Mobile</span>
              </label>
            </div>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Genre</legend>
            <input type="text" class="input w-full" name="genre" placeholder="FPS, RPG, Strategy, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Release Date</legend>
            <input type="date" class="input w-full" name="release_date">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Developer/Publisher</legend>
            <input type="text" class="input w-full" name="developer" placeholder="Studio name">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Game Modes</legend>
            <div class="flex flex-wrap gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="modes[]" value="single" class="form-checkbox">
                <span class="ml-2">Single-player</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="modes[]" value="multi" class="form-checkbox">
                <span class="ml-2">Multiplayer</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="modes[]" value="coop" class="form-checkbox">
                <span class="ml-2">Co-op</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="modes[]" value="online" class="form-checkbox">
                <span class="ml-2">Online</span>
              </label>
            </div>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>