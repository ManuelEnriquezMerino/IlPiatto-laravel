<x-default-layout>
    
    <x-top-left-button>
        <a href="/login">
            {{ __('Volver') }}
        </a>  
    </x-top-left-button>


    <x-auth-card>
        <x-slot name="logo">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Ingrese su direccion de correo y le enviaremos un correo para que pueda recuperar su contraseña') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reiniciar contraseña') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-default-layout>
