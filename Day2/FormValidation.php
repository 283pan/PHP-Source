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
        <style>
            .error {color: #FF0000;}
        </style>
    </head>

    <body>
        <header>
         <label style="display: block; text-align: center; color: black; font-size: 50px; ">FORM VALIDATION</label>
        <label style="display: block; color: red;">*require filed</label>
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
                    $website = test_input($_POST["website"]);}
                    if (empty($_POST["website"])) {
                        $websiteErr = "where's Perry";
                      } else {
                    $website = test_input($_POST["website"]);}
                    if (empty($_POST["comment"])) {
                        $commentErr = "Comment is required";
                      } else {
                    $gender = test_input($_POST["gender"]);}
                    if (empty($_POST["gender"])) {
                        $genderErr = "gender is required";
                      } else {
                    $gender = test_input($_POST["gender"]);}
                }}
            ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
            <label for="name" class="">Name</label>
            <span class="error">* <?php echo $nameErr; ?></span><br><br>
    <div class="">
        
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpId"
            placeholder="*Bắt buộc"
            style="border: 1px solid red; color: red;"
        />
        
    </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="emailHelpId"
            placeholder="abc@mail.com"
        />
        
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Website</label>
        <span class="error">* <?php echo $websiteErr; ?></span><br><br>
        <input
            type="text"
            class="form-control"
            name="website"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
        <div>
        <label for="" class="form-label">Comment</label>
        <span class="error">* <?php echo $commentErr; ?></span><br><br>
        <div class="mb-3">
            
            <textarea class="form-control" name="comment" id="" rows="3"></textarea>
        </div>
        </div>
        <div>
        <label for="" class="form-label">Gender: </label>
        <span class="error">* <?php echo $genderErr; ?></span><br><br>
        <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="checkbox"
                name="gender"
                id=""
                value="Female"
            />
            <label class="form-check-label" for="">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="checkbox"
                id=""
                value="Male"
            />
            <label class="form-check-label" for="">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input
                class="form-check-input"
                type="checkbox"
                id=""
                value="Other"
            />
            <label class="form-check-label" for="">Other</label>
        </div>
        </div>
        
    </div>
    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    
</form>
    
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
