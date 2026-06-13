<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/favicon.svg">
    <link rel="stylesheet" href="../assets/css/structure.css">
    <link rel="stylesheet" href="../assets/css/pages/home.css">
    <link rel="stylesheet" href="../assets/css/colors.css">
    <?php include '../includes/link.php';?>
    <title>Home</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../assets/img/logo.svg" alt="Monsai" onclick="window.location.href='home.html';" style="cursor: pointer;">
        </div>
        <div class="links">
            <ul>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <section class="sec_hero">

        </section>
        <!-- <section class="sec_what_i_do">
            <div class="content_left">
                <p class="p_highlighted">WHAT I DO</p>
                <h3>A balance between design and development</h3>
                <p class="p_normal">I enjoy the process of turning ideas into meaningful digital solutions. From understanding problems to crafting interfaces and building them to life.</p>
            </div>
            <div class="content_right">
                <div class="content_box1">

                </div>
                <div class="content_box2">
                    
                </div>
            </div>
        </section> -->
        <section class="sec_f_projects">
            <p class="p_highlighted_dark">FEATURED PROJECTS</p>
            <div class="sec_f_projects_header">
                <div class="header_left">
                    <h3 class="f_proj_h">Selected works of 2026.</h3>
                </div>
                <div class="header_right">
                    <a href="" style="display: flex; align-items: center;">View all projects<span class="material-symbols-outlined" style="margin-left: 15px; font-size: 1.2rem; margin-top: 1px;">arrow_forward</span></a>
                </div>
            </div>
            <div class="sec_f_projects_content">
                <div class="project_box">
                    <a href="" class="project_card_inner">
                        <div class="card_front">
                            <span class="category_tag">E-Commerce</span>
                            <div class="image">
                                <img src="../assets/img/12.png" alt="JapanGachaPH">
                            </div>
                        </div>     
                        <div class="card_back">
                            <div class="description">
                                <div class="proj_card_header">
                                    <h3>E-Commerce Website for Japan Gacha</h3>
                                    <span class="badge">LEAD DEVELOPER</span>
                                </div>
                                <div class="proj_card_details">
                                    <p>A full-featured e-commerce platform built for importing and selling authentic capsule toys and anime figures.</p>
                                </div>
                                <div class="proj_card_apps">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project_box">
                    <a href="" class="project_card_inner">
                        <div class="card_front">
                            <span class="category_tag">Business Tools</span>
                            <div class="image">
                                <img src="../assets/img/13.png" alt="NCASH">
                            </div>
                        </div>     
                        <div class="card_back">
                            <div class="description">
                                <div class="proj_card_header">
                                    <h3>Business Dashboard for N-Cash</h3>
                                    <span class="badge">FRONTENT DEVELOPER</span>
                                </div>
                                <div class="proj_card_details">
                                    <p></p>
                                </div>
                                <div class="proj_card_apps">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="project_box">
                    <a href="" class="project_card_inner">
                        <div class="card_front">
                            <span class="category_tag">Mobile Application</span>
                            <div class="image">
                                <img src="../assets/img/14.png" alt="AGRID">
                            </div>
                        </div>     
                        <div class="card_back">
                            <div class="description">
                                <div class="proj_card_header">
                                    <h3>AGRID IoT Mobile Application</h3>
                                    <span class="badge">UI/UX Designer</span>
                                </div>
                                <div class="proj_card_details">
                                    <p></p>
                                </div>
                                <div class="proj_card_apps">
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="sec_about_me">
            <p class="p_highlighted_dark">ABOUT ME</p>
        </section>
        <section class="sec_creatives">
            <p class="p_highlighted_dark">CREATIVES</p>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>