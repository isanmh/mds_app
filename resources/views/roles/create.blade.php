{{-- form create roles --}}
<x-app-layout>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- select guard_name --}}
        <div class="mt-4">
            <x-input-label for="guard_name" :value="__('Guard Name')" />
            <x-select-input id="guard_name" class="block mt-1 w-full" name="guard_name" :value="old('guard_name')" required>
                <option value="">-- Select Guard Name --</option>
                <option value="web">web</option>
                <option value="api">api</option>
            </x-select-input>
            <x-input-error :messages="$errors->get('guard_name')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
