<?php

class About {
    public function index($nama = "Darul", $pekerjaan = "NE") {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo "about/page";
    }
}