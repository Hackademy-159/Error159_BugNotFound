@if (session('error'))
    <div class="container d-flex justify-content-center z-3">
        <div class="alert alert-danger d-flex align-items-center justify-content-between shadow-sm p-3 rounded position-relative col-md-9">
            <i class="bi bi-x-circle-fill me-2 fs-5"></i> 
            <span class="flex-grow-1 text-danger fw-semibold">{{ session('error') }}</span>
            <button type="button" class="btn-close position-absolute top-50 end-0 translate-middle-y me-2" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
