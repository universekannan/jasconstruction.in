<style>
body.dark-mode .main-header {
    background-color: #343a40 !important;
    color: #fff !important;
}

body.dark-mode .main-header .nav-link,
body.dark-mode .main-header .navbar-nav .nav-item>a {
    color: #fff !important;
}

.btn-disabled {
    opacity: 0.6;
    cursor: not-allowed;
}
</style>

<?php
$today = date('Y-m-d');
$yesterday = date('Y-m-d', strtotime('-1 day'));

$todayAttendance = DB::table('attendance')
    ->where('user_id', Auth::user()->id)
    ->where('date', $today)
    ->orderBy('id', 'DESC')
    ->first();

$yesterdayAttendance = DB::table('attendance')
    ->where('user_id', Auth::user()->id)
    ->where('date', $yesterday)
    ->where('status', 'Time Out')
    ->orderBy('id', 'DESC')
    ->first();

$showTimeIn = false;
$showTimeOut = false;
$timeInDisabled = false;

if (empty($todayAttendance)) {
    $showTimeIn = true;
    $timeInDisabled = false;
} elseif ($todayAttendance->status == 'Time In') {
    $showTimeOut = true;
} elseif ($todayAttendance->status == 'Time Out') {
    $showTimeIn = true;
    $timeInDisabled = true;
}
?>

<header class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item" style="margin-top:8px; margin-right: 10px;">
            
            @if($showTimeOut)
                <form action="{{ url('/attendanceout') }}" method="post" style="display: inline;">
                    {{ csrf_field() }}
                    <input type="hidden" name="log_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="att_id" value="{{ $todayAttendance->id }}">
                    <input type="hidden" value="{{ $todayAttendance->time_in }}" name="time_in">
                    <button type="submit" class="btn btn-block btn-danger btn-sm">
                        <i class="fa fa-clock"></i> Time Out
                    </button>
                </form>
            @endif

            @if($showTimeIn)
                <!-- Show Time In Button -->
                @if($timeInDisabled)
                    <button type="button" class="btn btn-block btn-success btn-sm btn-disabled" disabled 
                            title="Attendance completed for today. Come back tomorrow!">
                        <i class="fa fa-check"></i> Completed
                    </button>
                @else
                    <form action="{{ url('/attendancein') }}" method="post" style="display: inline;">
                        {{ csrf_field() }}
                        <input type="hidden" name="log_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-block btn-success btn-sm">
                            <i class="fa fa-clock"></i> Time In
                        </button>
                    </form>
                @endif
            @endif

        </li>
        <!-- User Dropdown -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                @if(auth()->check() && auth()->user()->profile_photo)
                <img src="{{ asset(auth()->user()->profile_photo) }}" class="user-image img-circle elevation-2"
                    alt="User Image">
                @else
                <img src="{{ asset('assets/upload/users/user.png') }}" class="user-image img-circle elevation-2"
                    alt="User Image">
                @endif
                <span class="d-none d-md-inline">{{ auth()->check() ? auth()->user()->name : 'Guest' }}</span>
            </a>
			
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary">
                    @if(auth()->check() && auth()->user()->profile_photo)
                    <img src="{{ asset(auth()->user()->profile_photo) }}" class="img-circle elevation-2"
                        alt="User Image">
                    @else
                <img src="{{ asset('assets/upload/users/user.png') }}" class="user-image img-circle elevation-2"
                        alt="User Image">
                    @endif

                    <p>
                        {{ auth()->check() ? auth()->user()->full_name : 'Guest' }}
                        @if(auth()->user()->user_types_id ==1)
                        <small>SuberAdmin</small>
                        @elseif(auth()->user()->user_types_id ==2)
                        <small>Admin</small>
                        @elseif(auth()->user()->user_types_id ==3)
                        <small>Manager</small>
                        @elseif(auth()->user()->user_types_id ==4)
                        <small>Cashier</small>
                        @elseif(auth()->user()->user_types_id ==5)
                        <small>Appraiser</small>
                        @endif
                    </p>
                </li>

                <li class="user-footer">
                    <a href="{{ route('profile') }}" class="btn btn-default btn-flat"><i class="fas fa-user"></i>
                        Profile</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-default btn-flat float-right">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>

                <li class="user-footer">
                    <button id="toggle-darkmode" class="btn btn-dark btn-block">
                        <i class="fas fa-moon"></i> Dark Mode
                    </button>
                </li>
            </ul>
        </li>
    </ul>
</header>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const body = document.body;
    const darkToggle = document.getElementById("toggle-darkmode");
    const navbar = document.querySelector(".main-header");

    if (localStorage.getItem("dark-mode") === "enabled") {
        body.classList.add("dark-mode");
        if (navbar) {
            navbar.classList.remove("navbar-light");
            navbar.classList.add("navbar-dark");
            navbar.classList.add("bg-dark");
        }
    }

    darkToggle.addEventListener("click", function() {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            localStorage.setItem("dark-mode", "enabled");
            if (navbar) {
                navbar.classList.remove("navbar-light");
                navbar.classList.add("navbar-dark");
                navbar.classList.add("bg-dark");
            }
        } else {
            localStorage.setItem("dark-mode", "disabled");
            if (navbar) {
                navbar.classList.remove("navbar-dark", "bg-dark");
                navbar.classList.add("navbar-light");
            }
        }
    });
});
</script>