<x-guest-layout>
    <div class="mb-4 text-sm text-[#604020] dark:text-gray-400 bg-[#f8f4ea] p-4 rounded-lg border border-[#d9cbb8] max-w-md mx-auto">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Solo ingresa tu dirección de correo y te enviaremos un enlace para restablecerla.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="max-w-md mx-auto bg-[#f8f4ea] p-6 rounded-lg shadow-md border border-[#d9cbb8]">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" class="text-[#604020]" />
            <x-text-input id="email" class="block mt-1 w-full border border-[#b79b7f] bg-[#f5f0e1] text-[#604020] focus:ring-[#7d5a3c] focus:border-[#7d5a3c]" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-[#7d5a3c] hover:bg-[#604020] border border-[#7d5a3c] text-[#f5f0e1]">
                {{ __('Enviar enlace de recuperación') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
