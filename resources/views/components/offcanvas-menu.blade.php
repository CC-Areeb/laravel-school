<button class="btn btn-outline-light fs-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
    <i class="bi bi-list"></i>
</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <button type="submit" class="logout_btn btn btn-outline-primary mb-3 border-0 fs-3">button 1</button>
        <button type="submit" class="logout_btn btn btn-outline-secondary mb-3 border-0 fs-3">button 2</button>
        <button type="submit" class="logout_btn btn btn-outline-info mb-3 border-0 fs-3">button 3</button>
        <button type="submit" class="logout_btn btn btn-outline-primary mb-3 border-0 fs-3">button 4</button>
        <x-logout></x-logout>
    </div>
</div>

{{-- <i class="bi bi-list"></i> --}}
{{-- class="btn btn-outline-light fs-5" --}}
{{-- <x-logout></x-logout> --}}