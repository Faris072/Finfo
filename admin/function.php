<?php
function editprograming($koneksi)
{
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $logo = stripslashes($_POST['logo']);
        $isi = $_POST['isi'];
        $link = $_POST['link'];
        $set = "judul='" . $judul . "',logo_FA='" . $logo . "',isi='" . $isi . "',link='" . $link . "'";
        $sql = "UPDATE homepage_programing SET " . $set . " WHERE id=" . $id;
        $query = mysqli_query($koneksi, $sql);
        if (!$query) {
?>
            <script>
                alert('Gagal');
            </script>
            <?php
        }
    }
}

function tambahprograming($koneksi)
{
    if (isset($_POST['tambah'])) {
        $logo = stripslashes($_POST['logo']);
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $link = $_POST['link'];
        if (isset($logo) && isset($judul) && isset($isi) && isset($link)) {
            $sql = "INSERT INTO homepage_programing(logo_FA,judul,isi,link) VALUES('" . $logo . "','" . $judul . "','" . $isi . "','" . $link . "')";
            $query = mysqli_query($koneksi, $sql);
            if (!$query) {
            ?>
                <script>
                    alert('Gagal');
                </script>
<?php
            }
        }
    }
}
?>