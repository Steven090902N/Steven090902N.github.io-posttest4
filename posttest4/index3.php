<link rel="stylesheet" href="style2.css">
<div class="navbar">
    <ul>
        <li><a href="index1.php" style="color : white">Go back</a></li>
    </ul>
</div>
<div class="main">
            <form action="proses.php" method="POST" accept-charset="utf-8">
                <p>Nama Unit</p>
                <input placeholder="nama" id="nama" type="text" name="nama" required><br>
                <p>Jarak Tempuh</p>
                <input placeholder="jarak" id="jarak" type="number" name="jarak" required><br>
                <p>Tahun Unit</p>
                <input type="checkbox" id="tahun" name="tahun" value="2012">
                <label for="tahun">2012</label>
                <input type="checkbox" id="tahun" name="tahun" value="2012">
                <label for="tahun">2013</label>
                <input type="checkbox" id="tahun" name="tahun" value="2013">
                <label for="tahun">2014</label>
                <input type="checkbox" id="tahun" name="tahun" value="2014">
                <label for="tahun">2015</label>
                <input type="checkbox" id="tahun" name="tahun" value="2015">
                <label for="tahun">2016</label>
                <input type="checkbox" id="tahun" name="tahun" value="2016">
                <label for="tahun">2016</label><br>
                <input type="checkbox" id="tahun" name="tahun" value="2017">
                <label for="tahun">2017</label>
                <input type="checkbox" id="tahun" name="tahun" value="2018">
                <label for="tahun">2018</label>
                <input type="checkbox" id="tahun" name="tahun" value="2019">
                <label for="tahun">2019</label>
                <input type="checkbox" id="tahun" name="tahun" value="2020">
                <label for="tahun">2020</label>
                <input type="checkbox" id="tahun" name="tahun" value="2021">
                <label for="tahun">2021</label><br>
                <p>kondisi Unit</p><br>
                <input type="radio" id="new" name="kondisi" value="new" required>
                <label for="new">New</label>
                <input type="radio" id="second" name="kondisi" value="second">
                <label for="second">Second</label><br>
                <label for="color">Color</label>
                <input type="color" id="color" name="color" value="#707070"><br>

                <input type="submit" value="Submit">
            </form>