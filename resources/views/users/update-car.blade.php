<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pridavanie aut:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/create-car" method="POST">
                        @csrf
                        <label for="car_brand">Značka auta:</label>
                        <input type="text" id="car_brand" name="car_brand" required>

                        <label for="model">Model:</label>
                        <input type="text" id="model" name="model" required>

                        <label for="year">Rok výroby:</label>
                        <input type="number" id="year" name="year" required>

                        <label for="license_plate">Evidenčné číslo:</label>
                        <input type="text" id="license_plate" name="license_plate" required>

                        <hr>

                        <label for="type">Typ vozidla:</label>
                        <select id="type" name="type">
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

                    @if(isset($cars) && $cars->count() > 0)
                        <h3>Vozidla:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th class="with-border">Znacka:</th>
                                    <th class="with-border">Model:</th>
                                    <th class="with-border">Rok výroby:</th>
                                    <th class="with-border">Evidenčné číslo:</th>
                                    <th class="with-border">Typ vozidla:</th>
                                </tr>
                                @foreach($cars as $car)
                                    <tr>
                                        <td class="with-border">{{ $car->car_brand }}</td>
                                        <td class="with-border">{{ $car->model }}</td>
                                        <td class="with-border">{{ $car->year }}</td>
                                        <td class="with-border">{{ $car->license_plate }}</td>
                                        <td class="with-border">{{ $car->type }}</td>
                                        <td class="with-border"><button type="submit"><i class="bi bi-pencil-square"></i></button> </td>
                                        <td class="with-border">
                                            <form action="{{ route('delete-car', $car) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tento záznam?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
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
