<footer>
    <section class="footer_content">
        <div class="footer_logo">
            <img src="../assets/img/logo.svg" alt="Monsai">
            <p>Designing and building digital experiences with clarity, logic, and creativity.</p>
        </div>
        <div class="footer_navigation">
            <p>NAVIGATION</p>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer_connect">
            <p>CONNECT</p>
            <ul>
                <li><a href="">mahinayszymon@gmail.com</a></li>
                <li><a href="">LinkedIn</a></li>
            </ul>
        </div>
        <div class="footer_work">
            <p>LET'S WORK TOGETHER</p>
        </div>
    </section>
    <hr>
    <section class="footer_bottom">
        <p>&copy; 2026 Monsai. All rights reserved.</p>
        <button id="scrolltopbutton"><span class="material-symbols-outlined">arrow_upward</span></button>
    </section>
</footer>

<script>
    const btn = document.getElementById("scrolltopbutton");

    btn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>