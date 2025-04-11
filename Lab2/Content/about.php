<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Adventure Gear</title>
    <link rel="stylesheet" href="styles.css">
    <link type="image/x-icon" sizes="16x16" rel="icon" href="../img/Untitled-2.svg">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <?php include "../php/header.php"; ?>

    <div class="container">
        <div class="video-overlay">
            <h1>About Us</h1>
        </div>

        <video class="video" autoplay loop muted src="../img/Video.mp4">
        </video>


    </div>


    <main>

        <section id="history">
            <h2>Our History</h2>
            <p><em>Epic Adventure Gear</em> was born out of founder Jake Lawson’s
                lifelong love for the outdoors. As a
                kid
                growing up
                in the Colorado Rockies, Jake spent his days hiking trails, fishing
                in mountain streams, and camping
                under
                the stars. He quickly realized that having the right gear can make or
                break an adventure. <br><br>
                After years of using subpar equipment, Jake decided to create a
                business that offers adventurers
                reliable,
                high-quality products they can trust. Starting with a small pop-up
                tent at local outdoor expos, Epic
                Adventure Gear has grown into a thriving business that equips
                explorers across the nation. <br><br>
                Today, Jake and his team remain dedicated to their mission: to
                inspire others to get outside, explore,
                and
                experience the beauty of nature.
            </p>
        </section>

        <section id="vision-mission">
            <h2>Our Promise to You!</h2>
            <figure>
                <h3>Mission Statement</h3>
                <figcaption>
                    <p>At <em>Epic Adventure Gear</em>, we aim to equip adventurers
                        with durable, innovative, and
                        reliable
                        outdoor
                        gear
                        that
                        enhances their experiences and keeps them safe in the wild.
                    </p>
                </figcaption>
            </figure>

            <figure>
                <h3>Vision</h3>
                <figcaption>
                    <p>
                        To inspire a generation of explorers by providing gear that
                        empowers every adventure, big or
                        small.
                    </p>
                </figcaption>
            </figure>

        </section>

    </main>

    <?php include "../php/footer.php"; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const video = document.querySelector(".video");
            if (video) {
                video.playbackRate = 0.8;
            }
        });
    </script>
</body>




</html>