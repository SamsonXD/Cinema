@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <!-- Lewa nawigacja -->
        <div class="col-md-3">
            <div class="list-group">
            <a href="{{ route('bilety') }}" class="list-group-item list-group-item-action" id="bilety">Bilety</a>
            <a href="{{ route('ustawienia') }}" class="list-group-item list-group-item-action" id="ustawienia">Ustawienia</a>
            <a href="{{ route('reklamacje') }}" class="list-group-item list-group-item-action" id="reklamacje">Reklamacje</a>

            </div>
        </div>
        <!-- Prawa część z informacjami -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="font-size:1.20rem;">{{ __('Tu bedą ustawienia') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    // Nasłuchuj kliknięcia na linkach nawigacyjnych
    document.getElementById('bilety').addEventListener('click', function(e) {
        e.preventDefault(); // Zapobiegaj domyślnej akcji linku

        // Wywołaj funkcję AJAX, która załaduje zawartość dla zakładki Bilety
        loadContent('bilety');
    });

    document.getElementById('ustawienia').addEventListener('click', function(e) {
        e.preventDefault(); // Zapobiegaj domyślnej akcji linku

        // Wywołaj funkcję AJAX, która załaduje zawartość dla zakładki Ustawienia
        loadContent('ustawienia');
    });

    document.getElementById('reklamacje').addEventListener('click', function(e) {
        e.preventDefault(); // Zapobiegaj domyślnej akcji linku

        // Wywołaj funkcję AJAX, która załaduje zawartość dla zakładki Reklamacje
        loadContent('reklamacje');
    });

    // Funkcja do ładowania zawartości za pomocą AJAX
    function loadContent(tab) {
        // Wywołaj odpowiedni kontroler lub endpoint w swojej aplikacji,
        // który zwróci treść dla danej zakładki
        // np. /load-content?tab=bilety

        // Po odebraniu odpowiedzi, zaktualizuj zawartość prawej części ekranu
        // bez przeładowywania całej strony.
        // Możesz to zrobić za pomocą manipulacji DOM lub frameworków JavaScript
    }
</script>
