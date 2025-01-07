<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/rumah.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>
                        @if (!empty($home))
                            {{ $home->nama_resto }}
                        @else
                            Company Name
                        @endif
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#team" class="nav-item nav-link">Team</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5" id="home">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <style>
                                .btn-sm {
                                    font-size: 40px;
                                    /* Ubah ukuran font sesuai kebutuhan */
                                    line-height: 1.2;
                                    /* Menyesuaikan tinggi baris */
                                    margin-bottom: 50px;
                                    /* Menghapus margin jika terlalu besar */
                                }
                            </style>
                            <h1 class="text-white animated slideInLeft btn-sm">
                                @if (!empty($home))
                                    {{ $home->tagline }}
                                @else
                                    belum ada tagline
                                @endif
                            </h1>
                            <style>
                                .bn-sm {
                                    font-size: 30px;
                                    /* Ubah ukuran font sesuai kebutuhan */
                                    line-height: 1.2;
                                    /* Menyesuaikan tinggi baris */
                                    margin: 0;
                                    /* Menghapus margin jika terlalu besar */
                                }
                            </style>
                            <h1 class="text-white animated slideInLeft bn-sm">
                                @if (!empty($home))
                                    {{ $home->slogan }}
                                @else
                                    belum ada slogan
                                @endif
                            </h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                @if (!empty($home))
                                    {{ $home->deskripsi }}
                                @else
                                    belum ada deskripsi
                                @endif
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('storage/' . $about->foto1) }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('storage/' . $about->foto2) }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('storage/' . $about->foto3) }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('storage/' . $about->foto4) }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to Selera Nusantara</h1>

                        <p class="mb-4">
                            @if (!empty($about))
                                {{ $about->tahun_berdiri }}
                            @else
                                belum ada tahun berdiri
                            @endif
                        </p>

                        <p class="mb-4">
                            @if (!empty($about))
                                {{ $about->latar_belakang }}
                            @else
                                belum ada latar belakang
                            @endif
                        </p>

                        <p class="mb-4"><strong>Visi:</strong>
                            @if (!empty($about))
                                {{ $about->visi }}
                            @else
                                belum ada visi
                            @endif
                        </p>
                        <p class="mb-4"><strong>Misi:</strong>
                            @if (!empty($about))
                                {{ $about->misi }}
                            @else
                                belum ada misi
                            @endif
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        {{ $yearsInBusiness }}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">
                                        {{ $tims->count() }}</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3" id="team">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                @foreach ($tims as $tim)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('storage/' . $tim->foto) }}" alt="" style="width: 300px; height: 300px; object-fit: cover;">
                            </div>
                            <h5 class="mb-0">{{ $tim->nama }}</h5>
                            <small>{{ $tim->jabatan }}</small>
                            <!-- <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Menu Start -->
    <div class="container-xxl py-5" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                            href="#tab-1">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Populer</small>
                                <h6 class="mt-n1 mb-0">Our Menu</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($menus as $menu)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded"
                                            src="{{ asset('storage/' . $menu->foto) }}" alt=""
                                            style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $menu->nama }}</span>
                                                <span class="text-primary">{{ $menu->harga_menu }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $menu->deskripsi }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- testimonial Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <!-- Kolom gambar -->
            <div class="col-md-6">
                <div class="image">
                    <img src="assets/img/Restaurant.jpg" alt="table" class="img-fluid" />
                </div>
            </div>

            <!-- Kolom form testimonial -->
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Testimonial</h5>
                    <h1 class="text-white mb-4">Ceritakan Pendapat Anda</h1>
                    <form action="{{ route('user.testimonial') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="nama"
                                        placeholder="Nama">
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Beritahu Kami Pendapat Anda" id="message" name="deskripsi"
                                        style="height: 100px"></textarea>
                                    <label for="message">Beritahu Kami Pendapat Anda</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{ $testimonial->deskripsi }}</p>
                        <div class="d-flex align-items-center">


                            <div class="ps-3">
                                <h5 class="mb-1">{{ $testimonial->nama }}</h5>
                                <small>{{ $testimonial->email }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5" id="contact">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-6">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-3">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Lokasi</h5>
                                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $contact->alamat }}</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Kontak</h5>
                                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $contact->kontak }}</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $contact->email }}</p>
                            </div>
                            <div class="col-md-3">
                            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                                <h5 class="text-dark fw-normal">{{ $contact->hari_oprasional }}</h5>
                                <p>{{ $contact->jam_oprasional }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                        <!-- Sertakan Leaflet CSS dan JS -->
                        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
                        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                        <!-- Kontainer untuk peta -->
                        <div id="map" style="height: 370px;"></div>

                        <script>
                            // Nama alamat dari controller
                            var alamat = "{{ $alamat }}";

                            // Gunakan Nominatim API untuk mendapatkan koordinat dari nama alamat
                            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${alamat}`)
                                .then(response => response.json())
                                .then(data => {
                                    if (data.length > 0) {
                                        // Ambil koordinat dari hasil pencarian
                                        var latitude = data[0].lat;
                                        var longitude = data[0].lon;

                                        // Membuat peta dan menambahkan marker
                                        var map = L.map('map').setView([latitude, longitude], 13);

                                        // Menambahkan layer peta OpenStreetMap
                                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                        }).addTo(map);

                                        // Menambahkan marker pada alamat dan menampilkan nama alamat dalam popup
                                        L.marker([latitude, longitude]).addTo(map)
                                            .bindPopup('<b>' + alamat + '</b>')
                                            .openPopup();
                                    } else {
                                        alert("alamat tidak ditemukan.");
                                    }
                                })
                                .catch(error => {
                                    console.error("Error:", error);
                                });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <!-- <div class="container py-5">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $contact->alamat }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $contact->kontak }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $contact->email }}</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">{{ $contact->hari_operasional }}</h5>
                    <p>{{ $contact->jam_oprasional }}</p>
                </div>
            </div>
        </div> -->

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .copyright {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                flex-wrap: wrap; /* Agar responsif jika layar kecil */
            }
            .copyright a {
                margin: 0 5px; /* Memberikan jarak antar link */
                color: #000000; /* Warna teks hitam */
                text-decoration: none; /* Menghapus garis bawah */
                border-bottom: 1px solid #000000; /* Garis bawah */
            }
            .copyright a:hover {
                color: #007bff; /* Warna link saat di-hover */
                border-bottom-color: #007bff; /* Warna garis bawah saat di-hover */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="copyright">
                &copy; <a href="#">selera nusantara</a>
                Designed By <a href="">laras</a>
                Distributed By <a href="">dian</a>
            </div>
        </div>
    </body>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
