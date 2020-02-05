@extends('layout2')
@section('title',"Pascasarjana")
@section('description',"Hasil Pencarian $nama Untuk MOU Pascasarjana Universitas Islam Negeri Sunan Gunung Djati Bandung")
@section('content')
    <section class="mbr-section content5 cid-rFvwFe6dvy mbr-parallax-background" id="content5-9">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
        </div>
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">KERJASAMA PASCASARJANA <br> UIN Sunan Gunung Djati Bandung</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">{{$nama}}</h3>
                </div>
            </div>
        </div>
    </section>    
    <section class="mt-5 bg-white" id="CariDosen">
        <div class="container">
            <form action="{{url('/kerjasama/')}}" method="GET">
            @csrf
            <div class="input-group">
                <input type="text" placeholder="Judul Kerjasama" value="{{$nama}}" class="form-control" name="Cari">
                <div class="input-group-prepend">
                    <input type="submit" class=" btn btn-primary input-group-text m-0 pb-0 pt-0" value="Cari " />
                </div>
            </div>
            </form>
        </div>
    </section>
    
    <section class="features15 cid-rFvukpR1ux" id="features15-3">
        <div class="container">
        <table class="table table-striped table-bordered dataTable">
            <tr>
                <th>Judul</th>
                <th width="20%">Preview</th>
            </tr>
            @foreach ($data as $item)
            <tr>
                <td><a href="{{url($item->file."?download=1")}}">{{$item->judul}}</a></td>
                <td><a class="badge" href="{{url($item->file)}}" target="_blank">Preview</a></td>
            </tr>
            @endforeach
        </table>
    </div>
        <div class="container">
            <div class="row">
                <div class="col">{{ $data->appends(['Cari' => $nama])->links() }}</div>
            </div>
        </div>
    </section>    
@endsection