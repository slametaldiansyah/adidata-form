<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adidata Form</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <style>
    .btn-sm{
      margin-top: 10px;
      margin-bottom: 10px;
      margin-right: 5px;
      margin-left: 10px;

    }
  </style>
</head>
<body>
  <header>
      <div class="container">
        <div class="row" style="margin-top:10px;">
          <div class="col-6">
            <img src="assets/images/logo.svg" alt="logo">
          </div>
          <div class="col-6">
              <h2>FORM LAMARAN KERJA</h2>
          </div>
        </div>
      </div>
  </header>
  <main>
    <div class="container">
      <!-- Navigatiion Status -->
      <div class="row">
        <div class="col-3">
          Step 1..5
        </div>
        <div class="col-9">
          {{-- <form id="forms"> --}}
            <!-- Jabatan -->
            <form id="myFormId" role="form" action="/" method="post">
                @csrf
            <section id="jabatan" class="collapse show">
              <div class="form-group">
                  <select class="select2mul form-control" name="jabatan[]" id="jabatan" multiple="multiple" placeholder="jabatan">
                    @foreach ($positionlist as $p)
                    <option value="{{$p->id}}">{{$p->position}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Jabatan</small>
              </div>
            </section>


            <!-- Personal Data -->
            <section id="personal-data" class="collapse">
              <div class="form-group">
                <input name="name" type="text" class="form-control" id="name" aria-describedby="nama" placeholder="Nama Lengkap" required>
                <small id="nama" class="form-text text-muted">Nama Lengkap</small>
              </div>
              <div class="form-group">
                <textarea name="alamat" class="form-control" id="alamat" rows="3" aria-describedby="alamat" placeholder="Alamat Rumah" required></textarea>
                <small id="alamat" class="form-text text-muted">Alamat Rumah</small>
              </div>
              <div class="form-group">
                <input name="kode-pos" type="text" class="form-control" id="postal" aria-describedby="postal" placeholder="Kode Pos" required>
                <small id="postal" class="form-text text-muted">Kode Pos</small>
              </div>
              <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal-lahir" aria-describedby="tanggal-lahir" placeholder="Tanggal Lahir" required>
                                    <small id="tanggal-lahir" class="form-text text-muted">Tanggal Lahir</small>
                                </div>
                                <div class="col-6">
                                    <select class="form-control" name="baru_lulus" id="baru-lulus">
                                      <option value="0">Tidak</option>
                                      <option value="1">Ya</option>
                                    </select>
                                    <small id="baru-lulus" class="form-text text-muted">Baru Lulus</small>
                                  </div>
                            </div>

                        </div>
                        <div class="col-6">
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat-lahir" aria-describedby="tempat-lahir" placeholder="Tempat Lahir" required>
                        <small id="tempat-lahir" class="form-text text-muted">Tempat Lahir</small>
                        </div>
                    </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <select class="form-control" name="sex" id="sex">
                    <option value="">--option--</option>
                      @foreach ($sexlist as $sx)
                      <option value="{{$sx->id}}"
                        >{{$sx->sex}}</option>
                      @endforeach
                    {{-- <option value="p">Pria</option>
                    <option value="w">Wanita</option> --}}
                  </select>
                  <small id="sex" class="form-text text-muted">Jenis Kelamin</small>
                </div>

                <div class="col-6">
                  <select class="form-control" name="blood" id="blood">
                    <option value="">--option--</option>
                    @foreach ($bloodlist as $bl)
                    <option value="{{$bl->id}}"
                      >{{$bl->blood}}</option>
                    @endforeach
                    {{-- <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option> --}}
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Golongan Darah</small>
                </div>
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" required>
                <small id="email" class="form-text text-muted">Email</small>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="tel_rumah" type="text" class="form-control" id="tel-rmh" aria-describedby="tel-rmh" placeholder="Telepon Rumah" required>
                    <small id="tel-rmh" class="form-text text-muted">Telfon Rumah</small>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="tel_hp" type="text" class="form-control" id="tel-hp" aria-describedby="tel-hp" placeholder="Telepon Selular" required>
                    <small id="tel-hp" class="form-text text-muted">Telepon Selular</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="ktp" type="text" class="form-control" id="ktp" aria-describedby="nama" placeholder="No KTP" required>
                    <small id="ktp" class="form-text text-muted">No KTP</small>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="npwp" type="text" class="form-control" id="npwp" aria-describedby="nama" placeholder="No NPWP" required>
                    <small id="npwp" class="form-text text-muted">No NPWP</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  <select class="form-control" name="citizenship" id="citizenship">
                    <option value="">--option--</option>
                    @foreach ($citizenshiplist as $cs)
                    <option value="{{$cs->id}}"
                      >{{$cs->citizenship}}</option>
                    @endforeach
                  </select>
                  <small id="citizenship" class="form-text text-muted">Kewarganegaraan</small>
                </div>

                <div class="col-6">
                  <select class="form-control" name="religion" id="agama">
                    <option value="">--option--</option>
                    @foreach ($religionlist as $rl)
                    <option value="{{$rl->id}}"
                      >{{$rl->religion}}</option>
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Agama</small>
                </div>
              </div>


            </section>
            <!-- Family -->
            <section id="family" class="collapse">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="menikah" id="menikah">
                    <option value="">--option--</option>
                    @foreach ($maritalstatuslist as $mr)
                    <option value="{{$mr->id}}"
                      >{{$mr->maritalstatus}}</option>
                    @endforeach
                    {{-- <option value="1">Lajang</option>
                    <option value="2">Janda/Duda</option>
                    <option value="3">Menikah</option> --}}
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Status Pernikahan</small>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="menikah_thn" type="number" class="form-control" id="menikah-thn" aria-describedby="menikah-thn" placeholder="Tahun menikah" required>
                    <small id="menikah-thn" class="form-text text-muted">Tahun menikah</small>
                  </div>
                </div>
              </div>

              <!-- Family member -->
              <div id="center-fam">
                <span>Susunan anggota keluarga inti</span>
                <br>
                {{-- <div class="row">
                  <div class="col-md-6">
                    <select class="select2mul form-control" name="menikah" id="menikah">
                      <option value="1">Lajang</option>
                      <option value="2">Janda/Duda</option>
                      <option value="3">Menikah</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Status Pernikahan</small>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="number" class="form-control" id="menikah-thn" aria-describedby="menikah-thn" placeholder="Tahun menikah" required>
                      <small id="menikah-thn" class="form-text text-muted">Tahun menikah</small>
                    </div>
                  </div>
                </div> --}}
                <!-- Loop -->
                <div class="family-loop">
                  <div class="form-group">
                    <input name="fam_name_inti[]" type="text" class="form-control" id="fam-name-inti" aria-describedby="fam-name-inti" placeholder="Nama Pasangan / Anak" required>
                    <small id="fam-nameinti" class="form-text text-muted">Nama Pasangan / Anak</small>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="fam_status_inti[]" id="fam-statusinti">
                        <option value="">--option--</option>
                        @foreach ($familystatuslist as $fs)
                        @if ($fs->id <= 3)

                        <option value="{{$fs->id}}"
                          >{{$fs->familystatus}}</option>
                        @endif
                        @endforeach
                        {{-- <option value="1">Suami</option>
                        <option value="2">Istri</option>
                        <option value="3">Anak</option> --}}
                      </select>
                      <small id="fam-status" class="form-text text-muted">Status </small>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="fam_sex_inti[]" id="fam-sexinti">
                        <option value="">--option--</option>
                      @foreach ($sexlist as $sx)
                      <option value="{{$sx->id}}"
                        >{{$sx->sex}}</option>
                      @endforeach
                      </select>
                      <small id="fam-sexinti" class="form-text text-muted">Jenis Kelamin</small>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="fam_education_inti[]" id="fam-educationinyi">
                        <option value="">--option--</option>
                        @foreach ($educationlist as $el)
                        <option value="{{$el->id}}"
                          >{{$el->education}}</option>
                        @endforeach
                      </select>
                      <small id="fam-educationinti" class="form-text text-muted">Pendiidkan </small>
                    </div>
                    <div class="col-md-6">
                    <input name="fam_work_inti[]" type="text" class="form-control" id="fam-workinti[]" aria-describedby="fam-work" placeholder="Pekerjaan" required>

                      {{-- <select class="select2fill form-control" name="fam-work[]" id="fam-work">
                        <option value="PNS">PNS</option>
                        <option value="P">Perempuan</option>
                      </select> --}}
                      <small id="fam-workinti" class="form-text text-muted">Perkerjaan</small>
                    </div>
                  </div>

                  <hr>
                </div>
              </div>

              <hr>
              <span>Susunan anggota keluarga sendiri</span>
              <br>
              <!-- Loop -->
              <div class="family-loop">
                <div class="form-group">
                  <input name="fam_name[]" type="text" class="form-control" id="fam-name" aria-describedby="fam-name" placeholder="Nama keluarga" required>
                  <small id="fam-name[]" class="form-text text-muted">Nama keluarga</small>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <select class=" form-control" name="fam_status[]" id="fam-status">
                      <option value="">--option--</option>
                        @foreach ($familystatuslist as $fs)
                        @if ($fs->id > 3)

                        <option value="{{$fs->id}}"
                          >{{$fs->familystatus}}</option>
                        @endif
                        @endforeach
                    </select>
                    <small id="fam-status" class="form-text text-muted">Status </small>
                  </div>
                  <div class="col-md-6">
                    <select class=" form-control" name="fam_sex[]" id="fam-sex">
                      <option value="">--option--</option>
                        @foreach ($sexlist as $s)
                        <option value="{{$s->id}}"
                          >{{$s->sex}}</option>
                        @endforeach
                    </select>
                    <small id="fam-sex" class="form-text text-muted">Jenis Kelamin</small>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <select class=" form-control" name="fam_education[]" id="fam-education">
                      <option value="">--option--</option>
                        @foreach ($educationlist as $es)
                        <option value="{{$es->id}}"
                          >{{$es->education}}</option>
                        @endforeach
                    </select>
                    <small id="fam-education" class="form-text text-muted">Pendiidkan </small>
                  </div>
                  <div class="col-md-6">
                    <input name="fam_work[]" type="text" class="form-control" id="fam-work" aria-describedby="fam-work" placeholder="Pekerjaan" required>
                    {{-- <select class=" form-control" name="fam-work[]" id="fam-work">
                      <option value="PNS">PNS</option>
                      <option value="P">Perempuan</option>
                    </select> --}}
                    <small id="fam-work" class="form-text text-muted">Perkerjaan</small>
                  </div>
                </div>

                <hr>
              </div>

            </section>




              <!-- Education -->
            <section id="education" class="collapse">
              <!-- Formal -->

              <span>Formal Education</span>
              <br>
              <button type="button" id="addbtnformal" class="btn btn-primary btn-sm">+</button>
              <button type="button" id="rembtnformal" class="btn btn-primary btn-sm">-</button>
                <div class="form-group" id="isiformaled">
                  <div class="row">
                    <div class="col-md-2">
                      <select class="form-control" name="jenjang[]" id="jenjang-1">
                        <option value="">--option--</option>
                        @foreach ($educationlist as $es)
                        <option value="{{$es->id}}"
                          >{{$es->education}}</option>
                        @endforeach
                      </select>
                      <small id="jenjang-1" class="form-text text-muted">Jenjang</small>
                    </div>
                    <div class="col-md-2">
                      <input name="nama_lembaga[]" type="text" class="form-control" id="nama-lembaga-1" aria-describedby="nama" placeholder="Nama Lembaga" required>
                      <small id="nama-lembaga-1" class="form-text text-muted">Nama</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kota_lembaga[]" type="text" class="form-control" id="kota-lembaga-1" aria-describedby="nama" placeholder="Kota" required>
                      <small id="kota-lembaga-1" class="form-text text-muted">Kota</small>
                    </div>
                    <div class="col-md-2">
                      <input name="IPK[]" type="text" class="form-control" id="IPK-1" aria-describedby="nama" placeholder="IPK" required>
                      <small id="IPK-1" class="form-text text-muted">IPK</small>
                    </div>
                    <div class="col-md-2">
                      <input name="masuk_lembaga[]" type="text" class="form-control" id="masuk-lembaga-1" aria-describedby="nama" placeholder="Masuk" required>
                      <small id="masuk-lembaga-1" class="form-text text-muted">Masuk</small>
                    </div>
                    <div class="col-md-2">
                      <input name="lulus_lembaga[]" type="text" class="form-control" id="lulus-lembaga-1" aria-describedby="nama" placeholder="Lulus" required>
                      <small id="lulus-lembaga-1" class="form-text text-muted">Lulus</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <select class="form-control" name="jenjang[]" id="jenjang-2">
                        <option value="">--option--</option>
                        @foreach ($educationlist as $es)
                        <option value="{{$es->id}}"
                          >{{$es->education}}</option>
                        @endforeach
                      </select>
                      <small id="jenjang-2" class="form-text text-muted">Jenjang</small>
                    </div>
                    <div class="col-md-2">
                      <input name="nama_lembaga[]" type="text" class="form-control" id="nama-lembaga-2" aria-describedby="nama" placeholder="Nama Lembaga" required>
                      <small id="nama-lembaga-2" class="form-text text-muted">Nama</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kota_lembaga[]" type="text" class="form-control" id="kota-lembaga-2" aria-describedby="nama" placeholder="Kota" required>
                      <small id="kota-lembaga-2" class="form-text text-muted">Kota</small>
                    </div>
                    <div class="col-md-2">
                      <input name="IPK[]" type="text" class="form-control" id="IPK-2" aria-describedby="nama" placeholder="IPK" required>
                      <small id="IPK-2" class="form-text text-muted">IPK</small>
                    </div>
                    <div class="col-md-2">
                      <input name="masuk_lembaga[]" type="text" class="form-control" id="masuk-lembaga-2" aria-describedby="nama" placeholder="Masuk" required>
                      <small id="masuk-lembaga-2" class="form-text text-muted">Masuk</small>
                    </div>
                    <div class="col-md-2">
                      <input name="lulus_lembaga[]" type="text" class="form-control" id="lulus-lembaga-2" aria-describedby="nama" placeholder="Lulus" required>
                      <small id="lulus-lembaga-2" class="form-text text-muted">Lulus</small>
                    </div>
                  </div>


                </div>
                <hr>



              <!-- NonFormal -->
              <span>Nonformal Education</span>
              <br>
              <button type="button" class="btn btn-primary btn-sm">+</button>
              <button type="button" class="btn btn-primary btn-sm">-</button>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <input name="kursus_nama[]" type="text" class="form-control" id="kursus-nama-1" aria-describedby="nama" placeholder="Nama Kursus" required>
                      <small id="kursus-nama-1" class="form-text text-muted">Kursus/Training</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_tahun[]" type="text" class="form-control" id="kursus-tahun-1" aria-describedby="nama" placeholder="Tahun" required>
                      <small id="kursus-tahun-1" class="form-text text-muted">Tahun</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_durasi[]" type="text" class="form-control" id="kursus-durasi-1" aria-describedby="nama" placeholder="Lama Kursus" required>
                      <small id="kursus-durasi-1" class="form-text text-muted">Lama</small>
                    </div>
                    <div class="col-md-1">
                      <input name="kursus_ijazah[]" type="checkbox" id="kursus-ijazah-1">
                      <small id="kursus-ijazah-1" class="form-text text-muted">Ijazah</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_biaya[]" type="text" class="form-control" id="kursus-biaya-1" aria-describedby="nama" placeholder="Masuk" required>
                      <small id="kursus-biaya-1" class="form-text text-muted">Dibiayai</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input name="kursus_nama[]" type="text" class="form-control" id="kursus-nama-2" aria-describedby="nama" placeholder="Nama Kursus" required>
                      <small id="kursus-nama-2" class="form-text text-muted">Kursus/Training</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_tahun[]" type="text" class="form-control" id="kursus-tahun-2" aria-describedby="nama" placeholder="Tahun" required>
                      <small id="kursus-tahun-2" class="form-text text-muted">Tahun</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_durasi[]" type="text" class="form-control" id="kursus-durasi-2" aria-describedby="nama" placeholder="Lama Kursus" required>
                      <small id="kursus-durasi-2" class="form-text text-muted">Lama</small>
                    </div>
                    <div class="col-md-1">
                      <input name="kursus_ijazah[]" type="checkbox" id="kursus-ijazah-2">
                      <small id="kursus-ijazah-2" class="form-text text-muted">Ijazah</small>
                    </div>
                    <div class="col-md-2">
                      <input name="kursus_biaya[]" type="text" class="form-control" id="kursus-biaya-2" aria-describedby="nama" placeholder="Masuk" required>
                      <small id="kursus-biaya-2" class="form-text text-muted">Dibiayai</small>
                    </div>
                  </div>
                  <hr>
                </div>
            </section>

            <!-- Kemampuan -->

            <section id="kemampuan" class="collapse">
              <span>Kemampuan Berbahasa</span>
              <br>
              <button type="button" class="btn btn-primary btn-sm">+</button>
              <button type="button" class="btn btn-primary btn-sm">-</button>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="bahasa[]" id="bahasa-1">
                        <option value="">--option--</option>
                        @foreach ($languagelist as $ll)
                        <option value="{{$ll->id}}"
                          >{{$ll->language}}</option>
                        @endforeach
                          </select>
                      {{-- <input type="text" class="form-control" id="bahasa" aria-describedby="nama" placeholder="Bahasa" required> --}}
                      <small id="bahasa-1" class="form-text text-muted">Bahasa</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="tulis_level[]" id="tulis-level-1">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="tulis-1" class="form-text text-muted">Tulis</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="lisan_level[]" id="lisan-level-1">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="lisan-1" class="form-text text-muted">Lisan</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="baca_level[]" id="baca-level-1">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="baca-1" class="form-text text-muted">Baca</small>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="bahasa[]" id="bahasa-2">
                        <option value="">--option--</option>
                        @foreach ($languagelist as $ll)
                        <option value="{{$ll->id}}"
                          >{{$ll->language}}</option>
                        @endforeach
                          </select>
                      {{-- <input type="text" class="form-control" id="bahasa" aria-describedby="nama" placeholder="Bahasa" required> --}}
                      <small id="bahasa-2" class="form-text text-muted">Bahasa</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="tulis_level[]" id="tulis-level-2">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="tulis-2" class="form-text text-muted">Tulis</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="lisan_level[]" id="lisan-level-2">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="lisan-2" class="form-text text-muted">Lisan</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="baca_level[]" id="baca-level-2">
                        <option value="">--option--</option>
                        <option value="B">Baik</option>
                        <option value="C">Cukup</option>
                        <option value="K">Kurang</option>
                      </select>
                      <small id="baca-2" class="form-text text-muted">Baca</small>
                    </div>
                  </div>
                  <hr>
                </div>

                <!--Hard Skill-->
                <div class="form-group">
                  <div class="row">
                    <!--Komputer-->
                    <div class="col-md-6">
                      <button type="button" class="btn btn-primary btn-sm">+</button>
                      <button type="button" class="btn btn-primary btn-sm">-</button>
                      <div class="row">
                        <div class="col-md-7">
                          <input name="komputer[]" type="text" class="form-control" id="komputer-1" aria-describedby="nama" placeholder="Jenis Program" required>
                          <small id="komputer-1" class="form-text text-muted">Jenis Program</small>
                        </div>
                        <div class="col-md-5">
                          <select class="form-control" name="komputer_level[]" id="komputer-level-1">
                            <option value="">--option--</option>
                            @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                          </select>
                          <small id="komputer-1" class="form-text text-muted">Penguasaan Komputer</small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <input name="komputer[]" type="text" class="form-control" id="komputer-2" aria-describedby="nama" placeholder="Jenis Program" required>
                          <small id="komputer-2" class="form-text text-muted">Jenis Program</small>
                        </div>
                        <div class="col-md-5">
                          <select class="form-control" name="komputer_level[]" id="komputer-level-2">
                            <option value="">--option--</option>
                            @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                          </select>
                          <small id="komputer-2" class="form-text text-muted">Penguasaan Komputer</small>
                        </div>
                      </div>
                    </div>

                    <!--Special Skill-->
                    <div class="col-md-6">
                      <button type="button" class="btn btn-primary btn-sm">+</button>
                      <button type="button" class="btn btn-primary btn-sm">-</button>
                      <div class="row">
                        <div class="col-md-7">
                          <input name="special[]" type="text" class="form-control" id="special-1" aria-describedby="nama" placeholder="Kemampuan Khusus" required>
                          <small id="special-1" class="form-text text-muted">Kemampuan Khusus</small>
                        </div>
                        <div class="col-md-5">
                          <select class="form-control" name="special_level[]" id="special-level-1">
                            <option value="">--option--</option>
                            @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                          </select>
                          <small id="special-1" class="form-text text-muted">Kemampuan Khusus</small>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-7">
                          <input name="special[]" type="text" class="form-control" id="special-2" aria-describedby="nama" placeholder="Kemampuan Khusus" required>
                          <small id="special-2" class="form-text text-muted">Kemampuan Khusus</small>
                        </div>
                        <div class="col-md-5">
                          <select class="form-control" name="special_level[]" id="special-level-2">
                            <option value="">--option--</option>
                            @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                          </select>
                          <small id="special-2" class="form-text text-muted">Kemampuan Khusus</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                </div>

                <!--Sertifikasi-->
                <span>Sertifikasi Profesional</span>
                <br>
                <button type="button" class="btn btn-primary btn-sm">+</button>
                <button type="button" class="btn btn-primary btn-sm">-</button>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <input name="sertifikasi_nama[]" type="text" class="form-control" id="sertifikasi-nama-1" aria-describedby="nama" placeholder="Nama Kursus" required>
                        <small id="sertifikasi-nama-1" class="form-text text-muted">Nama Sertifikasi</small>
                      </div>
                      <div class="col-md-4">
                        <input name="sertifikasi_penerbit[]" type="text" class="form-control" id="sertifikasi-penerbit-1" aria-describedby="nama" placeholder="Penerbit" required>
                        <small id="sertifikasi-penerbit-1" class="form-text text-muted">Penerbit</small>
                      </div>
                      <div class="col-md-2">
                        <input name="sertifikasi_tahun[]" type="text" class="form-control" id="sertifikasi-tahun-1" aria-describedby="nama" placeholder="Tahun" required>
                        <small id="sertifikasi-tahun-1" class="form-text text-muted">Tahun</small>
                      </div>
                      <div class="col-md-2">
                        <input name="sertifikasi_berlaku[]" type="text" class="form-control" id="sertifikasi-berlaku-1" aria-describedby="nama" placeholder="Berlaku" required>
                        <small id="sertifikasi-berlaku-1" class="form-text text-muted">Berlaku</small>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <input name="sertifikasi_nama[]" type="text" class="form-control" id="sertifikasi-nama-2" aria-describedby="nama" placeholder="Nama Kursus" required>
                          <small id="sertifikasi-nama-2" class="form-text text-muted">Nama Sertifikasi</small>
                        </div>
                        <div class="col-md-4">
                          <input name="sertifikasi_penerbit[]" type="text" class="form-control" id="sertifikasi-penerbit-2" aria-describedby="nama" placeholder="Penerbit" required>
                          <small id="sertifikasi-penerbit-2" class="form-text text-muted">Penerbit</small>
                        </div>
                        <div class="col-md-2">
                          <input name="sertifikasi_tahun[]" type="text" class="form-control" id="sertifikasi-tahun-2" aria-describedby="nama" placeholder="Tahun" required>
                          <small id="sertifikasi-tahun-2" class="form-text text-muted">Tahun</small>
                        </div>
                        <div class="col-md-2">
                          <input name="sertifikasi_berlaku[]" type="text" class="form-control" id="sertifikasi-berlaku-2" aria-describedby="nama" placeholder="Berlaku" required>
                          <small id="sertifikasi-berlaku-2" class="form-text text-muted">Berlaku</small>
                        </div>
                      </div>
                    <hr>
                  </div>

            <button id="myButtonID" type="submit" class="btn btn-primary">Submit</button>
            </section>

          </form>
            <!--Work Experience-->
            <section id="pengalaman" class="collapse">
              <span>Pengalaman Kerja</span>
              <br>
              <button type="button" class="btn btn-primary btn-sm">+</button>
              <button type="button" class="btn btn-primary btn-sm">-</button>
              <div class="form-group" id="workexperience">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="pengalaman-nama" aria-describedby="nama" placeholder="Nama Perusahaan" required>
                    <small id="pengalaman-nama" class="form-text text-muted">Nama Perusahaan</small>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="pengalaman-bidang" aria-describedby="nama" placeholder="Bidang Perusahaan" required>
                    <small id="pengalaman-bidang" class="form-text text-muted">Bidang Perusahaan</small>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <textarea class="form-control" id="pengalaman-alamat" rows="3" aria-describedby="alamat" placeholder="Alamat Perusahaan" required></textarea>
                    <small id="pengalaman-alamat" class="form-text text-muted">Alamat Perusahaan</small>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-5">
                        <input type="date" class="form-control" id="pengalaman-mulai" aria-describedby="nama" placeholder="" required>
                        <small id="pengalaman-mulai" class="form-text text-muted">Mulai</small>
                      </div>
                      <div class="col-md-5" id="berakhir">
                        <input type="date" class="form-control" id="pengalaman-akhir" aria-describedby="nama" placeholder="" required>
                        <small class="form-text text-muted">Berakhir</small>
                      </div>
                      <div class="col-md-2">
                        <input type="checkbox" id="pengalaman-statuskerja">
                        <small class="form-text text-muted">Masih Bekerja</small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-8">
                        <input type="text" class="form-control" id="pengalaman-upah" aria-describedby="nama" placeholder="Upah Pokok" required>
                        <small id="pengalaman-upah" class="form-text text-muted">Upah Pokok</small>
                      </div>
                      <div class="col-md-4">
                        <select class="select2mul form-control" name="pengalaman-status[]" id="pengalaman-status">
                          <option value="B">Permanent</option>
                          <option value="C">Kontrak</option>
                          <option value="K">Freelancer</option>
                        </select>
                        <small id="pengalaman-status" class="form-text text-muted">Status Karyawan</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col">
                      <input type="text" class="form-control" id="pengalaman-alasan" aria-describedby="nama" placeholder="Alasan Berhenti" required>
                      <small id="pengalaman-alasan" class="form-text text-muted">Alasan Berhenti</small>
                    </div>
                  </div>
                </div>
                <hr>
              </div>

              <!--Proyek-->
              <div class="form-group" id="proyek">
                <span>Proyek</span>
                <br>
                <button type="button" class="btn btn-primary btn-sm">+</button>
                <button type="button" class="btn btn-primary btn-sm">-</button>
                <div class="row">
                  <div class="col-6">
                    <div class="col">
                      <input type="text" class="form-control" id="proyek-nama" aria-describedby="nama" placeholder="Nama Proyek" required>
                      <small id="proyek-nama" class="form-text text-muted">Nama Proyek</small>
                    </div>
                    <div class="col">
                      <div class="row">
                        <div class="col-6">
                          <input type="text" class="form-control" id="proyek-posisi" aria-describedby="nama" placeholder="Posisi" required>
                          <small id="proyek-posisi" class="form-text text-muted">Posisi</small>
                        </div>
                        <div class="col-6">
                          <input type="text" class="form-control" id="proyek-divisi" aria-describedby="nama" placeholder="Divisi" required>
                          <small id="proyek-divisi" class="form-text text-muted">Divisi</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="col">
                      <textarea class="form-control" id="proyek-deskripsi" rows="3" aria-describedby="alamat" placeholder="" required></textarea>
                      <small id="proyek-deskripsi" class="form-text text-muted">Deskripsi Perkerjaan</small>
                    </div>
                  </div>
                </div>
                <hr>
              </div>

            <!--Benefit-->
            <div class="form-group">
              <div class="row">
                <div class="col-4">
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="bpjstenagakerja">
                      </div>
                      <div class=col-6>
                        <small id="bpjstenagakerja" class="form-text text-muted">BPJS Tenagakerja</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="bpjskesehatan">
                      </div>
                      <div class=col-6>
                        <small id="bpjskesehatan" class="form-text text-muted">BPJS Kesehatan</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="kesehatan">
                      </div>
                      <div class=col-6>
                        <small id="kesehatan" class="form-text text-muted">Kesehatan</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="pajak">
                      </div>
                      <div class=col-6>
                        <small id="pajak" class="form-text text-muted">Pajak</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="transport">
                      </div>
                      <div class=col-6>
                        <small id="transport" class="form-text text-muted">Transport</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="makan">
                      </div>
                      <div class=col-6>
                        <small id="makan" class="form-text text-muted">Makan</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="bonus">
                      </div>
                      <div class=col-6>
                        <small id="bonus" class="form-text text-muted">Bonus</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="lembur">
                      </div>
                      <div class=col-6>
                        <small id="lembur" class="form-text text-muted">Lembur</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="Laptop">
                      </div>
                      <div class=col-6>
                        <small id="laptop" class="form-text text-muted">Laptop</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="danapensiun">
                      </div>
                      <div class=col-6>
                        <small id="danapensiun" class="form-text text-muted">Dana Pensiun</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input type="checkbox" id="lainnya">
                      </div>
                      <div class=col-6>
                        <small id="lainnya" class="form-text text-muted">Lainnya</small>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="benefit-lainnya" aria-describedby="nama" placeholder="Lainnya" required>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            </section>


            <!--Organisasi dan Refrensi-->
            <section id="orgnref" class="collapse">

              <!--Organisasi-->
              <span>Organisasi</span>
              <br>
              <button type="button" class="btn btn-primary btn-sm">+</button>
              <button type="button" class="btn btn-primary btn-sm">-</button>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="organisasi-nama" aria-describedby="nama" placeholder="Nama Organisasi" required>
                      <small id="organisasi-nama" class="form-text text-muted">Nama Organisasi</small>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="organisasi-jenis" aria-describedby="nama" placeholder="Jenis Organisasi" required>
                      <small id="organisasi-penerbit" class="form-text text-muted">Jenis Organisasi</small>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="organisasi-tahun" aria-describedby="nama" placeholder="Tahun" required>
                      <small id="organisasi-tahun" class="form-text text-muted">Tahun</small>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="organisasi-jabatan" aria-describedby="nama" placeholder="Jabatan" required>
                      <small id="organisasi-jabatan" class="form-text text-muted">Jabatan</small>
                    </div>
                  </div>
                  <hr>
                </div>

              <!--Refrensi-->
              <span>Refrensi dan Rekomendasi</span>
              <br>
              <button type="button" class="btn btn-primary btn-sm">+</button>
              <button type="button" class="btn btn-primary btn-sm">-</button>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="Ref-nama" aria-describedby="nama" placeholder="Nama Refrensi" required>
                      <small id="Ref-nama" class="form-text text-muted">Nama Refrensi</small>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="Ref-notlp" aria-describedby="nama" placeholder="Nomor Telepon" required>
                      <small id="Ref-notlp" class="form-text text-muted">No.Telepon</small>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="Ref-jabatan" aria-describedby="nama" placeholder="Jabatan" required>
                      <small id="Ref-jabatan" class="form-text text-muted">Jabatan</small>
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="Ref-hubungan" aria-describedby="nama" placeholder="Hubungan" required>
                      <small id="Ref-hubungan" class="form-text text-muted">Hubungan</small>
                    </div>
                  </div>
                  <hr>
                </div>
            </section>

            <!--Keterangan Lain-->
            <section id="other" class="collapse">
              <span>Informasi Lain</span>
              <br>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-lowongan" aria-describedby="nama" placeholder="" required>
                      <small id="other-lowongan" class="form-text text-muted">Dari mana Anda Mengetahui adanya Lowongan ini?</small>
                    </div>
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-kelebihan" aria-describedby="nama" placeholder="" required>
                      <small id="other-kelebihan" class="form-text text-muted">Apa kelebihan anda?</small>
                    </div>
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-kekurangan" aria-describedby="nama" placeholder="" required>
                      <small id="other-kekurangan" class="form-text text-muted">Apa kelemahan anda?</small>
                    </div>
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-mengatasi" aria-describedby="nama" placeholder="" required>
                      <small id="other-mengatasi" class="form-text text-muted">Apa yang anda lakukan untuk mengatasi kelemahan anda?</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md">
                      <input type="checkbox" id="other-sakit">
                      <small class="form-text text-muted">Apakah Anda pernah dirawat di rumah sakit dan atau sakit keras?</small>
                    </div>
                    <div class="col-md" style="display:none" id="jika-ya">
                      <input type="text" class="form-control" id="other-ya" aria-describedby="nama" placeholder="" required>
                      <small id="other-ya" class="form-text text-muted">Jika Ya, harap sebutkan penyakit yang pernah diderita?</small>
                    </div>
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-gaji" aria-describedby="nama" placeholder="" required>
                      <small id="other-gaji" class="form-text text-muted">Gaji yang diharapkan?</small>
                    </div>
                    <div class="col-md">
                      <input type="text" class="form-control" id="other-mulaikerja" aria-describedby="nama" placeholder="" required>
                      <small id="other-mulaikerja" class="form-text text-muted">Kapan anda dapat mulai bekerja?</small>
                    </div>
                  </div>
                </div>
                <hr>

                <!--Check data-->
                <div class="col">
                  <input type="checkbox" id="other-data" required>
                      <small id="other-data" class="form-text text-muted">Semua keterangan yang saya buat diatas adalah dengan jujur
                        dan sesungguhnya
                        </small>
                </div>
              </div>
            </section>

            <button type="button" class="btn btn-primary prev"> Pref</button>
            <button type="button" class="btn btn-primary next"> Next</button>
          {{-- </form> --}}
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  {{-- <script src="page.js"></script> --}}
  <script src="{{asset('pagesource/')}}/page.js"></script>
  {{-- <script src="{{asset('applicationform/')}}/page.js"></script> --}}

  <!--Check Pernah di rawat-->
  <script>
    $('#myFormId').submit(function() {
        $("#myButtonID", this)
            .html("Please Wait...")
            .attr('disabled', 'disabled');
        return true;
    });
    </script>
  <script language="javascript">
    $('#other-sakit').change(function() {
        if (document.getElementById('other-sakit').checked == true){
            document.getElementById('jika-ya').style.display = "block";
        } else {
            document.getElementById('jika-ya').style.display = "none";
        }
    });
  </script>

   <!--Check Masih kerja-->
   <script language="javascript">
    $('#pengalaman-statuskerja').change(function() {
        if (document.getElementById('pengalaman-statuskerja').checked == true){
            document.getElementById('berakhir').style.display = "none";
        } else {
            document.getElementById('berakhir').style.display = "block";
        }
    });
  </script>

  <!--Append-->
  <script language="javascript">
    $(document).ready(function(){
      $("#addbtnformal").click(function(){
        $("isiformaled").append("isiformaled");
      });
      $("#rembtnformal").click(function(){
        $("isiformaled").remove();
      });
    });
    </script>
</body>
</html>
