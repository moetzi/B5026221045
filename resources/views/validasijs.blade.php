<html lang="en">

<head>
    <title>Javascript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;800&display=swap" rel="stylesheet">
    <script>
        function validateForm() {
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //cek hanya yg invalid
            if (nrp.value == "") {
                nrp.focus(); //tergantung ux designer
                nrp.placeholder = "contoh : 5026221126"
                alert("NRP harus diisi!");
                return false;
            }

            //yang ada abjad a...z invalid
            if (isNaN(nrp.value) == true) { //true jika ada abjad, false jika angka semua
                nrp.focus();
                msg.innerHTML = "NRP harus angka!"; //innerHTML mengubah tulisan didalam tag
                //alert("NRP harus angka!");
                return false;
            }

            //harus 10 digit; selain 10 invalid
            if (nrp.value.length != 10) {
                nrp.focus();
                alert("NRP harus 10 digit, Anda memasukkan " + nrp.value.length + " digit");
                return false;
            }

        }
    </script>  
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constraint
            database
        </div>

        <script>
            function validate() {
                console.log("baris 26");
                return false;
                console.log("baris 28");
                return true;
                console.log("baris 30");
                return false;
                //default dari return function adalah true
                //sebuah function bisa memiliki lebih dari dua return
                //tapi setelah menemui return pertama, baris kode selanjutnya diabaikan (hanya satu return pertama yg di execute)
            }
        </script>

        <form action="https://google.com" method="get" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="nrp">NRP :</label>
                <input type="text" class="form-control" id="nrp"><div id="msg" class="text-danger"></div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>

</body>

</html>
