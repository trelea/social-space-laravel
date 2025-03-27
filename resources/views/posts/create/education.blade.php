<x-layout>
  <section class="flex flex-col items-center w-full py-10">
    {{-- MAIN FORM --}}
    <div class="w-1/2 flex flex-col gap-10">
      <h1 class="text-4xl text-start font-bold">Category: {{$category_name}}</h1>
      <form action="" class="flex flex-col gap-6">
        <x-create-main-post-form />

        {{-- Characteristics --}}
        <div class="w-full border-t pt-4 border-zinc-400">
          <label for="" class="text-xl font-semibold">{{$category_name}} Characteristics</label>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Subject Area</legend>
            <input type="text" class="input w-full" name="subject" placeholder="Mathematics, History, etc.">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Grade Level</legend>
            <select class="select w-full" name="grade_level">
              <option value="elementary">Elementary</option>
              <option value="middle">Middle School</option>
              <option value="high">High School</option>
              <option value="college">College</option>
              <option value="professional">Professional</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Resource Type</legend>
            <select class="select w-full" name="resource_type">
              <option value="lesson">Lesson Plan</option>
              <option value="worksheet">Worksheet</option>
              <option value="video">Video</option>
              <option value="quiz">Quiz/Test</option>
              <option value="activity">Activity</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Learning Objectives</legend>
            <textarea class="textarea w-full" rows="3" name="objectives"
              placeholder="What students will learn..."></textarea>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>