<x-layout>
    <section class="flex flex-col items-center w-full py-10">
        {{-- MAIN FORM --}}
        <div class="w-1/2 flex flex-col gap-10">
            <h1 class="text-4xl text-start font-bold">Category: {{$category->category}}</h1>
            <form action="{{route('posts.store.action', $category->id)}}" method="POST" enctype="multipart/form-data"
                class="flex flex-col gap-6">
                @csrf
                @method('POST')
                {{-- Main Form --}}
                <x-create-main-post-form />

                {{-- Characteristics--}}
                <div class="w-full border-t pt-4 border-zinc-400">
                    <label for="" class="text-xl font-semibold">{{$category->category}} Characteristics</label>

                    <fieldset class="fieldset w-full mt-4">
                        <legend class="fieldset-legend text-sm font-normal">Financial Focus</legend>
                        <select class="select w-full" name="finance_type">
                            <option value="stock">Stock Market</option>
                            <option value="crypto">Cryptocurrency</option>
                            <option value="economy">Economy</option>
                            <option value="startup">Startups</option>
                            <option value="personal">Personal Finance</option>
                        </select>
                    </fieldset>

                    <fieldset class="fieldset w-full mt-4">
                        <legend class="fieldset-legend text-sm font-normal">Companies/Stocks</legend>
                        <input type="text" class="input w-full" name="companies" placeholder="AAPL, TSLA, etc.">
                    </fieldset>

                    <fieldset class="fieldset w-full mt-4">
                        <legend class="fieldset-legend text-sm font-normal">Market Impact</legend>
                        <div class="flex gap-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="impact" value="bullish" class="form-radio">
                                <span class="ml-2">Bullish</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="impact" value="bearish" class="form-radio">
                                <span class="ml-2">Bearish</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="impact" value="neutral" class="form-radio">
                                <span class="ml-2">Neutral</span>
                            </label>
                        </div>
                    </fieldset>

                    <fieldset class="fieldset w-full mt-4">
                        <legend class="fieldset-legend text-sm font-normal">Key Metrics</legend>
                        <textarea class="textarea w-full" rows="3" name="metrics"
                            placeholder="Revenue growth, user numbers, etc."></textarea>
                    </fieldset>
                </div>

                <button class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
</x-layout>