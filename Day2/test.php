<!doctype html>
<html lang="en">
    <head>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <p class="form-text text-muted">Novell Services Login</p>
<form action="welcome.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
      
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
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
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            class="form-control"
            name=""
            id=""
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City of Employment</label>
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
    <div class="mb-3">
        <label for="webServer" class="form-label">Web server</label>
        <select
            class="form-select form-select-lg"
            name="sv"
            id=""
        >
            <option selected disabled>--choose a server--</option>
            <option value="New Delhi" type="" name="sv" id="sv">New Delhi</option>
            <option value="Istanbul" type="" name="sv" id="sv">Istanbul</option>
            <option value="Jakarta" type="" name="sv" id="sv">Jakarta</option>
        </select>
    </div>
    <label for="role" class="form-label">Please secify your role:</label>
    <div class="list-group">
        <label class="list-group-item">
            <input
                type="radio"
                class="me-2"
                name="role"
                id=""
                autocomplete="off"
                checked
            />
            Admin
        </label>
        <label class="list-group-item">
            <input type="radio" name="role" id="" autocomplete="off" value="Engineer"/> Engineer
        </label>
        <label class="list-group-item">
            <input type="radio" name="role" id="" autocomplete="off" value="Manager"/> Manager
        </label>
        <label class="list-group-item">
            <input type="radio" name="role" id="" autocomplete="off" value="Guest"/> Guest
        </label>
    </div>

    <label for="checkbox" class="form-label">Single sign-on to the following:</label>
    <div class="list-group">
        <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" name="ch[]" value="Mail" />
            Mail
        </label>
        <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" name="ch[]" value="Payroll" />
            Payroll
        </label>
        <label class="list-group-item">
            <input class="form-check-input me-1" type="checkbox" name="ch[]" value="Self-server" />
            Self-server
        </label>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </div>
</form>
          
        </main>
        
    </body>
</html>
