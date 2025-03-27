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
            <legend class="fieldset-legend text-sm font-normal">Entertainment Type</legend>
            <select class="select w-full" name="entertainment_type">
              <option value="movie">Movie</option>
              <option value="tv">TV Show</option>
              <option value="music">Music</option>
              <option value="celebrity">Celebrity News</option>
              <option value="event">Event/Concert</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Title/Name</legend>
            <input type="text" class="input w-full" name="media_title" placeholder="Name of movie/show/song">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Release/Event Date</legend>
            <input type="date" class="input w-full" name="release_date">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Where to Watch/Attend</legend>
            <input type="text" class="input w-full" name="platform" placeholder="Netflix, Theater, Stadium, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Cast/Crew/Artists</legend>
            <textarea class="textarea w-full" rows="2" name="participants"
              placeholder="Main actors, directors, or performers"></textarea>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>