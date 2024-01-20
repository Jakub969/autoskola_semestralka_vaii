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
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="car_brand">Značka auta:</label>
                                    <input type="text" id="car_brand" name="car_brand" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="model">Model:</label>
                                    <input type="text" id="model" name="model" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="year">Rok výroby:</label>
                                    <input type="number" id="year" name="year" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="license_plate">Evidenčné číslo:</label>
                                    <input type="text" id="license_plate" name="license_plate" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="type">Typ vozidla:</label>
                                    <select id="type" name="type" class="form-control">
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
                            </div>
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <div class="button-container">
                                        <input class="btn btn-lg btn-outline-primary" type="submit" value="Pridať">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    @if(isset($cars) && $cars->count() > 0)
                        <h3>Vozidla:</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Znacka:</th>
                                                <th>Model:</th>
                                                <th>Rok výroby:</th>
                                                <th>Evidenčné číslo:</th>
                                                <th>Typ vozidla:</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cars as $car)
                                                <tr>
                                                    <td>{{ $car->car_brand }}</td>
                                                    <td>{{ $car->model }}</td>
                                                    <td>{{ $car->year }}</td>
                                                    <td>{{ $car->license_plate }}</td>
                                                    <td>{{ $car->type }}</td>
                                                    <td>
                                                        <button type="submit"><i class="bi bi-pencil-square"></i></button>
                                                    </td>
                                                    <td> <!--TODO nevymaže auto z databázy !-->
                                                        <form action="{{ route('delete-car', ['car' => $car->id]) }}" method="POST" onsubmit="return confirm('Naozaj chcete vymazať tento záznam?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
