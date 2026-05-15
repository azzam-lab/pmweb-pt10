@extends('layouts.index')
@section('content')

<div class="mb-4">
    <h4 class="fw-bold text-primary mb-1">
        <i class="bi bi-telephone-fill me-2"></i>Contact Us
    </h4>
    <p class="text-muted">Hubungi kami jika ada pertanyaan atau informasi lebih lanjut.</p>
    <hr>
</div>

{{-- Info Kontak --}}
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <div class="mb-3">
                    <span class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center" style="width:56px;height:56px;font-size:1.5rem;">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>
                </div>
                <h6 class="fw-bold">Alamat</h6>
                <p class="text-muted small mb-0">Jl. Raya Bogor Km. 30 No.18, Cimanggis, Depok, Jawa Barat 16953</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <div class="mb-3">
                    <span class="bg-success bg-opacity-10 text-success rounded-circle d-inline-flex align-items-center justify-content-center" style="width:56px;height:56px;font-size:1.5rem;">
                        <i class="bi bi-telephone-fill"></i>
                    </span>
                </div>
                <h6 class="fw-bold">Telepon</h6>
                <p class="text-muted small mb-0">
                    <a href="tel:+62218710365" class="text-decoration-none text-muted">(021) 871-0365</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-3">
            <div class="card-body">
                <div class="mb-3">
                    <span class="bg-warning bg-opacity-10 text-warning rounded-circle d-inline-flex align-items-center justify-content-center" style="width:56px;height:56px;font-size:1.5rem;">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                </div>
                <h6 class="fw-bold">Email</h6>
                <p class="text-muted small mb-0">
                    <a href="mailto:info@nurulfikri.ac.id" class="text-decoration-none text-muted">info@nurulfikri.ac.id</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Form Kirim Pesan --}}
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h6 class="mb-0"><i class="bi bi-chat-dots-fill me-2"></i>Kirim Pesan</h6>
    </div>
    <div class="card-body p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="#" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="contoh@email.com" required>
                </div>
                <div class="col-12">
                    <label for="subjek" class="form-label fw-semibold">Subjek</label>
                    <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subjek pesan">
                </div>
                <div class="col-12">
                    <label for="pesan" class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Google Maps Embed --}}
<div class="card border-0 shadow-sm">
    <div class="card-header bg-light">
        <h6 class="mb-0 text-dark"><i class="bi bi-map-fill me-2 text-primary"></i>Lokasi Kami</h6>
    </div>
    <div class="card-body p-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.741041871485!2d106.85862337499013!3d-6.392892993578437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eda42e3afb77%3A0x32a5f11d33e14e52!2sSTT%20Terpadu%20Nurul%20Fikri!5e0!3m2!1sid!2sid!4v1715769600000!5m2!1sid!2sid"
            width="100%"
            height="300"
            style="border:0; display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

@endsection
