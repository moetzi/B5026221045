<html>

<head>
    <!-- div di seluruh halaman ini diset seperti i block, versi inpage -->
    <!-- bisa spesifik dengan menambahkna identifier pake class, jangan pake id karena nanti di js id diidentifikasi sebagai variabel-->
    <link rel="stylesheet" href="css/mystyle.css">
    <style>
        div{
            font-weight: bold;
            color : green;
            text-align: right;
        }
        .judulhalaman {
            text-align: center;
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="judulhalaman">Selamat datang</div>
    <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
    <p style="
        text-decoration: line-through;
        color:red;
        ">Hallo apa kabar?</p>
    <!-- Inpage CSS, digunakan ketika ada yang spesifik ke 1 halaman khusus-->
    <div>Hallo apa kabar?</div>
    <!-- External CSS, digunakan untuk format umum 1 website-->
    <span>Hallo apa kabar?</span>
    <p>Bagian terakhir</p>
</body>

</html>
