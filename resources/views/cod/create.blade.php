@extends('layouts.app')

@section('content')

<div class="container top">
    <center><h1>Chemistry Open Debate</h1></center>
    <br>
    <div class="form_utama">
        <form id="form">
            <div class="mb-3">
                <label for="nomorIdentitasKetua" class="form-label">Nomor Identitas Ketua(KTP/KTM)</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_iden_ketua" autocomplete="off" required>
                </div>
            </div>
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
                <label for="scanKartuKetua" class="form-label">Upload Scan Kartu Pelajar Ketua</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_pelajar_ketua" name="scan_kartu_pelajar" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="pasFotoKetua" class="form-label">Upload Pas Foto Ketua</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="foto_ketua" name="pas_foto_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomorIdentitasAnggota1" class="form-label">Nomor Identitas Anggota 1(KTP/KTM)</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_iden_anggota1" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaAnggota1" class="form-label">Nama Anggota 1</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_anggota1" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenisKelaminAnggota1" class="form-label">Jenis Kelamin Anggota 1</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota1" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota1" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="scanKartuAnggota1" class="form-label">Upload Scan Kartu Pelajar Anggota 1</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_pelajar_anggota1" name="scan_kartu_pelajar_anggota1" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="pasFotoAnggota1" class="form-label">Upload Pas Foto Anggota 1</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="foto_anggota1" name="pas_foto_anggota1" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nomorIdentitasAnggota2" class="form-label">Nomor Identitas Anggota 2(KTP/KTM)</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_iden_anggota2" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaAnggota2" class="form-label">Nama Anggota 2</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_anggota2" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="jenisKelaminAnggota2" class="form-label">Jenis Kelamin Anggota 2</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota2" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin_anggota2" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="scanKartuAnggota2" class="form-label">Upload Scan Kartu Pelajar Anggota 2</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_pelajar_anggota2" name="scan_kartu_pelajar_anggota2" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="pasFotoAnggota2" class="form-label">Upload Pas Foto Anggota 2</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="foto_anggota2" name="pas_foto_anggota2" autocomplete="off" required>
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
        </form>
        <button type="submit" class="btn btn-primary" onclick="chemistry_open_debate()">Submit</button>
    </div>
</div>

<style>
    body {
        background-image: url('../images/COD/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
<script>
    function chemistry_open_debate() {
        console.log('nice');
        var formData = new FormData(document.getElementById('form'));
        formData.append('kartu_pelajar_ketua', document.querySelector('#kartu_pelajar_ketua').files[0]);
        formData.append('foto_ketua', document.querySelector('#foto_ketua').files[0]);
        formData.append('kartu_pelajar_anggota1', document.querySelector('#kartu_pelajar_anggota1').files[0]);
        formData.append('foto_anggota1', document.querySelector('#foto_anggota1').files[0]);
        formData.append('kartu_pelajar_anggota2', document.querySelector('#kartu_pelajar_anggota2').files[0]);
        formData.append('foto_anggota2', document.querySelector('#foto_anggota2').files[0]);

        console.log('nice2');
        axios({
            method: 'post',
            url: '/cod',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(response => {
            if(response.data.result == 1){
                window.alert('Pendaftaran berhasil dilakukan');
                window.location.href = '/payment/cod/'+response.data.id;
            }else {
                console.log(response);
                window.alert('Pendaftaran gagal 1');
            }
        })
        .catch(error => {
            window.alert('Pendaftaran gagal 2');
        });
    }
</script>
@endsection