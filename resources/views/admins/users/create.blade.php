<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create User - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('admins.components.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('admins.components.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Create User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboards.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New User</h5>

              <!-- Form Start -->
              <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" required>
                    @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" required>
                    @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                    @error('password')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="role" class="col-sm-2 col-form-label">Role</label>
                  <div class="col-sm-4">
                    <select name="role" class="form-select @error('role') is-invalid @enderror" id="role">
                      <option value="">Select Role</option>
                      <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="superadmin" {{ old('role') == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                    </select>
                    @error('role')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>

  <!-- ======= Footer ======= -->
  @include('admins.components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>

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
