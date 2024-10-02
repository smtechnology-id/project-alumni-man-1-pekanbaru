<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    {{-- bootstraps --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <title>Form Pendataan Alumni MAN 1 Kota Pekan Baru</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/neptune.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/neptune.png') }}" />
</head>

<body>
    <div class="container py-5">
        <div class="card">
            <div class="card-header" style="background-color: #f0cc34; color: white;">
                <h3>Form Pendataan Alumni MAN 1 Kota Pekan Baru</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                {{-- Error Validation --}}
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h5 class="card-title">Biodata Alumni</h5>
                <form action="{{ route('pendataan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    aria-describedby="nama_lengkap" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tahun_masuk" class="form-label">Tahun Masuk <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                    aria-describedby="tahun_masuk" placeholder="0000" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="nama_lengkap" class="form-label">Jenis Kelamin <span
                                        class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama_lengkap" class="form-label">Tahun Lulus <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="tahun_lulus" name="tahun_lulus"
                                    aria-describedby="tahun_lulus" placeholder="0000" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label for="provinsi" class="form-label">Domisili Saat Ini <span
                                        class="text-danger">*</span></label>
                                <select name="provinsi" id="provinsi" class="form-select" required>
                                    <option value="">Pilih Provinsi</option>
                                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Bangka Belitung">Bangka Belitung</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Banten">Banten</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Tengah">Papua Tengah</option>
                                    <option value="Papua Pegunungan">Papua Pegunungan</option>
                                    <option value="Papua Selatan">Papua Selatan</option>
                                    <option value="Papua Barat Daya">Papua Barat Daya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label for="kabupaten" class="form-label">Kabupaten / Kota <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                                    aria-describedby="kabupaten" placeholder="Kabupaten" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    aria-describedby="kecamatan" placeholder="Kecamatan" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label for="desa" class="form-label">Desa / Kelurahan <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="desa" name="desa" aria-describedby="desa"
                                    placeholder="Desa / Kelurahan" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <label for="no_hp" class="form-label">Nomor Handphone <span
                                    class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="08********"
                                    aria-label="08********" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="facebook" class="form-label">Facebook</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-facebook"></i></span>
                                <input type="text" id="facebook" name="facebook" class="form-control"
                                    placeholder="Facebook" aria-label="Facebook" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="instagram" class="form-label">Instagram</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram"></i></span>
                                <input type="text" id="instagram" name="instagram" class="form-control"
                                    placeholder="Instagram" aria-label="Instagram" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group mb-3">
                                <label for="foto" class="form-label">Pendidikan Terakhir <span
                                        class="text-danger">*</span></label>
                                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-select"
                                    required>
                                    <option value="">Pilih Pendidikan Terakhir</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group mb-3">
                                <label for="kuliah" class="form-label">Kuliah? <span
                                        class="text-danger">*</span></label>
                                <select name="kuliah" id="kuliah" class="form-select" required>
                                    <option value="">Pilih ...</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group mb-3">
                                <label for="bekerja" class="form-label">Bekerja? <span
                                        class="text-danger">*</span></label>
                                <select name="bekerja" id="bekerja" class="form-select" required>
                                    <option value="">Pilih ...</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group mb-3">
                                <label for="berkeluarga" class="form-label">Berkeluarga? <span
                                        class="text-danger">*</span></label>
                                <select name="berkeluarga" id="berkeluarga" class="form-select" required>
                                    <option value="">Pilih ...</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group mb-3">
                                <label for="menganggur" class="form-label">Menganggur? <span
                                        class="text-danger">*</span></label>
                                <select name="menganggur" id="menganggur" class="form-select" required>
                                    <option value="">Pilih ...</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>Biodata Kampus (Setelah Lulus dari MAN 1 Kota Pekan Baru)</h5>
                    <div class="row">
                        <div class="col-3">
                            <label for="jenis_perguruan_tinggi" class="form-label">Jenis Perguruan Tinggi </label>
                            <select name="jenis_perguruan_tinggi" id="jenis_perguruan_tinggi" class="form-select">
                                <option value="">Pilih Jenis Perguruan Tinggi</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tahun_masuk_perguruan_tinggi" class="form-label">Tahun Masuk Perguruan Tinggi
                                <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="tahun_masuk_perguruan_tinggi"
                                name="tahun_masuk_perguruan_tinggi" aria-describedby="tahun_masuk_perguruan_tinggi"
                                placeholder="0000" >
                        </div>
                        <div class="col-3">
                            <label for="nama_perguruan_tinggi" class="form-label">Nama Perguruan Tinggi</label>
                            <input type="text" class="form-control" id="nama_perguruan_tinggi"
                                name="nama_perguruan_tinggi" aria-describedby="nama_perguruan_tinggi"
                                placeholder="Nama Perguruan Tinggi" >
                        </div>
                        <div class="col-3">
                            <label for="program_studi" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="program_studi" name="program_studi"
                                aria-describedby="program_studi" placeholder="Program Studi / Jurusan" >
                        </div>
                    </div>
                    <br>
                    <h5>Pekerjaan (Diisi apabila sudah bekerja)</h5>
                    <div class="row">
                        <div class="col-4">
                            <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan</label>
                            <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan"
                                aria-describedby="jenis_pekerjaan" placeholder="Jenis Pekerjaan" >
                        </div>
                        <div class="col-4">
                            <label for="nama_perusahaan" class="form-label">Instansi / Lembaga / Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                                aria-describedby="nama_perusahaan" placeholder="Nama Perusahaan" >
                        </div>
                        <div class="col-4">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                aria-describedby="jabatan" placeholder="Jabatan" >
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

{{-- Bootstraps --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>