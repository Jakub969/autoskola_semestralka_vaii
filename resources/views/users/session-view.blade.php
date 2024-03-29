<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prehľad jázd') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(isset($sessions) && $sessions->count() > 0)
                        <h3>Zoznam používateľov, ktorí sú prihlásení na termíny jázd:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th class="with-border">Meno študenta:</th>
                                    <th class="with-border">Dátum jazdy:</th>
                                    <th class="with-border">Trvanie jazdy:</th>
                                    <th class="with-border">Miesto konania:</th>
                                    <th class="with-border">Kategoria vozidla:</th>
                                    <th class="with-border">Vozidlo:</th>

                                </tr>
                                @foreach($sessions as $session)
                                    <tr>
                                        <td class="with-border">{{ $session->user->name }}</td>
                                        <td class="with-border">{{ $session->session_date }}</td>
                                        <td class="with-border">{{ $session->duration }}</td>
                                        <td class="with-border">{{ $session->location }}</td>
                                        <td class="with-border">{{ $session->session_category }}</td>
                                        <td class="with-border">{{ $session->car->car_brand }} {{ $session->car->model }}</td>
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

