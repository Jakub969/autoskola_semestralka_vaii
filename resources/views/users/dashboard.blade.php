<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/prihlasenie_odhlasenie_studenta.js') }}"></script>
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
                        @csrf
                        <h3>Tvoje prihlásené jazdy:</h3>
                        <div class="table-responsive">
                            <table class="full-width-centered">
                                <tr>
                                    <th>Konanie jazdy</th>
                                    <th>Trvanie (min.)</th>
                                    <th>Miesto konania</th>
                                    <th>Stav</th>
                                    <th>Auto</th>
                                    <th>Skupina</th>
                                    <th></th>
                                </tr>
                                @foreach($drivingSessions as $session)
                                    @if($session->student_id == Auth::id() || $session->student_id == null)
                                        <tr class="{{ ($session->student_id == Auth::id()) ? 'signed-in' : '' }}">
                                            <td>{{ $session->session_date }}</td>
                                            <td>{{ $session->duration }}</td>
                                            <td>{{ $session->location }}</td>
                                            <td>{{ $session->status}}</td>
                                            @if(isset($cars) && count($cars) > 0)
                                                <td>
                                                    <select name="car" id="car" class="form-control">
                                                        @foreach($cars as $car)
                                                            <option
                                                                value="{{ $car->id }}">{{ $car->car_brand }} {{ $car->model }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            @endif
                                            <td>{{ $session->session_category}}</td>
                                            @if($session->student_id == null)
                                                @if(isset($cars) && count($cars) > 0)
                                                    <td>
                                                        <button type="button" data-session-id="{{$session->id}}"
                                                                onclick="signIn(this, {{$car->id}})"><i
                                                                class="bi bi-bookmark-check"></i></button>
                                                    </td>
                                                @endif
                                            @else
                                                <td>
                                                    <button type="button" data-session-id="{{$session->id}}"
                                                            onclick="signOut(this)"><i class="bi bi-x-circle"></i>
                                                    </button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
