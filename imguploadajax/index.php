<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <div class="main">
        <div class="header">
            <h1>upload & remove files <br> using ajax in php</h1>
        </div>
        <div id="content">
            <form action="" id="submit-group">
                <label for="">select image </label>
                <input type="file" name="file" id="upload_file">
                <span> Allowed file types : jpg , png , jpeg </span>

            </form>
            <br />
            <div id="preview">
                <div id="default">
                <img src="download.png" alt="image">
                </div>
                <div id="image_preview">
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#upload_file').on("change", function() {

                var fileData = new FormData($("#submit-group")[0]);
                console.log(fileData);
                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data: fileData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('#preview').show();
                        $('#default').hide();
                        $('#image_preview').html(data);
                        $('#upload_file').val('');
                    }
                })
            })
        });
    </script>
</body>

</html>