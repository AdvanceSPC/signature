<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                <div class="bg-white shadow rounded">
                    <div class="px-6 py-4">
                        <p class="text-sm">
                            <a href="https://laravel.com/docs"
                                class="inline-flex items-center font-semibold text-indigo-700">
                                Preview

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    class="ml-1 w-5 h-5 fill-indigo-500">
                                    <path fill-rule="evenodd"
                                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </p>
                        <div class="flex items-center mt-4">

                            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                <a href="https://laravel.com/docs">Crea tu firma digital</a>
                            </h2>
                        </div>
                        <p class="mt-2">Completa tu información para obtener tu firma</p>
                        <hr>
                        <div class="mt-4">
                            <form action="">
                                <div class="mt-2">
                                    <x-label value='Nombre y Apellido*'></x-label>
                                    <x-input class="mt-2 w-full" placeholder='Nombre y Apellido'
                                        wire:model.live='nombre'></x-input>
                                    <x-input-error for='nombre'></x-input-error>
                                </div>
                                <div class="mt-4">
                                    <x-label value='Nombre del cargo*'></x-label>
                                    <x-input class="mt-2 w-full" placeholder='Cargo' wire:model.live='cargo'></x-input>
                                    <x-input-error for='cargo'></x-input-error>
                                </div>
                                <div class="mt-4">
                                    <x-label value='Número de teléfono*'></x-label>
                                    <x-input class="mt-2 w-full" placeholder='' wire:model.live='telefono'></x-input>
                                    <x-input-error for='telefono'></x-input-error>
                                </div>
                                <div class="mt-4">
                                    <x-label value='Correo electrónico*'></x-label>
                                    <x-input class="mt-2 w-full" placeholder='Correo electrónico'
                                        wire:model.live='email'></x-input>
                                    <x-input-error for='email'></x-input-error>
                                </div>
                                <div class="mt-4">
                                    <x-label value='foto de perfil'></x-label>

                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="file_input">Upload file</label>
                                    <input wire:model.live='photo'
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help" id="file_input" type="file">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG,
                                        PNG, JPG or GIF (MAX. 800x400px).</p>
                                    <x-input-error for='photo'></x-input-error>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="bg-white shadow rounded">
                        <div class="px-4 py-3">
                            <div class="flex items-center">
                                <i class="fa-solid fa-signature"></i>
                                <h2 class="ml-3 text-xl font-semibold text-gray-900">
                                    <a href="https://laracasts.com">Firma de email</a>
                                </h2>
                            </div>
                            <hr>
                            <div class="mt-4 contenido">
                                <div style="padding-bottom:8px;padding-left:10px">
                                    <table style="width:320px;mso-line-height-rule:exactly">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:top;">
                                                    @if ($photo)
                                                        <img src="{{ $photo->temporaryUrl() }}" style="width:60px;height:60px; border-radius: 50%; object-fit: cover; margin-right:10px;" alt="photo">
                                                    @endif
                                                    <div wire:loading wire:target="photo">  
                                                        Removing post...
                                                    </div>
                                                </td>
                                                
                                                <td style="vertical-align:top;">
                                                    <div style="display:inline-block;">
                                                        <h1 style="font-size:18px;font-weight:700 !important;font-family:'Poppins', sans-serif !important;padding:0px;margin-top:0px;width:215px;line-break:anywhere">
                                                            @if ($nombre)
                                                                {{ $nombre }}
                                                            @else
                                                                Nombre y apellido
                                                            @endif
                                                        </h1>
                                                        <p style="font-size:16px;font-weight:500 !important;font-family:Poppins, sans-serif !important;margin:0px;line-height:1;width:215px;line-break:anywhere;margin-bottom:0.67rem;white-space:pre-line;color:#7C01AF  !important">
                                                            @if ($cargo)
                                                                {{ $cargo }}
                                                            @else
                                                                Cargo ocupacional
                                                            @endif
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td width="24px" style="vertical-align:middle;text-align:center;">
                                                    <img src="https://filesignature.s3.amazonaws.com/celular.png"
                                                        style="padding-top:1px;vertical-align:text-top; width: 24px; height: 24px;"
                                                        alt="icono-marcador">
                                                </td>
                                                <td
                                                    style="text-decoration:none;color:#000000;vertical-align:middle;font-family:Poppins, sans-serif !important;font-weight:500 !important;font-size:14px;padding:0px 0px 0px 10px;margin:0px;line-height:1;width:280px">
                                                    <span
                                                        style="text-decoration:none;color:#000000;vertical-align:middle;font-family:Poppins, sans-serif !important;font-weight:500 !important;font-size:14px;line-height:1;width:280px">
                                                        @if ($telefono)
                                                            {{ $telefono }}
                                                        @else
                                                            {{$indice}} ­999 ­999 ­999
                                                        @endif
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td width="24px" style="vertical-align:middle;text-align:center">
                                                    <img src="https://filesignature.s3.amazonaws.com/correo.png"
                                                        style="padding-top:1px;vertical-align:text-top; width: 24px; height: 24px;"
                                                        alt="icono-marcador">
                                                </td>
                                                <td
                                                    style="color:#000000 !important;vertical-align:middle;font-family:Poppins, sans-serif !important;font-weight:500 !important;font-size:14px;padding:0px 0px 0px 10px;margin:0px;line-height:1;cursor:default !important;text-decoration:none !important;width:280px">
                                                    @if ($email)
                                                        {{ $email }}
                                                    @else
                                                        <span
                                                            style="font-family:Poppins, sans-serif !important;color:#000000 !important"><span
                                                                style="color:#000000 !important">nombre</span>@<span
                                                                style="font-family:Poppins, sans-serif !important;color:#000000 !important">advance</span>.<span
                                                                style="font-family:Poppins, sans-serif !important;color:#000000 !important">­<!-- -->ec</span></span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="Visualizer_content_certifications__2F6Hj"></div>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="padding:20px 0px 20px 0px"><a href="https://www.advancespc.com/"
                                                        style="text-decoration:none !important"><img width="320"
                                                            src="https://filesignature.s3.amazonaws.com/director.gif"
                                                            alt="Si ve este mensaje la imagen no es valida"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td width="24px" style="vertical-align:middle;text-align:center">
                                                    <img src="https://filesignature.s3.amazonaws.com/pag_web.png"
                                                        style="padding-top:1px;vertical-align:text-top; width: 24px; height: 24px;"
                                                        alt="icono-marcador">
                                                </td>
                                                <td
                                                    style="vertical-align:middle;font-family:Poppins, sans-serif !important;font-size:14px;padding:0px 0px 0px 10px;width:280px;line-height:1;margin:0px">
                                                    <a href="https://www.advancespc.com/"
                                                        style="text-decoration:none !important;color:#000000"><span
                                                            style="text-decoration:none !important;color:#000000">
                                                            www.advancespc.com</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="24px" style="vertical-align:middle;text-align:center">
                                                    <img src="https://filesignature.s3.amazonaws.com/mapas.png"
                                                        style="padding-top:1px;vertical-align:text-top; width: 24px; height: 24px;"
                                                        alt="icono-marcador">

                                                </td>
                                                <td
                                                    style="vertical-align:middle;font-family:Poppins, sans-serif !important;font-size:14px;padding:0px 0px 0px 10px;padding-bottom:4px;padding-top:4px;width:320px;line-height:1">
                                                    Ecuador - Mexico - United States - Dominican Republic</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-button wire:click='copy' class="mt-4"><i class="fa-regular fa-copy mr-2"></i>
                        Copiar
                        firma</x-button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('post-created', (event) => {
                iziToast.success({
                    title: 'OK',
                    position: 'center',
                    message: event,
                });
                var range = document.createRange();
                range.selectNode(document.querySelector('.contenido'));
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(range);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
            });
            @this.on('error', (event) => {
                iziToast.error({
                    title: 'Error',
                    message: 'Illegal operation',
                });
            })
        });
    </script>
@endpush
