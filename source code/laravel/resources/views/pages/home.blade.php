@extends('layouts.app')


@section('content')
<main>
    <section class="table-pelajaran">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%;">Jam</th>
                        <th style="width: 18%;">Senin</th>
                        <th style="width: 18%">Selasa</th>
                        <th style="width: 18%;">Rabu</th>
                        <th style="width: 18%;">Kamis</th>
                        <th style="width: 18%;">Jumat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="{{ url('make') }}">
                    <button class="btn btn-primary">Buat jadwal</button>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection