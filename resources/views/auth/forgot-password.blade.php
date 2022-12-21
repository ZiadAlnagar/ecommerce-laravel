<x-layout>
    <x-form action='/forgot-password' class='max-w-2xl px-20'>
        <p class="text-slate-500">Lost your password? Please enter your username or email address. You will receive a
            link to create a new password via email.</p>
        <x-form.section name='username' :with_lable='false' class="mt-5 mb-6">
            <x-form.sub.label name='username' label='username or email' casing='uc_first' text_size='text-base' />
            <x-form.input name='username' />
        </x-form.section>
        {{-- ToDO uc helper, caps --}}
        <x-form.sub.submit class="w-full justify-center" content="Send Password Reset Link" />
    </x-form>

    <x-elems.flash name='status' />
</x-layout>
