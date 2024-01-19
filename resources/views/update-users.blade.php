<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upravovanie Používateľov') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(isset($users) && $users->count() > 0)
                        <h3>Zoznam používateľov:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th class="with-border">Meno</th>
                                    <th class="with-border">Email</th>
                                    <th class="with-border">Rola</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="with-border">{{ $user->name }}</td>
                                        <td class="with-border">{{ $user->email }}</td>
                                        <td class="with-border">{{ $user->role }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
