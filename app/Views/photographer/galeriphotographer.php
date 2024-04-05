<table class="table table-sm table-striped" id="dataphotographer">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No.Kta</th>
                                                <th>Author</th>
                                                <th>Deskripsi</th>
                                                <th>Foto</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $nomor = 0; 
                                            foreach ($tampildata as $row):
                                                $nomor++;
                                            ?>
                                            <tr>
                                                <td><?= $nomor ?></td>
                                                <td><?= $row['kta']?></td>
                                                <td><?= $row['author']?></td>
                                                <td><?= $row['deksripsi']?></td>
                                                <td><?= $row['foto']?></td>
                                                <td><?= $row['tanggal']?></td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <script>
                                        $(document).ready(function() {
                                            $('dataphotographer').DataTable();
                                        });
                                    </script>
