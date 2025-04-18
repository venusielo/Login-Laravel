<x-guest-layout>
    <div class="mb-4 text-sm text-[#7d5a3c]">
        {{ __('Gracias por registrarte. Verifica tu correo con el enlace que te enviamos.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-700">
            {{ __('Se ha enviado un nuevo enlace de verificación al correo electrónico que proporcionaste durante el registro.') }}
        </div>
    @endif

    <div class="mt-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <x-primary-button class="bg-[#7d5a3c] hover:bg-[#604020] border border-[#7d5a3c] text-[#f5f0e1]">
                {{ __('Reenviar correo de verificación') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="text-sm underline text-[#7d5a3c] hover:text-[#604020] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7d5a3c]">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
