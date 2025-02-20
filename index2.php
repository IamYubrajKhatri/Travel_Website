<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/807c7df6e8.js" crossorigin="anonymous"></script>
    
    
    <title>DiscoverNepal</title>
</head>
<body>

<?php
session_start();
?>
    <div id="slideout-menu">
        <ul>
            <li>
                 <a href="index2.html">Home</a>
            </li>
            <li>
                <a href="bloglist.html">Blog</a>
        </li>
           <li>
            <a href="tourlist.html">Tour</a>
           </li>
           <li>
            <a href="login.html">Login</a>
       </li>
       <li>
        <input type="text" placeholder="Search">
       
       </li>
        </ul> 
    </div>
    <nav>
        <div id ="logo-img">
            <a href="index2.html">
                <img src="/Web Tech/images/logo111.jpg" alt="DiscoverNepallogo" >
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                 <a class="active" href="index2.html">Home</a>
            </li>
            <li>
                <a href="bloglist.html">Blog</a>
        </li>
           <li>
            <a href="tourlist.html">Tour</a>
           </li>

           <li>
            <?php
    // Checking if the user is logged in
    if (isset($_SESSION['email'])) {
        echo '<a href="#">' . $_SESSION['email'] . '</a>';
    } else {
        echo '<a href="login.html">Login</a>';
    }
    ?>
  <a href="logout.php">Log out</a>
       </li>

       <li>
        <div id="search-icon">
            <i class="fas fa-search"></i>
        </div>
       </li>
        </ul>
    </nav>
    <div id="searchbox">
        <input type="text" placeholder="search here">
    </div>

    <div id="banner">
        <h1>Discover Nepal</h1>
        <h3>Make your deram Possible</h3>
        <p class="text-small">Nepal is truly a land of high mountains. With Mount Everest, the roof of the world, located on Nepalese soil, and a total of 7 of the 10 highest peaks in the world, Nepal offers the best trekking opportunities globally. However, the culture and cities like Kathmandu and Pokhara are worth a visit at any time. Nepal is the kinder and friendlier cousin of North India and a genuine Himalayan kingdom. Situated in a valley enclosed by Himalayan peaks, Kathmandu is undoubtedly one of the most fascinating cities in the world. For decades, it has attracted a colorful mix of travelers, trekkers, and hippies from around the world. On its famous King's Square, Lasku Dhwakha (Durbar Square), a panorama of Hindu and Buddhist traditions unfolds daily. The warm-hearted Nepalese are exemplars of Buddhists: often extremely poor but always with a smile on their faces</p>
    </div>

    <main>
        <a href="tourlist.html">
            <h2 class="section-heading">All Tour Types</h2>
        </a>
        <section>
            <div class="card">
                <div class="card-image">
                <a href="city.html">
                    <img src="images/patan.jpg" alt="Patan image">
                </a>
            </div>
            <div class="imagediscription">
                <a href="city.html">
                    <h3>City Tour</h3>
                </a>
                <p>A city tour in Nepal takes you through cultural gems like Kathmandu's Durbar Square, Swayambhunath Stupa, and Pashupatinath Temple. Explore Patan's well-preserved architecture and Bhaktapur's medieval charm. Visit Lumbini, the birthplace of Buddha, with its sacred garden and Maya Devi Temple. Each city showcases Nepal's rich history, spirituality, and vibrant local life.</p>
                <a href="city.html" class="btn-readmore">Show destinations</a>
            </div>
        </div>
            <div class="card">
                <div class="card-image">
                <a href="hiking.html">
                    <img src="images/paraglid.jpg" alt="Pagaglid image">
                </a>
            </div>
            <div class="imagediscription">
                <a href="hiking.html">
                    <h3>Hiking</h3>
                </a>
                <p>Hiking in Nepal is a captivating adventure that offers a diverse range of landscapes, from lush forests and terraced fields to towering Himalayan peaks. Renowned trekking destinations like Everest Base Camp, Annapurna Circuit, and Langtang Valley attract trekkers worldwide. The trails provide not only stunning mountain vistas but also cultural immersion, with encounters with local communities and traditional villages. From the challenging routes to more leisurely hikes, Nepal offers hiking experiences for all levels, allowing adventurers to explore the natural beauty and rich culture of this Himalayan gem.</p>
                <a href="hiking.html" class="btn-readmore">Show destinations</a>
            </div>
            </div>
        
            <div class="card">
                <div class="card-image">
                <a href="trek.html">
                    <img src="images/mountain.jpg" alt="Himal image">
                </a>
            </div>
            <div class="imagediscription">
                <a href="trek.html">
                    <h3>Trekking</h3>
                </a>
                <p>Trekking in Nepal is a thrilling adventure that combines stunning landscapes, diverse trails, and rich cultural experiences. Renowned trekking routes include Everest Base Camp, Annapurna Circuit, and Langtang Valley. Trekkers traverse through picturesque villages, dense forests, and high-altitude terrains. The trails offer breathtaking views of the Himalayas, including Mount Everest, and opportunities to engage with local communities. With varying difficulty levels, Nepal's trekking options cater to both seasoned hikers and beginners, providing a unique blend of nature, culture, and adventure.</p>
                <a href="trek.html" class="btn-readmore">Show destinations</a>
            </div>
        </div>

        </section>
        <a href="bloglist.html"><h2 class="section-heading">All Blogs</h2></a>
        <section>
            <div class="card">
                <div class="card-image">
                <a href="holi.html">
                    <img src="images/holi.jpg" alt="Everest image">
                </a>
            </div>
            <div class="imagediscription">
                <a href="holi.html">
                    <h3>Holi Festival Kathmandu</h3>
                </a>
                <div class="card-meta">
                    Posted by Yubraj on 23/1/2023 in <a href="#">The Kantipur times</a>
                </div>
                <p>Holi is a popular Hindu festival originating from the Indian subcontinent. It is celebrated mainly in India and in Nepal. It has also spread over time from the Indian subcontinent to other areas of Asia and parts of the western world.</p>
                <a href="holi.html" class="btn-readmore">Read more</a>
            </div>
        </div>
            <div class="card">
                <div class="card-image">
                <a href="tihar.html">
                    <img src="images/tihar.jpg" alt="tihardog image">
                </a>
            </div>
            <div class="imagediscription">
                <a href="tihar.html">
                    <h3>Tihar Festival Nepal</h3>
                </a>
                <div class="card-meta">
                    Posted by Pravat on 23/1/2023 in <a href="#">The Kathmandu Post</a>
                </div>
                <p>Tihar, the second largest Nepalese festival, was celebrated in Nepal in early November, with many colors. It is the Festival of Lights & Colors and lasts for 5 days. We were there live.</p>
                <a href="tihar.html" class="btn-readmore">Read more</a>
            </div>
            </div>
            
        </section>
        <h2 class="section-heading">Source Code</h2>
        <section id="section-source">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quaerat nobis tempora natus facere iure in, incidunt laboriosam officia placeat vel odit nostrum!</p>
            <a href="#" class="btn-readmore">Github profile</a>
        </section>
        <footer>
            <div id="left-footer">
                <h3>Quick-links</h3>
                <p>
                    <ul>
                        <li><a href="index2.html">Home</a></li>
                        <li><a href="tourlist.html">Tours</a></li>
                        <li><a href="bloglist.html">Blogs</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="comment.html">CommentS and Review</a></li>
                    </ul>
                </p>

            </div>
            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li><a href="https://www.facebook.com/">
                            <i class="fab fa-facebook"></i>
                        </a></li>
                        <li><a href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a></li>
                        <li><a href="https://github.com/">
                            <i class="fab fa-github"></i>
                        </a></li>
                        <li><a href="https://www.whatsapp.com">
                            <i class="fab fa-whatsapp"></i>
                        </a></li>
                    </ul>
                </div>
                <p>This website is developed by Yubraj and Pravat</p>
            </div>
        </footer>
    </main>
    <script src="main.js"> </script>
</body>