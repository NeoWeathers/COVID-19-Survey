@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card shadow-sm border-0">
    
    <div class="alert alert-info" role="alert"><a href="#" class="alert-link"><center><h2>Selamat Mengerjakan COVID-19</h2></center></a></div>
        <div class="alert alert-danger" role="alert"><a href="#" class="alert-link">SMK WIKRAMA BOGOR</a></div>

        <div class="card-body">
            <div class="table-responsive">
            <form action="{{ route('survey.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="id" value="{{Auth::user()->id}}"> 
               <table class="table table-bordered table-hover alert alert-danger" id="datatables">
                    <thead>
                        <tr>
                            <th width="1"><div class="alert alert-primary">No</th></button></td>
                            <th><div class="alert alert-primary"><center>Activity</center></th></button></h2></td>
                            <th width="2%"><div class="alert alert-primary">YES</th></button></h2></td>
                            <th width="2%"><div class="alert alert-primary">NO</th></button></h2></td>
                        </tr>
                    </thead>
                    <tbody>
                   
                    <td><h2><button class="btn btn-primary">A</td></button></h2></td>
                           <td style="vertical-align:middle">POTENSI TERLUAR DI LUAR RUMAH</td>
                           <td>
                       <tr>
                           <td style="vertical-align:middle">1</td>
                           <td style="vertical-align:middle">Saya Pergi Keluar Rumah</td>
                           <td>
                            <div style="display:inline-block">
                            <input type="radio" id="q1" name="y1" value="1">
                            <label for="y1">Yes</label><br>
                            <td>
                            <input type="radio" id="q1" name="y1" value="0">
                            <label for="n1">No</label><br>
                            </td> 
                            </div>
                           </td>
                       </tr>
                       <tr>
                        <td style="vertical-align:middle">2</td>
                        <td style="vertical-align:middle">Saya Menggunakan Traanportasi Umum:Online,Angkot,Bus,Taksi,Kereta api</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q2" name="y2" value="1">
                         <label for="y2">Yes</label><br>
                         <td>
                         <input type="radio" id="q2" name="y2" value="0">
                         <label for="n2">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">3</td>
                        <td style="vertical-align:middle">Saya Tidak Memakai Masker Pada Saat Berkumpul Dengan Orang Lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q3" name="y3" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q3" name="y3" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">4</td>
                        <td style="vertical-align:middle">Saya Berjabat Dengan Orang Lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q4" name="y4" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q4" name="y4" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">5</td>
                        <td style="vertical-align:middle">Saya Tidak Membersihkan Tangan Dengan Hand Sanitizer</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q5" name="y5" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q5" name="y5" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">6</td>
                        <td style="vertical-align:middle">Saya Menyentuh Benda/Uang Juga Yang Disentuh Oleh Orang Lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q6" name="y6" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q6" name="y6" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">7</td>
                        <td style="vertical-align:middle">Saya Tidak Menjaga Jarak 1,5 Meter Dengan Orang Lain Ketika: Belanja, Bekerja, Belajar, Ibadah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q7" name="y7" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q7" name="y7" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">8</td>
                        <td style="vertical-align:middle">Saya Makan Diluar Rumah (Warung/Restaurant)</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q8" name="y8" value="1">
                         <label for="y8">Yes</label><br>
                         <td>
                         <input type="radio" id="q8" name="y8" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">9</td>
                        <td style="vertical-align:middle">Saya Tidak Minum & Cuci Tangan Dengan Sabun Setelah Tiba Di Tujuan</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q9" name="y9" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q9" name="y9" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">10</td>
                        <td style="vertical-align:middle">Saya Berada Di Wilayah Keluharan Tempat Pasien Tertular</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q10" name="y10" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q10" name="y10" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">11</td>
                        <td style="vertical-align:middle">Saya Tidak Pasang Hand Sanitizer Di Depan Pintuk Masuk, Untuk Bersihkan Tangan Sebelum Pegang Gagang Pintu</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q11" name="y11" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q11" name="y11" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">12</td>
                        <td style="vertical-align:middle">Saya Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q12" name="y12" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q12" name="y12" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">13</td>
                        <td style="vertical-align:middle">Saya tidak menyediakan : tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga di rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q13" name="y13" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q13" name="y13" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">14</td>
                        <td style="vertical-align:middle">Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas /sabun</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q14" name="y14" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q14" name="y14" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">15</td>
                        <td style="vertical-align:middle">Saya tidak segera mandi keramas setelah saya tiba di rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q15" name="y15" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q15" name="y15" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">16</td>
                        <td style="vertical-align:middle">Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q16" name="y16" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q16" name="y16" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">17</td>
                        <td style="vertical-align:middle">Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q17" name="y17" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q17" name="y17" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">18</td>
                        <td style="vertical-align:middle">Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q18" name="y18" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q18" name="y18" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">19</td>
                        <td style="vertical-align:middle">Saya jarang minum Vitamin C & E dan kurang tidur</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q19" name="y19" value="1">
                         <label for="y3">Yes</label><br>
                        <td>
                         <input type="radio" id="q19" name="y19" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">20</td>
                        <td style="vertical-align:middle">Usia Saya Diatas 60 Tahun</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q20" name="y20" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q20" name="y20" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">21</td>
                        <td style="vertical-align:middle">Saya mempunyai penyakit: Jantung/diabetes/gangguan pernafasan kronik</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q21" name="y21" value="1">
                         <label for="y3">Yes</label><br>
                         <td>
                         <input type="radio" id="q21" name="y21" value="0">
                         <label for="n3">No</label><br>
                         </div>
                        </td>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
