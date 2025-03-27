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
            <legend class="fieldset-legend text-sm font-normal">Focus Area</legend>
            <select class="select w-full" name="focus_area">
              <option value="mental">Mental Health</option>
              <option value="fitness">Fitness</option>
              <option value="nutrition">Nutrition</option>
              <option value="prevention">Prevention</option>
              <option value="recovery">Recovery</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Time Commitment</legend>
            <input type="text" class="input w-full" name="time_commitment"
              placeholder="10 minutes daily, 1 hour weekly, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Difficulty Level</legend>
            <select class="select w-full" name="difficulty">
              <option value="beginner">Beginner</option>
              <option value="intermediate">Intermediate</option>
              <option value="advanced">Advanced</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Equipment Needed</legend>
            <input type="text" class="input w-full" name="equipment" placeholder="Yoga mat, weights, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Key Benefits</legend>
            <textarea class="textarea w-full" rows="3" name="benefits"
              placeholder="Stress relief, weight loss, etc."></textarea>
          </fieldset>

          <div class="mt-4">
            <label class="inline-flex items-center">
              <input type="checkbox" name="medical_disclaimer" class="form-checkbox">
              <span class="ml-2">Include medical disclaimer</span>
            </label>
          </div>
        </div>
      </form>
    </div>



  </section>
</x-layout>