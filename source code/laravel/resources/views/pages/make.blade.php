@extends('layouts.app')


@section('content')
<main>

    <section class="table-pelajaran">
        <div class="container">
            <div class="d-sm-flex align-items-center float-right mb-4">
                <a href="{{ url('/') }} " class="btn btn-sn btn-primary shadow sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i>Jadwalku
                </a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 30%;">Mata Pelajaran</th>
                        <th style="width: 10%;">Hari</th>
                        <th style="width: 40%">Waktu</th>
                        <th style="width: 20%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matematika</td>
                        <td>Rabu</td>
                        <td>12:00 WIB - 14:00 WIB</td>
                        <th>
                            <div>
                                <a href="#">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <a href="#">
                                    <button class="btn btn-primary">Delete</button>
                                </a>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>Pemrograman</td>
                        <td>Kamis</td>
                        <td>13:00 WIB - 16:00 WIB</td>
                        <th>
                            <div>
                                <a href="#">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <a href="#">
                                    <button class="btn btn-primary">Delete</button>
                                </a>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="#">
                    <button class="btn btn-primary">Add</button>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection