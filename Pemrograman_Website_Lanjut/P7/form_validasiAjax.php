<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi & AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX)</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <div id="response-message" style="margin-top: 20px; font-weight: bold;"></div>

    <script>
        $(document).ready(function() {

            $("#myForm").submit(function(event) {
                event.preventDefault(); 
                
                var form = $(this);
                var url = form.attr('action');
                
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); 
                var valid = true;
                
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");
                $('#response-message').html("");

                
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                if (password.length < 8) {
                    $("#password-error").text("Password minimal harus 8 karakter.");
                    valid = false;
                }

                if (valid) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: form.serialize(), 
                        dataType: 'json',
                        success: function(response) {
                            $('#response-message').css('color', 'green').text(response.message);
                            form[0].reset(); 
                        },
                        error: function(xhr) {
                            var errorData = xhr.responseJSON;
                            if (errorData && errorData.errors) {
                                var errorHtml = "Validasi Gagal:<br><ul>";
                                $.each(errorData.errors, function(index, error) {
                                    errorHtml += "<li>" + error + "</li>";
                                });
                                errorHtml += "</ul>";
                                $('#response-message').css('color', 'red').html(errorHtml);

                            } else {
                                $('#response-message').css('color', 'red').text("Status Gagal: Terjadi kesalahan pada server.");
                            }
                        }
                    });
                } else {
                     $('#response-message').css('color', 'red').text("Status Gagal: Mohon lengkapi data yang wajib diisi.");
                }
            });
        });
    </script>
</body>
</html>
