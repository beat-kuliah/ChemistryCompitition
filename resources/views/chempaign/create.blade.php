@extends('layouts.app')

@section('content')
<div class="container top">
    <center><h1>Chempaign</h1></center>
    <br>
    <div class="form_utama">
        <div class="mb-3">
            <label for="chempaign" class="form-label">Pilih Type Chempaign</label>
            <div id="middle-height">
                <select id="chempaign_type" class="form-select" aria-label="Default select example">
                    <option value="1" selected>Chemistry Photography</option>
                    <option value="2">Chemistry Movie Project</option>
                    <option value="3">Chemistry Poster Design</option>
                    <option value="4">Daily Vlog</option>
                </select>
            </div>
        </div>
        <form id="form1">
            <div class="mb-3">
                <label for="namaPeserta" class="form-label">Nama peserta</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM/No.Kartu Pelajar/No.KTP</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nim" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="instansi" autocomplete="off" required>
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
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="alamat" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_telp" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="idLine" class="form-label">IdLine</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="idLine" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div id="middle-height">
                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="scanKartu" class="form-label">Upload Scan Kartu Pelajar</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_pelajar" name="scan_kartu_pelajar" autocomplete="off" required>
                </div>
            </div>
        </form>
        <form id="form2" style="display: none">
            <div class="mb-3">
                <label for="namaKetua" class="form-label">Nama Ketua</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_ketua" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="namaPeserta" class="form-label">Nama peserta 1</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nama_peserta[]" autocomplete="off" required>
                </div>
            </div>
            <div id="peserta"></div>
            <div class="mb-3" style="height: 30px;">
                <button id="addRow" type="button" class="btn btn-info" style="float: right;">Add Row</button>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM/No.Kartu Pelajar/No.KTP Ketua</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="nim" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Instansi</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="instansi" autocomplete="off" required>
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
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <div id="middle-height">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineCheckbox1" value="0" checked>
                        <label class="form-check-label" for="inlineCheckbox1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineCheckbox2" value="1">
                        <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap Ketua</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="alamat" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="no_telp" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="idLine" class="form-label">IdLine</label>
                <div id="middle-height">
                    <input type="text" class="form-control" name="idLine" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div id="middle-height">
                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="scanKartu" class="form-label">Upload Scan Kartu Pelajar</label>
                <div id="middle-height">
                    <input type="file" class="form-control" id="kartu_ketua" name="scan_kartu_ketua" autocomplete="off" required>
                </div>
            </div>
        </form>
        <button type="submit" class="btn btn-primary" onclick="chempaign()">Submit</button>
    </div>
</div>
<style>
    body {
        background-image: url('../images/chempaign/bg-1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
<script>
    $("#chempaign_type").change(function() {
        if ($(this).val() == 2) {
            $('#form1').css('display','none');
            $('#form2').css('display','block');
        } else {
            $('#form1').css('display','block');
            $('#form2').css('display','none');
        }
    });
    
    var limit = 10;
    var count = 1;

    // add row
    $("#addRow").click(function () {

        if(count == limit){
            window.alert('Jumlah Peserta sudah maksimal');
        }else{
            count++;

            var html = '';
            html += '<div class="mb-3" id="inputFormRow">';
            html += '<label for="namaPeserta" class="form-label">Nama peserta ' + count + '</label>';
            html += '<div id="middle-height">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="form-control form-check-inline" name="nama_peserta[]" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#peserta').append(html);
        }
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });

    function chempaign(){
        var chempaign_type = $("#chempaign_type").val();

        if(chempaign_type == 2){
            var values = $("input[name='nama_peserta[]']")
                .map(function(){return $(this).val();}).get();

            var formData = new FormData(document.getElementById('form2'));
            formData.append('kartu', document.querySelector('#kartu_ketua').files[0])
            formData.append('peserta', values);
        }else {
            var formData = new FormData(document.getElementById('form1'));
            formData.append('kartu', document.querySelector('#kartu_pelajar').files[0])
        }
        formData.append('chempaign_type', chempaign_type);

        axios({
            method: 'post',
            url: '/chempaign',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(response => {
            if(response.data.result == 1){
                window.alert('Pendaftaran berhasil dilakukan');
                window.location.href = '/payment/chempaign/'+response.data.id;
            }else {
                console.log(response);
                window.alert('Pendaftaran gagal\nSilahkan lengkapi form pendaftaran');
            }
        })
        .catch(error => {
            window.alert('Pendaftaran gagal\nSilahkan lengkapi form pendaftaran');
        });
    }
</script>
@endsection