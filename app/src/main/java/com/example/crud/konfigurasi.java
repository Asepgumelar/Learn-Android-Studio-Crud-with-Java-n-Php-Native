package com.example.crud;

public class konfigurasi {
    public static final String URL_ADD="http://192.168.1.15/api_android/create.php";
    public static final String URL_GET_ALL = "http://192.168.1.15/api_android/index.php";
    public static final String URL_GET_EMP = "http://192.168.1.15/api_android/show.php?id=";
    public static final String URL_UPDATE_EMP = "http://192.168.1.15/api_android/edit.php";
    public static final String URL_DELETE_EMP = "http://192.168.1.15/api_android/delete.php?id=";
    //Dibawah ini merupakan Kunci yang akan digunakan untuk mengirim permintaan ke Skrip PHP
    public static final String KEY_EMP_ID = "id";
    public static final String KEY_EMP_NAMA = "name";
    public static final String KEY_EMP_POSISI = "desg"; //desg itu variabel untuk posisi
    public static final String KEY_EMP_GAJIH = "salary"; //salary itu variabel untuk gajih
    // JSON Tags
    public static final String TAG_JSON_ARRAY="result";
    public static final String TAG_ID = "id";
    public static final String TAG_NAMA = "name";
    public static final String TAG_POSISI = "desg";
    public static final String TAG_GAJIH = "salary";

    public static final String EMP_ID = "emp_id";
}
