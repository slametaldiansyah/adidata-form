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
          <div class="col-5">
            <img src="{{ asset('pagesource/') }}/Logoadidata.jpg" height="90px" width="250px" alt="logo">
          </div>
          <div class="col-7" style="text-transform: uppercase;">
              <h2>LAMARAN KERJA {{$candidate->name}}</h2>
          </div>
        </div>
      </div>
  </header>
  <main>
    <div class="container">
      <!-- Navigatiion Status -->
      <div class="row">
        <div class="col-3">
        </div>
        <div class="col-9">
            <section id="jabatan" class="collapse show">
              <div class="form-group">
                  <select disabled class="select2mul form-control" name="jabatan[]" id="jabatan" multiple="multiple" placeholder="jabatan">
                    @foreach ($candidate->additionalinformation as $p)
                        @foreach ($p->position as $pos)
                            <option selected>{{$pos->position}}</option>
                        @endforeach
                    @endforeach
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Jabatan</small>
              </div>
            </section>


            <!-- Personal Data -->
            <section id="personal-data" class="collapse show">
              <div class="form-group">
                <input value="{{$candidate->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="nama" placeholder="Nama Lengkap" readonly>
                <small id="nama" class="form-text text-muted">Nama Lengkap</small>
              </div>
              <div class="form-group">
                <textarea value="{{$candidate->homeaddress}}" name="alamat" class="form-control" id="alamat" rows="3" aria-describedby="alamat" placeholder="Alamat Rumah" readonly>{{$candidate->homeaddress}}</textarea>
                <small id="alamat" class="form-text text-muted">Alamat Rumah</small>
              </div>
              <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <input name="tanggal_lahir" type="date" class="form-control" id="tanggal-lahir" aria-describedby="tanggal-lahir" placeholder="Tanggal Lahir" value="{{$candidate->birthdate}}" readonly>
                                    <small id="tanggal-lahir" class="form-text text-muted">Tanggal Lahir</small>
                                </div>
                                <div class="col-6">
                                    <select disabled class="form-control" name="baru_lulus" id="baru-lulus">
                                      @if ($candidate->isfreshgraduate == 1)
                                            <option value="1" selected>Ya</option>
                                          @else
                                          <option value="0" selected>Tidak</option>
                                      @endif
                                    </select>
                                    <small id="baru-lulus" class="form-text text-muted">Baru Lulus</small>
                                  </div>
                            </div>

                        </div>
                        <div class="col-6">
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat-lahir" aria-describedby="tempat-lahir" placeholder="Tempat Lahir" value="{{$candidate->birthplace}}" readonly>
                        <small id="tempat-lahir" class="form-text text-muted">Tempat Lahir</small>
                        </div>
                    </div>
              </div>

              <div class="row mb-3">
                <div class="col-6">
                  <select disabled class="form-control" name="sex" id="sex">
                    <option value="{{$candidate->sex->id}}">{{$candidate->sex->sex}}</option>
                  </select>
                  <small id="sex" class="form-text text-muted">Jenis Kelamin</small>
                </div>

                <div class="col-6">
                  <select disabled class="form-control" name="blood" id="blood">
                    <option value="{{$candidate->bloodtype->id}}">{{$candidate->bloodtype->blood}}</option>
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Golongan Darah</small>
                </div>
              </div>
              <div class="form-group">
                <input value="{{$candidate->email}}" name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email" readonly>
                <small id="email" class="form-text text-muted">Email</small>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input value="{{$candidate->phonenumber}}" name="tel_rumah" type="text" class="form-control" id="tel-rmh" aria-describedby="tel-rmh" placeholder="Telepon Rumah" readonly>
                    <small id="tel-rmh" class="form-text text-muted">Telfon Rumah</small>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input value="{{$candidate->cellphonenumber}}" name="tel_hp" type="text" class="form-control" id="tel-hp" aria-describedby="tel-hp" placeholder="Telepon Selular" readonly>
                    <small id="tel-hp" class="form-text text-muted">Telepon Selular</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input value="{{$candidate->ktpnumber}}" name="ktp" type="text" class="form-control" id="ktp" aria-describedby="nama" placeholder="No KTP" readonly>
                    <small id="ktp" class="form-text text-muted">No KTP</small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input value="{{$candidate->npwpnumber}}" name="npwp" type="text" class="form-control" id="npwp" aria-describedby="nama" placeholder="No NPWP" readonly>
                    <small id="npwp" class="form-text text-muted">No NPWP</small>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-6">
                  <select class="form-control" name="citizenship" id="citizenship" disabled>
                    <option value="{{$candidate->citizenship->id}}">{{$candidate->citizenship->citizenship}}</option>
                  </select>
                  <small id="citizenship" class="form-text text-muted">Kewarganegaraan</small>
                </div>

                <div class="col-6">
                  <select class="form-control" name="religion" id="agama" disabled>
                    <option value="{{$candidate->religion->id}}">{{$candidate->religion->religion}}</option>
                  </select>
                  <small id="emailHelp" class="form-text text-muted">Agama</small>
                </div>
              </div>


            </section>

             <!-- Family -->
            <section id="family" class="collapse show">
              <div class="row">
                <div class="col-md-6">
                  <select class="form-control" name="menikah" id="menikah" disabled>
                      @foreach ($candidate->family as $f)
                      @foreach ($f->maritalstatus as $mar)
                      <option selected>{{$mar->maritalstatus}}</option>
                      @endforeach
                      @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Status Pernikahan</small>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      @if (isset($candidate->family->maritalyear))
                      <input value="{{$candidate->family->maritalyear}}" name="menikah_thn" type="number" class="form-control" id="menikah-thn" aria-describedby="menikah-thn" placeholder="Tahun menikah" readonly>
                      <small id="menikah-thn" class="form-text text-muted">Tahun menikah</small>
                      @else
                      <input value="" name="menikah_thn" type="number" class="form-control" id="menikah-thn" aria-describedby="menikah-thn" placeholder="---" readonly>
                      <small id="menikah-thn" class="form-text text-muted">Tahun menikah</small>
                      @endif
                  </div>
                </div>
              </div>
              <hr>
              <!-- Family member -->
              @foreach ($candidate->family as $f)
              @foreach ($f->maritalstatus as $mar)
                @if ($mar->id == 1)
                @else
                @foreach ($candidate->familymember as $fmi)
                @if ($fmi->familystatusid < 3)
                <div id="center-fam">
                    <div class="mb-2">
                        <h4>Susunan anggota keluarga inti</h4>
                    </div>
                    <!-- Loop -->
                    <div id="faminti" class="family-loop">
                        <div class="form-group">
                        <input readonly value="{{$fmi->name}}" name="faminti[0][name]" type="text" class="form-control" id="fam-name-inti" aria-describedby="fam-name-inti" placeholder="Nama Pasangan / Anak">
                        <small id="fam-nameinti" class="form-text text-muted">Nama Pasangan / Anak</small>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <select disabled class="form-control" name="faminti[0][status]" id="fam-statusinti">
                            <option value="{{$fmi->familystatus->id}}">{{$fmi->familystatus->familystatus}}</option>
                            </select>
                            <small id="fam-status" class="form-text text-muted">Status </small>
                        </div>
                        <div class="col-md-6">
                            <select disabled class="form-control" name="faminti[0][sex]" id="fam-sexinti">
                            <option value="{{$fmi->sex->id}}">{{$fmi->sex->sex}}</option>
                            </select>
                            <small id="fam-sexinti" class="form-text text-muted">Jenis Kelamin</small>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6">
                            <select disabled class="form-control" name="faminti[0][education]" id="fam-educationinyi">
                            <option value="{{$fmi->education->id}}">{{$fmi->education->education}}</option>
                            </select>
                            <small id="fam-educationinti" class="form-text text-muted">Pendiidkan </small>
                        </div>
                        <div class="col-md-6">
                        <input readonly value="{{$fmi->profession}}" name="faminti[0][work]" type="text" class="form-control" id="fam-workinti[]" aria-describedby="fam-work" placeholder="Pekerjaan">
                            <small id="fam-workinti" class="form-text text-muted">Perkerjaan</small>
                        </div>
                        </div>

                        <hr>
                    </div>
                </div>

                @endif

                @endforeach
                @endif
              @endforeach
              @endforeach

                <div>
                    <h4>Susunan anggota keluarga sendiri</h4>
                </div>
              <!-- Loop -->
              @foreach ($candidate->familymember as $fm)
              @if ($fm->familystatusid > 3)
              <div class="family-loop">
                <div class="form-group">
                  <input readonly value="{{$fm->name}}" name="fam[0][name]" type="text" class="form-control" id="fam-name" aria-describedby="fam-name" placeholder="Nama keluarga">
                  <small id="fam-name[]" class="form-text text-muted">Nama keluarga</small>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <select disabled class=" form-control" name="fam[0][status]" id="fam-status">
                      <option value="{{$fm->familystatus->id}}">{{$fm->familystatus->familystatus}}</option>
                    </select>
                    <small id="fam-status" class="form-text text-muted">Status </small>
                  </div>
                  <div class="col-md-6">
                    <select class=" form-control" name="fam[0][sex]" id="fam-sex" disabled>
                      <option value="{{$fm->sex->id}}">{{$fm->sex->sex}}</option>
                    </select>
                    <small id="fam-sex" class="form-text text-muted">Jenis Kelamin</small>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <select disabled class="form-control" name="fam[0][education]" id="fam-education">
                      <option value="{{$fm->education->id}}">{{$fm->education->education}}</option>
                    </select>
                    <small id="fam-education" class="form-text text-muted">Pendiidkan </small>
                  </div>
                  <div class="col-md-6">
                    <input readonly value="{{$fm->profession}}" name="fam[0][work]" type="text" class="form-control" id="fam-work" aria-describedby="fam-work" placeholder="Pekerjaan">
                    <small id="fam-work" class="form-text text-muted">Perkerjaan</small>
                  </div>
                </div>

                <hr>
              </div>
              @endif
              @endforeach

            </section>

              <!-- Education -->
            <section id="education" class="collapse show">
              <!-- Formal -->
                <div>
                    <h4>Formal Education</h4>
                </div>
                @foreach ($candidate->formaleducation as $formale)
                <div class="form-group" id="formallist">
                  <div class="row">
                    <div class="col-md-2">
                      <select disabled class="form-control" name="formal[0][jenjang]" id="jenjang-1">
                        <option value="{{$formale->id}}">{{$formale->educationlevel->education}}</option>
                      </select>
                      <small id="jenjang-1" class="form-text text-muted">Jenjang</small>
                    </div>
                    <div class="col-md-2">
                      <input value="{{$formale->institutionname}}" name="formal[0][nama]" type="text" class="form-control" id="nama-formal-1" aria-describedby="nama" placeholder="Nama formal" readonly>
                      <small id="nama-formal-1" class="form-text text-muted">Nama</small>
                    </div>
                    <div class="col-md-2">
                      <input value="{{$formale->location}}" name="formal[0][kota]" type="text" class="form-control" id="kota-formal-1" aria-describedby="nama" placeholder="Kota" readonly>
                      <small id="kota-formal-1" class="form-text text-muted">Kota</small>
                    </div>
                    <div class="col-md-2">
                      <input value="{{$formale->GPA}}" name="formal[0][IPK]" type="text" class="form-control" id="IPK-1" aria-describedby="nama" placeholder="IPK" readonly>
                      <small id="IPK-1" class="form-text text-muted">IPK</small>
                    </div>
                    <div class="col-md-2">
                      <input value="{{$formale->yearentry}}" name="formal[0][masuk]" type="text" class="form-control" id="masuk-formal-1" aria-describedby="nama" placeholder="Masuk" readonly>
                      <small id="masuk-formal-1" class="form-text text-muted">Masuk</small>
                    </div>
                    <div class="col-md-2">
                      <input value="{{$formale->yeargraduation}}" name="formal[0][lulus]" type="text" class="form-control" id="lulus-formal-1" aria-describedby="nama" placeholder="Lulus" readonly>
                      <small id="lulus-formal-1" class="form-text text-muted">Lulus</small>
                    </div>
                  </div>

                </div>
                @endforeach
                <hr>
               <!-- NonFormal -->
               <div>
                   <h4>Nonformal Education</h4>
               </div>
               @foreach ($candidate->informaleducation as $informal)
               <div class="form-group" id="nonformallist">
                 <div class="row">
                   <div class="col-md-3">
                     <input value="{{$informal->course_trainingname}}" name="nonformal[0][nama]" type="text" class="form-control" id="kursus-nama-1" aria-describedby="nama" placeholder="Nama Kursus" readonly>
                     <small id="kursus-nama-1" class="form-text text-muted">Kursus/Training</small>
                   </div>
                   <div class="col-md-2">
                     <input value="{{$informal->year}}" name="nonformal[0][tahun]" type="text" class="form-control" id="kursus-tahun-1" aria-describedby="nama" placeholder="Tahun" readonly>
                     <small id="kursus-tahun-1" class="form-text text-muted">Tahun</small>
                   </div>
                   <div class="col-md-2">
                     <input value="{{$informal->duration}}" name="nonformal[0][durasi]" type="text" class="form-control" id="kursus-durasi-1" aria-describedby="nama" placeholder="Lama Kursus" readonly>
                     <small id="kursus-durasi-1" class="form-text text-muted">Lama</small>
                   </div>
                   <div class="col-md-1">
                       @if ($informal->certificate == 1)
                       <input disabled checked name="nonformal[0][ijazah]" value="{{$informal->certificate}}" type="checkbox" id="kursus-ijazah-1">
                       <small id="kursus-ijazah-1" class="form-text text-muted">Ijazah</small>
                        @else
                        <input disabled name="nonformal[0][ijazah]" value="{{$informal->certificate}}" type="checkbox" id="kursus-ijazah-1">
                       <small id="kursus-ijazah-1" class="form-text text-muted">Ijazah</small>
                       @endif
                   </div>
                   <div class="col-md-2">
                     <input value="{{$informal->sponsoreby}}" name="nonformal[0][biaya]" type="text" class="form-control" id="kursus-biaya-1" aria-describedby="nama" placeholder="Dibiayai" readonly>
                     <small id="kursus-biaya-1" class="form-text text-muted">Dibiayai</small>
                   </div>
                 </div>

               </div>
               @endforeach

                <hr>
            </section>
            <!-- Kemampuan -->
            <section id="kemampuan" class="collapse show">
                <div>
                    <h4>Kemampuan Berbahasa</h4>
                </div>
                @foreach ($candidate->languageproficiency as $langpof)
                <div class="form-group" id="languagelist">
                  <div class="row">
                    <div class="col-md-3">
                        <select class="form-control" name="bahasa[0][bahasa]" id="bahasa-1" disabled>
                        <option value="{{$langpof->language->id}}">{{$langpof->language->language}}</option>

                          </select>
                     <small id="bahasa-1" class="form-text text-muted">Bahasa</small>
                    </div>
                    <div class="col-md-3">
                      <select disabled class="form-control" name="bahasa[0][tulis_level]" id="tulis-level-1" >
                        <option value="{{$langpof->writtenF->id}}">{{$langpof->writtenF->level}}</option>
                      </select>
                      <small id="tulis-1" class="form-text text-muted">Tulis</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="bahasa[0][lisan_level]" id="lisan-level-1" disabled>
                        <option value="{{$langpof->speakingF->id}}">{{$langpof->speakingF->level}}</option>
                      </select>
                      <small id="lisan-1" class="form-text text-muted">Lisan</small>
                    </div>
                    <div class="col-md-3">
                      <select class="form-control" name="bahasa[0][baca_level]" id="baca-level-1" disabled>
                        <option  value="{{$langpof->readF->id}}">{{$langpof->readF->level}}</option>
                      </select>
                      <small id="baca-1" class="form-text text-muted">Baca</small>
                    </div>
                  </div>
                </div>

                @endforeach
                <hr>

                 <!--Hard Skill-->
                <div class="form-group">
                  <div class="row">
                    <!--Komputer-->
                    <div class="col-md-6" id="komputerlist">
                        <div>
                            <h4>Kemampuan Program</h4>
                        </div>
                        @foreach ($candidate->computerproficiency as $comprof)
                        <div class="row">
                            <div class="col-md-7">
                            <input value="{{$comprof->skillname}}" name="komputer[0][name]" type="text" class="form-control" aria-describedby="nama" placeholder="Jenis Program" readonly>
                            <small class="form-text text-muted">Jenis Program</small>
                            </div>
                            <div class="col-md-5">
                            <select disabled class="form-control" name="komputer[0][level]" id="komputer-level-1">
                                <option value="{{$comprof->level->id}}">{{$comprof->level->level}}</option>
                            </select>
                            <small class="form-text text-muted">Penguasaan Komputer</small>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!--Special Skill-->
                    <div class="col-md-6" id="skilllist">
                        <div>
                            <h4>Kemampuan Khusus</h4>
                        </div>
                        @foreach ($candidate->spesialskillproficiency as $spesial)
                        <div class="row">
                           <div class="col-md-7">
                               <input value="{{$spesial->skillname}}" name="special[0][name]" type="text" class="form-control" aria-describedby="nama" placeholder="Kemampuan Khusus" readonly>
                               <small class="form-text text-muted">Kemampuan Khusus</small>
                           </div>
                           <div class="col-md-5">
                               <select disabled class="form-control" name="special[0][level]">
                                   <option value="{{$spesial->level->id}}">{{$spesial->level->level}}</option>\
                               </select>
                               <small class="form-text text-muted">Level</small>
                           </div>
                        </div>
                        @endforeach
                    </div>
                  </div>
                  <hr>
                </div>

                <!--Sertifikasi-->
                <div>
                    <h4>Sertifikasi Profesional</h4>
                </div>
                @foreach ($candidate->certificate as $cf)
                <div class="form-group" id="sertifikasilist">
                    <div class="row">
                      <div class="col-md-4">
                        <input value="{{$cf->namecertificate}}" name="sertifikasi[0][name]" type="text" class="form-control" id="sertifikasi-nama-1" aria-describedby="nama" placeholder="Nama Kursus" readonly>
                        <small id="sertifikasi-nama-1" class="form-text text-muted">Nama Sertifikasi</small>
                      </div>
                      <div class="col-md-4">
                        <input value="{{$cf->issuer}}" name="sertifikasi[0][penerbit]" type="text" class="form-control" id="sertifikasi-penerbit-1" aria-describedby="nama" placeholder="Penerbit" readonly>
                        <small id="sertifikasi-penerbit-1" class="form-text text-muted">Penerbit</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$cf->year}}" name="sertifikasi[0][tahun]" type="text" class="form-control" id="sertifikasi-tahun-1" aria-describedby="nama" placeholder="Tahun" readonly>
                        <small id="sertifikasi-tahun-1" class="form-text text-muted">Tahun</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$cf->expiredyear}}" name="sertifikasi[0][berlaku]" type="text" class="form-control" id="sertifikasi-berlaku-1" aria-describedby="nama" placeholder="Berlaku" readonly>
                        <small id="sertifikasi-berlaku-1" class="form-text text-muted">Berlaku</small>
                      </div>
                    </div>
                  </div>
                @endforeach
                  <hr>

            </section>
          <!--Work Experience-->
            <section id="pengalaman" class="collapse show">
              <span><h4> <strong>Pengalaman Kerja</h4></strong></span>
                @foreach ($candidate->workexperience as $wx)
                <div  id="workexperiencelist" >
                <div class="border border-info rounded"  id="workexperience">
                <div class="mt-3 mr-3 ml-3 mb-3 form-group">
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <input value="{{$wx->companyname}}" name="pengalaman[0][nama]" type="text" class="form-control" id="pengalaman-nama" aria-describedby="nama" placeholder="Nama Perusahaan" readonly>
                      <small id="pengalaman-nama" class="form-text text-muted">Nama Perusahaan</small>
                    </div>
                    <div class="col-md-6">
                      <input value="{{$wx->lineofbussiness}}" name="pengalaman[0][bidang]" readonly type="text" class="form-control" id="pengalaman-bidang" aria-describedby="nama" placeholder="Bidang Perusahaan" >
                      <small id="pengalaman-bidang" class="form-text text-muted">Bidang Perusahaan</small>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <textarea name="pengalaman[0][alamat]" readonly class="form-control" id="pengalaman-alamat" rows="5" aria-describedby="alamat" placeholder="Alamat Perusahaan" >{{$wx->address}}</textarea>
                      <small id="pengalaman-alamat" class="form-text text-muted">Alamat Perusahaan</small>
                    </div>
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <div class="col-md-7">
                          <input value="{{$wx->start}}" name="pengalaman[0][mulai]" readonly type="date" class="form-control" id="pengalaman-mulai" aria-describedby="nama" placeholder="" >
                          <small id="pengalaman-mulai" class="mb-3 form-text text-muted">Mulai</small>
                        </div>
                        <div class="col-md-4">
                            @if ($wx->stillworking == 0)
                            <input disabled name="pengalaman[0][statuskerja]" type="checkbox" value="{{$wx->stillworking}}" id="pengalaman-statuskerja">
                            <small class="form-text text-muted">Masih Bekerja</small>
                            @else
                            <input checked disabled name="pengalaman[0][statuskerja]" type="checkbox" value="{{$wx->stillworking}}" id="pengalaman-statuskerja">
                            <small class="form-text text-muted">Masih Bekerja</small>
                            @endif
                          {{-- <input type="hidden" name="pengalaman[0][statuskerja]" value="0" > --}}
                        </div>
                        <div class="col-md-7" id="berakhir">
                          <input value="{{$wx->end}}" name="pengalaman[0][berakhir]" readonly type="date" class="form-control" id="pengalaman-akhir" aria-describedby="nama" placeholder="" >
                          <small class="form-text text-muted">Berakhir</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="row mb-3">
                        <div class="col-md-7">
                          <input value="{{$wx->basicsalary}}" name="pengalaman[0][upah]" readonly type="text" class="form-control" id="pengalaman-upah" aria-describedby="nama" placeholder="Upah Pokok" >
                          <small id="pengalaman-upah" class="form-text text-muted">Upah Pokok</small>
                        </div>
                        <div class="col-md-5">
                          <select name="pengalaman[0][status]" disabled class="form-control" name="pengalaman-status[]" id="pengalaman-status">
                              <option value="{{$wx->employeestatus->id}}">{{$wx->employeestatus->employeestatus}}</option>
                          </select>
                          <small id="pengalaman-status" class="form-text text-muted">Status Karyawan</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                      <div class="col-md-12">
                        <input value="{{$wx->leavingreason}}" name="pengalaman[0][alasan]" readonly type="text" class="form-control" id="pengalaman-alasan" aria-describedby="nama" placeholder="Alasan Berhenti" >
                        <small id="pengalaman-alasan" class="form-text text-muted">Alasan Berhenti</small>
                      </div>
                      </div>
                    </div>
                  </div>
                  <hr>

                  <!--Proyek-->
                <div class="form-group" id="proyek-1">
                <span><h4> <strong> PROYEK </strong></h4> </span>
                  @foreach ($candidate->project as $proj)
                      @if ($proj->workexperienceid == $wx->id)
                          <div id="workEXP-0">
                          <div class="row" id="proyek-0-0">
                          <div class="col-6">
                              <div class="col mb-3">
                              <input value="{{$proj->name}}" name="pengalaman[0][proyek][0][nama]" readonly type="text" class="form-control" id="proyek-nama" aria-describedby="nama" placeholder="Nama Proyek" >
                              <small id="proyek-nama" class="form-text text-muted">Nama Proyek</small>
                              </div>
                              <div class="col mb-3">
                              <div class="row">
                                  <div class="col-6">
                                  <input value="{{$proj->position}}" name="pengalaman[0][proyek][0][posisi]" readonly type="text" class="form-control" id="proyek-posisi" aria-describedby="nama" placeholder="Posisi" >
                                  <small id="proyek-posisi" class="form-text text-muted">Posisi</small>
                                  </div>
                                  <div class="col-6">
                                  <input value="{{$proj->division}}" name="pengalaman[0][proyek][0][divisi]" readonly type="text" class="form-control" id="proyek-divisi" aria-describedby="nama" placeholder="Divisi" >
                                  <small id="proyek-divisi" class="form-text text-muted">Divisi</small>
                                  </div>
                              </div>
                              </div>
                          </div>
                          <div class="col-6 mb-3">
                              <div class="row">
                                <div class="col-12">
                                  <textarea name="pengalaman[0][proyek][0][deskripsi]" readonly class="form-control" id="proyek-deskripsi" rows="4" aria-describedby="alamat" placeholder="" >{{$proj->jobdescription}}</textarea>
                                  <small id="proyek-deskripsi" class="form-text text-muted">Deskripsi Perkerjaan</small>
                                </div>
                              </div>
                          </div>
                          </div>
                        </div>
                        @endif
                        @endforeach
                    </div>

                </div>
                </div>
                <br>
                </div>
                @endforeach

                    <!--Benefit-->
            {{-- <div class="form-group">
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
            </div> --}}
            </section>
          <!--Organisasi dan Refrensi-->
            <section id="orgnref" class="collapse show">

              <!--Organisasi-->
              <div>
                  <h4>Organisasi</h4>
              </div>
                <div class="form-group" id="organisasilist">
                    @foreach ($candidate->organization as $or)
                    <div class="row">
                      <div class="col-md-3">
                        <input value="{{$or->name}}" name="organisasi[0][nama]" readonly type="text" class="form-control" id="organisasi-nama" aria-describedby="nama" placeholder="Nama Organisasi" >
                        <small id="organisasi-nama" class="form-text text-muted">Nama Organisasi</small>
                      </div>
                      <div class="col-md-3">
                        <input value="{{$or->organizationtype}}" name="organisasi[0][jenis]" readonly type="text" class="form-control" id="organisasi-jenis" aria-describedby="nama" placeholder="Jenis Organisasi" >
                        <small id="organisasi-penerbit" class="form-text text-muted">Jenis Organisasi</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$or->yearstart}}" name="organisasi[0][tahun]" readonly type="text" class="form-control" id="organisasi-tahun" aria-describedby="nama" placeholder="Tahun" >
                        <small id="organisasi-tahun" class="form-text text-muted">Tahun</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$or->position}}" name="organisasi[0][jabatan]" readonly type="text" class="form-control" id="organisasi-jabatan" aria-describedby="nama" placeholder="Jabatan" >
                        <small id="organisasi-jabatan" class="form-text text-muted">Jabatan</small>
                      </div>
                    </div>
                    @endforeach
                </div>
                <hr>

              <!--Refrensi-->
              <div>
                  <h4>Refrensi dan Rekomendasi</h4>
              </div>
                <div class="form-group" id="refrensilist">
                    @foreach ($candidate->reference as $ref)
                    <div class="row">
                      <div class="col-md-3">
                        <input value="{{$ref->name}}" name="refrensi[0][nama]" readonly type="text" class="form-control" id="Ref-nama" aria-describedby="nama" placeholder="Nama Refrensi" >
                        <small id="Ref-nama" class="form-text text-muted">Nama Refrensi</small>
                      </div>
                      <div class="col-md-3">
                        <input value="{{$ref->phonenumber}}" name="refrensi[0][notlp]" readonly type="text" class="form-control" id="Ref-notlp" aria-describedby="nama" placeholder="Nomor Telepon" >
                        <small id="Ref-notlp" class="form-text text-muted">No.Telepon</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$ref->position}}" name="refrensi[0][jabatan]" readonly type="text" class="form-control" id="Ref-jabatan" aria-describedby="nama" placeholder="Jabatan" >
                        <small id="Ref-jabatan" class="form-text text-muted">Jabatan</small>
                      </div>
                      <div class="col-md-2">
                        <input value="{{$ref->relationship}}" name="refrensi[0][hubungan]" readonly type="text" class="form-control" id="Ref-hubungan" aria-describedby="nama" placeholder="Hubungan" >
                        <small id="Ref-hubungan" class="form-text text-muted">Hubungan</small>
                      </div>
                    </div>
                    @endforeach

                </div>
                <hr>
            </section>
          <!--Keterangan Lain-->
            <section id="other" class="collapse show">
                <div>
                  <h4>Informasi Lain</h4>
              </div>
              <div class="form-group">
                  @foreach ($candidate->additionalinformation as $addinfo)
                  <div class="row">
                    <div class="col-md-6">
                      <div class="col-md">
                        <input readonly value="{{$addinfo->vacancyinfosource}}" name="informasilain_lowongan" type="text" class="form-control" id="other-lowongan" aria-describedby="nama" placeholder="" >
                        <small id="other-lowongan" class="form-text text-muted">Dari mana Anda Mengetahui adanya Lowongan ini?</small>
                      </div>
                      <div class="col-md">
                        <input readonly value="{{$addinfo->strenght}}" name="informasilain_kelebihan" type="text" class="form-control" id="other-kelebihan" aria-describedby="nama" placeholder="" >
                        <small id="other-kelebihan" class="form-text text-muted">Apa kelebihan anda?</small>
                      </div>
                      <div class="col-md">
                        <input readonly value="{{$addinfo->weakness}}" name="informasilain_kekurangan" type="text" class="form-control" id="other-kekurangan" aria-describedby="nama" placeholder="" >
                        <small id="other-kekurangan" class="form-text text-muted">Apa kelemahan anda?</small>
                      </div>
                      <div class="col-md">
                        <input readonly value="{{$addinfo->overcomeweakness}}" name="informasilain_mengatasi"  type="text" class="form-control" id="other-mengatasi" aria-describedby="nama" placeholder="" >
                        <small id="other-mengatasi" class="form-text text-muted">Apa yang anda lakukan untuk mengatasi kelemahan anda?</small>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md">
                          @if ($addinfo->hospitalizestatus == 0)
                          <input disabled name="informasilain_sakit" type="checkbox" value="{{$addinfo->hospitalizestatus}}" id="other-sakit">
                          <small class="form-text text-muted">Apakah Anda pernah dirawat di rumah sakit dan atau sakit keras?</small>
                          @else
                          <input disabled checked name="informasilain_sakit" type="checkbox" value="{{$addinfo->hospitalizestatus}}" id="other-sakit">
                          <small class="form-text text-muted">Apakah Anda pernah dirawat di rumah sakit dan atau sakit keras?</small>
                          @endif
                          {{-- <input name="informasilain_sakit" type="hidden" value="0"> --}}
                      </div>
                      @if ($addinfo->hospitalizestatus == 1)
                      <div class="col-md" style="display:none" id="jika-ya">
                        <input readonly value="{{$addinfo->hospitalisereason}}" name="informasilain_sakit_ya" type="text" class="form-control" id="other-ya" aria-describedby="nama" placeholder="" >
                        <small id="other-ya" class="form-text text-muted">Jika Ya, harap sebutkan penyakit yang pernah diderita?</small>
                      </div>
                      @endif
                      <div class="col-md">
                        <input readonly value="{{$addinfo->expectedsalary}}" name="informasilain_gaji" type="text" class="form-control" id="other-gaji" aria-describedby="nama" placeholder="" >
                        <small id="other-gaji" class="form-text text-muted">Gaji yang diharapkan?</small>
                      </div>
                      <div class="col-md">
                        <input readonly value="{{$addinfo->expectedreadytojoindate}}" name="informasilain_mulaikerja" type="text" class="form-control" id="other-mulaikerja" aria-describedby="nama" placeholder="" >
                        <small id="other-mulaikerja" class="form-text text-muted">Kapan anda dapat mulai bekerja?</small>
                      </div>
                    </div>
                  </div>
                  @endforeach
                <hr>

                <!--Check data-->
                <div class="col">
                  <input checked disabled name="informasilain_data" type="checkbox" value="1" id="other-data">
                      <small id="other-data" class="form-text text-muted">Semua keterangan yang saya buat diatas adalah dengan jujur
                        dan sesungguhnya
                        </small>
                </div>
              </div>


            </section>
         <div class="row mb-2">
            <a class="btn btn-primary" href="/candidate" role="button">Back</a>
        </div>
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
