<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .service-item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .service-content {
            flex: 1;
            word-wrap: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .service-buttons {
            display: flex;
            gap: 0.5rem;
            margin-top: auto;
            justify-content: flex-end;
        }

        .service-description {
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 4rem;
            /* Limit to two lines */
            line-height: 1.8rem;
        }

        .service-list-item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1rem;
            height: 180px;
            /* Set card height */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
    </style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <!-- Header -->
        <div class="row bg-dark text-white py-3 mb-4">
            <div class="col-md-6 text-start">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="col-md-6 text-end">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>


        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Dashboard Layout -->
        <div class="row">
            <!-- Add Service Form -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4 mb-4">
                    <h3 class="mb-3">Add New Service</h3>
                    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="service_name" class="form-label">Service Name</label>
                            <input type="text" id="service_name" name="service_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="service_description" class="form-label">Service Description</label>
                            <textarea id="service_description" name="service_description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="service_image" class="form-label">Service Image</label>
                            <input type="file" id="service_image" name="service_image" class="form-control" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Add Service</button>
                    </form>
                </div>
            </div>

            <!-- Available Services -->
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <h3 class="mb-3">Available Services</h3>
                    <ul class="list-group">
                        @foreach ($services as $service)
                        <li class="list-group-item service-list-item">
                            <div class="service-content">
                                <h5>{{ $service->name }}</h5>
                                <p class="service-description">{{ $service->description }}</p>
                            </div>
                            <div class="service-buttons">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editServiceModal-{{ $service->id }}">Edit</button>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>

                        <!-- Edit Service Modal -->
                        <div class="modal fade" id="editServiceModal-{{ $service->id }}" tabindex="-1" aria-labelledby="editServiceLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editServiceLabel">Edit Service</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="service_name_{{ $service->id }}" class="form-label">Service Name</label>
                                                <input type="text" id="service_name_{{ $service->id }}" name="service_name" class="form-control" value="{{ $service->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_description_{{ $service->id }}" class="form-label">Service Description</label>
                                                <textarea id="service_description_{{ $service->id }}" name="service_description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_image_{{ $service->id }}" class="form-label">Service Image (optional)</label>
                                                <input type="file" id="service_image_{{ $service->id }}" name="service_image" class="form-control" accept="image/*">
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Update Service</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>