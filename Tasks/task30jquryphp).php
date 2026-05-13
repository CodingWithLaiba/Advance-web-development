<!DOCTYPE html>
<html>
<head>
    <title>PHP with jQuery Example</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <button id="changeBtn">Click Me</button>

    <p id="message">This is the original paragraph text.</p>

    <script>
        $(document).ready(function () {

            $("#changeBtn").click(function () {

                $("#message").text("Hello! The paragraph text has been changed.");

            });

        });
    </script>

</body>
</html>