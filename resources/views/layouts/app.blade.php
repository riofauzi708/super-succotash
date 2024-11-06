<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Aplikasi Manajemen Pegawai')</title>

    <!-- Link ke Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Link ke Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Link ke Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <!-- Animasi dan Layout CSS -->
    <style>
        body {
            background-color: #f0f2f5;
            animation: fadeIn 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }

        .slide-up {
            animation: slideUp 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .card {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .btn-primary,
        .btn-danger {
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-primary:hover,
        .btn-danger:hover {
            transform: translateY(-2px);
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: bold;
        }

        .welcome-text {
            color: #fff;
            margin-right: 15px;
        }

        .footer {
            font-size: 14px;
            background-color: #343a40;
            color: #cfd2d4;
            text-align: center;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsive Navbar */
        @media (max-width: 767px) {
            .navbar .navbar-brand {
                font-size: 1.2rem;
            }

            .navbar-toggler {
                border-color: #fff;
            }
        }
    </style>

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- File Input CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.0/css/fileinput.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.0/js/fileinput.min.js"></script>

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-briefcase"></i> Manajemen Pegawai
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                    <span class="welcome-text">Selamat datang, {{ Auth::user()->name }}!</span>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="btn btn-light btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4 slide-up">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer mt-4">
        <span>© {{ date('Y') }} Manajemen Pegawai | All rights reserved</span>
    </footer>

    <!-- Script Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @section('scripts')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />

    <script>
        var successMessage = "{{ session('success') }}";
        var errorMessage = "{{ session('error') }}";

        if (successMessage) {
            toastr.success(successMessage);
        } else if (errorMessage) {
            toastr.error(errorMessage);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#employeeTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Indonesian.json"
                },
                "order": [
                    [5, "desc"]
                ],
                "responsive": true,
                "lengthChange": true,
                "pageLength": 10
            });

            $('#position').select2();

            $('#searchInput, #position').on('change keyup', function() {
                $('#employeeFilterForm').submit();
            });
        });
    </script>
    @endsection


    @yield('scripts')
</body>

</html>