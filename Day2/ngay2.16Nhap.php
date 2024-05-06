<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <?php
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
                $name  = $email = $gender = $comment = $website = "";
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                          $nameErr = "Name is required";}
                          else{
                    $name = test_input($_POST["name"]);}
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";}
                        else{
                    $email = test_input($_POST["email"]);}
                    if (empty($_POST["website"])) {
                        $website = "";
                      } else {
                    $website = test_input($_POST["website"]);}
                    if (empty($_POST["comment"])) {
                        $commentErr = "Comment is required";
                      } else {
                    $comment = test_input($_POST["gender"]);}
                    if (empty($_POST["gender"])) {
                        $commentErr = "gender is required";
                      } else {
                    $gender = test_input($_POST["gender"]);}
                }}
            ?>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>