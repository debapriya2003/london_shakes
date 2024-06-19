<footer class="footer" style="background-color: white; color: #333; padding: 40px 20px; text-align: center; transition: background-color 0.3s ease-in-out;">
    <section class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 40px; margin-bottom: 40px;">
        <div class="box" style="text-align: center; transition: transform 0.3s ease-in-out;">
            <img src="images/email-icon.png" alt="" style="width: 50px; height: 50px; filter: invert(0); transition: filter 0.3s ease-in-out;">
            <h3 style="margin-top: 10px; font-size: 18px; transition: color 0.3s ease-in-out;">Our Email</h3>
            <a href="mailto:shaikhanas@gmail.com" style="text-decoration: none; color: #333; transition: color 0.3s ease-in-out;">shaikhanas@gmail.com</a>
        </div>

        <div class="box" style="text-align: center; transition: transform 0.3s ease-in-out;">
            <img src="images/clock-icon.png" alt="" style="width: 50px; height: 50px; filter: invert(0); transition: filter 0.3s ease-in-out;">
            <h3 style="margin-top: 10px; font-size: 18px; transition: color 0.3s ease-in-out;">Opening Hours</h3>
            <p style="margin-top: 5px; color: #333; font-size: 16px; transition: color 0.3s ease-in-out;">10:30am to 09:30pm</p>
        </div>

        <div class="box" style="text-align: center; transition: transform 0.3s ease-in-out;">
            <img src="images/map-icon.png" alt="" style="width: 50px; height: 50px; filter: invert(0); transition: filter 0.3s ease-in-out;">
            <h3 style="margin-top: 10px; font-size: 18px; transition: color 0.3s ease-in-out;">Our Address</h3>
            <a href="" style="text-decoration: none; color: #333; display: block; margin-top: 5px; font-size: 16px; transition: color 0.3s ease-in-out;">office, Goldighi Mall, Goldhigi Shopping Mall, 3rd, Silchar, Assam 788001</a>
        </div>

        <div class="box" style="text-align: center; transition: transform 0.3s ease-in-out;">
            <img src="images/phone-icon.png" alt="" style="width: 50px; height: 50px; filter: invert(0); transition: filter 0.3s ease-in-out;">
            <h3 style="margin-top: 10px; font-size: 18px; transition: color 0.3s ease-in-out;">Our Number</h3>
            <a href="tel:9365055344" style="text-decoration: none; color: #333; display: block; margin-top: 5px; font-size: 16px; transition: color 0.3s ease-in-out;">9365055344</a>
        </div>
    </section>
    <div class="credit" style="margin-top: 20px; font-size: 14px; color: #999; transition: color 0.3s ease-in-out;">
        &copy; Copyright @ London Shakes <?= date('Y'); ?> by <span><a href="https://www.linkedin.com/in/debapriya-mukherjee2003" target="_blank" style="text-decoration: none; color: aqua; transition: color 0.3s ease-in-out;">Debapriya Mukherjee</a></span> | All rights reserved!
    </div>
</footer>

<div class="loader" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: white; display: flex; justify-content: center; align-items: center; z-index: 9999; transition: opacity 0.3s ease-in-out;">
    <img src="images/loader.gif" alt="" style="height: 250px; width: 300px; transition: transform 0.3s ease-in-out;">
</div>

<style>
    .footer a:hover,
    .credit a:hover {
        color: #ffd700;
    }

    .box:hover {
        transform: translateY(-5px);
    }

    .box:hover img {
        filter: invert(0.5);
    }

    .loader:hover img {
        transform: rotate(360deg);
    }
</style>