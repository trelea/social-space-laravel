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
            <legend class="fieldset-legend text-sm font-normal">Tech Category</legend>
            <select class="select w-full" name="tech_type">
              <option value="software">Software</option>
              <option value="hardware">Hardware</option>
              <option value="ai">Artificial Intelligence</option>
              <option value="iot">Internet of Things</option>
              <option value="blockchain">Blockchain</option>
              <option value="gadgets">Gadgets</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Product/Technology Name</legend>
            <input type="text" class="input w-full" name="product_name" placeholder="Name of the tech/product">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Release/Launch Date</legend>
            <input type="date" class="input w-full" name="release_date">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Official Website</legend>
            <input type="url" class="input w-full" name="website" placeholder="https://">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Key Features</legend>
            <textarea class="textarea w-full" rows="3" name="features" placeholder="List standout features"></textarea>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Price</legend>
            <input type="text" class="input w-full" name="price" placeholder="$999, Free, Subscription, etc.">
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>