<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vytvorenie termínu jazdy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/driving-sessions" method="POST">
                        @csrf
                        <label for="session_date">Dátum jazdy:</label>
                        <input type="datetime-local" id="session_date" name="session_date" required>


                        <label for="duration">Trvanie jazdy:</label>
                        <select id="duration" name="duration">
                            <option value="60">60</option>
                            <option value="90">90</option>
                            <option value="120">120</option>
                        </select>

                        <label for="location">Miesto konania:</label>
                        <select id="location" name="location">
                            <option value="Spišská Nová Ves">Spišská Nová Ves</option>
                            <option value="Žilina">Žilina</option>
                            <option value="Košice">Košice</option>
                        </select>

                        <label for="session_category">Kategoria vozidla:</label>
                        <select id="session_category" name="session_category">
                            <option value="Osobný automobil B">Osobný automobil B</option>
                            <option value="Malý motocykel AM">Malý motocykel AM</option>
                            <option value="Veľký motocykel A1">Veľký motocykel A1</option>
                            <option value="Veľký motocykel A2">Veľký motocykel A2</option>
                            <option value="Veľký motocykel A">Veľký motocykel A</option>
                            <option value="Nákladný automobil C">Nákladný automobil C</option>
                            <option value="Autobus D">Autobus D</option>
                            <option value="Traktor T">Traktor T</option>
                            <option value="Príves">Príves</option>
                        </select>
                        <div class="button-container">
                        <input class="w-25 btn btn-lg btn-outline-primary" type="submit" value="Pridať">
                        </div>
                    </form>

                @if(isset($drivingSessions) && $drivingSessions->count() > 0)
                        <h3>Termíny jazd:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th class="with-border">Konanie jazdy</th>
                                    <th class="with-border">Trvanie (min.)</th>
                                    <th class="with-border">Miesto konania</th>
                                    <th class="with-border">Stav</th>
                                    <th class="with-border">Skupina</th>
                                </tr>
                                @foreach($drivingSessions as $session)
                                    <tr>
                                        <td class="with-border">{{ $session->session_date }}</td>
                                        <td class="with-border">{{ $session->duration }}</td>
                                        <td class="with-border">{{ $session->location }}</td>
                                        <td class="with-border">{{ $session->status }}</td>
                                        <td class="with-border">{{ $session->session_category }}</td>
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
