<div class="container">
    <x-slot name="header">
        <h2 class="font-semibold text-xl colortext leading-tight">
            {{ __('Images') }}
        </h2>
    </x-slot>
    <div class="grid lg:grid-cols-2 md:grid-cols-1">
        <div>
            <div class="mt-4 mx-2 colortext">
                {{ __('Add Main Images') }}
            </div>
            <div class="mt-4 mx-2 colortext text-sm">
                {{ __('Add the most important images of your workshop') }}.
            </div>
        </div>
        <div class="colortext my-2" wire:ignore>
            <form action="{{ route('admin.images.files') }}" method="POST" class="dropzone rounded-lg"
                id="my-awesome-dropzone"></form>
            @if (auth()->user()->image->count())
                <section class="fondo shadow-xl rounded-lg p-6 mt-4">
                    <h1 class="text-2xl text-center colortext font-semibold"> Imagenes Principales</h1>

                    <ul class="flex flex-wrap">
                        @foreach (auth()->user()->image as $image)
                            <li class="relative" wire:key="image-{{ $image->id }}">
                                <img class="w-32 h-20 object-cover mx-2" src="{{ Storage::url($image->url) }}"
                                    alt="">
                                <x-jet-danger-button class="absolute right-2 top-2 mx-1"
                                    wire:click="$emit('deleteImage', {{ $image->id }})" wire:loading.attr="disabled"
                                    wire:target="deleteImage">
                                    x
                                </x-jet-danger-button>
                            </li>
                        @endforeach
                    </ul>

                </section>
            @endif
        </div>

    </div>

    @push('script')
        <script>
            Dropzone.options.myAwesomeDropzone = {
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                dictDefaultMessage: "Arrastre una imagen al recuadro",
                acceptedFiles: "image/*",
                paramName: "file",
                maxFilesize: 2, //MB
                complete: function(file) {
                    this.removeFile(file);
                },
                queuecomplete: function() {
                    Livewire.emit('refreshImage');
                }
            };

            Livewire.on('deleteImage', id => {
                Swal.fire({
                    title: '¿Está usted seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',                   
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Borraló!',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('refreshImage');
                        Livewire.emit('delete', id);
                        Swal.fire(
                            'Borrado!',
                            'Su imagen se ha borrado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush
</div>
