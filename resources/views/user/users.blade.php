@extends('layout.index')
@section('content')
<div class="pagetitle">
    <h1>รายชื่อทั้งหมด</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/dashboard">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายชื่อทั้งหมด</li>
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
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-0 m-2">

                                <table class="table table-borderless" id="myTable">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Bank</th>
                                            <th scope="col">Bank Number</th>
                                            <th scope="col">Birthday</th>
                                            <th scope="col">Social Media Name</th>
                                            <th scope="col">Social Media ID</th>
                                            <th scope="col">Telephone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php $i = 0; ?>
                                        @foreach($users as $u)
                                        <?php $i++; ?>
                                        <tr>
                                            <td class="text-center">{{$i}}</td>
                                            <td class="text-center">{{$u->title}}</td>
                                            <td class="text-center">{{$u->fname}}</td>
                                            <td class="text-center">{{$u->lname}}</td>
                                            <td class="text-center">{{$u->bank}}</td>
                                            <td class="text-center">{{$u->bank_number}}</td>
                                            <td class="text-center">{{$u->birthday}}</td>
                                            <td class="text-center">{{$u->social_name}}</td>
                                            <td class="text-center">{{$u->social_id}}</td>
                                            <td class="text-center">{{$u->telephone_number}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->
                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</div>
@endsection