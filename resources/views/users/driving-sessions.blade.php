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

                        <label for="instructor_id">Instructor ID:</label>
                        <input type="text" id="instructor_id" name="instructor_id">

                        <label for="student_id">Student ID:</label>
                        <input type="text" id="student_id" name="student_id">

                        <label for="session_date">Session Date:</label>
                        <input type="date" id="session_date" name="session_date">

                        <label for="duration">Duration:</label>
                        <input type="text" id="duration" name="duration">

                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location">

                        <label for="status">Status:</label>
                        <input type="text" id="status" name="status">

                        <label for="car_id">Car ID:</label>
                        <input type="text" id="car_id" name="car_id">

                        <input type="submit" value="Submit">
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
                                    <th class="with-border">Auto</th>
                                    <th class="with-border">Skupina</th>
                                </tr>
                                @foreach($drivingSessions as $session)
                                    <tr>
                                        <td class="with-border">{{ $session->session_date }}</td>
                                        <td class="with-border">{{ $session->duration }}</td>
                                        <td class="with-border">{{ $session->location }}</td>
                                        <td class="with-border">{{ $session->status}}</td>
                                        <td class="with-border">{{ $session->make }} {{ $session->model }}</td>
                                        <td class="with-border">{{ $session->type }}</td>
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
