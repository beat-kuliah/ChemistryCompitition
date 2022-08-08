@extends('layouts.app')

@section('content')

<div class="container top">
    <center><h1>Seminar Nasional</h1></center>
    <br>
    <div class="form_utama">
        <form id="form">
            <div class="mb-3">
                <label for="statusSekolah" class="form-label">Kategori</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_sekolah" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Siswa</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status_sekolah" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Mahasiswa</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama lengkap</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM / No.Kartu Pelajar / NISN</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nim" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="noTelp" class="form-label">Nomor Telepon</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_telp" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div id="middle-height">
                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="scan" class="form-label">Upload Scan KTP / Kartu Pelajar / Kartu Mahasiswa</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="scan" name="scan" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="mention" class="form-label">Upload bukti unggahan instastory</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="mention" name="mention" autocomplete="off" required>
                    <span class="form-text">Upload poster seminar (Link ada di Website) di instagram story & mention 5 orang teman dan @chemistryfair.ui</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="twibon" class="form-label">Upload bukti upload twibbon</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="twibon" name="twibon" autocomplete="off" required>
                    <span class="form-text">Upload Bukti Upload Twibbon di Instagram (Tag chemistryfair.ui)</span>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="semnas()">Submit</button>
    </div>
</div>

<style>
    body {
        background-image: url({{ url('images/semnas/bg-1.jpg') }});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
<script>
    function semnas() {
    
        var formData = new FormData(document.getElementById('form'));
        formData.append('scan', document.querySelector('#scan').files[0]);
        formData.append('bukti', document.querySelector('#mention').files[0]);
        formData.append('twibon', document.querySelector('#twibon').files[0]);

        axios({
            method: 'post',
            url: '/semnas',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(response => {
            if(response.data.result == 1){
                window.alert('Pendaftaran berhasil dilakukan');
                window.location.href = '/semnas/finish';
            }else {
                console.log(response);
                window.alert('Pendaftaran gagal');
            }
        })
        .catch(error => {
            console.log(error);
            window.alert('Pendaftaran gagal');
        });
    }
</script>
@endsection