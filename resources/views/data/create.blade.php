<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Form Registrasi Calon Mahasiswa</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-info text-light p-3" style="background: linear-gradient(to bottom, #4ebbdf, #22be78);">
    <form method="POST" enctype="multipart/form-data" class="container">
        @csrf
        <fieldset class="card p-3">
            <legend class="card-header fw-bold mb-3">FORM REGISTRASI CALON MAHASISWA</legend>
            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Asep Sarip"
                    required value="{{ old('fullname') }}" />
                @if ($errors->has('fullname'))
                    <div class="text-danger">{{ $errors->first('fullname') }}</div>
                @endif
            </div>

            <!-- RIVAL FEBRIAN	(51421329) -->
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" placeholder="XXXXXXXXXXXXXXXX"
                    required value="{{ old('nik') }}" />
                @if ($errors->has('nik'))
                    <div class="text-danger">{{ $errors->first('nik') }}</div>
                @endif
            </div>

            <!-- M.NUR LUTHFI (50421769) -->
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" name="nisn" id="nisn" class="form-control" placeholder="XXXXXXXXXX"
                    required value="{{ old('nisn') }}" />
                @if ($errors->has('nisn'))
                    <div class="text-danger">{{ $errors->first('nisn') }}</div>
                @endif
            </div>

            <!-- DICKY WIJAYA SAPUTRA (50421373) -->
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="nama@email.com" required
                    value="{{ old('email') }}" />
                @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- FAWZUL AZHIM MUMIN (50421500) -->
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Handphone (Terkoneksi WhatsApp)</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="08XXXXXXXXXX"
                    required value="{{ old('phone') }}" />
                @if ($errors->has('phone'))
                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                @endif
            </div>

            <!-- RIVAL FEBRIAN	(51421329) -->
            <div class="mb-3">
                <label for="place_of_birth" class="form-label">Tempat Lahir</label>
                <input type="text" name="place_of_birth" id="place_of_birth" class="form-control" placeholder="Bogor"
                    required value="{{ old('place_of_birth') }}" />
                @if ($errors->has('place_of_birth'))
                    <div class="text-danger">{{ $errors->first('place_of_birth') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required
                    value="{{ old('date_of_birth') }}" />
                @if ($errors->has('date_of_birth'))
                    <div class="text-danger">{{ $errors->first('date_of_birth') }}</div>
                @endif
            </div>

            <!-- GEREN HAEKAL HAFIZH (50421549)-->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div>
                    <input class="form-check-input" type="radio" name="gender" id="male_gender" value="laki - laki"
                        required {{ old('gender') == 'laki - laki' ? 'checked' : '' }} />
                    <label class="form-check-label" for="male_gender">Laki - Laki</label>
                    <input class="form-check-input" type="radio" name="gender" id="female_gender" value="perempuan"
                        {{ old('gender') == 'perempuan' ? 'checked' : '' }} />
                    <label class="form-check-label" for="female_gender">Perempuan</label>
                </div>
                @if ($errors->has('gender'))
                    <div class="text-danger">{{ $errors->first('gender') }}</div>
                @endif
            </div>

            <!-- MUHAMMAD RAFI ILHAM (51421034)-->
            <div class="mb-3">
                <label for="religion" class="form-label">Agama</label>
                <select name="religion" id="religion" class="form-select" required>
                    <option value="">-Pilih-</option>
                    <option value="buddha" {{ old('religion') == 'buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="islam" {{ old('religion') == 'islam' ? 'selected' : '' }}>Islam</option>
                    <option value="katolik" {{ old('religion') == 'katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="khonghucu" {{ old('religion') == 'khonghucu' ? 'selected' : '' }}>Khonghucu
                    </option>
                    <option value="kristen" {{ old('religion') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                </select>
                @if ($errors->has('religion'))
                    <div class="text-danger">{{ $errors->first('religion') }}</div>
                @endif
            </div>

            <!-- MUHAMMAD RAFI ILHAM (51421034)-->
            <div class="mb-3">
                <label for="address" class="form-label">Alamat Rumah</label>
                <textarea class="form-control" name="address" id="address" cols="30" rows="5"
                    placeholder="JALAN MANGGA BESAR III NO. 17, RT 06 RW 07, KELURAHAN BEDALI, KECAMATAN LAWANG, KAB. MALANG, JAWA TIMUR"
                    required>{{ old('address') }}</textarea>
                @if ($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>

            <!-- GEREN HAEKAL HAFIZH (50421549)-->
            <div class="mb-3">
                <label for="postal_code" class="form-label">Kode Pos</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="60526"
                    required value="{{ old('postal_code') }}" />
                @if ($errors->has('postal_code'))
                    <div class="text-danger">{{ $errors->first('postal_code') }}</div>
                @endif
            </div>

            <!-- DICKY WIJAYA SAPUTRA (50421373) -->
            <div class="mb-3">
                <label for="high_school" class="form-label">Asal Sekolah</label>
                <input type="text" name="high_school" id="high_school" class="form-control"
                    placeholder="SMAN 1 Depok" required value="{{ old('high_school') }}" />
                @if ($errors->has('high_school'))
                    <div class="text-danger">{{ $errors->first('high_school') }}</div>
                @endif
            </div>

            <!-- RIVAL FEBRIAN	(51421329) -->
            <div class="mb-3">
                <label for="pass_photo" class="form-label">Pas Foto (PNG, JPG, JPEG)</label>
                <div class="input-group">
                    <input type="file" name="pass_photo" id="pass_photo" class="form-control"
                        accept=".png, .jpg, .jpeg" required />
                    <span class="input-group-text">* Ukuran Maksimal 5 MB</span>
                </div>
                @if ($errors->has('pass_photo'))
                    <div class="text-danger">{{ $errors->first('pass_photo') }}</div>
                @endif
            </div>

            <!-- GEREN HAEKAL HAFIZH (50421549)-->
            <div class="mb-3">
                <label for="ktp" class="form-label">Scan KTP (PDF)</label>
                <div class="input-group">
                    <input type="file" name="ktp" id="ktp" class="form-control" accept=".pdf"
                        required />
                    <span class="input-group-text">* Ukuran Maksimal 5 MB</span>
                </div>
                @if ($errors->has('ktp'))
                    <div class="text-danger">{{ $errors->first('ktp') }}</div>
                @endif
            </div>

            <!-- M.NUR LUTHFI (50421769) -->
            <div class="mb-3">
                <label for="diploma" class="form-label">Scan Ijazah Terlegalisir (PDF)</label>
                <div class="input-group">
                    <input type="file" name="diploma" id="diploma" class="form-control" accept=".pdf"
                        required />
                    <span class="input-group-text">* Ukuran Maksimal 5 MB</span>
                </div>
                @if ($errors->has('diploma'))
                    <div class="text-danger">{{ $errors->first('diploma') }}</div>
                @endif
            </div>

            <!-- NUR MUHAMMAD HUSEIN (51421157)-->
            <div class="mb-3">
                <label for="transcript" class="form-label">Transkrip Nilai (Semester 1 - 6) (PDF)</label>
                <div class="input-group">
                    <input type="file" name="transcript" id="transcript" class="form-control" accept=".pdf"
                        required />
                    <span class="input-group-text">* Ukuran Maksimal 5 MB</span>
                </div>
                @if ($errors->has('transcript'))
                    <div class="text-danger">{{ $errors->first('transcript') }}</div>
                @endif
            </div>

            <!-- NUR MUHAMMAD HUSEIN (51421157) -->
            <div class="mb-3">
                <label for="region" class="form-label">Wilayah Kampus</label>
                <select name="region" id="region" class="form-select" required>
                    <option value="">-Pilih-</option>
                    <option value="depok" {{ old('region') == 'depok' ? 'selected' : '' }}>Depok</option>
                    <option value="alam sutera" {{ old('region') == 'alam sutera' ? 'selected' : '' }}>Alam Sutera
                    </option>
                    <option value="karawaci" {{ old('region') == 'karawaci' ? 'selected' : '' }}>Karawaci</option>
                    <option value="kalimalang" {{ old('region') == 'kalimalang' ? 'selected' : '' }}>Kalimalang
                    </option>
                </select>
                @if ($errors->has('region'))
                    <div class="text-danger">{{ $errors->first('region') }}</div>
                @endif
            </div>

            <!-- NUR MUHAMMAD HUSEIN (51421157) -->
            <div class="mb-3">
                <label for="study_program" class="form-label">Program Studi</label>
                <select name="study_program" id="study_program" class="form-select" required>
                    <option value="">-Pilih-</option>
                    <optgroup label="Fakultas Ilmu Komputer dan Teknologi Informasi">
                        <option value="sistem komputer s1"
                            {{ old('study_program') == 'sistem komputer s1' ? 'selected' : '' }}>
                            - Sistem Komputer S1
                        </option>
                        <option value="sistem informasi s1"
                            {{ old('study_program') == 'sistem informasi s1' ? 'selected' : '' }}>
                            - Sistem Informasi S1
                        </option>
                        <option value="teknik komputer d3"
                            {{ old('study_program') == 'teknik komputer d3' ? 'selected' : '' }}>
                            - Teknik Komputer D3
                        </option>
                        <option value="manajemen informatika d3"
                            {{ old('study_program') == 'manajemen informatika d3' ? 'selected' : '' }}>
                            - Manajemen Informatika D3
                        </option>
                    </optgroup>
                    <optgroup label="Fakultas Teknologi Industri">
                        <option value="informatika s1"
                            {{ old('study_program') == 'informatika s1' ? 'selected' : '' }}>- Informatika S1</option>
                        <option value="teknik elektro s1"
                            {{ old('study_program') == 'teknik elektro s1' ? 'selected' : '' }}>- Teknik Elektro S1
                        </option>
                        <option value="teknik mesin s1"
                            {{ old('study_program') == 'teknik mesin s1' ? 'selected' : '' }}>- Teknik Mesin S1
                        </option>
                        <option value="teknik industri s1"
                            {{ old('study_program') == 'teknik industri s1' ? 'selected' : '' }}>
                            - Teknik Industri S1
                        </option>
                        <option value="agroteknologi s1"
                            {{ old('study_program') == 'agroteknologi s1' ? 'selected' : '' }}>- Agroteknologi S1
                        </option>
                    </optgroup>
                    <optgroup label="Fakultas Ekonomi">
                        <option value="akuntansi s1" {{ old('study_program') == 'akuntansi s1' ? 'selected' : '' }}>-
                            Akuntansi S1</option>
                        <option value="manajemen s1" {{ old('study_program') == 'manajemen s1' ? 'selected' : '' }}>-
                            Manajemen S1</option>
                        <option value="ekonomi syariah s1"
                            {{ old('study_program') == 'ekonomi syariah s1' ? 'selected' : '' }}>
                            - Ekonomi Syariah S1
                        </option>
                        <option value="akuntansi d3" {{ old('study_program') == 'akuntansi d3' ? 'selected' : '' }}>-
                            Akuntansi D3</option>
                        <option value="manajemen d3" {{ old('study_program') == 'manajemen d3' ? 'selected' : '' }}>-
                            Manajemen D3</option>
                    </optgroup>
                    <optgroup label="Fakultas Sipil dan Perencanaan">
                        <option value="arsitektur s1" {{ old('study_program') == 'arsitektur s1' ? 'selected' : '' }}>
                            - Arsitektur S1</option>
                        <option value="desain interior s1"
                            {{ old('study_program') == 'desain interior s1' ? 'selected' : '' }}>
                            - Desain Interior S1
                        </option>
                        <option value="teknik sipil s1"
                            {{ old('study_program') == 'teknik sipil s1' ? 'selected' : '' }}>- Teknik Sipil S1
                        </option>
                    </optgroup>
                </select>
                @if ($errors->has('study_program'))
                    <div class="text-danger">{{ $errors->first('study_program') }}</div>
                @endif
            </div>

            <!-- FAWZUL AZHIM MUMIN (50421500) -->
            <div class="mt-3 mb-3">
                <input type="submit" value="Kirim" class="btn btn-success" />
                <input type="reset" value="Bersihkan" class="btn btn-secondary" />
            </div>
            </table>
        </fieldset>
    </form>

    @if (session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif
</body>

</html>
