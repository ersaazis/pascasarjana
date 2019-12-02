@extends('layout')
@section('description','Profil '.$dosen->nama.' Dosen Pascasarjana Universitas Islam Negeri Sunan Gunung Djati Bandung')
@section('title', $dosen->name)
@section('content')
    <section class="mbr-section content5 cid-rFvwFe6dvy mbr-parallax-background" id="content5-9">
        <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
        </div>
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">{{$dosen->name}}</h2>
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">{{$dosen->namaprodi}}</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section article content1 cid-rFvy3BwTQk" id="content1-a">
            <div class="container">
                <div class="media-container-row">
                    <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-10">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 text-center">
                                <img src="{{url($dosen->photo)}}" alt="{{$dosen->name}}">
                                <br>
                                <br>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <table width="100%" valign="top">
                                    <tr>
                                        <th>NIP</th>
                                        <td> : {{$dosen->nip}}</td>
                                    </tr>
                                    <tr>
                                        <th>NIDN</th>
                                        <td> : {{$dosen->nidn}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td> : {{$dosen->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Perguruan Tinggi</th>
                                        <td> : {{$dosen->namapt}}</td>
                                    </tr>
                                    <tr>
                                        <th>Program Studi</th>
                                        <td> : {{$dosen->namaprodi}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td> : {{$dosen->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td> : {{$dosen->tmpt_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td> : {{$dosen->tanggal_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan Fungsional</th>
                                        <td> : {{$dosen->fungsional}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Tertinggi</th>
                                        <td> : {{$dosen->pend_tinggi}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Ikatan Kerja</th>
                                        <td> : {{$dosen->ikatankerja}}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Aktivitas</th>
                                        <td> : {{$dosen->statuskeaktifan}}</td>
                                    </tr>
                                    <tr>
                                        <th>Bidang Keahlian</th>
                                        <td> : {{$dosen->bidang_keahlian}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td> : {{$dosen->alamat}}</td>
                                    </tr>
                                    <tr>

                                    <tr>
                                        <td colspan="2">
                                            @if($dosen->id_dikti)
                                                <a href="https://forlap.ristekdikti.go.id/dosen/detail/{{$dosen->id_dikti}}" target="_blank" class="btn btn-info btn-sm m-0">Forlap Dikti</a>
                                            @endif
                                            @if($dosen->id_schollar)
                                                <a href="https://scholar.google.co.id/citations?user={{$dosen->id_schollar}}" target="_blank" class="btn btn-info btn-sm m-0">Scholar</a>
                                            @endif
                                            @if($dosen->id_scopus)
                                                <a href="https://www.scopus.com/authid/detail.uri?authorId={{$dosen->id_scopus}}" target="_blank" class="btn btn-info btn-sm m-0">Scoppus</a>
                                            @endif
                                            @if($dosen->id_orchid)
                                                <a href="https://orcid.org/{{$dosen->id_orchid}}" target="_blank" class="btn btn-info btn-sm m-0">Orchid</a>                                            
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>        
    <section class="tabs3 cid-rFvyfAg49i" id="tabs3-c">
        <div class="container-fluid">
            <div class="row tabcont">
                <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                    <li class="nav-item mbr-fonts-style"><a class="nav-link show active display-7" role="tab" data-toggle="tab" href="#tabs3-c_tab0" aria-selected="true">Riwayat Pendidikan</a></li>
                    <li class="nav-item mbr-fonts-style"><a class="nav-link show active display-7" role="tab" data-toggle="tab" href="#tabs3-c_tab1" aria-selected="true">Riwayat Mengajar</a></li>
                    <li class="nav-item mbr-fonts-style"><a class="nav-link show active display-7" role="tab" data-toggle="tab" href="#tabs3-c_tab2" aria-selected="true">Penelitian</a></li>
                    <li class="nav-item mbr-fonts-style"><a class="nav-link show active display-7" role="tab" data-toggle="tab" href="#tabs3-c_tab3" aria-selected="true">Dokumen</a></li>
                </ul>
            </div>
        </div>
        <div class="container container-table">
            <div class="row px-1">
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                        <div class="row tab-content-row">
                            <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>Gelar Akademik</th>
                                            <th>Tanggal Ijazah</th>
                                            <th>Jenjang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($pendidikan as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$p->nm_sp_formal}}</td>
                                            <td>{{$p->singkat_gelar}}</td>
                                            <td>{{$p->thn_lulus}}</td>
                                            <td>{{$p->namajenjang}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>Gelar Akademik</th>
                                            <th>Tanggal Ijazah</th>
                                            <th>Jenjang</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
    
                    <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                        <table class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Semester</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Kode Kelas</th>
                                        <th>Perguruan Tinggi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($mengajar as $p)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$p->id_smt}}</td>
                                        <td>{{$p->kode_mk}}</td>
                                        <td>{{$p->nm_mk}}</td>
                                        <td>{{$p->nm_kls}}</td>
                                        <td>{{$p->namapt}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Semester</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Mata Kuliah</th>
                                        <th>Kode Kelas</th>
                                        <th>Perguruan Tinggi</th>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
    
                    <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                        <div class="row tab-content-row">
                            <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Sitasi</th>
                                            <th>Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($penelitian as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><a href="{{$p->url}}" target="_blank">{!! htmlspecialchars_decode($p->judul) !!}</a><br><small>{{$p->penulis}} <br> {{$p->publis}}</small></td>
                                            <td><a href="{{$p->url}}" target="_blank">{{$p->titasi}}</a></td>
                                            <td>{{$p->tahun}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Sitasi</th>
                                                <th>Tahun</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
    
                    <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">
                        <div class="row tab-content-row">
                            <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($dokumen as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$p->judul}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{url($p->file.'?download=1')}}" target="_blank" title="Download File">
                                                    Download
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Download</th>
                                            </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection