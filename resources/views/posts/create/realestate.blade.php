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
            <legend class="fieldset-legend text-sm font-normal">Property Type</legend>
            <select class="select w-full" name="property_type">
              <option value="house">House</option>
              <option value="apartment">Apartment</option>
              <option value="condo">Condo</option>
              <option value="land">Land</option>
              <option value="commercial">Commercial</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Price Range</legend>
            <div class="flex gap-4">
              <input type="number" class="input w-full" name="price_min" placeholder="Min">
              <span class="self-center">to</span>
              <input type="number" class="input w-full" name="price_max" placeholder="Max">
            </div>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Location</legend>
            <input type="text" class="input w-full" name="location" placeholder="Neighborhood, City, State">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Bedrooms/Bathrooms</legend>
            <div class="flex gap-4">
              <input type="number" class="input w-full" name="bedrooms" placeholder="Bedrooms">
              <input type="number" class="input w-full" name="bathrooms" placeholder="Bathrooms">
            </div>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Square Footage</legend>
            <input type="number" class="input w-full" name="square_footage" placeholder="Approximate size">
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Amenities</legend>
            <div class="flex flex-wrap gap-4">
              <label class="inline-flex items-center">
                <input type="checkbox" name="amenities[]" value="pool" class="form-checkbox">
                <span class="ml-2">Pool</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="amenities[]" value="garage" class="form-checkbox">
                <span class="ml-2">Garage</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="amenities[]" value="garden" class="form-checkbox">
                <span class="ml-2">Garden</span>
              </label>
              <label class="inline-flex items-center">
                <input type="checkbox" name="amenities[]" value="gym" class="form-checkbox">
                <span class="ml-2">Gym</span>
              </label>
            </div>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>