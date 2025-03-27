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
            <legend class="fieldset-legend text-sm font-normal">Sport</legend>
            <input type="text" class="input w-full" name="sport" placeholder="Football, Basketball, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Teams/Players</legend>
            <input type="text" class="input w-full" name="participants" placeholder="Team names or player names">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Event Type</legend>
            <select class="select w-full" name="event_type">
              <option value="match">Match/Game</option>
              <option value="tournament">Tournament</option>
              <option value="transfer">Transfer News</option>
              <option value="injury">Injury Update</option>
              <option value="stats">Statistics</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Date/Time</legend>
            <input type="datetime-local" class="input w-full" name="event_time">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Venue/Location</legend>
            <input type="text" class="input w-full" name="venue" placeholder="Stadium name and city">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Score/Result (if completed)</legend>
            <input type="text" class="input w-full" name="score" placeholder="3-1, 102-98, etc.">
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>