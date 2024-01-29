<?php 

interface ProcessFormInterface{

    public function with(array $data) : ProcessFormInterface;
    public function save();

}