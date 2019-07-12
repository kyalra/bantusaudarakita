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
                            Oud-Turnhout
                        </td>
                        <td class="text-primary">
                            RP{{$get->jumlah}}
                        </td>
                        <td>
                            <form action="{{ route('delete.donasi', $get->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm inline" type="submit">Delete</button>
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
