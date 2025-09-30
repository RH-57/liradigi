<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Testimonial - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/ckeditor/ckeditor5.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>

@include('admins.components.header')
@include('admins.components.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Testimonial</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboards.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Testimonial</h5>

              <!-- Form Start -->
              <form action="{{ route('testimonials.update', $testimonials->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name', $testimonials->name) }}" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Position</label>
                  <div class="col-sm-10">
                    <input type="text" name="position" value="{{ old('position', $testimonials->position) }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Testimonials</label>
                  <div class="col-sm-10">
                    <textarea name="testimonial" class="form-control" rows="3">{{ old('testimonials', $testimonials->testimonial) }}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-4">
                        <select name="rating" class="form-control">
                            @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}" {{ $testimonials->rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Image</label>
                   <div class="col-sm-4">
                        <input type="file" name="image" class="form-control">
                        @if($testimonials->image)
                          <div class="mt-2">
                            <img src="{{ asset('storage/'.$testimonials->image) }}" alt="Image" class="img-thumbnail" style="max-width:120px;">
                          </div>
                        @endif
                   </div>
                </div>

                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>

@include('admins.components.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        timer: 2000,
        showConfirmButton: false
    })
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: "{{ session('error') }}",
        timer: 3000,
        showConfirmButton: true
    })
</script>
@endif
</body>
</html>
