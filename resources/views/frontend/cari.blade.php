@extends('layout')
@section('title',"Pascasarjana")
@section('description',"Hasil Pencarian $nama Untuk Dosen Pascasarjana Universitas Islam Negeri Sunan Gunung Djati Bandung")
@section('content')
    <section class="mbr-section content5 cid-rFvwFe6dvy mbr-parallax-background" id="content5-9">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
        </div>
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Hasil Pencarian</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">{{$nama}}</h3>
                </div>
            </div>
        </div>
    </section>    
    <section class="mt-5 bg-white" id="CariDosen">
        <div class="container">
            <form action="{{url('/cari/')}}" method="GET">
            @csrf
            <div class="input-group">
                <input type="text" placeholder="Nama Dosen" value="{{$nama}}" class="form-control" name="Cari">
                <div class="input-group-prepend">
                    <input type="submit" class=" btn btn-primary input-group-text m-0 pb-0 pt-0" value="Cari Dosen " />
                </div>
            </div>
            </form>
        </div>
    </section>
    
    <section class="features15 cid-rFvukpR1ux" id="features15-3">
        <div class="container">
            @foreach ($dosen as $item)
            @if($i++%4 == 0)
            <div class="media-container-row container pt-5 mt-2">
            @endif
                <div class="col-12 col-md-6 mb-4 col-lg-3">
                    <a href="{{url('/profil/'.$item->id."/".urlencode($item->name))}}" class="card flip-card p-5 align-center">
                        <div class="card-front card_cont">
                            <img src="{{url(empty($item->photo)?"vendor/crudbooster/avatar.jpg":$item->photo)}}" alt="Mobirise">
                        </div>
                        <div class="card_back card_cont">
                            <h4 class="card-title display-5 py-2 mbr-fonts-style">
                                {{$item->name}}
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                                {{$item->namaprodi}}
                                <center>
                                    <table width="100%">
                                        <tr>
                                            <td>Status</td>
                                            <td>{{$item->statuskeaktifan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan</td>
                                            <td>{{$item->pend_tinggi}}</td>
                                        </tr>
                                    </table>
                                </center>
                            </p>
                        </div>
                    </a>
                </div>
            @if($i%4 == 0)
            </div>
            @endif
            @endforeach
        </div>
        <div class="container">
            <div class="row">
                <div class="col">{{ $dosen->appends(['Cari' => $nama])->links() }}</div>
            </div>
        </div>
    </section>    
@endsection