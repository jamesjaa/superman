@extends('layout.index')
@section('content')
<div class="pagetitle">
    <h1>ตั้งค่า SMS OTP</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/dashboard">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ตั้งค่า SMS OTP | <small>เพื่อให้ระบบสามารถ ตรวจสอบผู้ลงทะเบียนได้</small></li>
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
                            <h5 class="card-header">SMS OTP Configuration</h5>
                            <div class="card-body">
                                <form>
                                    <label class="form-label mt-3">SMS Provider</label>
                                    <select class="form-select mb-3" aria-label="Default select example" id="provider">
                                        <option value="sms2pro" selected>SMS2Pro</option>
                                    </select>
                                    <div class="mb-3 mt-3">
                                        <label for="smskey" class="form-label">SMS API Key</label>
                                        <input type="text" class="form-control" id="smskey" placeholder="Enter API Key">
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="button" class="btn btn-primary" id="btnSubmit"><i class="bi bi-floppy me-2"></i>Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Top Selling -->
                    <!-- Top Selling -->
                    <div class="col-6">
                        <div class="card">
                            <h5 class="card-header">Description</h5>
                            <div class="card-body">
                                <p class="mt-2">
                                    &emsp;&emsp;กรุณากรอกข้อมูลของท่านให้ถูกต้องและครบถ้วน เพื่อความสะดวกในการดำเนินการต่อไป หากมีข้อสงสัยหรือต้องการความช่วยเหลือ สามารถติดต่อเราได้ตลอดเวลา
                                </p>
                                <p>
                                    &emsp;&emsp;ขอให้ท่านตรวจสอบความถูกต้องของข้อมูลอีกครั้ง เนื่องจากข้อมูลบางส่วนไม่ครบถ้วนหรืออาจมีข้อผิดพลาด เราพร้อมให้คำแนะนำหากท่านมีข้อสงสัยใดๆ
                                </p>
                                <p>
                                    &emsp;&emsp;ข้อมูลที่ถูกต้องและครบถ้วนมีความสำคัญอย่างยิ่งต่อการดำเนินการของเรา กรุณากรอกข้อมูลอย่างละเอียดรอบคอบ เพื่อประโยชน์สูงสุดของท่านเอง
                                </p>
                                <p>
                                    &emsp;&emsp;เราต้องขอข้อมูลที่ถูกต้องจากท่าน เพื่อให้การบริการของเราเป็นไปอย่างมีประสิทธิภาพสูงสุด หากท่านมีข้อสงสัยหรือต้องการความช่วยเหลือ พวกเราพร้อมให้คำแนะนำตลอดเวลา
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
                type: "POST",
                url: "/api/sms",
                data: {
                    provider: $("#provider").val(),
                    smskey: $("#smskey").val(),
                },
                success: function(result) {
                    // Display response message using SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: result.message
                    }).then(function() {
                        window.location.reload();
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // console.error('AJAX request failed:', textStatus, errorThrown);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'failed'
                    });
                }
            });
        });
    });
</script>
@endsection