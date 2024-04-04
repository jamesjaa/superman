<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'sukhumvitset-text-webfont';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('fonts/sukhumvitset-text-webfont.ttf') }}") format('truetype');
        }

        body {
            font-family: 'sukhumvitset-text-webfont';
            /* font-size: 14px; */
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @include('layout.alert')
            <article style="max-width: 500px;">
                <div class="card">
                    <div style="padding:20px;">

                        <div class="col-sm-12">
                            <h2 class="card-title mt-3 text-center">Login</h2>
                        </div>
                        <form method="post" action="/login" onsubmit='disableButton()'>
                            @csrf
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Username :</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password :</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary" id="myButton"><i class="fas fa-sign-in-alt me-2"></i>เข้าสู่ระบบ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>

</html>
<script>
    function disableButton() {
        var btn = document.getElementById('myButton');
        btn.disabled = true;
        btn.innerHTML = '<i class = "fa fa-spinner fa-spin"></i> กำลังเข้าสู่ระบบ...';
    }
</script>