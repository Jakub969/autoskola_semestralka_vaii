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
                        <table class="full-width-centered">
                            <tr>
                                <th>Konanie jazdy</th>
                                <th>Trvanie (min.)</th>
                                <th>Miesto konania</th>
                                <!-- Add more columns as needed -->
                            </tr>
                            @foreach($drivingSessions as $session)
                                <tr>
                                    <td>{{ $session->session_date }}</td>
                                    <td>{{ $session->duration }}</td>
                                    <td>{{ $session->location }}</td>
                                    <!-- Add more fields as needed -->
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
