<x-layout>
    <x-form heading="Register" action="/register" class="max-w-2xl flex flex-col px-20">
        <x-form.section name="first_name" label="first name">
            <x-form.input name="first_name" />
        </x-form.section>
        <x-form.section name="last_name" label="last name">
            <x-form.input name="last_name" />
        </x-form.section>
        <x-form.section name="username" label="username">
            <x-form.input name="username" />
        </x-form.section>
        <x-form.section name="phone" label="phone">
            <x-form.input name="phone" type="phone" />
        </x-form.section>
        <x-form.section name="email" label="email">
            <x-form.input name="email" type="email" />
        </x-form.section>
        <x-form.section name="password" label="password">
            <x-form.input name="password" type="password" autocomplete="new-password" />
        </x-form.section>
        <x-form.section name="password_confirmation" label="password confirmation">
            <x-form.input name="password_confirmation" type="password" />
        </x-form.section>
        <x-form.section name="newsletter" label="newsletter" :with_label='false' class="flex items-center">
            <x-form.input name="newsletter" type="checkbox" class="mr-1" />
            <x-form.sub.label name="newsletter" label="Subscribe to newsletter" :uc='false' />
        </x-form.section>
        <x-form.sub.submit content='Register' class='self-center px-5 py-[10px]' />
    </x-form>

    {{-- Test --}}
        {{-- @if ($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif --}}
</x-layout>
