@extends('layout')
@section('title',"Pascasarjana")
@section('description',"Profil Dosen Pascasarjana Universitas Islam Negeri Sunan Gunung Djati Bandung")
@section('content')
<section class="cid-rFvspSf5HV mbr-fullscreen" style="background-image: url('{{url('assets/images/wallpaper.jpg')}}')" id="header2-1">
    
        <div class="container align-center">
            <div class="row justify-content-md-center">
                <div class="mbr-white col-md-10">
                </div>
            </div>
        </div>
        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
            <a href="#next">
                <i class="mbri-down mbr-iconfont"></i>
            </a>
        </div>
    </section>
    
    <section class="mt-5 bg-white" id="CariDosen">
        <div class="container">
            <form action="{{url('/cari/')}}" method="GET">
            <div class="input-group">
                <input type="text" placeholder="Contoh : {{$contoh->name}}" class="form-control" name="Cari">
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
    </section>    
@endsection