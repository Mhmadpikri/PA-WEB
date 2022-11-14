<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                    alert('ANDA HARUS LOGIN TERLEBIH DAHULU')
                    document.location.href = 'login.php';
                </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM AKHIR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <label class="dark" id="darkmode"></label>
    <script src="main.js"></script>
    <nav>
        <div class="container-header">
            <div class="barber">
                <div class="logo"><a href="">METROPOLIS</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#Capster">Capster</a></li>
                        <li><a href="#Servis">Servis</a></li>
                        <li><a href="#About me">About me</a></li>
                        <li><a href="logout.php">logout</a></li>
                        <img src="moon.png" id="icon">
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--bagian home-->
    <div class="barber">
        <section id="Home">
            <img src="kita.png" style="height: 500px; width: 500px;">
            <div class="kalimat">
                <p class="keterangan">MASUK JELEK PULANG GANTENG</p>
                <h2>Rambutmu adalah mahkotamu</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic corrupti quo reprehenderit enim accusamus fugiat itaque nihil magni ipsa amet, unde excepturi vitae? Quas possimus, maxime quisquam qui a dolore, nesciunt, quae dolorem nihil consequatur accusantium nostrum delectus. Perspiciatis id fugiat perferendis quas cum eos adipisci nam quisquam officiis sapiente.</p>
                <p><a href="daftar.php" class="tbl-biru">BOKING</a> <a href="catalog.php" class="tbl-biru">CATALOG</a> </p>
            </div>
        </section>
    
    <div class="garis">
        <hr>
    </div>
    
    <!--bagian capster-->

    <section id="Capster">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">silahkan pilih</p>
                <h2>Capster Ganteng</h2>
                <br>
                <br>

            </div>
            <div class="cukur-list">
                <div class="kartu-cukur">
                    <img src="foto1.jpg.jpeg" alt="">
                    <p>MUHAMMAD FIKRI</p>
                </div>
                <div class="kartu-cukur">
                    <img src="foto9.jpeg" alt=""> <br>
                    <p>REZKY NUR. S</p>
                </div>
                <div class="kartu-cukur">
                    <img src="foto8.jpeg" alt="">
                    <p>FITRA NOVIARJI</p>
                </div>
            </div>
        </div>
    </section>

    <div class="garis">
        <hr>
    </div>
    
    <!--bagian servis-->
    <section id="Servis">
        <div class="bawah">
            <div class="kolom2">
                <p class="deskripsi">Mau Yang Mana Nih ???</p>
                <h2>Servis Yang Ada..</h2>
                <br>
            </div>

            <div class="servis-list">
                <div class="kartu-servis">
                    <img src="https://img.freepik.com/premium-photo/man-hairdresser-salon-barbershop-client-shaving-facial-hair-trimming-beard-barbershop-services-perfect-look-mastered-craft-from-cutting-hair-every-day-visit-hairdresser-maintaining-shape_474717-41163.jpg?size=626&ext=jpg&ga=GA1.2.300481661.1664358905" alt="">
                    <p>REGULER</p>
                </div>
                <div class="kartu-servis">
                    <img src="https://img.freepik.com/premium-photo/person-sitting-hydraulic-chair-visit-hairdresser-maintaining-shape-man-hairdresser-salon-barbershop-client-beard-grooming-barbershop-services-perfect-look-facial-hair-handsome-hipster_474717-38838.jpg?size=626&ext=jpg&ga=GA1.2.300481661.1664358905" alt="">
                    <p>PREMIUM</p>
                </div>
                <div class="kartu-servis">
                    <img src="https://img.freepik.com/free-photo/mid-section-barber-applying-cream-clients-beard_107420-94759.jpg?size=626&ext=jpg&ga=GA1.2.300481661.1664358905" alt="">
                    <p>VIP</p>
                </div>
            </div>
        </div>
    </section>

    <div class="garis">
        <hr>
    </div>

    <!--bagian About me-->
    <section 1 id="About me">
        <div class="tentang">
            <h2>About Me</h2>

        <div class="about">
            <img src="foto5.png" style="height: 450px; width: 450px">  
        </div>

        <div class="biodata">
            <table width= "100%">
                <tr>
                    <td>Nama</td> <br>
                    <td colspan="3">:</td>
                    <td>Rezky Nur Sya'ban</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td colspan="3">:</td>
                    <td>2109106009</td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td colspan="3">:</td>
                    <td>Cukur</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td colspan="3">:</td>
                    <td>Bulu Tangkis</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td colspan="3">:</td>
                    <td>Informatika</td>
                </tr>
            <table width= "100%">
                <tr>
                    <td>Nama</td> <br>
                    <td colspan="3">:</td>
                    <td>Muhammad Fikri</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td colspan="3">:</td>
                    <td>2109106010</td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td colspan="3">:</td>
                    <td>Cukur</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td colspan="3">:</td>
                    <td>Olahraga</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td colspan="3">:</td>
                    <td>Informatika</td>
                </tr>
            <table width= "100%">
                <tr>
                    <td>Nama</td> <br>
                    <td colspan="3">:</td>
                    <td>Fitra Noviarji</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td colspan="3">:</td>
                    <td>2109106017</td>
                </tr>
                <tr>
                    <td>Tugas</td>
                    <td colspan="3">:</td>
                    <td>Cukur</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td colspan="3">:</td>
                    <td>Olahrgaga + Coding</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td colspan="3">:</td>
                    <td>Informatika</td>
                </tr>
                
            </table>
        </div>
        </div>

    </section>

    </div>

<script>
    var icon = document.getElementById("icon");

    icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
    } 
</script>

    
    <div id="copyright">
        <div class="wraper">
            &copy; 2022. <b>PROJEK AKHIR</b> All Right Reserved    
        </div>
    </div>

    
        </body>
</html>