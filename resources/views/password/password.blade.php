@extends('layout.index')
@section('content')
<div class="pagetitle">
    <h1>เปลี่ยนรหัสผ่านใหม่</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/dashboard">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">เปลี่ยนรหัสผ่านใหม่ | <small>กรอกข้อมูลให้ถูกต้องเพื่อเปลี่ยนรหัสผ่านใหม่</small></li>
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
                    <div class="col-4">
                        <div class="card">
                            <h5 class="card-header">Password update</h5>
                            <div class="card-body">
                                <form>
                                    <label class="form-label mt-3">Old Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-person-fill-lock"></i></span>
                                        <input type="password" class="form-control" id="o_password" placeholder="Enter Old Password" required>
                                    </div>
                                    <label class="form-label mt-3">New Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-person-fill-lock"></i></span>
                                        <input type="password" class="form-control" id="n_password" placeholder="Enter New Password" required>
                                    </div>
                                    <label class="form-label mt-3">Confirm Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="bi bi-person-fill-lock"></i></span>
                                        <input type="password" class="form-control" id="c_password" placeholder="Confirm New Password" required>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="button" class="btn btn-primary" id="btnSubmit"><i class="bi bi-floppy me-2"></i>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                    <!-- Top Selling -->
                    <div class="col-8">
                        <div class="card">
                            <h5 class="card-header">Description</h5>
                            <div class="card-body">
                                <p class="mt-2">
                                    &emsp;&emsp;โปรดกรอกข้อมูลของท่านอย่างถูกต้องและครบถ้วน เพื่อความปลอดภัยของบัญชีของท่าน เราขอแนะนำให้ใช้รหัสผ่านที่ซับซ้อนและไม่ควรใช้ข้อมูลส่วนตัวที่สามารถเดาได้ง่าย เช่น วันเกิด ชื่อสมาชิกในครอบครัว หรือหมายเลขโทรศัพท์ เป็นต้น นอกจากนี้ ท่านควรเปลี่ยนรหัสผ่านอย่างสม่ำเสมอเพื่อป้องกันการถูกเจาะระบบ
                                </p>
                                <p>
                                    &emsp;&emsp;เพื่อความปลอดภัยของบัญชีของคุณ โปรดระมัดระวังในการเก็บรักษารหัสผ่านของคุณ อย่าเปิดเผยรหัสผ่านให้กับบุคคลอื่น และควรเปลี่ยนรหัสผ่านเป็นประจำ
                                </p>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $("#btnSubmit").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "PUT",
                url: "/api/password/2",
                data: {
                    o_password: $("#o_password").val(),
                    n_password: $("#n_password").val(),
                    c_password: $("#c_password").val(),
                },
                success: function(result) {
                    // Display response message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: result.message
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // console.error('AJAX request failed:', textStatus, errorThrown);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'User update failed'
                    });
                }
            });
        });
    });
</script>
@endsection