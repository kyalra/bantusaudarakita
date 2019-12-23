@extends('layouts.layoutadmin')
@section('content')


<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Simple Table</h4>
        <p class="card-category"> Here is a subtitle for this table</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>
                        ID
                    </th>
                    <th>
                        Judul
                    </th>
                    <th>
                        keterangan
                    </th>
                    <th>
                        No Rekening
                    </th>
                    <th>
                        Donasi Tercapai
                    </th>
                    <th>
                        Total Donasi Diinginkan
                    </th>
                    <th>
                        Aksi
                    </th>
                </thead>
                <tbody>
                    <?php $no = 0;?>
                    @foreach($buat_donasi as $get)
                    <?php $no++ ;?>
                    <tr>
                        <td>
                            {{$no}}
                        </td>
                        <td>
                            {{$get->judul}}
                        </td>
                        <td>
                            {{$get->keterangan}}
                        </td>
                        <td>
                            {{$get->norek}}
                        </td>
                        <td class="text-primary">
                            Rp{{$get->jumlah_terkumpul}}
                        </td>
                        <td class="text-primary">
                            RP{{$get->jumlah}}
                        </td>
                        <td>


                            <a href="{{route('deletedonasi',['id'=>$get->id])}}" class="btn btn-danger btn-sm inline">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
 