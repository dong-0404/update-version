<?php
class Home extends Controller {
    function SayHi () {
        $dong = $this->model ("SinhVienModel");
        echo $dong->GetSV() ;
    }
    function Show ($a, $b) {

        // call model
        $dong = $this->model("SinhVienmodel");
        $tong = $dong->Tong($a, $b);

        // call view
        $this->view("aodep", [ 
            "Page"=>"contact",
            "Number"=>$tong,
            "Mau" => "red",
            "SoThich"=>["ate","learn","sleep"]
        ]); 
    }
}
