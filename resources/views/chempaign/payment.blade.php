@extends('layouts.app')

@section('content')

<div class="container top">
    <h1>Payment Chempaign</h1>
    <br>
    @if ($status == 3)
        <h3>Pembayaran sudah diverifikasi oleh Panitia</h3>
    @elseif ($status == 2)
        <h3>Pembayaran sedang diverifikasi oleh Panitia</h3>
    @else
        <h3>Silahkan melakukan pembayaran sebesar Rp 10.000 ke No.Rek {{ env("NO_REKENING") }} Bank {{ env("BANK") }} a.n {{ env("BANK_A_N") }}.<br>Gopay, Dana, OVO, SPay = {{ env("ELEKTRONIK") }} ({{ env("BANK_E") }}).<br>Contact Person : <br>{{ env("CP_NAME1") }}: {{ env("CP_NOMOR1") }}/{{ env("CP_LINE1") }}<br>{{ env("CP_NAME2") }}: {{ env("CP_NOMOR2") }}/{{ env("CP_LINE2") }}</h3>
        <form>
            <div class="form-group">
                <label for="bukti">Upload Bukti Pembayaran</label>
                <br><br>
                <input type="file" class="form-control" id="bukti" aria-describedby="emailHelp" name="bukti_bayar" required>
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-primary" onclick="payment()">Submit</button>
    @endif
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
        var id = <?php echo $id ?>;

        function payment(){
            var formData = new FormData();
            formData.append('bukti', document.querySelector('#bukti').files[0]);
            
            axios({
                method: 'post',
                url: '/payment/'+id,
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                if(response.data.result == 1){
                    window.alert('Upload bukti pembayaran berhasil');
                    window.location.href = '/list_pendaftaran';
                }else {
                    console.log('gagal');
                }
            })
            .catch(error => {
                window.alert('Upload file gagal');
            });
        }
    </script>
@endsection