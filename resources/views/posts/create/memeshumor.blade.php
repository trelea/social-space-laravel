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
            <legend class="fieldset-legend text-sm font-normal">Meme Format</legend>
            <select class="select w-full" name="meme_format">
              <option value="image">Image</option>
              <option value="video">Video/GIF</option>
              <option value="text">Text/Copypasta</option>
              <option value="comic">Comic Strip</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Vibe/Tone</legend>
            <select class="select w-full" name="tone">
              <option value="wholesome">Wholesome</option>
              <option value="dark">Dark Humor</option>
              <option value="sarcastic">Sarcastic</option>
              <option value="absurd">Absurdist</option>
              <option value="satire">Satire</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Trend Reference</legend>
            <input type="text" class="input w-full" name="trend" placeholder="What meme trend is this referencing?">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Reaction Prompt</legend>
            <input type="text" class="input w-full" name="reaction_prompt"
              placeholder="'Tag someone who...', 'When you...', etc.">
          </fieldset>

          <div class="mt-4">
            <label class="inline-flex items-center">
              <input type="checkbox" name="nsfw" class="form-checkbox">
              <span class="ml-2">NSFW Content</span>
            </label>
          </div>
        </div>
      </form>
    </div>



  </section>
</x-layout>