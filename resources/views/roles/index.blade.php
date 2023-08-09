<x-app-layout>
    {{-- list roles --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- create roles --}}
            <div class="mb-4">
                {{-- <x-link-button :href="route('roles.create')">
                    {{ __('Create Roles') }}
                </x-link-button> --}}
            </div>

            {{-- table roles --}}
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">{{ __('No') }}</th>
                            <th class="px-4 py-2">{{ __('Name') }}</th>
                            <th class="px-4 py-2">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="border px-4 py-2">{{ $role->name }}</td>
                                <td class="border px-4 py-2">
                                    {{-- <x-link-button :href="route('roles.edit', $role->id)">
                                        {{ __('Edit') }}
                                    </x-link-button> --}}
                                    {{-- <x-delete-button :href="route('roles.destroy', $role->id)" /> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

</x-app-layout>
