<!DOCTYPE html>
<html><head>
<title></title></head><body >
    <table style="margin-top: -20px;" width="100%">
        <tr>
            <td align="right"><img src="assets/img/pelnus/btn.jpg" width="80px"></td>
            <td  align="center" style="font-size:small;">PEMERINTAH PROVINSI BANTEN <br>
                                                        DINAS PENDIDIKAN DAN KEBUDAYAAN <br>
                                                        UNIT PELAKSANA TEKNIS <br>
                                                        <b>SMK NEGERI 1 KRAGILAN</b> <br>
                                                        Jl. Raya Serang- Jakarta KM 13 Perum Graha Cisait Kec Kragilan Kab Serang, Telp (0254) 8487966
                                                        e-mail : <a href="#">smkn1kragilankabserang@gmail.com</a> website : <a href="#">smkn1kragilan@sch.id</a>
                                                         
            
            </td>
           </tr>       
    </table>
    <hr> 
    <p align="right" >03 Desember 2020</p> 
    <p style="text-align: center;" style="margin-top: -50;"><b>SURAT TUGAS<b> <p align="center">Nomor:/    Kepeg-<p></p>
    Kepala SMK Negeri 1 Kragilan Kabupaten Serang, memberikan tugas kepada pegawai di bawah  ini; <br> <br>  
    <table border="0.50%" width="100%">
    <tr>
                                    <th>No</th>
                                    <th>Nama & NIP</th>
                                    <th>Pangkat/Gol-</th>
                                    <th>Jabatan</th>
                                    
                                   
                                </tr>
                           
                                <?php 
                                $i = 1;
                                $Queryprint = "SELECT * FROM surat_tugas where nip = '$user[username]'";
                                $sist      = $this->db->query($Queryprint)->result_array();
                                ?>
                                    <tr>
                                        
                                <?php foreach($sist as $row):?>
                                    <td align="center"><?php echo $i++ . '.' ?></td>
                                    <td><?php echo  $row['nama_guru']; ?> <br>
                                        <?php echo 'NIP. ' . $row['nip']; ?>
                                    </td>
                                    <td align="center"><?php echo $row['pangkat_gol'];?></td>
                                    <td><?php echo $row['jabatan'];?></td>
                                <?php endforeach;?>  
                                </tr>  
                                                    
                        </table> <br><br>
                                 <p style="margin-right:20px;">  
                                Untuk melaksanakan
                                <?php 
                                
                                $Queryprint = "SELECT * FROM surat_tugas where nip = '$user[username]'";
                                $sist      = $this->db->query($Queryprint)->result_array();
                                ?>
                                    
                                        
                                <?php foreach($sist as $row):?>
                                    <b><i><?php echo $row['keperluan'];?>,</b></i>
                                <?php endforeach;?>   yang dilaksanakan pada : <br> <br>
                                </p> 
                                <table>
                                        <tr>
                                        <td style="text-align: left;">Hari & Tanggal</td>
                                        <td> :</td>
                                        </tr>
                                        <tr>
                                        <td>Pukul</td>
                                        </tr>
                                        <tr>
                                        <td>Tempat</td>
                                        </tr>
                                </table> <br><br>

Hari & Tanggal 	:  Kamis, 03 Desember 2020
Pukul			:  09.00 WIB  s.d  Selesai
Tempat	     		:  Kompleks Kementerian Pendidikan dan Kebudayaan, Gedung A 
   Jl. Jenderal Sudirman, Senayan, Jakarta Pusat Telepon:

			  
Demikian Surat tugas ini dibuat untuk diketahui dan dilaksanakan dengan penuh tanggung jawab.
									


             Kepala,







ADI MARYADI, M.Pd
NIP. 19760922 200801 1 004




</body><script src="assets/js/jquery-3.5.1.min.js"></script><script src="assets/js/bootstrap.min.js"></script></html>