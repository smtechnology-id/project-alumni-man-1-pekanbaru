<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Data Alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px; /* Meningkatkan padding untuk memberi ruang lebih */
            text-align: left;
            width: auto;
        }

        th {
            background-color: #f2f2f2;
            width: 150px;
            white-space: nowrap;
        }

        td {
            text-align: left;
            width: 150px;
            /* Atur lebar kolom sesuai kebutuhan */
            white-space: nowrap;
            /* Mencegah teks membungkus */
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <div class="top">
        <div>
            <table>
                <thead>
                    <tr>
                        <th colspan="32" style="text-align: center; vertical-align: middle; font-weight: 700; font-size: 16px;">Rekap Data Alumni</th>
                    </tr>
                    <tr>
                        <th colspan="16" style="text-align: center; vertical-align: middle; font-weight: 700; height: 30px; font-size: 14px;">Biodata Alumni</th>
                        <th colspan="4" style="text-align: center; vertical-align: middle; font-weight: 700; height: 30px; font-size: 14px;">Biodata Kampus</th>
                        <th colspan="4" style="text-align: center; vertical-align: middle; font-weight: 700; height: 30px; font-size: 14px;">Pekerjaan</th>
                    </tr>
                    <tr>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">No</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Nama Lengkap</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Jenis Kelamin</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Tahun Masuk</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Tahun Lulus</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Provinsi</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Kabupaten</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Kecamatan</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Desa / Kelurahan</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Nomor Telepon</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Facebook</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Instagram</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Pendidikan Terakhir</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Kuliah?</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Bekerja?</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Berkeluarga?</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Menganggur?</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Jenis Perguruan Tinggi</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Tahun Masuk</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Nama Kampus</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Prodi / Jurusan</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Jenis Pekerjaan</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Nama Perusahaan</th>
                        <th style="width: 200px; text-align: center; vertical-align: middle; font-weight: 700;">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $report)
                    <tr>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $loop->iteration }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->nama_lengkap }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->jenis_kelamin }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->tahun_masuk }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->tahun_lulus }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->provinsi }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->kabupaten }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->kecamatan }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->desa }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->no_hp }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->facebook }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->instagram }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->pendidikan_terakhir }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->kuliah }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->bekerja }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->berkeluarga }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->menganggur }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->jenis_perguruan_tinggi }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->tahun_masuk_perguruan_tinggi }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->nama_perguruan_tinggi }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->program_studi }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->jenis_pekerjaan }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->nama_perusahaan }}</td>
                        <td style="width: 200px; text-align: center; vertical-align: middle">{{ $report->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
        </div>
    </div>

</body>

</html>