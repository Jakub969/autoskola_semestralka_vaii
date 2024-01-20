<meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <div class="search-container">
                            <select id="filter">
                                <option value="name">Meno</option>
                                <option value="email">Email</option>
                            </select>
                            <input type="text" id="search" oninput="filterTable()" placeholder="Zadajte text...">
                        </div>
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
                                        <td class="with-border">
                                            <select name="role" id="role" onchange="updateRole({{ $user->id }}, this)" data-original-role="{{ $user->role }}">
                                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="instruktor" {{ $user->role == 'instruktor' ? 'selected' : '' }}>Instruktor</option>
                                                <option value="student" {{ $user->role == 'student' ? 'selected' : '' }}>Študent</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>
                        </div>
                        <div class="button-container">
                            <button class="w-25 btn btn-lg btn-outline-primary" onclick="submitChanges()">Potvrdiť zmeny</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
