@extends('layout.index')
@section('content')
<div class="pagetitle">
    <h1>ตั้งค่าเว็บไซต์</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/dashboard">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ตั้งค่าเว็บไซต์ | <small>ใส่ข้อมูลให้ถูกต้องเพื่ออัพเดทเว็บไซต์</small></li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="container-fluid">

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Top Selling -->
                    <div class="col-6">
                        <div class="card">
                            <h5 class="card-header">Website Configuration</h5>
                            <div class="card-body">
                                <label for="inputGroupFile01" class="form-label mt-3 mb-3">อัพโหลดโลโก้ของเว็บไซต์</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-floppy me-2"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                    <!-- Top Selling -->
                    <div class="col-6">
                        <div class="card">
                            <h5 class="card-header">Redirect Configuration</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="forWebsite" class="form-label mt-3 mb-3">หลังจากสมัครแล้วให้ผู้ใช้งานไปหน้าไหน</label>
                                    <input type="text" class="form-control" id="forWebsite" placeholder="https://webbet.com/?utm=xxxxxxxxx">
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-floppy me-2"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</div>
@endsection