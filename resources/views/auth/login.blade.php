<x-layout>
    <x-form heading="Sign-in" action="/login" class="max-w-2xl px-20">
        <x-form.section name="username" label="username or email" casing='uc_first'>
            <x-form.input name="username" autocomplete='username' />
        </x-form.section>
        <x-form.section name="password" label="password" casing='uc_first'>
            <x-form.input name="password" type="password" autocomplete="current-password" />
        </x-form.section>
        <x-form.section name="remember" label="remember" :with_label='false' class="flex items-center justify-between">
            <div class="flex items-center">
                <x-form.input name="remember" type="checkbox" class="mr-1" />
                <x-form.sub.label name="remember" label="remember me" casing='uc_first' />
            </div>
            <div><a href="/forgot-password" class="text-sm text-sky-600 font-semibold hover:underline">Forgot your
                    password?</a></div>
        </x-form.section>
        {{-- ToDo Center errpr login message --}}
        <div class="flex justify-center">
            <x-form.sub.submit class="px-8 py-3" content='Login' />
        </div>
        <p class="text-sm text-center mt-2">New user? <a href="/register"
                class="text-sky-600 font-semibold hover:underline">Create new account</a></p>
    </x-form>

    {{-- Test --}}
    {{-- {{ $errors->getBag('default') }} --}}

    <x-elems.flash name='{{ session('status') }}' />
</x-layout>
