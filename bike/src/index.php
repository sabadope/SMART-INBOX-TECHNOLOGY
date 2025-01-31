<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/fav-logo.png">
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <!-- HEADER -->
    


    <!-- MAIN CONTENT -->
    <main>
        
    </main>


    <!-- FOOTER -->



    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- main js -->
    <script>
        $(function () {
        $(".menu-link").click(function () {
        $(".menu-link").removeClass("is-active");
        $(this).addClass("is-active");
        });
        });

        $(function () {
        $(".main-header-link").click(function () {
        $(".main-header-link").removeClass("is-active");
        $(this).addClass("is-active");
        });
        });

        const dropdowns = document.querySelectorAll(".dropdown");
        dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdowns.forEach((c) => c.classList.remove("is-active"));
        dropdown.classList.add("is-active");
        });
        });

        $(".search-bar input")
        .focus(function () {
        $(".header").addClass("wide");
        })
        .blur(function () {
        $(".header").removeClass("wide");
        });

        $(document).click(function (e) {
        var container = $(".status-button");
        var dd = $(".dropdown");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
        dd.removeClass("is-active");
        }
        });

        $(function () {
        $(".dropdown").on("click", function (e) {
        $(".content-wrapper").addClass("overlay");
        e.stopPropagation();
        });
        $(document).on("click", function (e) {
        if ($(e.target).is(".dropdown") === false) {
        $(".content-wrapper").removeClass("overlay");
        }
        });
        });

        $(function () {
        $(".status-button:not(.open)").on("click", function (e) {
        $(".overlay-app").addClass("is-active");
        });
        $(".pop-up .close").click(function () {
        $(".overlay-app").removeClass("is-active");
        });
        });

        $(".status-button:not(.open)").click(function () {
        $(".pop-up").addClass("visible");
        });

        $(".pop-up .close").click(function () {
        $(".pop-up").removeClass("visible");
        });

        const toggleButton = document.querySelector('.dark-light');

        toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('light-mode');
        });
    </script>
    

</body>
</html>
