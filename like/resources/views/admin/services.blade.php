@extends('admin')
@section('contents')

<style>
  .modal-dialog-custom {
    max-width: 50%;
    /* Adjust this percentage to change the modal width */
  }
</style>

<div class="container-fluid">
  <div class="card">
    <div class="card-body p-4">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
        <div class="row pt-3 col-md-4">
          <div class="col-6">
            <input type="text" class="form-control" id="searchInput" placeholder="คำค้นหา">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary" onclick="applyFilters()">ค้นหา</button>
          </div>
        </div>
        <div class="col-md-8 pt-3">
          <div class="btn-group" role="group" aria-label="Platform Filters">
            <button type="button" class="btn btn-outline-primary {{ $platform == 'all' ? 'active' : '' }}" onclick="applyFilters('all')">
              <img src="{{ asset('src/assets/images/products/icon-all.png') }}" alt="All" style="width: 23px; height: 23px;">
              ทั้งหมด
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'facebook' ? 'active' : '' }}" onclick="applyFilters('facebook')">
              <img src="{{ asset('src/assets/images/products/icon-FB.png') }}" alt="Facebook" style="width: 23px; height: 23px;">
              Facebook
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'instagram' ? 'active' : '' }}" onclick="applyFilters('instagram')">
              <img src="{{ asset('src/assets/images/products/icon-IG.png') }}" alt="Instagram" style="width: 23px; height: 23px;">
              Instagram
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'tiktok' ? 'active' : '' }}" onclick="applyFilters('tiktok')">
              <img src="{{ asset('src/assets/images/products/icon-TT.png') }}" alt="Tiktok" style="width: 23px; height: 23px;">
              Tiktok
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'twitter' ? 'active' : '' }}" onclick="applyFilters('twitter')">
              <img src="{{ asset('src/assets/images/products/icon-X.png') }}" alt="Twitter" style="width: 23px; height: 23px;">
              Twitter(X)
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'youtube' ? 'active' : '' }}" onclick="applyFilters('youtube')">
              <img src="{{ asset('src/assets/images/products/icon-YT.png') }}" alt="Youtube" style="width: 23px; height: 23px;">
              Youtube
            </button>
            <button type="button" class="btn btn-outline-primary {{ $platform == 'shopee' ? 'active' : '' }}" onclick="applyFilters('shopee')">
              <img src="{{ asset('src/assets/images/products/icon-SP.png') }}" alt="Shopee" style="width: 23px; height: 23px;">
              Shopee
            </button>
          </div>
        </div>
      </div>

      <div class="row" id="productCards">
        @foreach($products as $index => $p)
        <div class="col-md-4 mb-4 pt-3 d-flex align-items-stretch"> <!-- Add d-flex align-items-stretch to make cards same height -->
          <div class="card shadow-lg w-100"> <!-- Add w-100 to make sure the card takes the full width of the column -->
            <div class="w-100 text-center pt-4">
              @if ($p->platform == 'youtube')
              <img src="{{ asset('src/assets/images/products/Banner-YT.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @elseif ($p->platform == 'facebook')
              <img src="{{ asset('src/assets/images/products/Banner-FB.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @elseif ($p->platform == 'instagram')
              <img src="{{ asset('src/assets/images/products/Banner-IG.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @elseif ($p->platform == 'tiktok')
              <img src="{{ asset('src/assets/images/products/tiktok.avif') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @elseif ($p->platform == 'twitter')
              <img src="{{ asset('src/assets/images/products/Banner-X.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @else
              <img src="{{ asset('src/assets/images/products/Banner-SP.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="...">
              @endif
            </div>
            <div class="card-body d-flex flex-column"> <!-- d-flex flex-column to align content properly -->
              <h5 class="card-title">{{$p->details}}</h5>
              <p class="card-text"><strong>ประเภท:</strong> {{$p->platform}} / {{$p->service}}</p>
              <div class="mt-auto">

                <button type="button" class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                  onclick='fetchProductDetails("{{ addslashes($p->details) }}", "{{ $p->platform }}", "{{ route('service.store', '') }}")'>
                  ดูรายละเอียด
                </button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Pagination links -->
      <div class="col-md-12 mt-4">
        {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
      </div><!-- Button trigger modal -->


      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-custom">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Loading...</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Loading details...</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function applyFilters(selectedPlatform = null) {
    var platform = selectedPlatform ? selectedPlatform : '{{ $platform }}';
    var search = document.getElementById('searchInput').value;
    window.location.href = `?platform=${platform}&search=${encodeURIComponent(search)}`;
  }

  function fetchProductDetails(details, platform, routeUrl) {

    $('#exampleModalLabel').text('Loading...');
    $('.modal-body').html('<p>Loading details...</p>');

    $.ajax({
      url: `/product/details`,
      method: 'GET',
      data: {
        details: details
      },
      success: function(response) {
        if (response.length > 0) {
          let platformImage = '';

          // Determine the platform image
          if (platform === 'facebook') {
            platformImage = `<img src="{{ asset('src/assets/images/products/facebook.jpg') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="Facebook Image">`;
          } else if (platform === 'youtube') {
            platformImage = `<img src="{{ asset('src/assets/images/products/youtube.webp') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="YouTube Image">`;
          } else if (platform === 'instagram') {
            platformImage = `<img src="{{ asset('src/assets/images/products/instagram.webp') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="Instagram Image">`;
          } else if (platform === 'tiktok') {
            platformImage = `<img src="{{ asset('src/assets/images/products/tiktok.avif') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="TikTok Image">`;
          } else if (platform === 'twitter') {
            platformImage = `<img src="{{ asset('src/assets/images/products/twitter.jpg') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="Twitter Image">`;
          } else {
            platformImage = `<img src="{{ asset('src/assets/images/products/shoppee.png') }}" class="card-img-top" style="max-width: 100%; height: 150px; object-fit: contain;" alt="Shopee Image">`;
          }

          // Build the modal content in a card layout with 3 columns
          let modalBody = `${platformImage}<div class="row">`;
          response.forEach(product => {
            modalBody += `
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <div class="card-body text-center">
                            <p class="card-text"><strong>Service:</strong> ${product.amount} ${product.service}</p>
                            <a href="${routeUrl}/${product.id}" class="btn btn-secondary w-100">ใส่ตะกร้า</a>
                        </div>
                    </div>
                </div>`;
          });
          modalBody += `</div>`;

          // Update modal content
          $('.modal-body').html(modalBody);
          $('#exampleModalLabel').text(details);
        } else {
          $('.modal-body').html('<p>No products found.</p>');
          $('#exampleModalLabel').text('No results');
        }
      },
      error: function() {
        $('.modal-body').html('<p class="text-danger">There was an error fetching the details.</p>');
      }
    });
  }
</script>

@endsection