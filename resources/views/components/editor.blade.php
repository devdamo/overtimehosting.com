<!-- Include TinyMCE from CDN -->
<script src="https://cdn.tiny.cloud/1/5mavkvwtcts3fsepqjs6w90h8cxexk38jhcpbrj524lrt8dn/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

@props(['name', 'label', 'value' => '', 'id' => null])

<!-- Use name as the id if id is not provided -->
@php
    $id = $id ?? $name;
@endphp

    <!-- Textarea to be replaced with TinyMCE -->
<div class="mt-6 container mx-auto">
    <div class="w-full mb-4 border border-zinc-200 rounded-lg bg-zinc-50 dark:bg-zinc-700 dark:border-zinc-600">
        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-zinc-800" id="editor-div">
            <label for="{{ $id }}" class="sr-only">{{ $label }}</label>
            <textarea id="{{ $id }}" name="{{ $name }}" rows="8" class="block w-full px-0 text-sm text-zinc-800 bg-white border-0 dark:bg-zinc-800 focus:ring-0 dark:text-white dark:placeholder-zinc-400">{{ old($name, $value) }}</textarea>
        </div>
    </div>
</div>

<!-- Initialize TinyMCE for this editor -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#{{ $id }}', // Initialize by the unique ID
            plugins: 'image code link lists',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code',
            height: 400,
            branding: false,
            menubar: false,
            images_upload_url: "{{ route('upload.image') }}", // Use the route for image uploads
            automatic_uploads: true,
            images_upload_handler: function (blobInfo, success, failure) {
                let formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                fetch('{{ route('upload.image') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(result => {
                        success(result.location); // URL of the uploaded image
                    })
                    .catch(error => {
                        failure('Image upload failed.');
                    });
            }
        });
    });
</script>
