<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optical Clinic - <?= $title ?? 'Dashboard' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body class="bg-light">
    <div id="app">
        <div class="d-flex">
            <!-- Sidebar -->
            <nav class="bg-primary text-white vh-100 shadow-lg" style="width: 250px;">
                <div class="text-center py-4">
                    <h4>Optical Clinic</h4>
                    <p class="text-light small">Manage your account</p>
                </div>
                <ul class="nav flex-column px-3">
                    <li class="nav-item mb-2">
                        <a href="<?= site_url('appointments'); ?>" class="nav-link text-white">
                            <i class="bi bi-calendar-event me-2"></i>Appointments
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= site_url('prescriptions'); ?>" class="nav-link text-white">
                            <i class="bi bi-file-earmark-text me-2"></i>Prescriptions
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= site_url('frames'); ?>" class="nav-link text-white">
                            <i class="bi bi-eyeglasses me-2"></i>Frames
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="<?= site_url('profile'); ?>" class="nav-link text-white">
                            <i class="bi bi-person-lines-fill me-2"></i>Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('logout'); ?>" class="nav-link text-white">
                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>
