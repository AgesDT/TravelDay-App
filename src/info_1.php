<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <a href="home.php"><div class=e33_1824>
            <div class="e33_1825"></div>
            <div class="e33_1826"></div>
            <div class="e33_1827"></div>
            <div class="e33_1828"></div>
        </div></a>
        <img src="css/external/logo.png">
    </nav>
    <span class="e41_219">Guest Informations</span>

    <div class="container">
        <form action="py/book_1.py" method="post">
            <div class="form-group">
            <label for="name">Name*<br></label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
            />
            </div>

            <div class="form-group">
                <label for="id">ID Number (KTP/Passport)*<br></label>
                <input
                    type="text"
                    class="form-control"
                    id="id"
                    name="id"
                />
            </div>

            <div class="form-group">
                <label for="email">Email*<br></label>
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                />
            </div>

            <div class="form-group">
                <label for="nat">Nationality*<br></label>
                <input
                    type="text"
                    class="form-control"
                    id="nat"
                    name="nat"
                />
            </div>
            <div class="form-group">
                <label for="no_telp">Phone Number*<br></label>
                <input
                    type="text"
                    class="form-control"
                    id="no_telp"
                    name="no_telp"
                />
            </div>
            <div class="form-group">
                <label for="cCode">Country Code*<br></label>
                <input
                    type="text"
                    class="form-control"
                    id="cCode"
                    name="cCode"
                />
            </div>
            <br>

            <input type="submit" class="btn-primary" value="Proceed to Payment" />
        </form> 
      </div>
</body>
</html>