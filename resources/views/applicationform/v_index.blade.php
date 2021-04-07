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
    .wajib{
      color:red;
    }
  </style>
</head>
<body>
  <header>
      <div class="container">
        <div class="row" style="margin-top:10px;">
          <div class="col-6">
            <img src="{{ asset('pagesource/') }}/Logoadidata.jpg" height="90px" width="250px" alt="logo">
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
                {{-- Jabatan --}}
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
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Status Pernikahan</small>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="menikah_thn" type="number" class="form-control" id="menikah-thn" aria-describedby="menikah-thn" placeholder="Tahun menikah">
                    <small id="menikah-thn" class="form-text text-muted">Tahun menikah</small>
                  </div>
                </div>
              </div>

              <!-- Family member -->
              <div id="center-fam">
                <span>Susunan anggota keluarga inti</span>
                <br>
                <!-- Loop -->
                <div class="family-loop">
                  <div class="form-group">
                    <input name="faminti[0][name]" type="text" class="form-control" id="fam-name-inti" aria-describedby="fam-name-inti" placeholder="Nama Pasangan / Anak">
                    <small id="fam-nameinti" class="form-text text-muted">Nama Pasangan / Anak</small>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <select class="form-control" name="faminti[0][status]" id="fam-statusinti">
                        <option value="">--option--</option>
                        @foreach ($familystatuslist as $fs)
                        @if ($fs->id <= 3)

                        <option value="{{$fs->id}}"
                          >{{$fs->familystatus}}</option>
                        @endif
                        @endforeach
                      </select>
                      <small id="fam-status" class="form-text text-muted">Status </small>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="faminti[0][sex]" id="fam-sexinti">
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
                      <select class="form-control" name="faminti[0][education]" id="fam-educationinyi">
                        <option value="">--option--</option>
                        @foreach ($educationlist as $el)
                        <option value="{{$el->id}}"
                          >{{$el->education}}</option>
                        @endforeach
                      </select>
                      <small id="fam-educationinti" class="form-text text-muted">Pendiidkan </small>
                    </div>
                    <div class="col-md-6">
                    <input name="faminti[0][work]" type="text" class="form-control" id="fam-workinti[]" aria-describedby="fam-work" placeholder="Pekerjaan">
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
                  <input name="fam[0][name]" type="text" class="form-control" id="fam-name" aria-describedby="fam-name" placeholder="Nama keluarga" required>
                  <small id="fam-name[]" class="form-text text-muted">Nama keluarga</small>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <select class=" form-control" name="fam[0][status]" id="fam-status">
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
                    <select class=" form-control" name="fam[0][sex]" id="fam-sex">
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
                    <select class=" form-control" name="fam[0][education]" id="fam-education">
                      <option value="">--option--</option>
                        @foreach ($educationlist as $es)
                        <option value="{{$es->id}}"
                          >{{$es->education}}</option>
                        @endforeach
                    </select>
                    <small id="fam-education" class="form-text text-muted">Pendiidkan </small>
                  </div>
                  <div class="col-md-6">
                    <input name="fam[0][work]" type="text" class="form-control" id="fam-work" aria-describedby="fam-work" placeholder="Pekerjaan" required>
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
              <button type="button" id="addbtnformal" onclick="addBtnFormal(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" id="rembtnformal" onclick="addBtnFormal(2)" class="btn btn-primary btn-sm">-</button>
                <div class="form-group" id="formallist">
                  <div class="row">
                    <div class="col-md-2">
                      <select class="form-control" name="formal[0][jenjang]" id="jenjang-1">
                        <option value="">--option--</option>
                        @foreach ($educationlist as $es)
                        <option value="{{$es->id}}"
                          >{{$es->education}}</option>
                        @endforeach
                      </select>
                      <small id="jenjang-1" class="form-text text-muted">Jenjang</small>
                    </div>
                    <div class="col-md-2">
                      <input name="formal[0][nama]" type="text" class="form-control" id="nama-formal-1" aria-describedby="nama" placeholder="Nama formal" required>
                      <small id="nama-formal-1" class="form-text text-muted">Nama</small>
                    </div>
                    <div class="col-md-2">
                      <input name="formal[0][kota]" type="text" class="form-control" id="kota-formal-1" aria-describedby="nama" placeholder="Kota" required>
                      <small id="kota-formal-1" class="form-text text-muted">Kota</small>
                    </div>
                    <div class="col-md-2">
                      <input name="formal[0][IPK]" type="text" class="form-control" id="IPK-1" aria-describedby="nama" placeholder="IPK" required>
                      <small id="IPK-1" class="form-text text-muted">IPK</small>
                    </div>
                    <div class="col-md-2">
                      <input name="formal[0][masuk]" type="text" class="form-control" id="masuk-formal-1" aria-describedby="nama" placeholder="Masuk" required>
                      <small id="masuk-formal-1" class="form-text text-muted">Masuk</small>
                    </div>
                    <div class="col-md-2">
                      <input name="formal[0][lulus]" type="text" class="form-control" id="lulus-formal-1" aria-describedby="nama" placeholder="Lulus" required>
                      <small id="lulus-formal-1" class="form-text text-muted">Lulus</small>
                    </div>
                  </div>

                </div>
                <hr>



               <!-- NonFormal -->
              <span>Nonformal Education</span>
              <br>
              <button type="button" onclick="addBtnNonFormal(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" onclick="addBtnNonFormal(2)" class="btn btn-primary btn-sm">-</button>
                <div class="form-group" id="nonformallist">
                  <div class="row">
                    <div class="col-md-3">
                      <input name="nonformal[0][nama]" type="text" class="form-control" id="kursus-nama-1" aria-describedby="nama" placeholder="Nama Kursus" required>
                      <small id="kursus-nama-1" class="form-text text-muted">Kursus/Training</small>
                    </div>
                    <div class="col-md-2">
                      <input name="nonformal[0][tahun]" type="text" class="form-control" id="kursus-tahun-1" aria-describedby="nama" placeholder="Tahun" required>
                      <small id="kursus-tahun-1" class="form-text text-muted">Tahun</small>
                    </div>
                    <div class="col-md-2">
                      <input name="nonformal[0][durasi]" type="text" class="form-control" id="kursus-durasi-1" aria-describedby="nama" placeholder="Lama Kursus" required>
                      <small id="kursus-durasi-1" class="form-text text-muted">Lama</small>
                    </div>
                    <div class="col-md-1">
                      <input name="nonformal[0][ijazah]" type="hidden" value="0">
                      <input name="nonformal[0][ijazah]" value="1" type="checkbox" id="kursus-ijazah-1">
                      <small id="kursus-ijazah-1" class="form-text text-muted">Ijazah</small>
                    </div>
                    <div class="col-md-2">
                      <input name="nonformal[0][biaya]" type="text" class="form-control" id="kursus-biaya-1" aria-describedby="nama" placeholder="Dibiayai" required>
                      <small id="kursus-biaya-1" class="form-text text-muted">Dibiayai</small>
                    </div>
                  </div>

                </div>

                <hr>
            </section>


            <!-- Kemampuan -->

            <section id="kemampuan" class="collapse">

              <span>Kemampuan Berbahasa</span>
              <br>
              <button type="button" onclick="addBtnLanguage(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" onclick="addBtnLanguage(2)" class="btn btn-danger btn-sm">-</button>
                <div class="form-group" id="languagelist">
                  <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="bahasa[0][bahasa]" id="bahasa-1" required>
                        <option value="">--option--</option>
                        @foreach ($languagelist as $ll)
                        <option value="{{$ll->id}}"
                          >{{$ll->language}}</option>
                        @endforeach
                          </select>
                     <small id="bahasa-1" class="form-text text-muted">Bahasa</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="bahasa[0][tulis_level]" id="tulis-level-1" required>
                        <option value="">--option--</option>
                        @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                      </select>
                      <small id="tulis-1" class="form-text text-muted">Tulis</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="bahasa[0][lisan_level]" id="lisan-level-1" required>
                        <option value="">--option--</option>
                        @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                      </select>
                      <small id="lisan-1" class="form-text text-muted">Lisan</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="bahasa[0][baca_level]" id="baca-level-1" required>
                        <option value="">--option--</option>
                        @foreach ($proficiencieslevellist as $pl)
                        <option value="{{$pl->id}}"
                          >{{$pl->level}}</option>
                        @endforeach
                      </select>
                      <small id="baca-1" class="form-text text-muted">Baca</small>
                    </div>
                  </div>
                </div>
                <hr>

                 <!--Hard Skill-->
                <div class="form-group">
                  <div class="row">
                    <!--Komputer-->
                    <div class="col-md-6" id="komputerlist">
                      <button type="button" onclick="addBtnKomputer(1)" class="btn btn-primary btn-sm">+</button>
                      <button type="button" onclick="addBtnKomputer(2)" class="btn btn-danger btn-sm">-</button>
                        <div class="row">
                            <div class="col-md-7">
                            <input name="komputer[0][name]" type="text" class="form-control" aria-describedby="nama" placeholder="Jenis Program" required>
                            <small class="form-text text-muted">Jenis Program</small>
                            </div>
                            <div class="col-md-5">
                            <select class="form-control" name="komputer[0][level]" id="komputer-level-1">
                                <option value="">--option--</option>
                                @foreach ($proficiencieslevellist as $pl)
                                <option value="{{$pl->id}}"
                                >{{$pl->level}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Penguasaan Komputer</small>
                            </div>
                        </div>
                    </div>

                    <!--Special Skill-->
                    <div class="col-md-6" id="skilllist">
                      <button type="button" onclick="addBtnSkill(1)" class="btn btn-primary btn-sm">+</button>
                      <button type="button" onclick="addBtnSkill(2)" class="btn btn-danger btn-sm">-</button>
                      <div class="row">
                        <div class="col-md-7">
                          <input name="special[0][name]" type="text" class="form-control" aria-describedby="nama" placeholder="Kemampuan Khusus" required>
                          <small class="form-text text-muted">Kemampuan Khusus</small>
                        </div>
                        <div class="col-md-5">
                          <select class="form-control" name="special[0][level]">
                            <option value="">--option--</option>
                            @foreach ($proficiencieslevellist as $pl)
                            <option value="{{$pl->id}}"
                              >{{$pl->level}}</option>
                            @endforeach
                          </select>
                          <small class="form-text text-muted">Level</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                </div>

                <!--Sertifikasi-->
                <span>Sertifikasi Profesional</span>
                <br>
                <button type="button" onclick="addBtnSertifikasi(1)" class="btn btn-primary btn-sm">+</button>
                <button type="button" onclick="addBtnSertifikasi(2)" class="btn btn-danger btn-sm">-</button>
                  <div class="form-group" id="sertifikasilist">
                    <div class="row">
                      <div class="col-md-4">
                        <input name="sertifikasi[0][name]" type="text" class="form-control" id="sertifikasi-nama-1" aria-describedby="nama" placeholder="Nama Kursus" required>
                        <small id="sertifikasi-nama-1" class="form-text text-muted">Nama Sertifikasi</small>
                      </div>
                      <div class="col-md-4">
                        <input name="sertifikasi[0][penerbit]" type="text" class="form-control" id="sertifikasi-penerbit-1" aria-describedby="nama" placeholder="Penerbit" required>
                        <small id="sertifikasi-penerbit-1" class="form-text text-muted">Penerbit</small>
                      </div>
                      <div class="col-md-2">
                        <input name="sertifikasi[0][tahun]" type="text" class="form-control" id="sertifikasi-tahun-1" aria-describedby="nama" placeholder="Tahun" required>
                        <small id="sertifikasi-tahun-1" class="form-text text-muted">Tahun</small>
                      </div>
                      <div class="col-md-2">
                        <input name="sertifikasi[0][berlaku]" type="text" class="form-control" id="sertifikasi-berlaku-1" aria-describedby="nama" placeholder="Berlaku" required>
                        <small id="sertifikasi-berlaku-1" class="form-text text-muted">Berlaku</small>
                      </div>
                    </div>
                  </div>
                  <hr>

            </section>


            <!--Work Experience-->
            <section id="pengalaman" class="collapse">
              <span><h4> <strong>Pengalaman Kerja</h4></strong></span>
              <button type="button" onclick="addBtnWorkexperience(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" onclick="addBtnWorkexperience(2)" class="btn btn-danger btn-sm">-</button>
              <div  id="workexperiencelist" >
              <div class="border border-info rounded"  id="workexperience">
              <div class="mt-3 mr-3 ml-3 mb-3 form-group">
                <div class="row mb-3">
                  <div class="col-md-6">
                    <input name="pengalaman[0][nama]" type="text" class="form-control" id="pengalaman-nama" aria-describedby="nama" placeholder="Nama Perusahaan" required>
                    <small id="pengalaman-nama" class="form-text text-muted">Nama Perusahaan <small class="wajib">*</small></small>
                  </div>
                  <div class="col-md-6">
                    <input name="pengalaman[0][bidang]" required type="text" class="form-control" id="pengalaman-bidang" aria-describedby="nama" placeholder="Bidang Perusahaan" >
                    <small id="pengalaman-bidang" class="form-text text-muted">Bidang Perusahaan <small class="wajib">*</small></small>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <textarea name="pengalaman[0][alamat]" required class="form-control" id="pengalaman-alamat" rows="5" aria-describedby="alamat" placeholder="Alamat Perusahaan" ></textarea>
                    <small id="pengalaman-alamat" class="form-text text-muted">Alamat Perusahaan <small class="wajib">*</small></small>
                  </div>
                  <div class="col-md-6">
                    <div class="row mb-3">
                      <div class="col-md-7">
                        <input name="pengalaman[0][mulai]" required type="date" class="form-control" id="pengalaman-mulai" aria-describedby="nama" placeholder="" >
                        <small id="pengalaman-mulai" class="mb-3 form-text text-muted">Mulai <small class="wajib">*</small></small>
                      </div>
                      <div class="col-md-4">
                        <input type="hidden" name="pengalaman[0][statuskerja]" value="0" >
                        <input name="pengalaman[0][statuskerja]" type="checkbox" value="1" id="pengalaman-statuskerja">
                        <small class="form-text text-muted">Masih Bekerja </small>
                      </div>
                      <div class="col-md-7" id="berakhir">
                        <input name="pengalaman[0][berakhir]" required type="date" class="form-control" id="pengalaman-akhir" aria-describedby="nama" placeholder="" >
                        <small class="form-text text-muted">Berakhir <small class="wajib">*</small></small>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="row mb-3">
                      <div class="col-md-7">
                        <input name="pengalaman[0][upah]" required type="text" class="form-control" id="pengalaman-upah" aria-describedby="nama" placeholder="Upah Pokok" >
                        <small id="pengalaman-upah" class="form-text text-muted">Upah Pokok <small class="wajib">*</small></small>
                      </div>
                      <div class="col-md-5">
                        <select name="pengalaman[0][status]" required class="form-control" name="pengalaman-status[]" id="pengalaman-status">
                            <option value="">--option--</option>
                            @foreach ($employeestatuslist as $el)
                            <option value="{{$el->id}}"
                              >{{$el->employeestatus}}</option>
                            @endforeach
                        </select>
                        <small id="pengalaman-status" class="form-text text-muted">Status Karyawan <small class="wajib">*</small></small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                    <div class="col-md-12">
                      <input name="pengalaman[0][alasan]" required type="text" class="form-control" id="pengalaman-alasan" aria-describedby="nama" placeholder="Alasan Berhenti" >
                      <small id="pengalaman-alasan" class="form-text text-muted">Alasan Berhenti <small class="wajib">*</small></small>
                    </div>
                    </div>
                  </div>
                </div>
                <hr>

                <!--Proyek-->
                <div class="form-group" id="proyek-1">
                    <span><h4> <strong> PROYEK </strong></h4> </span>
                    <button type="button" onclick="addProject(0,0)" class="btn btn-primary btn-sm">+</button>
                    <div id="workEXP-0">
                    <div class="row" id="proyek-0-0">
                    <div class="col-6">
                        <div class="col mb-3">
                        <input name="pengalaman[0][proyek][0][nama]" required type="text" class="form-control" id="proyek-nama" aria-describedby="nama" placeholder="Nama Proyek" >
                        <small id="proyek-nama" class="form-text text-muted">Nama Proyek <small class="wajib">*</small></small>
                        </div>
                        <div class="col mb-3">
                        <div class="row">
                            <div class="col-6">
                            <input name="pengalaman[0][proyek][0][posisi]" required type="text" class="form-control" id="proyek-posisi" aria-describedby="nama" placeholder="Posisi" >
                            <small id="proyek-posisi" class="form-text text-muted">Posisi <small class="wajib">*</small></small>
                            </div>
                            <div class="col-6">
                            <input name="pengalaman[0][proyek][0][divisi]" required type="text" class="form-control" id="proyek-divisi" aria-describedby="nama" placeholder="Divisi" >
                            <small id="proyek-divisi" class="form-text text-muted">Divisi <small class="wajib">*</small></small>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="row">
                          <div class="col-12">
                            <textarea name="pengalaman[0][proyek][0][deskripsi]" required class="form-control" id="proyek-deskripsi" rows="4" aria-describedby="alamat" placeholder="" ></textarea>
                            <small id="proyek-deskripsi" class="form-text text-muted">Deskripsi Perkerjaan <small class="wajib">*</small></small>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>

              </div>
              </div>
              <br>
              </div>

                    <!--Benefit-->
            <div class="form-group">
              <div class="row">
                  @foreach ($benefitlist as $index => $ben)
                  @if ($index == 0)
                  <div class="col-4">
                  @else
                        @if ($index != 0)
                            @if (fmod($index,4) == 0)
                                    </div>
                            @endif
                        @endif
                      @if (fmod($index,4) == 0)
                      <div class="col-4">
                     @endif
                  @endif
                  @if ( $ben->id != 11 )
                  <div class="col">
                    <div class="row">
                      <div class=col-3>
                        <input name="benefit[]" type="checkbox" value="{{$ben->id}}">
                      </div>
                      <div class=col-6>
                        <small class="form-text text-muted">{{$ben->benefit}}</small>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                  <div class="col">
                    <input name="other" type="text" class="form-control" id="benefit-lainnya" aria-describedby="nama" placeholder="Lainnya" >
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
              <button type="button" onclick="addBtnOrganisasi(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" onclick="addBtnOrganisasi(2)" class="btn btn-primary btn-sm">-</button>
                <div class="form-group" id="organisasilist">
                  <div class="row">
                    <div class="col-md-3">
                      <input name="organisasi[0][nama]" required type="text" class="form-control" id="organisasi-nama" aria-describedby="nama" placeholder="Nama Organisasi" >
                      <small id="organisasi-nama" class="form-text text-muted">Nama Organisasi</small>
                    </div>
                    <div class="col-md-3">
                      <input name="organisasi[0][jenis]" required type="text" class="form-control" id="organisasi-jenis" aria-describedby="nama" placeholder="Jenis Organisasi" >
                      <small id="organisasi-penerbit" class="form-text text-muted">Jenis Organisasi</small>
                    </div>
                    <div class="col-md-2">
                      <input name="organisasi[0][tahun]" required type="text" class="form-control" id="organisasi-tahun" aria-describedby="nama" placeholder="Tahun" >
                      <small id="organisasi-tahun" class="form-text text-muted">Tahun</small>
                    </div>
                    <div class="col-md-2">
                      <input name="organisasi[0][jabatan]" required type="text" class="form-control" id="organisasi-jabatan" aria-describedby="nama" placeholder="Jabatan" >
                      <small id="organisasi-jabatan" class="form-text text-muted">Jabatan</small>
                    </div>
                  </div>
                </div>
                <hr>

              <!--Refrensi-->
              <span>Refrensi dan Rekomendasi</span>
              <br>
              <button type="button" onclick="addBtnRefrensi(1)" class="btn btn-primary btn-sm">+</button>
              <button type="button" onclick="addBtnRefrensi(2)" class="btn btn-primary btn-sm">-</button>
                <div class="form-group" id="refrensilist">
                  <div class="row">
                    <div class="col-md-3">
                      <input name="refrensi[0][nama]" required type="text" class="form-control" id="Ref-nama" aria-describedby="nama" placeholder="Nama Refrensi" >
                      <small id="Ref-nama" class="form-text text-muted">Nama Refrensi</small>
                    </div>
                    <div class="col-md-3">
                      <input name="refrensi[0][notlp]" required type="text" class="form-control" id="Ref-notlp" aria-describedby="nama" placeholder="Nomor Telepon" >
                      <small id="Ref-notlp" class="form-text text-muted">No.Telepon</small>
                    </div>
                    <div class="col-md-2">
                      <input name="refrensi[0][jabatan]" required type="text" class="form-control" id="Ref-jabatan" aria-describedby="nama" placeholder="Jabatan" >
                      <small id="Ref-jabatan" class="form-text text-muted">Jabatan</small>
                    </div>
                    <div class="col-md-2">
                      <input name="refrensi[0][hubungan]" required type="text" class="form-control" id="Ref-hubungan" aria-describedby="nama" placeholder="Hubungan" >
                      <small id="Ref-hubungan" class="form-text text-muted">Hubungan</small>
                    </div>
                  </div>

                </div>
                <hr>
            </section>


            <!--Keterangan Lain-->
            <section id="other" class="collapse">
              <span>Informasi Lain</span>
              <br>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-md">
                      <input name="informasilain_lowongan" type="text" class="form-control" id="other-lowongan" aria-describedby="nama" placeholder="" >
                      <small id="other-lowongan" class="form-text text-muted">Dari mana Anda Mengetahui adanya Lowongan ini?</small>
                    </div>
                    <div class="col-md">
                      <input name="informasilain_kelebihan" type="text" class="form-control" id="other-kelebihan" aria-describedby="nama" placeholder="" >
                      <small id="other-kelebihan" class="form-text text-muted">Apa kelebihan anda?</small>
                    </div>
                    <div class="col-md">
                      <input name="informasilain_kekurangan" type="text" class="form-control" id="other-kekurangan" aria-describedby="nama" placeholder="" >
                      <small id="other-kekurangan" class="form-text text-muted">Apa kelemahan anda?</small>
                    </div>
                    <div class="col-md">
                      <input name="informasilain_mengatasi"  type="text" class="form-control" id="other-mengatasi" aria-describedby="nama" placeholder="" >
                      <small id="other-mengatasi" class="form-text text-muted">Apa yang anda lakukan untuk mengatasi kelemahan anda?</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md">
                        <input name="informasilain_sakit" type="hidden" value="0">
                      <input name="informasilain_sakit" type="checkbox" value="1" id="other-sakit">
                      <small class="form-text text-muted">Apakah Anda pernah dirawat di rumah sakit dan atau sakit keras?</small>
                    </div>
                    <div class="col-md" style="display:none" id="jika-ya">
                      <input name="informasilain_sakit_ya" type="text" class="form-control" id="other-ya" aria-describedby="nama" placeholder="" >
                      <small id="other-ya" class="form-text text-muted">Jika Ya, harap sebutkan penyakit yang pernah diderita?</small>
                    </div>
                    <div class="col-md">
                      <input name="informasilain_gaji" type="text" class="form-control" id="other-gaji" aria-describedby="nama" placeholder="" >
                      <small id="other-gaji" class="form-text text-muted">Gaji yang diharapkan?</small>
                    </div>
                    <div class="col-md">
                      <input name="informasilain_mulaikerja" type="text" class="form-control" id="other-mulaikerja" aria-describedby="nama" placeholder="" >
                      <small id="other-mulaikerja" class="form-text text-muted">Kapan anda dapat mulai bekerja?</small>
                    </div>
                  </div>
                </div>
                <hr>

                <!--Check data-->
                <div class="col">
                  <input name="informasilain_data" type="checkbox" value="1" id="other-data" required>
                      <small id="other-data" class="form-text text-muted">Semua keterangan yang saya buat diatas adalah dengan jujur
                        dan sesungguhnya
                        </small>
                </div>
              </div>


            {{-- <button id="myButtonID" type="submit" class="btn btn-primary">Submit</button> --}}
            </section>
        <div class="row">
            <button type="button" class="btn btn-primary prev"> Pref</button>
            <div class="ml-3" id="myNextID" style="display: block">
                <button type="button" id="myButtonID" class="btn btn-primary next"> Next</button>
            </div>
            <div class="ml-3" id="mySubmitId" style="display: none">
                <button id="myButtonID" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
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
  {{-- <script src="{{asset('pagesource/')}}/createinput.js"></script> --}}

  {{-- Formal --}}
    <script>
        var fo = 0;
        function addBtnFormal(x) {
            if (x == 1) {
            fo++;
            //jenjang
            var div1 = document.createElement("div");
                        div1.className = 'row';
                        div1.id = 'formal-'+fo;
            var div1_1 = document.createElement("div");
                        div1_1.className = 'col-md-2';
            var select = document.createElement("select");
                        select.setAttribute("class",'form-control');
                        select.setAttribute("name",'formal['+fo+'][jenjang]');
            var small = document.createElement("small");
                        small.className = 'form-text text-muted';
                        small.append('Jenjang');
            var option = document.createElement("option");
                        option.id = '';
                        option.append("--option--");
                        select.append(option);
            $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: '{{ url('education/show') }}',
            dataType: 'json',
            success: function (data) {
                    // console.log(data.dataE);
                    var education = data.dataE;
                    education.forEach(educationList);
                    function educationList(item, index) {
                        var optionD = document.createElement("option");
                        optionD.value = item.id;
                        optionD.append(item.education);
                        select.append(optionD);
                    }
                },
            error:function(){
                    console.log(data.dataE);
                }
            });
            div1_1.append(select);
            div1_1.append(small);
            div1.append(div1_1);

            //nama
            var div1_2 = document.createElement("div");
            div1_2.className = 'col-md-2';
            var input1_1 = document.createElement("input");
            input1_1.setAttribute("name",'formal['+fo+'][nama]');
            input1_1.setAttribute("type",'text');
            input1_1.setAttribute("class",'form-control');
            input1_1.setAttribute("placeholder",'Nama');
            input1_1.attributes.required = "required";
            var small_2 = document.createElement("small");
            small_2.className = 'form-text text-muted';
            small_2.append('Nama');
            div1_2.append(input1_1);
            div1_2.append(small_2);
            div1.append(div1_2);

            //Kota
            var div1_3 = document.createElement("div");
            div1_3.className = 'col-md-2';
            var input1_2 = document.createElement("input");
            input1_2.setAttribute("name",'formal['+fo+'][kota]');
            input1_2.setAttribute("type",'text');
            input1_2.setAttribute("class",'form-control');
            input1_2.setAttribute("placeholder",'Kota');
            input1_2.attributes.required = "required";
            var small_3 = document.createElement("small");
            small_3.className = 'form-text text-muted';
            small_3.append('Kota');
            div1_3.append(input1_2);
            div1_3.append(small_3);
            div1.append(div1_3);

            //IPK
            var div1_4 = document.createElement("div");
            div1_4.className = 'col-md-2';
            var input1_3 = document.createElement("input");
            input1_3.setAttribute("name",'formal['+fo+'][IPK]');
            input1_3.setAttribute("type",'text');
            input1_3.setAttribute("class",'form-control');
            input1_3.setAttribute("placeholder",'Kota');
            input1_3.attributes.required = "required";
            var small_4 = document.createElement("small");
            small_4.className = 'form-text text-muted';
            small_4.append('IPK');
            div1_4.append(input1_3);
            div1_4.append(small_4);
            div1.append(div1_4);

            //masuk
            var div1_5 = document.createElement("div");
            div1_5.className = 'col-md-2';
            var input1_4 = document.createElement("input");
            input1_4.setAttribute("name",'formal['+fo+'][masuk]');
            input1_4.setAttribute("type",'text');
            input1_4.setAttribute("class",'form-control');
            input1_4.setAttribute("placeholder",'Masuk');
            input1_4.attributes.required = "required";
            var small_5 = document.createElement("small");
            small_5.className = 'form-text text-muted';
            small_5.append('Masuk');
            div1_5.append(input1_4);
            div1_5.append(small_5);
            div1.append(div1_5);

            //lulus
            var div1_6 = document.createElement("div");
            div1_6.className = 'col-md-2';
            var input1_5 = document.createElement("input");
            input1_5.setAttribute("name",'formal['+fo+'][lulus]');
            input1_5.setAttribute("type",'text');
            input1_5.setAttribute("class",'form-control');
            input1_5.setAttribute("placeholder",'Lulus');
            input1_5.attributes.required = "required";
            var small_6 = document.createElement("small");
            small_6.className = 'form-text text-muted';
            small_6.append('Lulus');
            div1_6.append(input1_5);
            div1_6.append(small_6);
            div1.append(div1_6);

            document.getElementById("formallist").appendChild(div1);
            }else if(x == 2){
                    if (fo > 0) {
                        var formaldel = document.getElementById('formal-'+fo);
                        formaldel.remove();
                        fo--;
                    }else{
                    alert('form tidak bisa dihapus lagi');
                    }
                }
            }
            // console.log(n);
    </script>
  {{-- NonFormal --}}
    <script>
        var nofo = 0;
        function addBtnNonFormal(x) {
          if (x == 1) {
            nofo++;
          var div1 = document.createElement("div");
                      div1.className = 'row';
                      div1.id = 'nonformal-'+nofo;
          //nama
          var div1_2 = document.createElement("div");
          div1_2.className = 'col-md-3';
          var input1_1 = document.createElement("input");
          input1_1.setAttribute("name",'nonformal['+nofo+'][nama]');
          input1_1.setAttribute("type",'text');
          input1_1.setAttribute("class",'form-control');
          input1_1.setAttribute("placeholder",'Nama Kursus');
          var small_2 = document.createElement("small");
          small_2.className = 'form-text text-muted';
          small_2.append('Nama Kursus');
          div1_2.append(input1_1);
          div1_2.append(small_2);
          div1.append(div1_2);

          //Tahun
          var div1_3 = document.createElement("div");
          div1_3.className = 'col-md-2';
          var input1_2 = document.createElement("input");
          input1_2.setAttribute("name",'nonformal['+nofo+'][tahun]');
          input1_2.setAttribute("type",'text');
          input1_2.setAttribute("class",'form-control');
          input1_2.setAttribute("placeholder",'Tahun');
          var small_3 = document.createElement("small");
          small_3.className = 'form-text text-muted';
          small_3.append('Tahun');
          div1_3.append(input1_2);
          div1_3.append(small_3);
          div1.append(div1_3);

          //Durasi
          var div1_4 = document.createElement("div");
          div1_4.className = 'col-md-2';
          var input1_3 = document.createElement("input");
          input1_3.setAttribute("name",'nonformal['+nofo+'][durasi]');
          input1_3.setAttribute("type",'text');
          input1_3.setAttribute("class",'form-control');
          input1_3.setAttribute("placeholder",'Lama Kursus');
          var small_4 = document.createElement("small");
          small_4.className = 'form-text text-muted';
          small_4.append('Durasi');
          div1_4.append(input1_3);
          div1_4.append(small_4);
          div1.append(div1_4);

          //ijazah
          var div1_5 = document.createElement("div");
          div1_5.className = 'col-md-1';
          var input1_4_h = document.createElement("input");
          input1_4_h.setAttribute("name",'nonformal['+nofo+'][ijazah]');
          input1_4_h.setAttribute("type", 'hidden');
          input1_4_h.setAttribute("value", '0');
          var input1_4 = document.createElement("input");
          input1_4.setAttribute("name",'nonformal['+nofo+'][ijazah]');
          input1_4.setAttribute("type",'checkbox');
          input1_4.setAttribute("value", '1');
          var small_5 = document.createElement("small");
          small_5.className = 'form-text text-muted';
          small_5.append('Ijazah');
          div1_5.append(input1_4_h);
          div1_5.append(input1_4);
          div1_5.append(small_5);
          div1.append(div1_5);

          //lulus
          var div1_6 = document.createElement("div");
          div1_6.className = 'col-md-2';
          var input1_5 = document.createElement("input");
          input1_5.setAttribute("name",'nonformal['+nofo+'][biaya]');
          input1_5.setAttribute("type",'text');
          input1_5.setAttribute("class",'form-control');
          input1_5.setAttribute("placeholder",'Dibiayai');
          var small_6 = document.createElement("small");
          small_6.className = 'form-text text-muted';
          small_6.append('Dibiaya');
          div1_6.append(input1_5);
          div1_6.append(small_6);
          div1.append(div1_6);

          document.getElementById("nonformallist").appendChild(div1);
          }else if(x == 2){
                  if (nofo > 0) {
                      var formaldel = document.getElementById('nonformal-'+nofo);
                      formaldel.remove();
                      nofo--;
                  }else{
                  alert('form tidak bisa dihapus lagi');
                  }
              }
          }
    </script>
  {{-- Language --}}
    <script>
        var b = 0;
        function addBtnLanguage(x) {
        if (x == 1) {
        b++;
        //jenjang
        var div1 = document.createElement("div");
                    div1.className = 'row';
                    div1.id = 'language-'+b;
        var div1_1 = document.createElement("div");
                    div1_1.className = 'col-md-3';
        var select1 = document.createElement("select");
                    select1.setAttribute("class",'form-control');
                    select1.setAttribute("name",'bahasa['+b+'][bahasa]');
                    select1.setAttribute("required",'required');
        var small = document.createElement("small");
                    small.className = 'form-text text-muted';
                    small.append('Bahasa');
        var optionLang = document.createElement("option");
                    optionLang.value = '';
                    optionLang.append("--option--");
                    select1.append(optionLang);
        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: '{{ url('language/show') }}',
        dataType: 'json',
        success: function (data) {
                //   console.log(data.dataE);
                var language = data.dataE;
                language.forEach(fordata);
                function fordata(item, index) {
                    var optionLangD = document.createElement("option");
                    optionLangD.value = item.id;
                    optionLangD.append(item.language);
                    select1.append(optionLangD);
                }
            },
        error:function(){
                console.log(data.dataE);
            }
        });
        div1_1.append(select1);
        div1_1.append(small);
        div1.append(div1_1);

        var div1_2 = document.createElement("div");
                    div1_2.className = 'col-md-3';
        var select2 = document.createElement("select");
                    select2.setAttribute("class",'form-control');
                    select2.setAttribute("name",'bahasa['+b+'][tulis_level]');
                    select2.setAttribute("required",'required');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Tulis');
        var optionLevel = document.createElement("option");
                    optionLevel.value = '';
                    optionLevel.append("--option--");
                    select2.append(optionLevel);

        var div1_3 = document.createElement("div");
                    div1_3.className = 'col-md-3';
        var select3 = document.createElement("select");
                    select3.setAttribute("class",'form-control');
                    select3.setAttribute("name",'bahasa['+b+'][lisan_level]');
                    select3.setAttribute("required",'required');
        var small3 = document.createElement("small");
                    small3.className = 'form-text text-muted';
                    small3.append('Lisan');
        var optionLevel3 = document.createElement("option");
                    optionLevel3.value = '';
                    optionLevel3.append("--option--");
                    select3.append(optionLevel3);


        var div1_4 = document.createElement("div");
                    div1_4.className = 'col-md-3';
        var select4 = document.createElement("select");
                    select4.setAttribute("class",'form-control');
                    select4.setAttribute("name",'bahasa['+b+'][baca_level]');
                    select4.setAttribute("required",'required');
        var small4 = document.createElement("small");
                    small4.className = 'form-text text-muted';
                    small4.append('Baca');
        var optionLevel4 = document.createElement("option");
                    optionLevel4.value = '';
                    optionLevel4.append("--option--");
                    select4.append(optionLevel4);

        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: '{{ url('proficiencieslevel/show') }}',
        dataType: 'json',
        success: function (data) {
                //   console.log(data.dataE);
                var proficiencieslevel = data.dataE;
                proficiencieslevel.forEach(fordata);
                function fordata(item, index) {
                    var optionPdata = document.createElement("option");
                    optionPdata.value = item.id;
                    optionPdata.append(item.level);
                    select2.append(optionPdata);
                    var optionPdata3 = document.createElement("option");
                    optionPdata3.value = item.id;
                    optionPdata3.append(item.level);
                    select3.append(optionPdata3);
                    var optionPdata4 = document.createElement("option");
                    optionPdata4.value = item.id;
                    optionPdata4.append(item.level);
                    select4.append(optionPdata4);
                }
            },
        error:function(){
                console.log(data.dataE);
            }
        });

        //create
        div1_2.append(select2);
        div1_2.append(small1);
        div1.append(div1_2);
        div1_3.append(select3);
        div1_3.append(small3);
        div1.append(div1_3);
        div1_4.append(select4);
        div1_4.append(small4);
        div1.append(div1_4);

        document.getElementById("languagelist").appendChild(div1);
        }else if(x == 2){
                if (b > 0) {
                    var formaldel = document.getElementById('language-'+b);
                    formaldel.remove();
                    b--;
                }else{
                alert('form tidak bisa dihapus lagi');
                }
            }
        }
    </script>
  {{-- Komputer Proficiency --}}
    <script>
        var k = 0;
        function addBtnKomputer(x) {
        if (x == 1) {
        k++;
        //Jenis Program
        var div1 = document.createElement("div");
                    div1.className = 'row';
                    div1.id = 'komputer-'+k;
        var div1_1 = document.createElement("div");
                    div1_1.className = 'col-md-7';
        var input1 = document.createElement("input");
                    input1.setAttribute("class",'form-control');
                    input1.setAttribute("name",'komputer['+k+'][name]');
                    input1.setAttribute("type",'text');
                    input1.setAttribute("placeholder",'Jenis Program');
                    input1.setAttribute("required",'required');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Jenis Program');
        div1_1.append(input1);
        div1_1.append(small1);
        div1.append(div1_1);

        var div1_2 = document.createElement("div");
                    div1_2.className = 'col-md-5';
        var select2 = document.createElement("select");
                    select2.setAttribute("class",'form-control');
                    select2.setAttribute("name",'komputer['+k+'][level]');
                    select2.setAttribute("required",'required');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Penguasaan Komputer');
        var optionLevel = document.createElement("option");
                    optionLevel.value = '';
                    optionLevel.append("--option--");
                    select2.append(optionLevel);

        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: '{{ url('proficiencieslevel/show') }}',
        dataType: 'json',
        success: function (data) {
                //   console.log(data.dataE);
                var proficiencieslevel = data.dataE;
                proficiencieslevel.forEach(fordata);
                function fordata(item, index) {
                    var optionPdata = document.createElement("option");
                    optionPdata.value = item.id;
                    optionPdata.append(item.level);
                    select2.append(optionPdata);
                }
            },
        error:function(){
                console.log(data.dataE);
            }
        });

        //create
        div1_2.append(select2);
        div1_2.append(small1);
        div1.append(div1_2);

        document.getElementById("komputerlist").appendChild(div1);
        }else if(x == 2){
                if (k > 0) {
                    var formaldel = document.getElementById('komputer-'+k);
                    formaldel.remove();
                    k--;
                }else{
                alert('form tidak bisa dihapus lagi');
                }
            }
        }
    </script>
  {{-- Spesial Skill Proficiency --}}
    <script>
        var s = 0;
        function addBtnSkill(x) {
        if (x == 1) {
        s++;
        //Kemampuan Khusus
        var div1 = document.createElement("div");
                    div1.className = 'row';
                    div1.id = 'skill-'+s;
        var div1_1 = document.createElement("div");
                    div1_1.className = 'col-md-7';
        var input1 = document.createElement("input");
                    input1.setAttribute("class",'form-control');
                    input1.setAttribute("name",'special['+s+'][name]');
                    input1.setAttribute("type",'text');
                    input1.setAttribute("placeholder",'Kemampuan Khusus');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Kemampuan Khusus');
        div1_1.append(input1);
        div1_1.append(small1);
        div1.append(div1_1);

        var div1_2 = document.createElement("div");
                    div1_2.className = 'col-md-5';
        var select2 = document.createElement("select");
                    select2.setAttribute("class",'form-control');
                    select2.setAttribute("name",'special['+s+'][level]');
                    select2.setAttribute("required",'required');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Level');
        var optionLevel = document.createElement("option");
                    optionLevel.value = '';
                    optionLevel.append("--option--");
                    select2.append(optionLevel);

        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: '{{ url('proficiencieslevel/show') }}',
        dataType: 'json',
        success: function (data) {
                //   console.log(data.dataE);
                var proficiencieslevel = data.dataE;
                proficiencieslevel.forEach(fordata);
                function fordata(item, index) {
                    var optionPdata = document.createElement("option");
                    optionPdata.value = item.id;
                    optionPdata.append(item.level);
                    select2.append(optionPdata);
                }
            },
        error:function(){
                console.log(data.dataE);
            }
        });

        //create
        div1_2.append(select2);
        div1_2.append(small1);
        div1.append(div1_2);

        document.getElementById("skilllist").appendChild(div1);
        }else if(x == 2){
                if (s > 0) {
                    var formaldel = document.getElementById('skill-'+s);
                    formaldel.remove();
                    s--;
                }else{
                alert('form tidak bisa dihapus lagi');
                }
            }
        }
    </script>
  {{-- Sertifikasi --}}
    <script>
        var sf = 0;
        function addBtnSertifikasi(x) {
        if (x == 1) {
        sf++;
        //Sertifikasi nama
        var div1 = document.createElement("div");
                    div1.className = 'row';
                    div1.id = 'sertifikasi-'+sf;
        var div1_1 = document.createElement("div");
                    div1_1.className = 'col-md-4';
        var input1 = document.createElement("input");
                    input1.setAttribute("class",'form-control');
                    input1.setAttribute("name",'sertifikasi['+sf+'][name]');
                    input1.setAttribute("type",'text');
                    input1.setAttribute("placeholder",'Nama Kursus');
        var small1 = document.createElement("small");
                    small1.className = 'form-text text-muted';
                    small1.append('Nama Kursus');
        div1_1.append(input1);
        div1_1.append(small1);
        div1.append(div1_1);

        //Sertifikasi Penerbit
        var div1_2 = document.createElement("div");
                    div1_2.className = 'col-md-4';
        var input2 = document.createElement("input");
                    input2.setAttribute("class",'form-control');
                    input2.setAttribute("name",'sertifikasi['+sf+'][penerbit]');
                    input2.setAttribute("type",'text');
                    input2.setAttribute("placeholder",'Penerbit');
        var small2 = document.createElement("small");
                    small2.className = 'form-text text-muted';
                    small2.append('Penerbit');
        div1_2.append(input2);
        div1_2.append(small2);
        div1.append(div1_2);

        //Sertifikasi Tahun
        var div1_3 = document.createElement("div");
                    div1_3.className = 'col-md-2';
        var input3 = document.createElement("input");
                    input3.setAttribute("class",'form-control');
                    input3.setAttribute("name",'sertifikasi['+sf+'][tahun]');
                    input3.setAttribute("type",'text');
                    input3.setAttribute("placeholder",'Tahun');
        var small3 = document.createElement("small");
                    small3.className = 'form-text text-muted';
                    small3.append('Tahun');
        div1_3.append(input3);
        div1_3.append(small3);
        div1.append(div1_3);

        //Sertifikasi Tahun
        var div1_4 = document.createElement("div");
                    div1_4.className = 'col-md-2';
        var input4 = document.createElement("input");
                    input4.setAttribute("class",'form-control');
                    input4.setAttribute("name",'sertifikasi['+sf+'][berlaku]');
                    input4.setAttribute("type",'text');
                    input4.setAttribute("placeholder",'Berlaku');
        var small4 = document.createElement("small");
                    small4.className = 'form-text text-muted';
                    small4.append('Berlaku');
        div1_4.append(input4);
        div1_4.append(small4);
        div1.append(div1_4);

        document.getElementById("sertifikasilist").appendChild(div1);
        }else if(x == 2){
                if (sf > 0) {
                    var formaldel = document.getElementById('sertifikasi-'+sf);
                    formaldel.remove();
                    sf--;
                }else{
                alert('form tidak bisa dihapus lagi');
                }
            }
        }
    </script>
  {{-- Work Experiecne --}}
  <script>
    var wx = 0;
    var pr = 0;
    function addBtnWorkexperience(x) {
    if (x == 1) {

    wx++;
    //Sertifikasi nama
    var div1_1 = document.createElement("div");
                div1_1.className = 'border border-info rounded';
                div1_1.id = 'workexperience-'+wx;
    var div1_2 = document.createElement("div");
                div1_2.className = 'mt-3 mr-3 ml-3 mb-3 form-group';

    var div1_2_1 = document.createElement("div");
                  div1_2_1.className = 'row mb-3';
                  var div1_2_1_1 = document.createElement("div");
                      div1_2_1_1.className = 'col-md-6';
                      var input1_2_1_1 = document.createElement("input");
                          input1_2_1_1.className = 'form-control';
                          input1_2_1_1.type = 'text';
                          input1_2_1_1.name = 'pengalaman['+wx+'][nama]';
                          input1_2_1_1.required = 'required';
                          input1_2_1_1.placeholder = 'Nama Perusahaan';
                      var smal1_2_1_1 = document.createElement("small");
                          smal1_2_1_1.className = 'form-text text-muted';
                          var smal1_2_1_1_1 = document.createElement("small");
                              smal1_2_1_1_1.className = 'wajib';
                              smal1_2_1_1_1.append('*');
                          smal1_2_1_1.append('Nama Perusahaan ');
                          smal1_2_1_1.append(smal1_2_1_1_1);
                      div1_2_1_1.append(input1_2_1_1);
                      div1_2_1_1.append(smal1_2_1_1);
                      div1_2_1.append(div1_2_1_1);

                  var div1_2_1_2 = document.createElement("div");
                      div1_2_1_2.className = 'col-md-6';
                      var input1_2_1_2 = document.createElement("input");
                          input1_2_1_2.className = 'form-control';
                          input1_2_1_2.type = 'text';
                          input1_2_1_2.name = 'pengalaman['+wx+'][bidang]';
                          input1_2_1_2.required = 'required';
                          input1_2_1_2.placeholder = 'Bidang Perusahaan';
                      var smal1_2_1_2 = document.createElement("small");
                          smal1_2_1_2.className = 'form-text text-muted';
                          var smal1_2_1_2_1 = document.createElement("small");
                              smal1_2_1_2_1.className = 'wajib';
                              smal1_2_1_2_1.append('*');
                          smal1_2_1_2.append('Bidang Perusahaan ');
                          smal1_2_1_2.append(smal1_2_1_2_1);
                      div1_2_1_2.append(input1_2_1_2);
                      div1_2_1_2.append(smal1_2_1_2);
                      div1_2_1.append(div1_2_1_2);



    var div1_2_2 = document.createElement("div");
                  div1_2_2.className = 'row mb-3';
                  var div1_2_2_1 = document.createElement("div");
                      div1_2_2_1.className = 'col-md-6';
                      var textarea1_2_2_1 = document.createElement("textarea");
                          textarea1_2_2_1.className = 'form-control';
                          textarea1_2_2_1.name = 'pengalaman['+wx+'][alamat]';
                          textarea1_2_2_1.rows = '5';
                          textarea1_2_2_1.placeholder = 'Alamat Perusahaan';
                          textarea1_2_2_1.required = 'required';
                          var smal1_2_2_1 = document.createElement("small");
                              smal1_2_2_1.className = 'form-text text-muted';
                              smal1_2_2_1.append('Alamat Perusahaan ');
                              var smal1_2_2_1_1_wajib = document.createElement("small");
                                  smal1_2_2_1_1_wajib.className = 'wajib';
                                  smal1_2_2_1_1_wajib.append('*');
                                  smal1_2_2_1.append(smal1_2_2_1_1_wajib);
                                  div1_2_2_1.append(textarea1_2_2_1);
                                  div1_2_2_1.append(smal1_2_2_1);
                                  div1_2_2.append(div1_2_2_1);

                  var div1_2_2_2 = document.createElement("div");
                      div1_2_2_2.className = 'col-md-6';
                      var div1_2_2_2_1 = document.createElement("div");
                          div1_2_2_2_1.className = 'row mb-3';
                          var div1_2_2_2_1_1 = document.createElement("div");
                              div1_2_2_2_1_1.className = 'col-md-7';
                                var input1_2_2_2_1_1 = document.createElement("input");
                                    input1_2_2_2_1_1.name = 'pengalaman['+wx+'][mulai]';
                                    input1_2_2_2_1_1.className = 'form-control';
                                    input1_2_2_2_1_1.type = 'date';
                                    input1_2_2_2_1_1.required = 'required';
                                    var smallinput1_2_2_2_1_1 = document.createElement("small");
                                        smallinput1_2_2_2_1_1.className = 'mb-3 form-text text-muted';
                                        smallinput1_2_2_2_1_1.append('Mulai ');
                                        var small1_2_2_2_1_1_wajib = document.createElement("small");
                                        small1_2_2_2_1_1_wajib.className = 'wajib';
                                        small1_2_2_2_1_1_wajib.append('*');
                                        smallinput1_2_2_2_1_1.append(small1_2_2_2_1_1_wajib);
                                  div1_2_2_2_1_1.append(input1_2_2_2_1_1);
                                  div1_2_2_2_1_1.append(smallinput1_2_2_2_1_1);

                          var div1_2_2_2_1_2 = document.createElement("div");
                              div1_2_2_2_1_2.className = 'col-md-4';
                                var input1_2_2_2_1_2 = document.createElement("input");
                                    input1_2_2_2_1_2.name = 'pengalaman['+wx+'][statuskerja]';
                                    input1_2_2_2_1_2.value = '0';
                                    input1_2_2_2_1_2.type = 'hidden';
                                var input1_2_2_2_1_2_1 = document.createElement("input");
                                    input1_2_2_2_1_2_1.name = 'pengalaman['+wx+'][statuskerja]';
                                    input1_2_2_2_1_2_1.value = '1';
                                    input1_2_2_2_1_2_1.type = 'checkbox';
                                    var smallinput1_2_2_2_1_2 = document.createElement("small");
                                        smallinput1_2_2_2_1_2.className = 'mb-3 form-text text-muted';
                                        smallinput1_2_2_2_1_2.append('Masih Bekerja  ');

                                  div1_2_2_2_1_2.append(input1_2_2_2_1_2);
                                  div1_2_2_2_1_2.append(input1_2_2_2_1_2_1);
                                  div1_2_2_2_1_2.append(smallinput1_2_2_2_1_2);

                          var div1_2_2_2_1_3 = document.createElement("div");
                              div1_2_2_2_1_3.className = 'col-md-7';
                                var input1_2_2_2_1_3 = document.createElement("input");
                                    input1_2_2_2_1_3.name = 'pengalaman['+wx+'][berakhir]';
                                    input1_2_2_2_1_3.className = 'form-control';
                                    input1_2_2_2_1_3.type = 'date';
                                    input1_2_2_2_1_3.required = 'required';
                                    var small1_2_2_2_1_3 = document.createElement("small");
                                        small1_2_2_2_1_3.className = 'mb-3 form-text text-muted';
                                        small1_2_2_2_1_3.append('Berakhir ');
                                        var small1_2_2_2_1_3_1 = document.createElement("small");
                                        small1_2_2_2_1_3_1.className = 'wajib';
                                        small1_2_2_2_1_3_1.append('*');
                                        small1_2_2_2_1_3.append(small1_2_2_2_1_3_1);
                                  div1_2_2_2_1_3.append(input1_2_2_2_1_3);
                                  div1_2_2_2_1_3.append(small1_2_2_2_1_3);


                                  div1_2_2_2_1.append(div1_2_2_2_1_1);
                                  div1_2_2_2_1.append(div1_2_2_2_1_2);
                                  div1_2_2_2_1.append(div1_2_2_2_1_3);
                                  div1_2_2_2.append(div1_2_2_2_1);
                                  div1_2_2.append(div1_2_2_2);

    var div1_2_3 = document.createElement("div");
                  div1_2_3.className = 'row';
                  var div1_2_3_1 = document.createElement("div");
                      div1_2_3_1.className = 'col-md-6';
                      var div1_2_3_1_1 = document.createElement("div");
                          div1_2_3_1_1.className = 'row mb-3';
                          var div1_2_3_1_1_1 = document.createElement("div");
                              div1_2_3_1_1_1.className = 'col-md-7';
                              var input1_2_3_1_1_1 = document.createElement("input");
                                  input1_2_3_1_1_1.className = 'form-control';
                                  input1_2_3_1_1_1.name = 'pengalaman['+wx+'][upah]';
                                  input1_2_3_1_1_1.type = 'text';
                                  input1_2_3_1_1_1.required = 'required';
                                  input1_2_3_1_1_1.placeholder = 'Upah Pokok';
                              var small1_2_3_1_1_1 = document.createElement("small");
                                  small1_2_3_1_1_1.className = 'form-text text-muted';
                                  small1_2_3_1_1_1.append('Upah Pokok ');
                                  var small1_2_3_1_1_1_w = document.createElement("small");
                                      small1_2_3_1_1_1_w.className = 'wajib';
                                      small1_2_3_1_1_1_w.append('*');

                                      div1_2_3_1_1_1.append(input1_2_3_1_1_1);
                                      div1_2_3_1_1_1.append(small1_2_3_1_1_1);
                                      small1_2_3_1_1_1.append(small1_2_3_1_1_1_w);

                          var div1_2_3_1_1_2 = document.createElement("div");
                              div1_2_3_1_1_2.className = 'col-md-5';
                              var select1_2_3_1_1_2 = document.createElement("select");
                                  select1_2_3_1_1_2.className = 'form-control';
                                  select1_2_3_1_1_2.required = 'required';
                                  select1_2_3_1_1_2.name = 'pengalaman['+wx+'][status]';
                                  var option1_2_3_1_1_2 = document.createElement("option");
                                      option1_2_3_1_1_2.value = '';
                                      option1_2_3_1_1_2.append("--option--");
                                      select1_2_3_1_1_2.append(option1_2_3_1_1_2);
                                      $.ajax({
                                        type: 'GET', //THIS NEEDS TO BE GET
                                        url: '{{ url('employestatus/show') }}',
                                        dataType: 'json',
                                        success: function (data) {
                                                //   console.log(data.dataE);
                                                var employestatus = data.dataE;
                                                employestatus.forEach(fordata);
                                                function fordata(item, index) {
                                                    var optionPdata = document.createElement("option");
                                                    optionPdata.value = item.id;
                                                    optionPdata.append(item.employeestatus);
                                                    select1_2_3_1_1_2.append(optionPdata);
                                                }
                                            },
                                        error:function(){
                                                console.log(data.dataE);
                                            }
                                        });
                                        div1_2_3_1_1_2.append(select1_2_3_1_1_2);
                                        var small1_2_3_1_1_2 = document.createElement("small");
                                            small1_2_3_1_1_2.className = 'form-text text-muted';
                                            small1_2_3_1_1_2.append('Status Karyawan ');
                                            var small1_2_3_1_1_2_w = document.createElement("small");
                                                small1_2_3_1_1_2_w.className = 'wajib';
                                                small1_2_3_1_1_2_w.append('*');
                                                small1_2_3_1_1_2.append(small1_2_3_1_1_2_w);
                                                div1_2_3_1_1_2.append(small1_2_3_1_1_2);

                    div1_2_3_1.append(div1_2_3_1_1);
                    div1_2_3_1_1.append(div1_2_3_1_1_1);
                    div1_2_3_1_1.append(div1_2_3_1_1_2);

                  var div1_2_3_2 = document.createElement("div");
                      div1_2_3_2.className = 'col-md-6';
                      var div1_2_3_2_1 = document.createElement("div");
                          div1_2_3_2_1.className = 'row';
                          var div1_2_3_2_1_1 = document.createElement("div");
                              div1_2_3_2_1_1.className = 'col-md-12';
                              var input1_2_3_2_1_1 = document.createElement("input");
                                  input1_2_3_2_1_1.className = 'form-control';
                                  input1_2_3_2_1_1.name = 'pengalaman['+wx+'][alasan]';
                                  input1_2_3_2_1_1.placeholder = 'Alasan Berhenti';
                                  var small1_2_3_2_1_1 = document.createElement("small");
                                      small1_2_3_2_1_1.className = 'form-text text-muted';
                                      small1_2_3_2_1_1.append('Alasan Berhenti ');
                                      var small1_2_3_2_1_1_w = document.createElement("small");
                                          small1_2_3_2_1_1_w.className = 'wajib';
                                          small1_2_3_2_1_1_w.append('*');
                                          small1_2_3_2_1_1.append(small1_2_3_2_1_1_w);

                                          div1_2_3_2_1_1.append(input1_2_3_2_1_1);
                                          div1_2_3_2_1_1.append(small1_2_3_2_1_1);
                                          div1_2_3_2_1.append(div1_2_3_2_1_1);
                                          div1_2_3_2.append(div1_2_3_2_1);


                                          div1_2_3.append(div1_2_3_1);
                                          div1_2_3.append(div1_2_3_2);

                                            div1_2.append(div1_2_1);
                                            div1_2.append(div1_2_2);
                                            div1_2.append(div1_2_3);
    var hr = document.createElement("hr");
        div1_2.append(hr);
    //Project
    var div1_2_5 = document.createElement("div");
    div1_2_5.id = 'workEXP-'+wx;
    var div1_2_4 = document.createElement("div");
                  div1_2_4.className = 'form-group';
                  div1_2_4.id = 'proyek-'+wx+'-'+pr;
         var span1_2_4 = document.createElement("span");
             var h41_2_4 = document.createElement("h4");
                 var strong1_2_4 = document.createElement("strong");
                     strong1_2_4.append('PROYEK');
                     div1_2_4.append(span1_2_4);
                     span1_2_4.append(h41_2_4);
                     h41_2_4.append(strong1_2_4);
                     div1_2_5.append(div1_2_4);
                     div1_2.append(div1_2_5);

        var buttonadd1_2_4 = document.createElement("button");
            buttonadd1_2_4.type = 'button';
            buttonadd1_2_4.className = 'btn btn-primary btn-sm';
            buttonadd1_2_4.setAttribute('onclick','addProject('+wx+','+pr+')');
            buttonadd1_2_4.append('+');
            div1_2_4.append(buttonadd1_2_4);

        var div1_2_4_4 = document.createElement("div");
            div1_2_4_4.className = 'row';
            var div1_2_4_4_1 = document.createElement("div");
                div1_2_4_4_1.className = 'col-6';
                var div1_2_4_4_1_1 = document.createElement("div");
                    div1_2_4_4_1_1.className = 'col mb-3';
                    var input1_2_4_4_1_1 = document.createElement("input");
                        input1_2_4_4_1_1.className = 'form-control';
                        input1_2_4_4_1_1.name = 'pengalaman['+wx+'][proyek]['+pr+'][nama]';
                        input1_2_4_4_1_1.type = 'text';
                        input1_2_4_4_1_1.required = 'required';
                        input1_2_4_4_1_1.placeholder = 'Nama Proyek';
                        var small1_2_4_4_1_1 = document.createElement("small");
                            small1_2_4_4_1_1.className = 'form-text text-muted';
                            small1_2_4_4_1_1.append('Nama Proyek ');
                            var small1_2_4_4_1_1_w = document.createElement("small");
                                small1_2_4_4_1_1_w.className = 'wajib';
                                small1_2_4_4_1_1_w.append('*');
                                small1_2_4_4_1_1.append(small1_2_4_4_1_1_w);
                                div1_2_4_4_1_1.append(input1_2_4_4_1_1);
                                div1_2_4_4_1_1.append(small1_2_4_4_1_1);
                                div1_2_4_4_1.append(div1_2_4_4_1_1);

                    var div1_2_4_4_1_1_1 = document.createElement("div");
                        div1_2_4_4_1_1_1.className = 'col mb-3';
                        var div1_2_4_4_1_1_1_1 = document.createElement("div");
                            div1_2_4_4_1_1_1_1.className = 'row';
                            var div1_2_4_4_1_1_1_1_1 = document.createElement("div");
                                div1_2_4_4_1_1_1_1_1.className = 'col-6';
                                var input1_2_4_4_1_1_1_1_1 = document.createElement("input");
                                    input1_2_4_4_1_1_1_1_1.className = 'form-control';
                                    input1_2_4_4_1_1_1_1_1.name = 'pengalaman['+wx+'][proyek]['+pr+'][posisi]';
                                    input1_2_4_4_1_1_1_1_1.type = 'text';
                                    input1_2_4_4_1_1_1_1_1.required = 'required';
                                    input1_2_4_4_1_1_1_1_1.placeholder = 'Posisi';
                                    var small1_2_4_4_1_1_1_1_1 = document.createElement("small");
                                        small1_2_4_4_1_1_1_1_1.className = 'form-text text-muted';
                                        small1_2_4_4_1_1_1_1_1.append('Posisi ');
                                        var small1_2_4_4_1_1_1_1_1_w = document.createElement("small");
                                            small1_2_4_4_1_1_1_1_1_w.className = 'wajib';
                                            small1_2_4_4_1_1_1_1_1_w.append('*');
                                            small1_2_4_4_1_1_1_1_1.append(small1_2_4_4_1_1_1_1_1_w);
                                            div1_2_4_4_1_1_1_1_1.append(input1_2_4_4_1_1_1_1_1);
                                            div1_2_4_4_1_1_1_1_1.append(small1_2_4_4_1_1_1_1_1);
                                            div1_2_4_4_1_1_1_1.append(div1_2_4_4_1_1_1_1_1);

                            var div1_2_4_4_1_1_1_1_2 = document.createElement("div");
                                div1_2_4_4_1_1_1_1_2.className = 'col-6';
                                var input1_2_4_4_1_1_1_1_2 = document.createElement("input");
                                    input1_2_4_4_1_1_1_1_2.className = 'form-control';
                                    input1_2_4_4_1_1_1_1_2.name = 'pengalaman['+wx+'][proyek]['+pr+'][divisi]';
                                    input1_2_4_4_1_1_1_1_2.type = 'text';
                                    input1_2_4_4_1_1_1_1_2.required = 'required';
                                    input1_2_4_4_1_1_1_1_2.placeholder = 'Divisi';
                                    var small1_2_4_4_1_1_1_1_2 = document.createElement("small");
                                        small1_2_4_4_1_1_1_1_2.className = 'form-text text-muted';
                                        small1_2_4_4_1_1_1_1_2.append('Divisi ');
                                        var small1_2_4_4_1_1_1_1_2_w = document.createElement("small");
                                            small1_2_4_4_1_1_1_1_2_w.className = 'wajib';
                                            small1_2_4_4_1_1_1_1_2_w.append('*');
                                            small1_2_4_4_1_1_1_1_2.append(small1_2_4_4_1_1_1_1_2_w);
                                            div1_2_4_4_1_1_1_1_2.append(input1_2_4_4_1_1_1_1_2);
                                            div1_2_4_4_1_1_1_1_2.append(small1_2_4_4_1_1_1_1_2);
                                            div1_2_4_4_1_1_1_1.append(div1_2_4_4_1_1_1_1_2);

                                            div1_2_4_4_1_1_1.append(div1_2_4_4_1_1_1_1);
                                            div1_2_4_4_1.append(div1_2_4_4_1_1_1);


                                            div1_2_4_4.append(div1_2_4_4_1);
                                            div1_2_4.append(div1_2_4_4);

            var div1_2_4_4_2 = document.createElement("div");
                div1_2_4_4_2.className = 'col-6 mb-3';
                var div1_2_4_4_2_1 = document.createElement("div");
                    div1_2_4_4_2_1.className = 'col';
                    var textarea1_2_4_4_2_1 = document.createElement("textarea");
                        textarea1_2_4_4_2_1.className = 'form-control';
                        textarea1_2_4_4_2_1.name = 'pengalaman['+wx+'][proyek]['+pr+'][deskripsi]';
                        textarea1_2_4_4_2_1.rows = '4';
                        textarea1_2_4_4_2_1.required = 'required';
                        var small1_2_4_4_2_1 = document.createElement("small");
                            small1_2_4_4_2_1.className = 'form-text text-muted';
                            small1_2_4_4_2_1.append('Deskripsi Perkerjaan ');
                            var small1_2_4_4_2_1_w = document.createElement("small");
                                small1_2_4_4_2_1_w.className = 'wajib';
                                small1_2_4_4_2_1_w.append('*');
                                small1_2_4_4_2_1.append(small1_2_4_4_2_1_w);
                                div1_2_4_4_2_1.append(textarea1_2_4_4_2_1);
                                div1_2_4_4_2_1.append(small1_2_4_4_2_1);
                                div1_2_4_4_2.append(div1_2_4_4_2_1);
                                div1_2_4_4.append(div1_2_4_4_2);





    // var hr2 = document.createElement("hr");
    // div1_2_5.append(div1_2_4);
    div1_1.append(div1_2);
    document.getElementById("workexperiencelist").appendChild(div1_1);
    }else if(x == 2){
            if (wx > 0) {
                var formaldel = document.getElementById('workexperience-'+wx);
                formaldel.remove();
                wx--;
            }else{
            alert('form tidak bisa dihapus lagi');
            }
        }
    }


    var proadd = 0;
    function addProject(wxi,pro) {
      if (pro >= 0) {
          proadd++;
          var p_div = document.createElement("div");
          p_div.className = 'row';
          p_div.id = 'proyek-'+wxi+'-'+proadd;
            var p_div_1 = document.createElement("div");
            p_div_1.className = 'col-6';
              var p_div_1_1 = document.createElement("div")
              p_div_1_1.className = 'col mb-3';
                var p_input_1_1 = document.createElement("input");
                p_input_1_1.className = 'form-control';
                p_input_1_1.placeholder = 'Nama Proyek';
                p_input_1_1.type = 'text';
                p_input_1_1.required = 'required';
                p_input_1_1.name = 'pengalaman['+wxi+'][proyek]['+proadd+'][nama]';
                  var p_small_1_1 = document.createElement("small");
                  p_small_1_1.className = 'form-text text-muted';
                  p_small_1_1.append('Nama Proyek ');
                    var p_small_w_1_1 = document.createElement("small");
                    p_small_w_1_1.className = 'wajib';
                    p_small_w_1_1.append('*');
                    p_small_1_1.append(p_small_w_1_1);

                    p_div_1_1.append(p_input_1_1);
                    p_div_1_1.append(p_small_1_1);




              var p_div_1_2 = document.createElement("div")
              p_div_1_2.className = 'col mb-3';
                var p_div_1_2_1 = document.createElement("div");
                p_div_1_2_1.className = 'row';
                  var p_div_1_2_1_1 = document.createElement("div");
                  p_div_1_2_1_1.className = 'col-6';
                    var p_input_1_2_1_1 = document.createElement("input");
                    p_input_1_2_1_1.className = 'form-control';
                    p_input_1_2_1_1.type = 'text';
                    p_input_1_2_1_1.placeholder = 'Posisi';
                    p_input_1_2_1_1.name = 'pengalaman['+wxi+'][proyek]['+proadd+'][posisi]';
                      var p_small_1_2_1_1 = document.createElement("small");
                      p_small_1_2_1_1.className = 'form-text text-muted';
                      p_small_1_2_1_1.append('Posisi ');
                        var p_small_w_1_2_1_1 = document.createElement("small");
                        p_small_w_1_2_1_1.className = 'wajib';
                        p_small_w_1_2_1_1.append('*');
                        p_small_1_2_1_1.append(p_small_w_1_2_1_1);

                        p_div_1_2_1_1.append(p_input_1_2_1_1);
                        p_div_1_2_1_1.append(p_small_1_2_1_1);
                        p_div_1_2_1.append(p_div_1_2_1_1);

                  var p_div_1_2_1_2 = document.createElement("div");
                  p_div_1_2_1_2.className = 'col-6';
                    var p_input_1_2_1_2 = document.createElement("input");
                    p_input_1_2_1_2.className = 'form-control';
                    p_input_1_2_1_2.type = 'text';
                    p_input_1_2_1_2.placeholder = 'Divisi';
                    p_input_1_2_1_2.name = 'pengalaman['+wxi+'][proyek]['+proadd+'][divisi]';
                      var p_small_1_2_1_2 = document.createElement("small");
                      p_small_1_2_1_2.className = 'form-text text-muted';
                      p_small_1_2_1_2.append('Divisi ');
                        var p_small_w_1_2_1_2 = document.createElement("small");
                        p_small_w_1_2_1_2.className = 'wajib';
                        p_small_w_1_2_1_2.append('*');
                        p_small_1_2_1_2.append(p_small_w_1_2_1_2);

                        p_div_1_2_1_2.append(p_input_1_2_1_2);
                        p_div_1_2_1_2.append(p_small_1_2_1_2);
                        p_div_1_2_1.append(p_div_1_2_1_2);

                        p_div_1_2.append(p_div_1_2_1);


              p_div_1.append(p_div_1_1);
              p_div_1.append(p_div_1_2);

            var p_div_2 = document.createElement("div");
            p_div_2.className = 'col-6 mb-3';
              var p_div_2_1 = document.createElement("div");
              p_div_2_1.className = 'row';
                var p_div_2_1_1 = document.createElement("div");
                p_div_2_1_1.className = 'col-10';
                  var p_textarea_2_1_1 = document.createElement("textarea");
                  p_textarea_2_1_1.className = 'form-control';
                  p_textarea_2_1_1.rows = '4';
                  p_textarea_2_1_1.required = 'required';
                  p_textarea_2_1_1.name = 'pengalaman['+wxi+'][proyek]['+proadd+'][deskripsi]';
                  var p_small_2_1_1 = document.createElement("small");
                  p_small_2_1_1.className = 'form-text text-muted';
                  p_small_2_1_1.append('Deskripsi Perkerjaan ');
                    var p_small_w_2_1_1 = document.createElement("small");
                    p_small_w_2_1_1.className = 'wajib';
                    p_small_w_2_1_1.append('*');
                    p_small_2_1_1.append(p_small_w_2_1_1);
                    p_div_2_1_1.append(p_textarea_2_1_1);
                    p_div_2_1_1.append(p_small_2_1_1);



                var p_div_2_1_2 = document.createElement("div");
                  var p_button_2_1_2 = document.createElement("button");
                  p_button_2_1_2.className = 'btn btn-danger btn-sm';
                  p_button_2_1_2.type = 'button';
                  p_button_2_1_2.setAttribute('onclick','delProject('+wxi+','+proadd+')');
                  p_button_2_1_2.append('-');
                  p_div_2_1_2.append(p_button_2_1_2);

              p_div_2_1.append(p_div_2_1_1);
              p_div_2_1.append(p_div_2_1_2);
              p_div_2.append(p_div_2_1);

            p_div.append(p_div_1);
            p_div.append(p_div_2);

          document.getElementById('workEXP-'+wxi).appendChild(p_div);
      }
    }

    function delProject(work_exp,pro_del) {
      var formprodel = document.getElementById('proyek-'+work_exp+'-'+pro_del);
                formprodel.remove();
    }

</script>
  {{-- Organisasi --}}
  <script>
    var or = 0;
    function addBtnOrganisasi(x) {
    if (x == 1) {
    or++;
    //Organisasi nama
    var div1 = document.createElement("div");
                div1.className = 'row';
                div1.id = 'organisasi-'+or;
    var div1_1 = document.createElement("div");
                div1_1.className = 'col-md-3';
    var input1 = document.createElement("input");
                input1.setAttribute("class",'form-control');
                input1.setAttribute("name",'organisasi['+or+'][nama]');
                input1.setAttribute("type",'text');
                input1.setAttribute("placeholder",'Nama Organisasi');
                input1.required = 'required';
    var small1 = document.createElement("small");
                small1.className = 'form-text text-muted';
                small1.append('Nama Kursus ');
    var small1_1 = document.createElement("small");
                small1_1.className = 'wajib';
                small1_1.append('*');
                small1.append(small1_1);
    div1_1.append(input1);
    div1_1.append(small1);
    div1.append(div1_1);

    //Jenis Organisasi
    var div1_2 = document.createElement("div");
                div1_2.className = 'col-md-3';
    var input2 = document.createElement("input");
                input2.setAttribute("class",'form-control');
                input2.setAttribute("name",'organisasi['+or+'][jenis]');
                input2.required = 'required';
                input2.setAttribute("type",'text');
                input2.setAttribute("placeholder",'Jenis Organisasi');
    var small2 = document.createElement("small");
                small2.className = 'form-text text-muted';
                small2.append('Jenis Organisasi ');
                var small2_1 = document.createElement("small");
                small2_1.className = 'wajib';
                small2_1.append('*');
                small2.append(small2_1);

    div1_2.append(input2);
    div1_2.append(small2);
    div1.append(div1_2);

    //Organisasi Tahun
    var div1_3 = document.createElement("div");
                div1_3.className = 'col-md-2';
    var input3 = document.createElement("input");
                input3.setAttribute("class",'form-control');
                input3.setAttribute("name",'organisasi['+or+'][tahun]');
                input3.setAttribute("type",'text');
                input3.required = 'required';
                input3.setAttribute("placeholder",'Tahun');
    var small3 = document.createElement("small");
                small3.className = 'form-text text-muted';
                small3.append('Tahun ');
                var small3_1 = document.createElement("small");
                small3_1.className = 'wajib';
                small3_1.append('*');
                small3.append(small3_1);
    div1_3.append(input3);
    div1_3.append(small3);
    div1.append(div1_3);

    //Jabatan
    var div1_4 = document.createElement("div");
                div1_4.className = 'col-md-2';
    var input4 = document.createElement("input");
                input4.setAttribute("class",'form-control');
                input4.setAttribute("name",'organisasi['+or+'][jabatan]');
                input4.setAttribute("type",'text');
                input4.required = 'required';
                input4.setAttribute("placeholder",'Jabatan');
    var small4 = document.createElement("small");
                small4.className = 'form-text text-muted';
                small4.append('Jabatan ');
                var small4_1 = document.createElement("small");
                small4_1.className = 'wajib';
                small4_1.append('*');
                small4.append(small4_1);
    div1_4.append(input4);
    div1_4.append(small4);
    div1.append(div1_4);

    document.getElementById("organisasilist").appendChild(div1);
    }else if(x == 2){
            if (or > 0) {
                var formaldel = document.getElementById('organisasi-'+or);
                formaldel.remove();
                or--;
            }else{
            alert('form organsisasi tidak bisa dihapus lagi');
            }
        }
    }
</script>
  {{-- Refrensi --}}
  <script>
    var re = 0;
    function addBtnRefrensi(x) {
    if (x == 1) {
    re++;
    //Refrensi nama
    var div1 = document.createElement("div");
                div1.className = 'row';
                div1.id = 'refrensi-'+re;
    var div1_1 = document.createElement("div");
                div1_1.className = 'col-md-3';
    var input1 = document.createElement("input");
                input1.setAttribute("class",'form-control');
                input1.setAttribute("name",'refrensi['+re+'][nama]');
                input1.setAttribute("type",'text');
                input1.required = 'required';
                input1.setAttribute("placeholder",'Nama Refrensi');
                input1.required = 'required';
    var small1 = document.createElement("small");
                small1.className = 'form-text text-muted';
                small1.append('Nama Refrensi ');
    var small1_1 = document.createElement("small");
                small1_1.className = 'wajib';
                small1_1.append('*');
                small1.append(small1_1);
    div1_1.append(input1);
    div1_1.append(small1);
    div1.append(div1_1);

    //Jenis Organisasi
    var div1_2 = document.createElement("div");
                div1_2.className = 'col-md-3';
    var input2 = document.createElement("input");
                input2.setAttribute("class",'form-control');
                input2.setAttribute("name",'refrensi['+re+'][notlp]');
                input2.required = 'required';
                input2.setAttribute("type",'text');
                input2.setAttribute("placeholder",'Nomor Telepon');
    var small2 = document.createElement("small");
                small2.className = 'form-text text-muted';
                small2.append('No.Telepon ');
                var small2_1 = document.createElement("small");
                small2_1.className = 'wajib';
                small2_1.append('*');
                small2.append(small2_1);

    div1_2.append(input2);
    div1_2.append(small2);
    div1.append(div1_2);

    //Jabatan
    var div1_3 = document.createElement("div");
                div1_3.className = 'col-md-2';
    var input3 = document.createElement("input");
                input3.setAttribute("class",'form-control');
                input3.setAttribute("name",'refrensi['+re+'][jabatan]');
                input3.setAttribute("type",'text');
                input3.required = 'required';
                input3.setAttribute("placeholder",'Jabatan');
    var small3 = document.createElement("small");
                small3.className = 'form-text text-muted';
                small3.append('Jabatan ');
                var small3_1 = document.createElement("small");
                small3_1.className = 'wajib';
                small3_1.append('*');
                small3.append(small3_1);
    div1_3.append(input3);
    div1_3.append(small3);
    div1.append(div1_3);

    //Hubungan
    var div1_4 = document.createElement("div");
                div1_4.className = 'col-md-2';
    var input4 = document.createElement("input");
                input4.setAttribute("class",'form-control');
                input4.setAttribute("name",'refrensi['+re+'][hubungan]');
                input4.setAttribute("type",'text');
                input4.required = 'required';
                input4.setAttribute("placeholder",'Hubungan');
    var small4 = document.createElement("small");
                small4.className = 'form-text text-muted';
                small4.append('Hubungan ');
                var small4_1 = document.createElement("small");
                small4_1.className = 'wajib';
                small4_1.append('*');
                small4.append(small4_1);
    div1_4.append(input4);
    div1_4.append(small4);
    div1.append(div1_4);

    document.getElementById("refrensilist").appendChild(div1);
    }else if(x == 2){
            if (re > 0) {
                var formaldel = document.getElementById('refrensi-'+re);
                formaldel.remove();
                re--;
            }else{
            alert('form Refrensi tidak bisa dihapus lagi');
            }
        }
    }
</script>
  <!--Check Pernah di rawat-->
      <!-- Checkbox -->
      <script type="text/javascript">
        $(document).ready(function() {
             // on form submit
            $("#myFormId").on('submit', function() {
                // to each unchecked checkbox
                $(this + 'input[type=checkbox]:not(:checked)').each(function () {
                    // set value 0 and check it
                    $(this).attr('checked', true).val(0);
                });
            })
        })
    </script>
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
