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
            <p class="form-text text-muted" >Novell Services Login</p>
            <form action="welcome1.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    <small id="emailHelpId" class="form-text text-muted"
                        >Help text</small
                    >

                
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id=""
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">City of Employment</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                

                <div>
                <div class="mb-3">
                    <label for="" class="form-label">Web server</label>
                    <select
                        multiple
                        class="form-select form-select-lg"
                        name="Web server"
                        id=""
                    >
                        <option selected>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>
                </div>
                <div class="btn-group" data-bs-toggle="buttons">
                    <label
                        class="btn btn-primary active"
                    >
                        <input
                            type="radio"
                            class="me-2"
                            name=""
                            id=""
                            autocomplete="off"
                            checked
                        />
                        Admin
                    </label>
                    <label
                        class="btn btn-primary"
                    >
                        <input type="radio" name="" id="" autocomplete="off" /> Engineer
                    </label>
                    <label
                        class="btn btn-primary"
                    >
                        <input type="radio" name="" id="" autocomplete="off" /> Manager
                    </label>
                    <label
                    class="btn btn-primary"
                    >
                    <input type="radio" name="" id="" autocomplete="off" /> Guest
                    </label>
                </div>
                </div>
               <div class="list-group">
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" />
                    Mail
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" />
                    Payroll
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" />
                    Self-server
                </label>
               </div>
                <div>
                <button
                    type="button"
                    class="btn btn-primary"
                >
                    Login
                </button>

                <button
                    type="button"
                    class="btn btn-primary"
                >
                    Reset
                </button>
                </div>
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
