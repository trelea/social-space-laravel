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
            <legend class="fieldset-legend text-sm font-normal">Scientific Field</legend>
            <select class="select w-full" name="science_field">
              <option value="physics">Physics</option>
              <option value="biology">Biology</option>
              <option value="chemistry">Chemistry</option>
              <option value="astronomy">Astronomy</option>
              <option value="environmental">Environmental Science</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Research Paper Link</legend>
            <input type="url" class="input w-full" name="paper_link" placeholder="DOI or direct link">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Key Findings</legend>
            <textarea class="textarea w-full" rows="3" name="findings" placeholder="Summary of discoveries"></textarea>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Researchers/Institution</legend>
            <input type="text" class="input w-full" name="researchers"
              placeholder="Lead scientists and their institution">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Practical Applications</legend>
            <textarea class="textarea w-full" rows="2" name="applications"
              placeholder="How this impacts real life"></textarea>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>