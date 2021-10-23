<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/menubar.js"></script>
</head>
<body>
    <?php
        include_once("connect.php");
    ?>
    <div id="wrapper">
        <nav class="navigation">
            <div class="nav-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="menu-index">
                <li class="menu-item"><a href="#">Home</a></li>
                <li class="menu-item"><a href="#">Top Streamers</a></li>
                <li class="menu-item"><a href="#">Top Youtubers</a></li>
                <li class="menu-item"><a href="#">Popular Contents</a></li>
                <li class="menu-item"><a href="#">Hot week videos</a></li>
                <li class="menu-item"><a href="#">Feedback</a></li>
                <div class="search">
                    <input type="search" class="search-item">
                    <button class="searchButton-item">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </ul>
            <div class="account">
                <div class="account-info">
                    <a class="account-in" href="" style="color: #fff; text-decoration: none; margin: 0px 2px;">Login</a>
                    <a class="account-in" href="" style="color: #fff; text-decoration: none; margin: 0px 2px;">Signup</a>
                    <!-- <u>Hi, </u> -->
                </div>
                <div class="account-icon">
                    <!-- <div class="default-user-icon"><i class="fa-solid fa-circle-user ico"></i></div> -->
                    <a class="link-icon" href=""><img class="account-avatar" src="image/User-icon.jpg" alt="Account-avatar"></a>
                </div>
            </div>
        </nav>
        <div class="search-mobile">
            <input type="search" class="search-mobile-item">
            <button class="searchButton-mobile-item">
                <i class="fa-solid fa-magnifying-glass "></i>
            </button>
        </div>

        <?php
            $sql = pg_query($conn, "SELECT * FROM public.index");
            if(pg_num_rows($sql)>0){
                while($result = pg_fetch_assoc($sql)){
        ?>

        <div style="width:100%; height:fit-content; background-color:plum;">
            <ul>
                <li>Name: <b><?php echo $result['name']; ?></b></li>
                <li>Class: <b><?php echo $result['class']; ?></b></li>
                <li>Birth: <b><?php echo $result['birth']; ?></b></li>
                <li>Phone: <b><?php echo $result['phone']; ?></b></li>
            </ul>
        </div>
        <?php
                }
            }
            else{
                function alert(){
                    alert("No result");
                }
                alert();
            }
        ?>

        <div class="footer">
            <div class="footer-header">
                <b class="footer-name">About Us</b>
            </div>
            <ul class="footer-block">
                <li class="footer-item">Support by
                    <div class="support-item">
                        <img class="icon-size" src="image/Community-social-media-icons.png" alt="Community-social-media-icons">
                    </div>
                </li>
                <li class="footer-item">Contents
                    <ul class="listcontent">
                        <li class="listContent-item"><a class="footer-infor" href="">Games</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Foods</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Challenges</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Vlogs</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Reactions</a></li>
                    </ul>
                </li>
                <li class="footer-item">Opearting Platforms
                    <ul class="listcontent">
                        <li class="listContent-item"><a class="footer-infor" href="">YouTube</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Facebook</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Nonolive</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">NimoTV</a></li>
                        <li class="listContent-item"><a class="footer-infor" href="">Xbox</a></li>
                    </ul>
                </li>
                <li class="footer-item">Contacts
                    <ul class="listcontent">
                        <li class="listContent-item">Email: <a class="footer-infor" href="">abc123@gmail.com</a></li>
                        <li class="listContent-item">Phone: <a class="footer-infor" href="">0123456789</a></li>
                        <li class="listContent-item">Facebook: <a class="footer-infor" href="">fb.com</a></li>
                        <li class="listContent-item">Twitter: <a class="footer-infor" href="">RankingSocialNetworks</a></li>
                        <li class="listContent-item">Instagram: <a class="footer-infor" href="">RankingSocialNetworks</a></li>
                    </ul>
                </li>
            </ul>
            <div class="copyright">&copy;RSN Copyright</div>
        </div>
    </div>
</body>
</html>