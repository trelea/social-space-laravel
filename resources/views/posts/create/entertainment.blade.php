<x-layout>
  <section class="flex flex-col items-center w-full py-10">
    {{-- MAIN FORM --}}
    <div class="w-1/2 flex flex-col gap-10">
      <h1 class="text-4xl text-start font-bold">Category: {{$category_name}}</h1>
      <form action="" class="flex flex-col gap-6">
        <x-create-main-post-form />

        <div class="w-full border-t pt-4 border-zinc-400">
          <label for="" class="text-xl font-semibold">{{$category_name}} Caracteristics</label>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus placeat quisquam quidem illo porro minus eum aut quaerat maiores rerum, nobis modi amet dolorum consequuntur facilis necessitatibus ipsum. Nemo quam quia fugit aut quae doloribus aspernatur consequuntur aperiam laborum voluptates, minima autem nobis sapiente obcaecati, aliquam perferendis. Sint accusamus cumque similique perspiciatis labore beatae fuga dolorem eligendi impedit doloribus cum exercitationem, nostrum nisi illum unde iste nihil veniam autem officiis vel ipsa! Impedit non ratione eligendi molestiae eveniet nisi, eum exercitationem reprehenderit blanditiis qui ab beatae eos cum, rerum magni ad tempora repellat corporis nesciunt. Nam sit pariatur quas doloremque exercitationem nemo quis modi dicta architecto iusto id incidunt eum dolorem aspernatur error nostrum harum eligendi quidem magni voluptas, doloribus inventore voluptate! Dolores, ipsa nostrum modi magni vero laudantium perspiciatis architecto cumque sit porro iste velit iure vel, praesentium odio similique iusto illum veritatis accusantium voluptates deleniti. Consequuntur quisquam ducimus iusto enim animi et, soluta itaque est porro! Tempore sit est minus qui cupiditate quod veritatis maxime modi, nam rerum adipisci quae saepe laudantium reprehenderit, distinctio temporibus aut vero ab asperiores blanditiis. Dolore quasi cumque nam modi quisquam ipsam, corrupti maxime ducimus illo alias soluta inventore quo hic ipsa perferendis.</p>
        </div>
      </form>
    </div>
    
    

  </section>
</x-layout>