
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = ".blush & bloom";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = ". blush & bloom";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$messageStatus = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($email !== "" && $message !== "") {
        $stmt = $conn->prepare(
            "INSERT INTO orders (email, message) VALUES (?, ?)"
        );

        $stmt->bind_param("ss", $email, $message);

        if ($stmt->execute()) {
            $messageStatus = "Message sent successfully!";
        } else {
            $messageStatus = "Message could not be saved.";
        }

        $stmt->close();
    } else {
        $messageStatus = "Please enter email and message.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blush & Bloom</title>

    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@400;500;600&family=Manrope:wght@500;600;700&family=Outfit:wght@500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700&family=Sora:wght@400;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

<div class="top-bannar">
    <p>Now Booking 2027 Weddings — Let’s Capture Your Love Story ♡</p>
</div>

<div class="navbar">
    <div class="nav">
        <nav>
            <ol>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#pak">PACKAGES</a></li>
                <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ol>
        </nav>
    </div>

    <div class="LOGO">
        <img src="pictures/logo.png" width="300px" alt="Blush and Bloom">
    </div>

    <div class="ICONS">
        <div class="I">
            <a id="INSTA" href="">
                <img src="pictures/instagram (1).png" width="25px" alt="Instagram">
            </a>
        </div>

        <div class="F">
            <a id="facebook" href="">
                <img src="pictures/facebook-app-symbol (1).png" width="25px" alt="Facebook">
            </a>
        </div>

        <div class="Y">
            <a id="whatsapp" href="">
                <img src="pictures/phone-call.png" width="25px" alt="Phone">
            </a>
        </div>
    </div>
</div>

<main>
    <div class="bannar">
        <img src="simple.jpg" alt="Wedding">
    </div>

    <div class="text">
        <h1>Blush<span>Bloom</span></h1>
        <h2>wedding planner</h2>
        <p>We turn your dream wedding into a beautiful reality. From elegant decorations and stunning venues to flawless planning and unforgettable moments, our wedding planning agency takes care of every detail. Let us create a magical celebration filled with love, beauty, and memories that last forever.</p>
        <button onclick="location.href='#contact'">Contact us</button>
    </div>

    <div class="chart">
        <div class="card">
            <img id="img1" src="p (1).jpg" alt="Wedding">
            <i class="ri-heart-fill"></i>
        </div>

        <div class="card">
            <img id="img2" src="p (2).jpg" alt="Wedding">
            <i class="ri-heart-fill"></i>
        </div>

        <div class="card">
            <img id="img3" src="p (3).jpg" alt="Wedding">
            <i class="ri-heart-fill"></i>
        </div>

        <div class="card">
            <img src="p.jpg" alt="Wedding">
            <i class="ri-heart-fill"></i>
        </div>
    </div>
</main>

<div class="heading">
    <h1>Capturing Timeless Wedding Memories</h1>
    <p>Cupcake ipsum dolor sit amet danish shortbread cupcake cotton candy. Cake tart biscuit ice cream tiramisu. Gingerbread pie tart lollipop brownie chocolate bar jujubes jelly-o chocolate.</p>
    <button onclick="location.href='#pak'">VIEW PACKAGES</button>
</div>

<div class="MAIN">
    <div class="TEXTT">
        <h1>Emily Rose Daniel James</h1>
        <p>Emily and Daniel's wedding was a magical celebration of love, faith, and commitment. Surrounded by family and friends in a beautiful church, they exchanged vows and promised to stand beside each other for a lifetime. From the bride's elegant white gown and delicate veil to the groom's classic suit, every detail reflected their timeless love story. With beautiful floral arrangements, heartfelt moments, and a romantic atmosphere, their special day became a cherished memory filled with joy and blessings.</p>
    </div>

    <div class="IMGG">
        <div class="PICTURES">
            <img id="imgg1" src="p1 (1).jpg" alt="Wedding">
            <img src="p1 (2).jpg" alt="Wedding">
            <img src="p1 (3).jpg" alt="Wedding">
            <img id="imgg4" src="p1 (4).jpg" alt="Wedding">
            <img src="p1 (3).jpg" alt="Wedding">
            <img src="p1 (4).jpg" alt="Wedding">
        </div>
    </div>
</div>

<div class="div2">
    <div class="IMH">
        <img src="p1 (1).jpg" alt="Wedding">
        <img src="p1 (2).jpg" alt="Wedding">
        <img src="p1 (3).jpg" alt="Wedding">
        <img src="p1 (4).jpg" alt="Wedding">
        <img src="p1 (1).jpg" alt="Wedding">
        <img src="p1 (2).jpg" alt="Wedding">
        <img src="p1 (3).jpg" alt="Wedding">
        <img src="p1 (4).jpg" alt="Wedding">
    </div>
</div>

<h1 style="color:#A69E89;text-align:center;margin-top:10px;font-size:17px;">
    Some moments become memories, some people become home, and some love stories last forever.
</h1>

<section class="hero">
    <video autoplay muted loop playsinline>
        <source src="background video.mp4" type="video/mp4">
    </video>

    <div class="content">
        <h1>Your Dream Will Be Real</h1>
        <p>Some moments become memories, some people become home, and some love stories last forever.</p>
    </div>
</section>

<section class="aboutus" id="about">
    <div class="t">
        <h1>About Us</h1>
        <p>Welcome to our Wedding Agency, where beautiful love stories turn into unforgettable memories.

        We specialize in making your special day truly magical. From elegant wedding decorations to perfect event planning, we help bring your dream wedding to life. Our goal is to make every celebration unique, beautiful, and stress-free.

        We believe every love story deserves a special celebration. With creativity, passion, and attention to every detail, we work hard to make your big day everything you have ever imagined.

        Your Love Story, Our Perfect Planning.</p>
    </div>

    <div class="imm">
        <img src="a1.jpg" alt="Wedding">
        <img src="a2.jpg" alt="Wedding">
        <img src="c1 (1).jpg" alt="Wedding">
        <img src="c1 (2).jpg" alt="Wedding">
    </div>
</section>

<main class="container" id="pak">

    <section class="hero">
        <div class="hero-text">
            <div class="logo">
                I<br>D<br>O
                <span>♥</span>
            </div>

            <p class="subtitle">WEDDING CONTENT</p>
            <h1>PACKAGES</h1>
            <h2>BUILT AROUND<br>YOUR DAY</h2>
            <div class="heart">──── ♥ ────</div>

            <h4>THREE PACKAGES.<br>ONE UNFORGETTABLE EXPERIENCE.</h4>

            <p class="description">
                Timeless content, thoughtfully<br>
                captured to relive and share<br>
                forever.
            </p>
        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?auto=format&fit=crop&w=1000&q=85" alt="Bride on her wedding day">
        </div>
    </section>

    <div class="section-heading">
        <div class="line"></div>
        <p>CHOOSE THE PACKAGE THAT<br>CAPTURES YOUR STORY BEST</p>
        <div class="line"></div>
    </div>

    <section class="packages">
        <article class="package-card">
            <div class="package-icon">◷</div>
            <h3>DAY</h3>
            <p class="package-type">PACKAGE</p>
            <div class="heart">──── ♥ ────</div>
            <p class="package-description">Perfect for capturing<br>the key moments<br>of your day.</p>
            <p class="coverage">COVERAGE<br>4 – 5 HOURS</p>
        </article>

        <article class="package-card">
            <div class="package-icon">▦</div>
            <h3>FULL DAY</h3>
            <p class="package-type">PACKAGE</p>
            <div class="heart">──── ♥ ────</div>
            <p class="package-description">From morning<br>preparations to the<br>dance floor.</p>
            <p class="coverage">COVERAGE<br>7 – 8 HOURS</p>
        </article>

        <article class="package-card">
            <div class="package-icon">✧</div>
            <h3>LUXE</h3>
            <p class="package-type">PACKAGE</p>
            <div class="heart">──── ♥ ────</div>
            <p class="package-description">The ultimate experience,<br>capturing every detail<br>from start to finish.</p>
            <p class="coverage">COVERAGE<br>10 – 12 HOURS</p>
        </article>
    </section>

    <section class="enquiry">
        <div class="enquiry-info">
            <div class="enquiry-icon">♙</div>
            <div>
                <h3>READY TO ENQUIRE?</h3>
                <p>Check availability and receive<br>full package details &amp; pricing.</p>
            </div>
        </div>

        <form class="enquiry-form" action="#contact" method="get">
            <label for="enquiry-email">ENQUIRE HERE</label>
            <input type="email" id="enquiry-email" placeholder="Enter your email" required>
            <button type="button" onclick="location.href='#contact'">Contact Us</button>
        </form>
    </section>
</main>

<div class="headdd">
    <h1 style="text-align:center;color:#A69E89;font-family:sans-serif;font-weight:bold;font-size:90px;margin-top:50px;">
        Gallery
    </h1>
</div>

<section class="Gallery" id="gallery">
    <img src="a1.jpg" alt="Wedding">
    <img src="a2.jpg" alt="Wedding">
    <img src="p (1).jpg" alt="Wedding">
    <img src="p (2).jpg" alt="Wedding">
    <img src="p (3).jpg" alt="Wedding">
    <img src="p.jpg" alt="Wedding">
    <img src="p1 (1).jpg" alt="Wedding">
    <img src="simple.jpg" alt="Wedding">
    <img src="a1.jpg" alt="Wedding">
    <img src="a2.jpg" alt="Wedding">
    <img src="p (1).jpg" alt="Wedding">
    <img src="p (2).jpg" alt="Wedding">
    <img src="p (3).jpg" alt="Wedding">
    <img src="p.jpg" alt="Wedding">
    <img src="p1 (1).jpg" alt="Wedding">
    <img src="simple.jpg" alt="Wedding">
</section>

<div class="mmm" id="contact">
    <div class="emil">
        <h1 style="margin-left:60px;margin-bottom:20px;color:white;font-family:initial;font-weight:initial;font-size:60px;">
            Contact us
        </h1>

        <?php if ($messageStatus !== ""): ?>
            <p role="status" style="color:white;text-align:center;">
                <?php echo htmlspecialchars($messageStatus, ENT_QUOTES, "UTF-8"); ?>
            </p>
        <?php endif; ?>

        <form action="index.php#contact" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <br><br>

            <textarea style="
                    color: white;
    font-size: 15px;
    padding-left: 10px;
    color: white;
    border-radius: 10px;
width: 400px;
height: 9vh;
border: none;
outline: none;
background-color:#c9c0b5;" name="message" placeholder="Enter your message" required></textarea>
            <br><br>

            <button style="
                    color: white;
    font-size: 15px;
    padding-left: 10px;
    color: white;
    border-radius: 10px;
width: 400px;
height: 9vh;
border: none;
outline: none;
background-color:#c9c0b5;" type="submit" name="submit">Submit</button>
        </form>

        <div class="ICONS" style="display:flex;align-items:center;justify-content:center;">
            <div class="I">
                <a id="INSTA" href="">
                    <img src="pictures/instagram (1).png" width="25px" alt="Instagram">
                </a>
            </div>

            <div class="F">
                <a id="facebook" href="">
                    <img src="pictures/facebook-app-symbol (1).png" width="25px" alt="Facebook">
                </a>
            </div>

            <div class="Y">
                <a id="whatsapp" href="">
                    <img src="pictures/phone-call.png" width="25px" alt="Phone">
                </a>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-title">
        <div class="line"></div>
        <p>LET'S CAPTURE YOUR DAY BEAUTIFULLY</p>
        <div class="line"></div>
    </div>

    <div class="socials">
        <div class="social-item">
            <div class="symbol">✉</div>
            <h4>EMAIL</h4>
            <p>weddingcontentido@gmail.com</p>
        </div>

        <div class="social-item">
            <div class="symbol">☏</div>
            <h4>WHATSAPP</h4>
            <p>+92 300 0000000</p>
        </div>

        <div class="social-item">
            <div class="symbol">◎</div>
            <h4>INSTAGRAM</h4>
            <p>@ido.co.uk</p>
        </div>

        <div class="social-item">
            <div class="symbol">♪</div>
            <h4>TIKTOK</h4>
            <p>@ido.co.uk</p>
        </div>
    </div>

    <div class="footer-bottom">
        <span>EDITORIAL</span>
        <span>TIMELESS</span>
        <span>LUXURY</span>
        <span>DOCUMENTARY</span>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
