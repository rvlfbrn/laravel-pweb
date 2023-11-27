<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function create()
    {
        return view("data.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "fullname" => "required|max:100",
            "nik" => "required|unique:data|min:16|max:16",
            "nisn" => "required|unique:data|min:10|max:10",
            "email" => "required|unique:data|email",
            "phone" => "required|unique:data",
            "place_of_birth" => "required|max:100",
            "date_of_birth" => "required|date",
            "gender" => "required|in:laki - laki,perempuan",
            "religion" => "required|in:buddha,hindu,islam,katolik,khonghucu,kristen",
            "address" => "required|max:255",
            "postal_code" => "required|min:5|max:5",
            "high_school" => "required|max:50",
            "pass_photo" => "required|mimes:png,jpg,jpeg|max:5120",
            "ktp" => "required|mimes:pdf|max:5120",
            "diploma" => "required|mimes:pdf|max:5120",
            "transcript" => "required|mimes:pdf|max:5120",
            "region" => "required|in:depok,alam sutera,karawaci,kalimalang",
            "study_program" => "required|in:sistem komputer s1,sistem informasi s1,teknik komputer d3,manajemen informatika d3,informatika s1,teknik elektro s1,teknik mesin s1,teknik industri s1,agroteknologi s1,akuntansi s1,manajemen s1,ekonomi syariah s1,akuntansi d3,manajemen d3,arsitektur s1,desain interior s1,teknik sipil s1",
        ]);

        $pass_photo_name = $validated["nik"] . "-photo." . $validated["pass_photo"]->extension();
        $ktp_name = $validated["nik"] . "-ktp." . $validated["ktp"]->extension();
        $diploma_name = $validated["nik"] . "-diploma." . $validated["diploma"]->extension();
        $transcript_name = $validated["nik"] . "-transcript." . $validated["transcript"]->extension();

        Data::create([
            'fullname' => $validated["fullname"],
            'nik' => $validated["nik"],
            'nisn' => $validated["nisn"],
            'email' => $validated["email"],
            'phone' => $validated["phone"],
            'place_of_birth' => $validated["place_of_birth"],
            'date_of_birth' => $validated["date_of_birth"],
            'gender' => $validated["gender"],
            'religion' => $validated["religion"],
            'address' => $validated["address"],
            'postal_code' => $validated["postal_code"],
            'high_school' => $validated["high_school"],
            'pass_photo' => $pass_photo_name,
            'ktp' => $ktp_name,
            'diploma' => $diploma_name,
            'transcript' => $transcript_name,
            'region' => $validated["region"],
            'study_program' => $validated["study_program"],
        ]);

        $validated["pass_photo"]->storeAs("public/uploads/photo", $pass_photo_name);
        $validated["ktp"]->storeAs("public/uploads/ktp", $ktp_name);
        $validated["diploma"]->storeAs("public/uploads/diploma", $diploma_name);
        $validated["transcript"]->storeAs("public/uploads/transcript", $transcript_name);

        return redirect()->route('data.create')->with(['message' => 'Data Berhasil Disimpan!']);
    }
}
