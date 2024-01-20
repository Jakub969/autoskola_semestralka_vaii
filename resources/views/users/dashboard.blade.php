<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Prihlasovanie jázd') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(isset($drivingSessions) && $drivingSessions->count() > 0)
                        <h3>Tvoje prihlásené jazdy:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th class="with-border">Konanie jazdy</th>
                                    <th class="with-border">Trvanie (min.)</th>
                                    <th class="with-border">Miesto konania</th>
                                    <th class="with-border">Stav</th>
                                    <th class="with-border">Auto</th>
                                    <th class="with-border">Skupina</th>
                                </tr>
                                @foreach($drivingSessions as $session)
                                    <tr>
                                        <td class="with-border">{{ $session->session_date }}</td>
                                        <td class="with-border">{{ $session->duration }}</td>
                                        <td class="with-border">{{ $session->location }}</td>
                                        <td class="with-border">{{ $session->status}}</td>
                                        <td class="with-border">
                                            <select name="car" id="car" >
                                                <option value="volkswagen">volkswagen</option>
                                                <option value="audi">audi</option>
                                                <option value="ford">ford</option>
                                            </select>
                                        </td>
                                        <td class="with-border">{{ $session->session_category}}</td>
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
