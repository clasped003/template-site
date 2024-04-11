<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./common/header_commons.php"; ?>
    <title>Business Page | Welcome</title>
</head>

<body>
    <section class="gridContainer">
        <div class="Header">
            <h2 id="logo">Business Logo</h2>
            <div class="navContainer">
                <ul>
                    <!-- Adjust this "current" class for each page-->
                    <!-- Todo: move to commmons -->
                    <li class="current"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="Showcase">
            <!--Below element for testing only-->
            <h2>Showcase</h2>
        </div>
        <div class="Midline">
            <!--Below element for testing only-->
            <h2>MidLine Part</h2>
        </div>
        <div class="indexBody">

            <div class="indexBoxContainer">
                <div class="indexBox">

                </div>
            </div>
        </div>
        <div class="Footer">
            <?php include "./common/footer_commons.php"; ?>
        </div>

    </section>

    <script src="index.js"></script>
</body>

</html>