<?php

namespace Database\Seeders;

use App\Models\Benefit;
use App\Models\Bloodtype;
use App\Models\Citizenship;
use App\Models\Education;
use App\Models\Employeestatus;
use App\Models\FamilyStatus;
use App\Models\Language;
use App\Models\MaritalStatus;
use App\Models\Position;
use App\Models\Proficiencieslevel;
use App\Models\Religion;
use App\Models\Sex;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //blood
        $bloodtypeC = Bloodtype::where('blood', 'A')->first();
        if ($bloodtypeC === null) {
        Bloodtype::create([
            'blood' => 'A'
        ]);
        Bloodtype::create([
            'blood' => 'B'
        ]);
        Bloodtype::create([
            'blood' => 'AB'
        ]);
        Bloodtype::create([
            'blood' => 'O'
        ]);
        }

        //sex
        $sexL = Sex::where('sex','Laki-Laki')->first();
        if ($sexL === null) {
            Sex::create([
                'sex' => 'Laki-Laki'
            ]);
            Sex::create([
                'sex' => 'Perempuan'
            ]);
        }

        //position
        $positionC = Position::where('position','Programmer')->first();
        if ($positionC === null) {
            Position::create([
                'position' => 'Programmer'
            ]);
            Position::create([
                'position' => 'Data Analysis'
            ]);
        }

        //position
        $positionC = Position::where('position','Programmer')->first();
        if ($positionC === null) {
            Position::create([
                'position' => 'Programmer'
            ]);
            Position::create([
                'position' => 'Data Analysis'
            ]);
        }

        //kewarganegaraan
        $citizenshipC = Citizenship::where('citizenship','Indonesia')->first();
        if ($citizenshipC === null) {
            Citizenship::create([
                'citizenship' => 'Indonesia'
            ]);
            Citizenship::create([
                'citizenship' => 'Malaysia'
            ]);
        }

        //Religion
        $religionC = Religion::where('religion','Islam')->first();
        if ($religionC === null) {
            Religion::create([
                'religion' => 'Islam'
            ]);
            Religion::create([
                'religion' => 'Katolik'
            ]);
            Religion::create([
                'religion' => 'Protestan'
            ]);
            Religion::create([
                'religion' => 'Hindu'
            ]);
            Religion::create([
                'religion' => 'Buddha'
            ]);
            Religion::create([
                'religion' => 'Konghucu'
            ]);
        }

        //Status Pernikahan
        $maritalC = MaritalStatus::where('maritalstatus','Lajang')->first();
        if ($maritalC === null) {
            MaritalStatus::create([
                'maritalstatus' => 'Lajang'
            ]);
            MaritalStatus::create([
                'maritalstatus' => 'Menikah'
            ]);
            MaritalStatus::create([
                'maritalstatus' => 'Cerai'
            ]);
        }

        //Education
        $edukationC = Education::where('education','S1')->first();
        if ($edukationC === null) {
            Education::create([
                'education' => 'S3'
            ]);
            Education::create([
                'education' => 'S2'
            ]);
            Education::create([
                'education' => 'S1'
            ]);
            Education::create([
                'education' => 'D3'
            ]);
            Education::create([
                'education' => 'SMA/SMK'
            ]);
        }

        //bahasa
        $languageC = Language::where('language','English')->first();
        if ($languageC === null) {
            Language::create([
                'language' => 'English'
            ]);
            Language::create([
                'language' => 'Indonesia'
            ]);
        }

        //proficiencies level
        $proficiencieslevelC = Proficiencieslevel::where('level','Baik')->first();
        if ($proficiencieslevelC === null) {
            Proficiencieslevel::create([
                'level' => 'Baik'
            ]);
            Proficiencieslevel::create([
                'level' => 'Cukup'
            ]);
            Proficiencieslevel::create([
                'level' => 'Kurang'
            ]);
        }

        //Employe status
        $employeC = Employeestatus::where('employeestatus','Permanent')->first();
        if ($employeC === null) {
            Employeestatus::create([
                'employeestatus' => 'Permanent'
            ]);
            Employeestatus::create([
                'employeestatus' => 'Kontrak'
            ]);
            Employeestatus::create([
                'employeestatus' => 'Freelancer'
            ]);
        }

        //Benefit
        $benefitC = Benefit::where('benefit','BPJS Tenagakerja')->first();
        if ($benefitC === null) {
            Benefit::create([
                'benefit' => 'BPJS Tenagakerja'
            ]);
            Benefit::create([
                'benefit' => 'BPJS Kesehatan'
            ]);
            Benefit::create([
                'benefit' => 'Kesehatan'
            ]);
            Benefit::create([
                'benefit' => 'Pajak'
            ]);
            Benefit::create([
                'benefit' => 'Transport'
            ]);
            Benefit::create([
                'benefit' => 'Makan'
            ]);
            Benefit::create([
                'benefit' => 'Bonus'
            ]);
            Benefit::create([
                'benefit' => 'Lembur'
            ]);
            Benefit::create([
                'benefit' => 'Laptop'
            ]);
            Benefit::create([
                'benefit' => 'Dana Pensiun'
            ]);
            Benefit::create([
                'benefit' => 'Lainnya'
            ]);
        }

        //familyStatus
        $familyC = FamilyStatus::where('familystatus','Istri')->first();
        if ($familyC === null) {
            FamilyStatus::create([
                'familystatus' => 'Istri'
            ]);
            FamilyStatus::create([
                'familystatus' => 'Suami'
            ]);
            FamilyStatus::create([
                'familystatus' => 'Anak'
            ]);
            FamilyStatus::create([
                'familystatus' => 'Ayah'
            ]);
            FamilyStatus::create([
                'familystatus' => 'Ibu'
            ]);
            FamilyStatus::create([
                'familystatus' => 'Saudara/Saudari'
            ]);
        }
    }
}
