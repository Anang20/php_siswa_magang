<?php

$data_siswa=[];

while(true)
{
    //Data siswa

    $siswa=&$data_siswa;

    //banner aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    //user memilih input menu

    $input_siswa=readline("Masukkan data siswa ? ");

    //Simpan Data Siswa

    $siswa[]=$input_siswa;

    //Munculkan data siswa magang

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    // Tanya User untuk memasukkan data lagi

    $tanya=readline("Tambah data ?");

    if($tanya=="no")
    {
        tampil("Terima Kasih");
    break;
    }
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;

}



function validasi_huruf($huruf)
{
    $pattern="/[A-Za-z\s]/";
    //     for
}

function tampil_data($data)
{

}

function tanyaUser()
{
    $tambah = readline("Tambah Data Lagi (No) ? ");

        if ($tambah == "No" || $tambah!=="yes") 
        {
            tampil("Terima kasih");
        exit;
        }
        
}