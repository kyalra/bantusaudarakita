@extends('layouts.layoutadmin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Transfer Tertunda</h4>
        <p class="card-category"> Tabel konfirmasi transfer</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>
                        ID
                    </th>
                    
                    <th>
                        Nama
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Komentar
                    </th>
                    <th>
                        Jumlah Donasi
                    </th>
                    <th>
                        Bukti Transfer
                    </th>
                    <th>
                        Aksi
                    </th>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach($donatur as $get)
                    <?php $no++ ;?>
                    <tr>

                        <td>
                            {{$no}}
                        </td>
                        
                        <td>
                            {{$get->nama}}
                        </td>
                        <td>
                            {{$get->email}}
                        </td>
                        <td>
                        {{$get->komentar}}
                        </td>
                        <td class="text-primary">
                        Rp{{$get->jumlah_donasi}}
                        </td>
                        <td>
                        {{$get->buktitf}}
                        </td>
                        <td>
                          @if($get->konfirmasi == 0)
                            <a class="btn" href="/donasi/cofirmasi/{{$get->id}}">Konfirmasi</a>
                            @else
                        </td>
                    </tr>
                  @endif

                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
