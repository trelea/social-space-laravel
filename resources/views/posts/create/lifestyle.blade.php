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
            <legend class="fieldset-legend text-sm font-normal">Lifestyle Area</legend>
            <select class="select w-full" name="lifestyle_type">
              <option value="travel">Travel</option>
              <option value="food">Food/Cooking</option>
              <option value="fashion">Fashion</option>
              <option value="home">Home Decor</option>
              <option value="diy">DIY Projects</option>
              <option value="parenting">Parenting</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Time Required</legend>
            <input type="text" class="input w-full" name="time_required" placeholder="30 minutes, 2 hours, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Difficulty Level</legend>
            <select class="select w-full" name="difficulty">
              <option value="easy">Easy</option>
              <option value="medium">Medium</option>
              <option value="hard">Hard</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Materials/Ingredients</legend>
            <textarea class="textarea w-full" rows="3" name="materials" placeholder="List of needed items"></textarea>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Seasonal Relevance</legend>
            <div class="flex flex-wrap gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="seasons[]" value="spring" class="form-checkbox">
                <span class="ml-2">Spring</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="seasons[]" value="summer" class="form-checkbox">
                <span class="ml-2">Summer</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="seasons[]" value="fall" class="form-checkbox">
                <span class="ml-2">Fall</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="seasons[]" value="winter" class="form-checkbox">
                <span class="ml-2">Winter</span>
              </label>
            </div>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>