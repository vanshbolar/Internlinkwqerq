<?php
    // include header.php file
    include ('./header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF File Upload</title>
    <style>
        body {
            text-align: center;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        #uploadedFiles {
            text-align: center;
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>Upload PDF Files</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="pdfFile">Select PDF File:</label>
        <input type="file" name="pdfFile" id="pdfFile" accept=".pdf" required><br>
        <button type="submit">Upload</button>
    </form>

    <hr>

    <h2>Uploaded PDF Files</h2>
    <ul id="uploadedFiles">
        <!-- This is where uploaded PDF file links will be displayed -->
    </ul>

    <script>
        document.querySelector('form').addEventListener('submit', async (event) => {
            event.preventDefault();
            
            const formData = new FormData();
            const fileInput = document.querySelector('input[type="file"]');
            formData.append('pdfFile', fileInput.files[0]);

            try {
                const response = await fetch('upload.php', {
                    method: 'POST',
                    body: formData
                });

                if (response.ok) {
                    const fileName = await response.text();
                    const fileLink = document.createElement('a');
                    fileLink.href = `uploads/${fileName}`;
                    fileLink.textContent = fileName;
                    fileLink.setAttribute('target', '_blank');
                    const listItem = document.createElement('li');
                    listItem.appendChild(fileLink);
                    document.getElementById('uploadedFiles').appendChild(listItem);
                } else {
                    console.error('File upload failed:', response.statusText);
                }
            } catch (error) {
                console.error('File upload failed:', error);
            }
        });
    </script>
</body>
</html>
