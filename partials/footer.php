<footer>
    <div class="footer__socials">
        <a href="https://wa.me/4401279295772" target=" _blank"><i class="uil uil-whatsapp"></i></a>
        <a href="https://www.instagram.com/glister_uk?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="https://www.linkedin.com/in/craig-glister-5a24325b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100094154193924" target=" _blank"><i class="uil uil-facebook-f"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>company</h4>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </article>
        <article>
            <h4>Services</h4>
            <ul>
                <li><a href="../boiler-installations.php">Boiler installation</a></li>
                <li><a href="../bathroom-installations.php">Bathroom installation</a></li>
                <li><a href="../servicing-maintenance.php">Servicing & Maintenance</a></li>
                <li><a href="../special-projects.php">Special Projects</a></li>
            </ul>
        </article>

        <article>
            <h4>Useful Links</h4>
            <ul>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact">Contact</a></li>
                <li><a href="../blog.php">Blog</a></li>
            </ul>
        </article>

        <article>
            <h4>PermaLinks</h4>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>

            </ul>
        </article>
    </div>

    <div class="footer__copyright">
        <p>©
            <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
                document.write(new Date().getFullYear())
            </script>
            All Rights Reserved by <a href="<?= ROOT_URL ?>" target="_blank">Glister UK</a>
        </p>
    </div>
</footer>

<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
<script src="../ckeditor/ckeditor.js"></script>
<script src="<?= ROOT_URL ?>assets/js/admin.js"></script>
</body>
</php>