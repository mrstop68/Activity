@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Etkinlikler</h2>
                <a href="{{ route('activity.create') }}" class="btn btn-primary mb-3">Etkinlik Oluştur</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>Başlangıç Tarihi</th>
                            <th>Bitiş Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['allActivity'] as $act)
                            <tr>
                                <td>{{ $act->title }}</td>
                                <td>{{ $act->description }}</td>
                                <td>{{ $act->start_date }}</td>
                                <td>{{ $act->finish_date }}</td>
                                <td>
                                    <form action="{{ route('activity.destroy', $act->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Etkinliği silmek istediğinizden emin misiniz?')">Sil</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
