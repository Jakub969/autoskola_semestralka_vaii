<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vytvorenie termínu jazdy') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">


                    <div class="card">

                        <div class="card-body">
                            <form action="/driving-sessions" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="session_date">Dátum jazdy:</label>
                                    <input type="datetime-local" id="session_date" name="session_date" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="duration">Trvanie jazdy:</label>
                                    <select id="duration" name="duration" class="form-control">
                                        <option value="60">60</option>
                                        <option value="90">90</option>
                                        <option value="120">120</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="location">Miesto konania:</label>
                                    <select id="location" name="location" class="form-control">
                                        <option value="Spišská Nová Ves">Spišská Nová Ves</option>
                                        <option value="Žilina">Žilina</option>
                                        <option value="Košice">Košice</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="session_category">Kategoria vozidla:</label>
                                    <select id="session_category" name="session_category" class="form-control">
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
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <input class="btn btn-lg btn-outline-primary" type="submit" value="Pridať">
                                </div>
                            </form>

                            @if(isset($drivingSessions) && $drivingSessions->count() > 0)
                                <h3>Termíny jazd:</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Konanie jazdy</th>
                                            <th>Trvanie (min.)</th>
                                            <th>Miesto konania</th>
                                            <th>Stav</th>
                                            <th>Skupina</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($drivingSessions as $session)
                                            <tr>
                                                <td>{{ $session->session_date }}</td>
                                                <td>{{ $session->duration }}</td>
                                                <td>{{ $session->location }}</td>
                                                <td>{{ $session->status }}</td>
                                                <td>{{ $session->session_category }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>

        </div>
    </div>
</x-app-layout>
