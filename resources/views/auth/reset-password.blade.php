<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" class="max-w-md mx-auto bg-[#f8f4ea] p-6 rounded-lg shadow-md border border-[#d9cbb8]">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" class="text-[#604020]" />
            <x-text-input id="email" class="block mt-1 w-full border border-[#b79b7f] bg-[#f5f0e1] text-[#604020] focus:ring-[#7d5a3c] focus:border-[#7d5a3c]" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Nueva contraseña')" class="text-[#604020]" />
            <x-text-input id="password" class="block mt-1 w-full border border-[#b79b7f] bg-[#f5f0e1] text-[#604020] focus:ring-[#7d5a3c] focus:border-[#7d5a3c]" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" class="text-[#604020]" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full border border-[#b79b7f] bg-[#f5f0e1] text-[#604020] focus:ring-[#7d5a3c] focus:border-[#7d5a3c]" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-[#7d5a3c] hover:bg-[#604020] border border-[#7d5a3c] text-[#f5f0e1]">
                {{ __('Restablecer contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
