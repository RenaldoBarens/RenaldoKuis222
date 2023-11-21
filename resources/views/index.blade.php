@extends('layouts.app2')

@section('content')

<div class="container">
    
    <div>
        {{$perusahaan[0]->Nama}}<br>
        {{$perusahaan[0]->Jalan}}
        {{$perusahaan[0]->Kota }} {{$perusahaan[0]->Provinsi}}<br>
        {{$perusahaan[0]->Negara}}<br>
    </div>
    <hr>

    <div style="text-align: right">
        {{$pelanggan[0]->Nama}}<br>
        {{$pelanggan[0]->Jalan}}
        {{$pelanggan[0]->Kota }} {{$perusahaan[0]->Provinsi}}<br>
        {{$pelanggan[0]->Negara}}<br>
    </div>
    
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Invoice Nomor {{$invoicedetail[0]->NomorInvoice}} </div>
                <div class="card-body">
                    <div >

                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th><th>StudentID</th><th>Nama</th><th>Jurusan</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                        {{-- <div class="pagination-wrapper"> {!! $mahasiswa2->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
