<?php

namespace App\Http\Controllers;

use App\Models\Additionalinformation;
use App\Models\Benefit;
use App\Models\Bloodtype;
use App\Models\Candidate;
use App\Models\Certificate;
use App\Models\Citizenship;
use App\Models\Computerproficiency;
use App\Models\Education;
use App\Models\Employeestatus;
use App\Models\Family;
use App\Models\Familymember;
use App\Models\FamilyStatus;
use App\Models\Formaleducation;
use App\Models\Informaleducation;
use App\Models\Language;
use App\Models\Languageproficiency;
use App\Models\Lastjobbenefit;
use App\Models\MaritalStatus;
use App\Models\Organization;
use App\Models\Position;
use App\Models\Proficiencieslevel;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Religion;
use App\Models\Sex;
use App\Models\Spesialskillproficiency;
use App\Models\Workexperience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkapplicationformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positionlist = Position::all();
        $sexlist = Sex::all();
        $bloodlist = Bloodtype::all();
        $citizenshiplist = Citizenship::all();
        $religionlist = Religion::all();
        $maritalstatuslist = MaritalStatus::all();
        $familystatuslist = FamilyStatus::all();
        $educationlist = Education::all();
        $languagelist = Language::all();
        $proficiencieslevellist = Proficiencieslevel::all();
        $employeestatuslist = Employeestatus::all();
        $benefitlist = Benefit::all();
        return view('applicationform.v_index',
        compact('positionlist',
                'sexlist',
                'bloodlist',
                'citizenshiplist',
                'religionlist',
                'maritalstatuslist',
                'familystatuslist',
                'educationlist',
                'languagelist',
                'proficiencieslevellist',
                'employeestatuslist',
                'benefitlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            //
            'jabatan' => 'required',

            //candidate
            'name' => 'required|string|min:6',
            'sex' => 'required',
            'blood' => 'required',
            'email' => 'required|string|email',
            'tel_rumah' => 'required',
            'tel_hp' => 'required',
            'ktp' => 'required',
            'npwp' => 'required',
            'citizenship' => 'required',
            'religion' => 'required',
            'menikah' => 'required',

            // //detail_user
            // 'fullname' => 'required|string|between:4,100',
            // 'name' => 'required|string',
            // 'birth_date' => 'required|date',
            // 'join_date' => 'required|date',
            // 'position_id' => 'required',
            // 'NIK' => 'required|integer',
            // 'NPWP' => 'required|string',
            // 'email' => 'required|string|email',

            // //role
            // 'role_id' => 'required',
            // 'application_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($request->all());
        }

        // candidate
        $candidateId = Candidate::create([
            'name' => $request->name,
            'birthplace' => $request->tempat_lahir,
            'birthdate' => $request->tanggal_lahir,
            'ktpnumber' => $request->ktp,
            'npwpnumber' => $request->npwp,
            'cellphonenumber' => $request->tel_rumah,
            'bloodid' => $request->blood,
            'citizenshipid' => $request->citizenship,
            'religionid' => $request->religion,
            'homeaddress' => $request->alamat,
            'phonenumber' => $request->tel_hp,
            'email' => $request->email,
            'sexid' => $request->sex,
            'createdate' => Carbon::now()->toDateString(),
            'isfreshgraduate' => $request->baru_lulus,
        ])->id;

        //status menikah
        if ($request->menikah == '3') {
            $familyId = Family::create([
                'candidateid' => $candidateId,
                'maritalstatusid' => $request->menikah,
                'maritalyear' => $request->menikah_thn,
                'divorceyear' => $request->menikah_thn
            ])->id;
        }elseif ($request->menikah == '2') {
            $familyId = Family::create([
                'candidateid' => $candidateId,
                'maritalstatusid' => $request->menikah,
                'maritalyear' => $request->menikah_thn
            ])->id;
        }else {
            $familyId = Family::create([
                'candidateid' => $candidateId,
                'maritalstatusid' => $request->menikah,
            ])->id;
        }

        // family member
        $sizeinti = count($request->fam_name_inti);
        $sizefam = count($request->fam_name);
        if ($familyId == true) {
            if ($request->fam_name_inti != null ) {
            for ($i=0; $i < $sizeinti; $i++) {
                $familyMemberInti = Familymember::create([
                    'familyid' => $familyId,
                    'familystatusid' => $request->fam_status_inti[$i],
                    'name' => $request->fam_name_inti[$i],
                    'sexid' => $request->fam_sex_inti[$i],
                    'educationlevelid' => $request->fam_education_inti[$i],
                    'profession' => $request->fam_work_inti[$i],
                ]);
                }
            }
            if ($request->fam_name != null) {
                for ($i=0; $i < $sizefam; $i++) {
                    $familyMember = Familymember::create([
                        'familyid' => $familyId,
                        'familystatusid' => $request->fam_status[$i],
                        'name' => $request->fam_name[$i],
                        'sexid' => $request->fam_sex[$i],
                        'educationlevelid' => $request->fam_education[$i],
                        'profession' => $request->fam_work[$i],
                    ]);
                    }
            }
        }

        //formaleducation
        $sizeformal = count($request->jenjang);
            if ($request->jenjang != null ) {
            for ($i=0; $i < $sizeformal; $i++) {
                $formaleducation = Formaleducation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'educationlevelid' => $request->jenjang[$i],
                    'institutionname' => $request->nama_lembaga[$i],
                    'location' => $request->kota_lembaga[$i],
                    'GPA' => $request->IPK[$i],
                    'yearentry' => $request->masuk_lembaga[$i],
                    'yeargraduation' => $request->lulus_lembaga[$i],
                ]);
            }
        }

        // // Nonformal Education
        $sizenonformal = count($request->kursus_nama);
            if ($request->kursus_nama != null ) {
            for ($i=0; $i < $sizenonformal; $i++) {
                $nonformaleducation = Informaleducation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'course_trainingname' => $request->kursus_nama[$i],
                    'year' => $request->kursus_tahun[$i],
                    'duration' => $request->kursus_durasi[$i],
                    'certificate' => 0,
                    'sponsoreby' => $request->kursus_biaya[$i],
                ]);
            }
        }

        // language
        $sizelanguage = count($request->bahasa);
        if ($request->bahasa != null ) {
        for ($i=0; $i < $sizelanguage; $i++) {
            $language = Languageproficiency::create([
                // 'candidateid' => 1,
                'candidateid' => $candidateId,
                'languageid' => $request->bahasa[$i],
                'written' => $request->tulis_level[$i],
                'read' => $request->baca_level[$i],
                'speaking' => $request->lisan_level[$i],
            ]);
            }
        }

        // // computerproficiency
        $sizesomprof = count($request->komputer);
        if ($request->komputer != null ) {
        for ($i=0; $i < $sizesomprof; $i++) {
            $comprof = Computerproficiency::create([
                // 'candidateid' => 1,
                'candidateid' => $candidateId,
                'skillname' => $request->komputer[$i],
                'proficiencylevelid' => $request->komputer_level[$i],
            ]);
            }
        }

        // //spesial proficiency
        $sizespesial = count($request->special);
        if ($request->special != null ) {
        for ($i=0; $i < $sizespesial; $i++) {
            $spesialprof = Spesialskillproficiency::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
                'skillname' => $request->special[$i],
                'proficiencylevelid' => $request->special_level[$i],
            ]);
            }
        }

        // // certificate
        $sizecertificate = count($request->sertifikasi_nama);
        if ($request->sertifikasi_nama != null ) {
        for ($i=0; $i < $sizecertificate; $i++) {
            $spesialprof = Certificate::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
                'namecertificate' => $request->sertifikasi_nama[$i],
                'issuer' => $request->sertifikasi_penerbit[$i],
                'year' => $request->sertifikasi_tahun[$i],
                'expiredyear' => $request->sertifikasi_berlaku[$i],
            ]);
            }
        }

        // dd($request->pengalaman[0]['proyek'][0]['nama']);
        // dd($request->pengalaman[0]['statuskerja']);
        // Workexperience
        $sizeexperience = count($request->pengalaman);
        if ($request->pengalaman != null ) {
        for ($i=0; $i < $sizeexperience; $i++) {
            if ($request->pengalaman[$i]['statuskerja'] == '1' ) {
            $workexperienceId = Workexperience::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
                'companyname' => $request->pengalaman[$i]['nama'],
                'lineofbussiness' => $request->pengalaman[$i]['bidang'],
                'address' => $request->pengalaman[$i]['alamat'],
                'start' => $request->pengalaman[$i]['mulai'],
                'basicsalary' => $request->pengalaman[$i]['upah'],
                'employeestatusid' => $request->pengalaman[$i]['status'],
                'leavingreason' => $request->pengalaman[$i]['alasan'],
                'stillworking' => $request->pengalaman[$i]['statuskerja'],
            ])->id;
            }else{
                $workexperienceId = Workexperience::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'companyname' => $request->pengalaman[$i]['nama'],
                    'lineofbussiness' => $request->pengalaman[$i]['bidang'],
                    'address' => $request->pengalaman[$i]['alamat'],
                    'start' => $request->pengalaman[$i]['mulai'],
                    'end' => $request->pengalaman[$i]['berakhir'],
                    'basicsalary' => $request->pengalaman[$i]['upah'],
                    'employeestatusid' => $request->pengalaman[$i]['status'],
                    'leavingreason' => $request->pengalaman[$i]['alasan'],
                    'stillworking' => 0,
                ])->id;
            }
                if ($request->pengalaman[$i]['proyek']) {
                    $sizeproject = count($request->pengalaman[$i]['proyek']);
                    for ($p=0; $p < $sizeproject; $p++) {
                        $project = Project::create([
                            'workexperienceid' => $workexperienceId,
                            'name' => $request->pengalaman[$i]['proyek'][$p]['nama'],
                            'position' => $request->pengalaman[$i]['proyek'][$p]['posisi'],
                            'division' => $request->pengalaman[$i]['proyek'][$p]['divisi'],
                            'jobdescription' => $request->pengalaman[$i]['proyek'][$p]['deskripsi'],
                        ]);
                    }
                }
            }
        }

         // Lastjobbenefit
        $sizebenefit = count($request->benefit);
        if ($request->benefit != null ) {
        for ($i=0; $i < $sizebenefit; $i++) {
            $lastjobbenefitId = Lastjobbenefit::create([
                'benefitid' => $request->benefit[$i],
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
            ]);
            }
            if ($request->other != null) {
                $lastjobbenefitId = Lastjobbenefit::create([
                    'benefitid' => 11,
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'other' => $request->other,

                ]);
            }
        }
        // dd($request->all());

        // Organization
        $sizeorganization = count($request->organisasi);
        if ($request->organisasi != null ) {
        for ($i=0; $i < $sizeorganization; $i++) {
            $lastjobbenefitId = Organization::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
                'name' => $request->organisasi[$i]['nama'],
                'organizationtype' => $request->organisasi[$i]['jenis'],
                'yearstart' => $request->organisasi[$i]['tahun'],
                'position' => $request->organisasi[$i]['jabatan'],
            ]);
            }
        }

        // dd($request->all());
        // Reference
        $sizereference = count($request->refrensi);
        if ($request->refrensi != null ) {
        for ($i=0; $i < $sizereference; $i++) {
            $referenceId = Reference::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 1,
                'name' => $request->refrensi[$i]['nama'],
                'phonenumber' => $request->refrensi[$i]['notlp'],
                'position' => $request->refrensi[$i]['jabatan'],
                'relationship' => $request->refrensi[$i]['hubungan'],
            ]);
            }
        }

        // additionalinformation
        if ($request->informasilain_lowongan != null) {
            if ($request->informasilain_sakit == '1') {
                $additionalinformation = Additionalinformation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'vacancyinfosource' => $request->informasilain_lowongan,
                    'hospitalizestatus' => $request->informasilain_sakit,
                    'hospitalisereason' => $request->informasilain_sakit_ya,
                    'strenght' => $request->informasilain_kelebihan,
                    'weakness' => $request->informasilain_kekurangan,
                    'overcomeweakness' => $request->informasilain_mengatasi,
                    'expectedsalary' => $request->informasilain_gaji,
                    'expectedreadytojoindate' => $request->informasilain_mulaikerja,
                    'pledgeoftruthness' => $request->informasilain_data,
                    'positionid' => $request->jabatan[0],
                    // 'positionid' => 1,
                ]);
            }else{
                $additionalinformation = Additionalinformation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'vacancyinfosource' => $request->informasilain_lowongan,
                    'hospitalizestatus' => $request->informasilain_sakit,
                    'hospitalisereason' => 0,
                    'strenght' => $request->informasilain_kelebihan,
                    'weakness' => $request->informasilain_kekurangan,
                    'overcomeweakness' => $request->informasilain_mengatasi,
                    'expectedsalary' => $request->informasilain_gaji,
                    'expectedreadytojoindate' => $request->informasilain_mulaikerja,
                    'pledgeoftruthness' => $request->informasilain_data,
                    'positionid' => $request->jabatan[0],
                    // 'positionid' => 1,
                ]);
            }
        }

        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
