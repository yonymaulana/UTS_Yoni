<?php
include('header.php');
?>
<?php
include('side-menu.php');
?>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-white rounded h-100 p-4">
                <h4 class="mb-4 text-dark"><b>Data Peserta Paswa 2022</b></h4>
                <p><a href="peserta_add.php" class="btn btn-secondary">Tambah</a></p>
                <div class="table-responsive">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th class="text-dark"> NIM </th>
                                <th class="text-dark"> Nama Peserta </th>
                                <th class="text-dark"> Program Studi </th>
                                <th class="text-dark"> Semester </th>
                                <th class="text-dark"> Kelas </th>
                                <th class="text-dark"> No Handphone </th>
                                <th class="text-dark"> Email </th>
                                <th class="text-dark"> Alamat </th>
                                <th class="text-dark"> Jenis Kelamin </th>
                                <th class="text-dark"> Foto </th>
                                <th class="text-dark"> Agama </th>
                                <th class="text-dark"> Tempat Lahir </th>
                                <th class="text-dark"> Tanggal Lahir </th>
                                <th class="text-dark"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("connection.php");
                            $no = 0;
                            $result = mysqli_query($mysqli, "SELECT * FROM tab_peserta");
                            while ($row = mysqli_fetch_array($result)) {
                                $no++;
                                echo "<tr>";
                                echo "<td class='text-dark'>" . $row['nim'] . "</td>";
                                echo "<td class='text-dark'>" . $row['nama'] . "</td>";
                                echo "<td class='text-dark'>" . $row['prodi'] . "</td>";
                                echo "<td class='text-dark'>" . $row['semester'] . "</td>";
                                echo "<td class='text-dark'>" . $row['kelas'] . "</td>";
                                echo "<td class='text-dark'>" . $row['no_hp'] . "</td>";
                                echo "<td class='text-dark'>" . $row['email'] . "</td>";
                                echo "<td class='text-dark'>" . $row['alamat'] . "</td>";
                                echo "<td class='text-dark'>" . $row['jenis_kelamin'] . "</td>";
                                echo "<td class='text-dark'> <img src='gambar/" . $row['foto'] . "' width='80px'> </td>";
                                echo "<td class='text-dark'>" . $row['agama'] . "</td>";
                                echo "<td class='text-dark'>" . $row['tempat_lahir'] . "</td>";
                                echo "<td class='text-dark'>" . $row['tanggal_lahir'] . "</td>";
                                echo "<td class='text-dark'> <a href=\"peserta_edit.php?nim=$row[nim]\">Edit</a> | 
                        <a href=\"peserta_pro_delete.php ?nim=$row[nim]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
<?php
include('footer.php');
?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<!-- 
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({
            "pagingType": "full_numbers"
        });
    });
</script> -->