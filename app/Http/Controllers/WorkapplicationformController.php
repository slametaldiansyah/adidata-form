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
        // dd($request->all());

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
            // Family Inti
            // 'faminti' => 'required',
            // Family Inti
            'fam' => 'required',
            // formal
            'formal' => 'required',
            // nonformal
            'nonformal' => 'required',
            // bahasa
            'bahasa' => 'required',
            // komputer
            'komputer' => 'required',
            // special
            'special' => 'required',
            // sertifikasi
            'sertifikasi' => 'required',
            // special
            'special' => 'required',
            // special
            'special' => 'required',
            // additionalinformation
            'informasilain_lowongan' => 'required',
            // 'informasilain_sakit' => 'required',
            // 'informasilain_sakit_ya' => 'required',
            'informasilain_kelebihan' => 'required',
            'informasilain_kekurangan' => 'required',
            'informasilain_mengatasi' => 'required',
            'informasilain_mulaikerja' => 'required',
            'informasilain_data' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            $messages = $validator->errors();

            foreach ($messages->all() as $message)
            {
                echo $message;
            }

            // return back()->withErrors($validator);
        }

        // dd($request->all());
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

        if ($familyId == true) {
            $sizeinti = count($request->faminti);
            if ($request->faminti[0]['status'] != null ) {
            for ($i=0; $i < $sizeinti; $i++) {
                $familyMemberInti = Familymember::create([
                    'familyid' => $familyId,
                    'familystatusid' => $request->faminti[$i]['status'],
                    'name' => $request->faminti[$i]['name'],
                    'sexid' => $request->faminti[$i]['sex'],
                    'educationlevelid' => $request->faminti[$i]['education'],
                    'profession' => $request->faminti[$i]['work'],
                ]);
                }
            }
            $sizefam = count($request->fam);
            if ($request->fam != null) {
                for ($i=0; $i < $sizefam; $i++) {
                    $familyMember = Familymember::create([
                        'familyid' => $familyId,
                        'familystatusid' => $request->fam[$i]['status'],
                        'name' => $request->fam[$i]['name'],
                        'sexid' => $request->fam[$i]['sex'],
                        'educationlevelid' => $request->fam[$i]['education'],
                        'profession' => $request->fam[$i]['work'],
                    ]);
                    }
            }
        }


        //formaleducation
            if ($request->formal != null ) {
            $sizeformal = count($request->formal);
            for ($i=0; $i < $sizeformal; $i++) {
                $formaleducation = Formaleducation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'educationlevelid' => $request->formal[$i]['jenjang'],
                    'institutionname' => $request->formal[$i]['nama'],
                    'location' => $request->formal[$i]['kota'],
                    'GPA' => $request->formal[$i]['IPK'],
                    'yearentry' => $request->formal[$i]['masuk'],
                    'yeargraduation' => $request->formal[$i]['lulus'],
                ]);
            }
        }

        // // Nonformal Education
            if ($request->nonformal != null ) {
            $sizenonformal = count($request->nonformal);
            for ($i=0; $i < $sizenonformal; $i++) {
                $nonformaleducation = Informaleducation::create([
                    'candidateid' => $candidateId,
                    // 'candidateid' => 1,
                    'course_trainingname' => $request->nonformal[$i]['nama'],
                    'year' => $request->nonformal[$i]['tahun'],
                    'duration' => $request->nonformal[$i]['durasi'],
                    'certificate' => $request->nonformal[$i]['ijazah'],
                    'sponsoreby' => $request->nonformal[$i]['biaya'],
                ]);
            }
        }

        // language
        if ($request->bahasa != null ) {
            $sizelanguage = count($request->bahasa);
            for ($i=0; $i < $sizelanguage; $i++) {
            $language = Languageproficiency::create([
                // 'candidateid' => 3,
                'candidateid' => $candidateId,
                'languageid' => $request->bahasa[$i]['bahasa'],
                'written' => $request->bahasa[$i]['tulis_level'],
                'read' => $request->bahasa[$i]['baca_level'],
                'speaking' => $request->bahasa[$i]['lisan_level'],
            ]);
            }
        }

        // // computerproficiency
        if ($request->komputer != null ) {
            $sizesomprof = count($request->komputer);
            for ($i=0; $i < $sizesomprof; $i++) {
                $comprof = Computerproficiency::create([
                    // 'candidateid' => 3,
                    'candidateid' => $candidateId,
                    'skillname' => $request->komputer[$i]['name'],
                    'proficiencylevelid' => $request->komputer[$i]['level'],
                ]);
                }
            }

        // //spesial proficiency
        if ($request->special != null ) {
            $sizespesial = count($request->special);
            for ($i=0; $i < $sizespesial; $i++) {
            $spesialprof = Spesialskillproficiency::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
                'skillname' => $request->special[$i]['name'],
                'proficiencylevelid' => $request->special[$i]['level'],
            ]);
            }
        }

        // // certificate
        $sizecertificate = count($request->sertifikasi);
        if ($request->sertifikasi != null ) {
        for ($i=0; $i < $sizecertificate; $i++) {
            $spesialprof = Certificate::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
                'namecertificate' => $request->sertifikasi[$i]['name'],
                'issuer' => $request->sertifikasi[$i]['penerbit'],
                'year' => $request->sertifikasi[$i]['tahun'],
                'expiredyear' => $request->sertifikasi[$i]['berlaku'],
            ]);
            }
        }

        // dd($request->pengalaman[0]['proyek'][0]['nama']);
        // dd($request->pengalaman[0]['statuskerja']);
        // Workexperience
        if ($request->pengalaman != null ) {
            $sizeexperience = count($request->pengalaman);
            for ($i=0; $i < $sizeexperience; $i++) {
            if ($request->pengalaman[$i]['statuskerja'] == '1' ) {
            $workexperienceId = Workexperience::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
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
                    // 'candidateid' => 3,
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
        if ($request->benefit != null ) {
            $sizebenefit = count($request->benefit);
            for ($i=0; $i < $sizebenefit; $i++) {
            $lastjobbenefitId = Lastjobbenefit::create([
                'benefitid' => $request->benefit[$i],
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
            ]);
            }
            if ($request->other != null) {
                $lastjobbenefitId = Lastjobbenefit::create([
                    'benefitid' => 11,
                    'candidateid' => $candidateId,
                    // 'candidateid' => 3,
                    'other' => $request->other,

                ]);
            }
        }
        // dd($request->all());

        // Organization
        if ($request->organisasi != null ) {
            $sizeorganization = count($request->organisasi);
            for ($i=0; $i < $sizeorganization; $i++) {
            $lastjobbenefitId = Organization::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
                'name' => $request->organisasi[$i]['nama'],
                'organizationtype' => $request->organisasi[$i]['jenis'],
                'yearstart' => $request->organisasi[$i]['tahun'],
                'position' => $request->organisasi[$i]['jabatan'],
            ]);
            }
        }

        // dd($request->all());
        // Reference
        if ($request->refrensi != null ) {
            $sizereference = count($request->refrensi);
            for ($i=0; $i < $sizereference; $i++) {
            $referenceId = Reference::create([
                'candidateid' => $candidateId,
                // 'candidateid' => 3,
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
                    // 'candidateid' => 3,
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
                    // 'candidateid' => 3,
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
