<x-default-layout>
    <x-auth-card>
        <x-slot name="logo">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Antes de poder ingresar al sitio deberá verificar su correo electrónico mediante el enlace provisto en un correo que le acabamos de enviar, en caso de que no haya recibido el correo puede hacer click en el siguiente boton.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Se ha enviado un nuevo correo') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Reenviar correo') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Cerrar sesión') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-default-layout>
