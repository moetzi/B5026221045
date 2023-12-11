@extends('masterkaryawan')

@section('title','Tambah karyawan')

@section('konten')
    <br>
    <br>
	<center><h3>Data karyawan Baru</h3><center>

	<br/>
    <br/>

	<form action="/karyawan/store" method="post" class="form-horizontal justify-content-center">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="kodepegawai" class="col-form-label col-sm-4 text-right">Kode pegawai:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan kode pegawai" id="kodepegawai" name="kodepegawai">
        </div>


        <div class="form-group row">
            <label for="namalengkap" class="col-form-label col-sm-4 text-right">Nama lengkap:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan nama lengkap" id="namalengkap" name="namalengkap">
        </div>


        <div class="form-group row">
            <label for="divisi" class="col-form-label col-sm-4 text-right">Divisi:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan divisi" id="divisi" name="divisi">
        </div>


        <div class="form-group row">
            <label for="departemen" class="col-form-label col-sm-4 text-right">Departemen:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan departemen" id="departemen" name="departemen">
        </div>

        <br>
        <br>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mr-4" onclick="simpanData()">Simpan</button>
            <div class="mr-2"></div>
            <a class="btn btn-dark" href="/karyawan">Kembali</a>
        </div>
	</form>

    <script>
    $(document).ready(function() {
        function simpanData() {
            var kodepegawai = document.getElementById('kodepegawai').value;

            // Make an AJAX request to check for unique kodepegawai
            $.ajax({
                type: 'POST',
                url: '/checkUniqueKodepegawai',
                data: {
                    kodepegawai: kodepegawai,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.isUnique) {
                        // If kodepegawai is unique, submit the form
                        document.forms[0].submit();
                    } else {
                        // Show Bootstrap alert for duplicate entry
                        var alertHtml = '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                            'Kode Pegawai sudah ada di tabel. Silakan gunakan kode yang berbeda.' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                            '</button>' +
                            '</div>';

                        // Append the alert to the body or a specific container
                        document.body.insertAdjacentHTML('beforeend', alertHtml);
                    }
                }
            });
        }
    });
    </script>
    <br>

@endsection
