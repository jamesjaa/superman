@extends('layout.index')
@section('content')
<div class="pagetitle">
    <h1>หน้าหลัก</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/dashboard">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รวบรวมรายชื่อทั้งหมดในระบบ สามารถ Export เป็นไฟล์ csv ได้จากเมนู</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="container-fluid">

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">ลงทะเบียนทั้งหมด</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <!-- <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div> -->
                                    <div class="ps-3">
                                        <h6>{{$all_users}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">มาใหม่วันนี้ </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-fill-add"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$countNewUser}}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">EXPORT TO EXCEL</h5>

                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-success btn-lg my-2" id="downloadButton"><i class="bi bi-file-earmark-arrow-down me-2"></i>DOWNLOAD</button>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</div>
<script>
    document.getElementById('downloadButton').addEventListener('click', function() {
        window.location.href = "{{ route('download.csv') }}";
    });
</script>
@endsection