<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff Attendance</title>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Bootstrap & AdminLTE -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <meta name="theme-color" content="#6777ef" />
</head>

<section class="content">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h4 class="mb-1">Attendances</h4>

                    <div class="text-center">
                        @php
                        $timeInCount = $staffs->whereNotNull('time_in')->count();
                        $totalStaff = $staffs->count();
                        @endphp
                        <span class="badge badge-info" style="font-size: 16px;">
                            Total Present: {{ $timeInCount }}/{{ $totalStaff }}
                        </span>
                    </div>
                </div>

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
                @endif


                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>Staff Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $today = date('Y-m-d'); @endphp
                            @foreach($staffs as $staff)
                            @php
                            $attendance = DB::table('attendance')
                            ->where('user_id', $staff->id)
                            ->where('date', $today)
                            ->first();
                            @endphp
                            <tr @if(!$attendance && $session=='morning' ) style="background-color:#fff3cd;"
                                @elseif($attendance && !$attendance->time_out && $session == 'afternoon')
                                style="background-color:#cce5ff;"
                                @endif
                                >
                                <td>{{ $staff->full_name }}</td>
                                <td class="text-center">
                                    @if(!$attendance)
                                    <button class="btn btn-success btn-sm markAttendance" data-id="{{ $staff->id }}"
                                        data-name="{{ $staff->full_name }}" data-type="in">
                                        Time IN
                                    </button>
                                    @elseif($attendance && !$attendance->time_out)
                                    <button class="btn btn-danger btn-sm markAttendance" data-id="{{ $staff->id }}"
                                        data-name="{{ $staff->full_name }}" data-type="out">
                                        Time OUT
                                    </button>
                                    @else
                                    <span class="badge badge-secondary">Completed</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- Attendance Modal -->
<div class="modal fade" id="attendanceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form id="attendanceForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        Mark Attendance - <span id="staffName" class="text-warning"></span>
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body text-center">
                    <input type="hidden" name="user_id" id="user_id">
                    <input type="hidden" name="type" id="attendanceType">

                    <video id="video" autoplay playsinline muted class="w-100 rounded border"
                        style="max-height: 300px; background: #000;"></video>

                    <img id="preview" src="" alt="Preview" class="w-100 rounded border mt-2"
                        style="display:none; max-height: 300px; object-fit:cover;">

                    <div class="mt-3">
                        <button type="button" id="captureBtn" class="btn btn-success">
                            <i class="fa fa-camera"></i> Capture
                        </button>
                        <button type="button" id="retakeBtn" class="btn btn-warning" style="display:none;">
                            <i class="fa fa-sync"></i> Retake
                        </button>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="saveAttendance" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

<script>
$(function() {
    $('#attendanceTable').DataTable({
        responsive: true,
        autoWidth: false,
    });

    let stream = null;
    let capturedBlob = null;
    const video = document.getElementById('video');
    const preview = document.getElementById('preview');

    $('.markAttendance').click(function() {
        $('#user_id').val($(this).data('id'));
        $('#attendanceType').val($(this).data('type'));
        $('#staffName').text($(this).data('name') + ' - ' + ($(this).data('type') === 'in' ? 'Time IN' :
            'Time OUT'));
        $('#attendanceModal').modal('show');
    });

    $('#attendanceModal').on('shown.bs.modal', async function() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: true
            });
            video.srcObject = stream;
        } catch {
            alert("Camera access denied or unavailable.");
        }
    });

    $('#attendanceModal').on('hidden.bs.modal', function() {
        if (stream) stream.getTracks().forEach(track => track.stop());
        stream = null;
        capturedBlob = null;
        preview.style.display = 'none';
        video.style.display = 'block';
        $('#captureBtn').show();
        $('#retakeBtn').hide();
    });

    $('#captureBtn').click(() => {
        const canvas = document.createElement('canvas');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        canvas.toBlob(blob => {
            capturedBlob = blob;
            preview.src = URL.createObjectURL(blob);
            preview.style.display = 'block';
            video.style.display = 'none';
            $('#captureBtn').hide();
            $('#retakeBtn').show();
        }, 'image/jpeg');
    });

    $('#retakeBtn').click(() => {
        capturedBlob = null;
        preview.style.display = 'none';
        video.style.display = 'block';
        $('#captureBtn').show();
        $('#retakeBtn').hide();
    });

    $('#saveAttendance').click(function() {
        if (!capturedBlob) return alert('Please capture a photo first!');
        const fd = new FormData($('#attendanceForm')[0]);
        fd.append('photo', capturedBlob, 'attendance_' + Date.now() + '.jpg');

        $.ajax({
            url: "{{ url('add_attendance') }}",
            method: 'POST',
            data: fd,
            processData: false,
            contentType: false,
            beforeSend: () => $('#saveAttendance').prop('disabled', true).text('Saving...'),
            success: () => location.reload(),
            error: xhr => alert('Error: ' + (xhr.responseJSON?.message || xhr.statusText)),
            complete: () => $('#saveAttendance').prop('disabled', false).text('Submit')
        });
    });
});
</script>