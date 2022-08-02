@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lini Masa</h1>
    </div>

    <div class="mb-3">
        <label for="chempaign" class="form-label">Pilih Type Chempaign</label>
        <div id="middle-height">
            <select id="chempaign" class="form-select" aria-label="Default select example">
                <option value="5">Chemistry Competition</option>
                <option value="6">Chemistry Open Debate</option>
                <option value="7">Chemistry Innovation Project</option>
                <option value="8">Seminar Nasional</option>
                <option value="9">Chempaign</option>
            </select>
        </div>
    </div>

    <div id="form_admin">
        <form id="form1">
            @include('admin.lini_masa.cc')
        </form>
        <form id="form2" style="display: none;">
            @include('admin.lini_masa.cod')
        </form>
        <form id="form3" style="display: none;">
            @include('admin.lini_masa.cip')
        </form>
        <form id="form4" style="display: none;">
            @include('admin.lini_masa.semnas')
        </form>
        <form id="form5" style="display: none;">
            @include('admin.lini_masa.chempaign')
        </form>
        <div class="mb-3" style="height: 20px;">
            <button type="button" class="btn btn-info" style="float: right;" onclick="save_lini()">Save</button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $( document ).ready(function() {
        console.log( "ready!" );
    });

    $("#chempaign").change(function() {
        if ($(this).val() == 5) {
            $('#form1').css('display','block');
            $('#form2').css('display','none');
            $('#form3').css('display','none');
            $('#form4').css('display','none');
            $('#form5').css('display','none');
        } else if ($(this).val() == 6) {
            $('#form1').css('display','none');
            $('#form2').css('display','none');
            $('#form3').css('display','block');
            $('#form4').css('display','none');
            $('#form5').css('display','none');
        } else if ($(this).val() == 7) {
            $('#form1').css('display','none');
            $('#form2').css('display','block');
            $('#form3').css('display','none');
            $('#form4').css('display','none');
            $('#form5').css('display','none');
        } else if ($(this).val() == 8) {
            $('#form1').css('display','none');
            $('#form2').css('display','none');
            $('#form3').css('display','none');
            $('#form4').css('display','block');
            $('#form5').css('display','none');
        } else if ($(this).val() == 9) {
            $('#form1').css('display','none');
            $('#form2').css('display','none');
            $('#form3').css('display','none');
            $('#form4').css('display','none');
            $('#form5').css('display','block');
        }
    });

    function save_lini(){
        if($("#chempaign").val() == 5){
            var formData = new FormData(document.getElementById('form1'));
        }else if($("#chempaign").val() == 7){
            var formData = new FormData(document.getElementById('form2'));
        }else if($("#chempaign").val() == 6){
            var formData = new FormData(document.getElementById('form3'));
        }else if($("#chempaign").val() == 8){
            var formData = new FormData(document.getElementById('form4'));
        }else if($("#chempaign").val() == 9){
            var formData = new FormData(document.getElementById('form5'));
        }

        console.log(formData.get('chemistry_type'));

        axios({
            method: 'post',
            url: '/admin/lini_masa',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(response => {
            if(response.data == 1){
                window.alert('Update berhasil dilakukan');
                window.location.href = '/admin/lini_masa';
            }else {
                console.log(response);
                window.alert('Update gagal\nField tidak boleh kosong');
            }
        })
        .catch(error => {
            window.alert('Update gagal\nField tidak boleh kosong');
        });
    }
</script>
@endsection