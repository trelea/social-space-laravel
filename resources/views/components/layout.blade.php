<x-layout-root>
  <main class="flex w-full">
    <x-aside/>
    <section class="pl-96 w-full">
      {{$slot}}
    </section>
  </main>
</x-layout-root>