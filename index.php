<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Makerspace</title>
    <?php include "view/partials/init.html" ?>

    <!--CSS Styles-->
    <link rel="stylesheet" href="view/content/css/styles-account.css" />
    <script src="src/account.js"></script>
</head>

<body>
    <!---Modal--->
    <?php
    include "view/modal/account/add-account.php";
    include "view/modal/complectedTask/complected.html";
    ?>

    <!---navbar--->
    <?php
    include "view/partials/navbar.html";
    ?>
    <div id="main-content" class="container-fluid card-columns">
        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div id="stduent-name" class="card-header">ABUKARN, RYAN</div>
            <div class="card-body">
                <h5 id="student-email" class="card-title">1234@my.vccd.edu</h5>
                <h6> admin</h6>
            </div>
            <div class="card-footer bg-transparent">
                <button type="button" class="btn btn-primary give-accese-or-lose" data-account-email="1234@my.vccd.edu" data-account-admin="1">
                    <i class="fas fas fa-sign-language" aria-hidden="true">
                    </i>
                </button>
                <button type="button" class="btn btn-danger delete-account" data-account-email="1234@my.vccd.edu"><i class="fas fa-ban" aria-hidden="true"></i></button>
            </div>
        </div>


        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div id="stduent-name" class="card-header">ABUKARN, RYAN</div>
            <div class="card-body">
                <h5 id="student-email" class="card-title">hello@my.vccd.edu</h5>
                <h6> admin</h6>
            </div>
            <div class="card-footer bg-transparent">
                <button type="button" class="btn btn-primary give-accese-or-lose" data-account-email="hello@my.vccd.edu" data-account-admin="1">
                    <i class="fas fas fa-sign-language" aria-hidden="true">
                    </i>
                </button>
                <button type="button" class="btn btn-danger delete-account" data-account-email="hello@my.vccd.edu"><i class="fas fa-ban" aria-hidden="true"></i></button>
            </div>
        </div>


        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div id="stduent-name" class="card-header">ABUKARN, RYAN</div>
            <div class="card-body">
                <h5 id="student-email" class="card-title">hello@outlock.com</h5>
                <h6> not admin</h6>
            </div>
            <div class="card-footer bg-transparent">
                <button type="button" class="btn btn-primary give-accese-or-lose" data-account-email="hello@outlock.com" data-account-admin="0">
                    <i class="fas fa-user-tie" aria-hidden="true">
                    </i>
                </button>
                <button type="button" class="btn btn-danger delete-account" data-account-email="hello@outlock.com"><i class="fas fa-ban" aria-hidden="true"></i></button>
            </div>
        </div>


        <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div id="stduent-name" class="card-header">ABUKARN, RYAN</div>
            <div class="card-body">
                <h5 id="student-email" class="card-title">ryan@mail.com</h5>
                <h6> admin</h6>
            </div>
            <div class="card-footer bg-transparent">
                <button type="button" class="btn btn-primary give-accese-or-lose" data-account-email="ryan@mail.com" data-account-admin="1">
                    <i class="fas fas fa-sign-language" aria-hidden="true">
                    </i>
                </button>
                <button type="button" class="btn btn-danger delete-account" data-account-email="ryan@mail.com"><i class="fas fa-ban" aria-hidden="true"></i></button>
            </div>
        </div>


    </div>



</body>

</html>