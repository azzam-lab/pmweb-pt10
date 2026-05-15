{{-- Navigasi Cepat --}}
<div class="card border-0 shadow-sm mb-3">
  <div class="card-header bg-primary text-white py-2">
    <h6 class="mb-0"><i class="bi bi-list-ul me-2"></i>Menu Cepat</h6>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item list-group-item-action">
      <a href="{{ url('/home') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
        <i class="bi bi-house-fill text-primary"></i> Home
      </a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{ url('/about') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
        <i class="bi bi-info-circle-fill text-success"></i> About Us
      </a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{ url('/staff') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
        <i class="bi bi-people-fill text-warning"></i> Data Staff
      </a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{ url('/contact') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
        <i class="bi bi-envelope-fill text-danger"></i> Contact Us
      </a>
    </li>
  </ul>
</div>

{{-- Info Singkat --}}
<div class="card border-0 shadow-sm mb-3">
  <div class="card-header bg-success text-white py-2">
    <h6 class="mb-0"><i class="bi bi-building me-2"></i>Tentang Kami</h6>
  </div>
  <div class="card-body p-3">
    <p class="small text-muted mb-2">
      <i class="bi bi-geo-alt-fill text-danger me-1"></i>
      Jl. Raya Bogor Km. 30, Cimanggis, Depok
    </p>
    <p class="small text-muted mb-2">
      <i class="bi bi-telephone-fill text-primary me-1"></i>
      (021) 871-0365
    </p>
    <p class="small text-muted mb-0">
      <i class="bi bi-envelope-fill text-warning me-1"></i>
      info@nurulfikri.ac.id
    </p>
  </div>
</div>

{{-- Sosial Media --}}
<div class="card border-0 shadow-sm">
  <div class="card-header bg-warning text-dark py-2">
    <h6 class="mb-0"><i class="bi bi-share-fill me-2"></i>Ikuti Kami</h6>
  </div>
  <div class="card-body p-3 d-flex gap-2 flex-wrap">
    <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-facebook"></i> Facebook</a>
    <a href="#" class="btn btn-sm btn-outline-info"><i class="bi bi-twitter-x"></i> Twitter</a>
    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-instagram"></i> Instagram</a>
    <a href="#" class="btn btn-sm btn-outline-success"><i class="bi bi-whatsapp"></i> WhatsApp</a>
  </div>
</div>