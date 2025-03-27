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
            <legend class="fieldset-legend text-sm font-normal">Vehicle Type</legend>
            <select class="select w-full" name="vehicle_type">
              <option value="car">Car</option>
              <option value="motorcycle">Motorcycle</option>
              <option value="truck">Truck</option>
              <option value="suv">SUV</option>
              <option value="electric">Electric Vehicle</option>
              <option value="classic">Classic/Vintage</option>
            </select>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Make/Model/Year</legend>
            <div class="flex gap-4">
              <input type="text" class="input w-full" name="make" placeholder="Make (Toyota, Ford, etc.)">
              <input type="text" class="input w-full" name="model" placeholder="Model (Camry, F-150, etc.)">
              <input type="number" class="input w-full" name="year" placeholder="Year">
            </div>
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
            <legend class="fieldset-legend text-sm font-normal">Key Specifications</legend>
            <div class="grid grid-cols-2 gap-4">
              <input type="text" class="input" name="engine" placeholder="Engine">
              <input type="text" class="input" name="mpg" placeholder="MPG/Range">
              <input type="text" class="input" name="horsepower" placeholder="Horsepower">
              <input type="text" class="input" name="acceleration" placeholder="0-60 time">
            </div>
          </fieldset>

          <fieldset class="fieldset w-full mt-4">
            <legend class="fieldset-legend text-sm font-normal">Fuel Type</legend>
            <div class="flex flex-wrap gap-4">
              <label class="inline-flex items-center">
                <input type="radio" name="fuel_type" value="gasoline" class="form-radio">
                <span class="ml-2">Gasoline</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="fuel_type" value="diesel" class="form-radio">
                <span class="ml-2">Diesel</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="fuel_type" value="electric" class="form-radio">
                <span class="ml-2">Electric</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="fuel_type" value="hybrid" class="form-radio">
                <span class="ml-2">Hybrid</span>
              </label>
            </div>
          </fieldset>
        </div>
      </form>
    </div>



  </section>
</x-layout>