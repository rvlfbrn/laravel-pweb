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

<body>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <!-- FAWZUL AZHIM MUMIN (50421500) -->
        <fieldset class="container">
            <!-- M.NUR LUTHFI (50421769) -->
            <legend>FORM REGISTRASI CALON MAHASISWA</legend>
            <table>
                <!-- MUHAMMAD RAFI ILHAM (51421034)-->
                <tr>
                    <td>
                        <label for="fullname">Nama Lengkap</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" placeholder="Asep Sarip" required />
                        @if ($errors->has('fullname'))
                            <div class="text-danger">{{ $errors->first('fullname') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- RIVAL FEBRIAN	(51421329) -->
                <tr>
                    <td>
                        <label for="nik">NIK</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nik" id="nik" placeholder="XXXXXXXXXXXXXXXX" required />
                        @if ($errors->has('nik'))
                            <div class="text-danger">{{ $errors->first('nik') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- M.NUR LUTHFI (50421769) -->
                <tr>
                    <td>
                        <label for="nisn">NISN</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nisn" id="nisn" placeholder="XXXXXXXXXX" required />
                        @if ($errors->has('nisn'))
                            <div class="text-danger">{{ $errors->first('nisn') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- DICKY WIJAYA SAPUTRA (50421373) -->
                <tr>
                    <td>
                        <label for="email">Alamat Email</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" placeholder="nama@email.com" required />
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- FAWZUL AZHIM MUMIN (50421500) -->
                <tr>
                    <td>
                        <label for="phone">Nomor Handphone (Terkoneksi WhatsApp)</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="phone" id="phone" placeholder="08XXXXXXXXXX" required />
                        @if ($errors->has('phone'))
                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- RIVAL FEBRIAN	(51421329) -->
                <tr>
                    <td>
                        <label for="place_of_birth">Tempat Lahir</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="place_of_birth" id="place_of_birth" placeholder="Bogor" required />
                        @if ($errors->has('place_of_birth'))
                            <div class="text-danger">{{ $errors->first('place_of_birth') }}</div>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="date_of_birth">Tanggal Lahir</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="date" name="date_of_birth" id="date_of_birth" required />
                        @if ($errors->has('date_of_birth'))
                            <div class="text-danger">{{ $errors->first('date_of_birth') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- GEREN HAEKAL HAFIZH (50421549)-->
                <tr>
                    <td>
                        <label>Jenis Kelamin</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" id="male_gender" value="laki - laki" required />
                        <label for="male_gender">Laki - Laki</label>
                        <input type="radio" name="gender" id="female_gender" value="perempuan" />
                        <label for="female_gender">Perempuan</label>
                    </td>
                    @if ($errors->has('gender'))
                        <div class="text-danger">{{ $errors->first('gender') }}</div>
                    @endif
                </tr>

                <!-- MUHAMMAD RAFI ILHAM (51421034)-->
                <tr>
                    <td>
                        <label for="religion">Agama</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="religion" id="religion" required>
                            <option value="">-Pilih-</option>
                            <option value="buddha">Buddha</option>
                            <option value="hindu">Hindu</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="khonghucu">Khonghucu</option>
                            <option value="kristen">Kristen</option>
                        </select>
                        @if ($errors->has('religion'))
                            <div class="text-danger">{{ $errors->first('religion') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- MUHAMMAD RAFI ILHAM (51421034)-->
                <tr>
                    <td>
                        <label for="address">Alamat Rumah</label>
                    </td>
                    <td>:</td>
                    <td>
                        <textarea name="address" id="address" cols="30" rows="5"
                            placeholder="JALAN MANGGA BESAR III NO. 17, RT 06 RW 07, KELURAHAN BEDALI, KECAMATAN LAWANG, KAB. MALANG, JAWA TIMUR"
                            required></textarea>
                        @if ($errors->has('address'))
                            <div class="text-danger">{{ $errors->first('address') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- GEREN HAEKAL HAFIZH (50421549)-->
                <tr>
                    <td>
                        <label for="postal_code">Kode Pos</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="postal_code" id="postal_code" placeholder="60526" required />
                        @if ($errors->has('postal_code'))
                            <div class="text-danger">{{ $errors->first('postal_code') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- DICKY WIJAYA SAPUTRA (50421373) -->
                <tr>
                    <td>
                        <label for="high_school">Asal Sekolah</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="high_school" id="high_school" placeholder="SMAN 1 Depok" required />
                        @if ($errors->has('high_school'))
                            <div class="text-danger">{{ $errors->first('high_school') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- RIVAL FEBRIAN	(51421329) -->
                <tr>
                    <td>
                        <label for="pass_photo">Pas Foto (PNG, JPG, JPEG)</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="file" name="pass_photo" id="pass_photo" accept=".png, .jpg, .jpeg" required />
                        * Ukuran Maksimal 5 MB
                        @if ($errors->has('pass_photo'))
                            <div class="text-danger">{{ $errors->first('pass_photo') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- GEREN HAEKAL HAFIZH (50421549)-->
                <tr>
                    <td>
                        <label for="ktp">Scan KTP (PDF)</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="file" name="ktp" id="ktp" accept=".pdf" required />
                        * Ukuran Maksimal 5 MB
                        @if ($errors->has('ktp'))
                            <div class="text-danger">{{ $errors->first('ktp') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- M.NUR LUTHFI (50421769) -->
                <tr>
                    <td>
                        <label for="diploma">Scan Ijazah Terlegalisir (PDF)</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="file" name="diploma" id="diploma" accept=".pdf" required />
                        * Ukuran Maksimal 5 MB
                        @if ($errors->has('diploma'))
                            <div class="text-danger">{{ $errors->first('diploma') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- NUR MUHAMMAD HUSEIN (51421157)-->
                <tr>
                    <td>
                        <label for="transcript">Transkrip Nilai (Semester 1 - 6) (PDF)</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="file" name="transcript" id="transcript" accept=".pdf" required />
                        * Ukuran Maksimal 5 MB
                        @if ($errors->has('transcript'))
                            <div class="text-danger">{{ $errors->first('transcript') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- NUR MUHAMMAD HUSEIN (51421157) -->
                <tr>
                    <td>
                        <label for="region">Wilayah Kampus</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="region" id="region" required>
                            <option value="">-Pilih-</option>
                            <option value="depok">Depok</option>
                            <option value="alam sutera">Alam Sutera</option>
                            <option value="karawaci">Karawaci</option>
                            <option value="kalimalang">Kalimalang</option>
                        </select>
                        @if ($errors->has('region'))
                            <div class="text-danger">{{ $errors->first('region') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- NUR MUHAMMAD HUSEIN (51421157) -->
                <tr>
                    <td>
                        <label for="study_program">Program Studi</label>
                    </td>
                    <td>:</td>
                    <td>
                        <select name="study_program" id="study_program" required>
                            <option value="">-Pilih-</option>
                            <optgroup label="Fakultas Ilmu Komputer dan Teknologi Informasi">
                                <option value="sistem komputer s1">
                                    - Sistem Komputer S1
                                </option>
                                <option value="sistem informasi s1">
                                    - Sistem Informasi S1
                                </option>
                                <option value="teknik komputer d3">
                                    - Teknik Komputer D3
                                </option>
                                <option value="manajemen informatika d3">
                                    - Manajemen Informatika D3
                                </option>
                            </optgroup>
                            <optgroup label="Fakultas Teknologi Industri">
                                <option value="informatika s1">- Informatika S1</option>
                                <option value="teknik elektro s1">- Teknik Elektro S1</option>
                                <option value="teknik mesin s1">- Teknik Mesin S1</option>
                                <option value="teknik industri s1">
                                    - Teknik Industri S1
                                </option>
                                <option value="agroteknologi s1">- Agroteknologi S1</option>
                            </optgroup>
                            <optgroup label="Fakultas Ekonomi">
                                <option value="akuntansi s1">- Akuntansi S1</option>
                                <option value="manajemen s1">- Manajemen S1</option>
                                <option value="ekonomi syariah s1">
                                    - Ekonomi Syariah S1
                                </option>
                                <option value="akuntansi d3">- Akuntansi D3</option>
                                <option value="manajemen d3">- Manajemen D3</option>
                            </optgroup>
                            <optgroup label="Fakultas Sipil dan Perencanaan">
                                <option value="arsitektur s1">- Arsitektur S1</option>
                                <option value="desain interior s1">
                                    - Desain Interior S1
                                </option>
                                <option value="teknik sipil s1">- Teknik Sipil S1</option>
                            </optgroup>
                        </select>
                        @if ($errors->has('study_program'))
                            <div class="text-danger">{{ $errors->first('study_program') }}</div>
                        @endif
                    </td>
                </tr>

                <!-- FAWZUL AZHIM MUMIN (50421500) -->
                <tr>
                    <td>
                        <input type="submit" value="Kirim" />
                        <input type="reset" value="Bersihkan" />
                    </td>
                </tr>
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
