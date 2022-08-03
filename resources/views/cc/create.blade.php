@extends('layouts.app')

@section('content')

<div class="container top">
    <center><h1>Chemistry Competition</h1></center>
    <br>
    <div class="form_utama">
        <form id="form">
            <div class="mb-3">
                <label for="namaKetua" class="form-label">Nama Ketua</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenisKelaminKetua" class="form-label">Jenis Kelamin Ketua</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_ketua" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_ketua" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaAnggota" class="form-label">Nama Anggota</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_anggota" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenisKelaminAnggota" class="form-label">Jenis Kelamin Anggota</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomorKetua" class="form-label">Nomor Telepon Ketua</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="emailKetua" class="form-label">Email Ketua</label>
                <div id="middle-height">
                    <input type="email" class="form-control" name="email_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="asal_sekolah" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="regional" class="form-label">Regional</label>
                <div id="middle-height">
                    <select name="regional" class="form-select" aria-label="Default select example" required>
                        <option value="" disabled selected>Select regional</option>
                        @foreach ($regional as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                        </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaGuru" class="form-label">Nama Guru Pendamping</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_guru" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomorGuru" class="form-label">Nomor Telepon Guru Pendamping</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_guru" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="emailGuru" class="form-label">Email Guru Pendamping</label>
                <div id="middle-height">
                    <input type="email" class="form-control" name="email_guru" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="scanKartu" class="form-label">Upload Scan Kartu Pelajar</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_pelajar" name="scan_kartu_pelajar" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="pasFoto" class="form-label">Upload Pas Foto</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="foto" name="pas_foto" autocomplete="off" required>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="chemistry_competition()">Submit</button>
    </div>
</div>

<style>
    body {
        background-image: url({{url('images/CC/bg-1.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
<script>
    function chemistry_competition() {
        var formData = new FormData(document.getElementById('form'));
        formData.append('kartu_pelajar', document.querySelector('#kartu_pelajar').files[0])
        formData.append('foto', document.querySelector('#foto').files[0])

        axios({
            method: 'post',
            url: '/cc',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(response => {
            if(response.data.result == 1){
                window.alert('Pendaftaran berhasil dilakukan');
                window.location.href = '/payment/cc/'+response.data.id;
            }else {
                window.alert('Pendaftaran gagal\nSilahkan lengkapi form pendaftaran');
            }
        })
        .catch(error => {
            window.alert('Pendaftaran gagal\nSilahkan lengkapi form pendaftaran');
        });
    }
</script>
@endsection