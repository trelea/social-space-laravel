<div class="w-full border-t pt-4 border-zinc-400">
    <label for="" class="text-xl font-semibold">Post Values</label>
    {{-- thumbnails --}}
    <fieldset class="fieldset w-full">
        <legend class="fieldset-legend text-sm font-normal">Post Images</legend>
        <label id="drop-zone"
            class="flex flex-col items-center w-full p-6 border-2 border-gray-300 border-dashed rounded-md cursor-pointer hover:border-gray-400 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
            <span class="text-sm text-gray-600">
                Drop files here or
                <span class="text-primary underline">browse</span>
            </span>
            <input name="images[]" type="file" class="hidden" id="file-input" multiple value="{{old('images[]')}}">
        </label>
        <div id="preview-container" class="grid grid-cols-8 gap-4"></div>
        @error('images.*')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </fieldset>
    {{-- title --}}
    <fieldset class="fieldset w-full">
        <legend class="fieldset-legend text-sm font-normal">Post Title</legend>
        <input name="title" type="text" class="input w-full" placeholder="Post Title" />
        @error('title')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </fieldset>
    {{-- description --}}
    <fieldset class="fieldset w-full">
        <legend class="fieldset-legend text-sm font-normal">Post Description</legend>
        <textarea name="description" class="textarea w-full" rows="10" placeholder="Post Title"></textarea>
        @error('description')
        <p class="text-red-500">{{$message}}</p>
        @enderror
    </fieldset>

    {{-- drop zone script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('file-input');
            const previewContainer = document.getElementById('preview-container');

            dropZone.addEventListener('dragover', function (e) {
                e.preventDefault();
                dropZone.classList.add('border-gray-400');
            });

            dropZone.addEventListener('dragleave', function () {
                dropZone.classList.remove('border-gray-400');
            });

            dropZone.addEventListener('drop', function (e) {
                e.preventDefault();
                dropZone.classList.remove('border-gray-400');

                const files = e.dataTransfer.files;
                handleFiles(files);
            });

            fileInput.addEventListener('change', function () {
                const files = fileInput.files;
                handleFiles(files);
            });

            function handleFiles(files) {
                for (const file of files) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        const previewItem = createPreviewItem(e.target.result);
                        previewContainer.appendChild(previewItem);
                    };

                    reader.readAsDataURL(file);
                }
            }

            function createPreviewItem(imageSrc) {
                const previewItem = document.createElement('div');
                previewItem.classList.add('relative', 'group');

                const removeButton = document.createElement('button');
                removeButton.innerHTML = '×';
                removeButton.classList.add('absolute', 'top-1', 'right-1', 'text-white', 'bg-red-500', 'border-none', 'rounded-md', 'px-1', 'opacity-0', 'group-hover:opacity-100', 'transition');

                const previewImage = document.createElement('img');
                previewImage.src = imageSrc;
                previewImage.classList.add('w-full', 'aspect-square', 'object-center', 'object-contain', 'rounded-md', 'mb-2', 'border', 'border-gray-300');

                removeButton.addEventListener('click', function () {
                    previewContainer.removeChild(previewItem);
                });

                previewItem.appendChild(previewImage);
                previewItem.appendChild(removeButton);

                return previewItem;
            }
        });
    </script>
</div>