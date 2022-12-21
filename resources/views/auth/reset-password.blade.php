<x-layout>
    <x-form action="{{ route('password.update') }}" class="max-w-2xl px-20">
        <!-- Password Reset Token -->
        <x-form.input type='hidden' name='token' value="{{ $request->route('token') }}" />
        <x-form.input type='hidden' name='email' value="{{ $request->email }}" />

        {{-- ToDo fix autocomplete --}}
        <x-form.section name='password' label='new passowrd' autocomplete='new-password'>
            <x-form.input name='password' type='password' />
        </x-form.section>
        <x-form.section name='password_confirmation' label='confirm new passowrd'>
            <x-form.input name='password_confirmation' type='password' />
        </x-form.section>

        <x-form.sub.submit class="w-full justify-center" content='Reset Password' />
    </x-form>

    <x-elems.flash name='{{ session('status') }}' />
</x-layout>
