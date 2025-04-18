<x-guest-layout>
    <div class="mb-4 text-sm text-[#604020] dark:text-gray-400 bg-[#f8f4ea] p-4 rounded-lg border border-[#d9cbb8] max-w-md mx-auto">
        {{ __('Esta es una zona segura de la aplicación. Por favor, confirma tu contraseña antes de continuar.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}" class="max-w-md mx-auto bg-[#f8f4ea] p-6 rounded-lg shadow-md border border-[#d9cbb8]">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Contraseña')" class="text-[#604020]" />
            <x-text-input id="password" class="block mt-1 w-full border border-[#b79b7f] bg-[#f5f0e1] text-[#604020] focus:ring-[#7d5a3c] focus:border-[#7d5a3c]" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <div class="flex justify-end mt-6">
            <x-primary-button class="bg-[#7d5a3c] hover:bg-[#604020] border border-[#7d5a3c] text-[#f5f0e1]">
                {{ __('Confirmar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
