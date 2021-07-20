<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>




<html>
    <head>
        <title>The SUPPPERB</title>
        <link rel="stylesheet" href="nostyle.css">
    </head>

    <body>
        <header>
            <a href="#" class="logo">SUPPPERB</a>
            <ul>
                <li><a href="#" class="btn"><span>Home</span></a></li>
                <li><a href="#" class="btn"><span>About</span></a></li>
                <li><a href="logout.php" class="btn"><span>Logout</span></a></li>
                <li><a href="#" class="btn"><span>Contact</span></a></li>
            </ul>
        </header>


        <section>
            <img src="stars.png" id="stars" alt="THERE SHOULD BE IMAGE HERE">
            <img src="moon.png" id="moon" alt="THERE SHOULD BE IMAGE HERE">
            <img src="back.png" id="behind" alt="THERE SHOULD BE IMAGE HERE">
            <h2 id="text">THE SUPPPERB</h2>
            <a href="#sec" id="button">Find_More</a>
            <img src="front.png" id="front" alt="THERE SHOULD BE IMAGE HERE">
        </section>



<!--------Dummy text area start------->
        <div class="sec" id="sec">
            <h2>My Journey Started</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, quasi est consectetur aliquam illo modi quia veniam sequi! Id eveniet neque exercitationem necessitatibus, maxime vel laborum odio non aut perferendis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!<br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione necessitatibus expedita tempora labore, ipsum, veritatis, corrupti quis aliquam dolor accusamus quae similique voluptatum error maxime dolorem alias pariatur. Iste, odio.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque quidem nam, ipsam fugiat eaque praesentium doloribus ducimus, architecto quas iusto veniam accusamus nemo, iure quibusdam et illum laboriosam at eius.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente rem facere mollitia, ipsa porro tempore illum natus amet accusantium at veniam nulla praesentium quisquam. Adipisci ducimus quibusdam commodi aut!
            </p>
        </div>
<!--------Dummy text area end------->



<!------Button script start------>

        <script>
            const btn = document.querySelector('.btn');
            btn.onmousemove = function(e){
                const x = e.pageX - btn.offsetLeft;
                const y = e.pageY - btn.offsetTop;

                btn.style.setProperty('--x', x + 'px');
                btn.style.setProperty('--y', y + 'px');
            }
        </script>

        <script>
            let stars = document.getElementById('stars');
            let moon = document.getElementById('moon');
            let behind = document.getElementById('behind');
            let text = document.getElementById('text');
            let button = document.getElementById('button');
            let front = document.getElementById('front');

            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.05 + 'px';
                behind.style.top = value * 0.5 + 'px';
                front.style.left = value * 0 + 'px';
                text.style.marginRight = value * 4 + 'px';
                text.style.marginTop = value * 1.5 + 'px';
                button.style.marginTop = value * 1.5 + 'px';
            })
        </script>

<!------Button script end------>



<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    </body>
</html>
