@extends('layouts.app')

@section('content')

<div class="row" style="text-align: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <div class="alert alert-danger" role="alert"><a href="#" class="alert-link"><center><h2>HASIL PENILAIAN RESIKO COVID-19</h2></center></a></div>
            </div>
        </div>
    </div>
    <form action="{{ route('biodata') }}" method="GET">
   
    <div class="row" style="text-align: center;">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong><div class="alert alert-primary">Total Jawaban YA Yang Anda Telah Isi Sebanyak :</strong>
                <label id="yes">{{ $survey->yes }}</label>
            </div>
        </div>

        @if($survey->yes>-1 & $survey->yes<8)
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong><div class="alert alert-success">Status:</strong>
                      <label id="status">Resiko Rendah</label>
                  </div>
              </div>     
        @elseif($survey->yes>7 & $survey->yes<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><div class="alert alert-danger">Status :</strong>
                        <label id="status">Resiko Sedang</label>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong><div class="alert alert-danger">Status :</strong>
                      <label id="status">Resiko Tinggi</label>
                  </div>
                  </div>
                 
        @endif
        <button type="submit" class="btn btn-danger">Back</button>
</div>
</div>
    </div>
@endsection

