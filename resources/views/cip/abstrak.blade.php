@extends('layouts.app')

@section('content')

<div class="container top">
    <h1>Payment Chemistry Innovation Project</h1>
    <br>
    @if ($status == 4)
        <h3>Abstrak sedang diverifikasi oleh Panitia</h3>
    @else
        <h3>Silahkan kirimkan Abstrak</h3>
        <form>
            <div class="form-group">
                <label for="bukti">Upload Abstrak</label>
                <br><br>
                <input type="file" class="form-control" id="bukti" aria-describedby="emailHelp" name="bukti_bayar" required>
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-primary" onclick="abstrak()">Submit</button>
    @endif
</div>

<style>
    body {
        background-image: url({{url('images/CIP/bg-1.jpg')}});
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('script')
    <script>
        var id = <?php echo $id ?>;

        function abstrak(){
            var formData = new FormData();
            formData.append('bukti', document.querySelector('#bukti').files[0]);
            
            axios({
                method: 'post',
                url: '/abstrak/'+id,
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                if(response.data.result == 1){
                    window.alert('Upload bukti pembayaran berhasil');
                    window.location.href = '/cip';
                }else {
                    window.alert('Upload file gagal');
                }
            })
            .catch(error => {
                window.alert('Upload file gagal');
            });
        }
    </script>
@endsection