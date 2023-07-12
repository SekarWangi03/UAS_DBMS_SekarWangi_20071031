@extends('template.app')
@section('title', 'Barang')
@section('content')
    <table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>Nama Barang</td>
            <td>Harga Beli</td>
            <td>Harga Jual</td>
        </tr>

        @php
            $no = 1;
        @endphp
        @foreach ($barang as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->harga_beli }}</td>
                <td>{{ $row->harga_jual }}</td>
            </tr>
        @endforeach
    </table>
@endsection
