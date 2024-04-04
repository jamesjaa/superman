<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select id="pre_name" id="">
            <option value="1">นาย</option>
            <option value="2">นาง</option>
            <option value="3">นางสาว</option>
        </select>
        <input type="text" id="f_name">
        <input type="text" id="l_name">
        <input type="text" maxlength="10" length="9" id="phone_number">
        <select id="gender">
            <option value="1">ชาย</option>
            <option value="2">หญิง</option>
            <option value="3">อื่นๆ</option>
        </select>
        <select id="bank_type">
            <option value="1">KB</option>
            <option value="2">BAAC</option>
        </select>
        <input type="text" id="bank_account_number">
        <input type="date" id="birthday">
        <input type="text" id="line_id">
        <button id="btnSubmit">บันทึก</button>
    </form>
</body>
</html>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#btnSubmit").click(function(e){
          e.preventDefault();
        $.ajax({type: "POST",
                url: "/api/users",
                data: { 
                    pre_name: $("#pre_name").val(),
                    f_name: $("#f_name").val(),
                    l_name: $("#l_name").val(),
                    gender: $("#gender").val(),
                    bank_type: $("#bank_type").val(),
                    bank_account_number: $("#bank_account_number").val(),
                    birthday: $("#birthday").val(),
                    line_id: $("#line_id").val(),
                    phone_number: $("#phone_number").val(),
                },
                success:function(result){
                    console.log(result);
                }});
      });
    });
    </script>