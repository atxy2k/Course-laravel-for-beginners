<?php 
include './interfaces/process_form_interface.php';

class SaveFormInFile implements ProcessFormInterface{

    private string $name;
    private string $email;
    private string $phone;
    private string $subject;
    private string $message;

    public function with(array $data) : ProcessFormInterface {
        $this->name = isset($data['name']) ? $data['name'] : null;
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->phone = isset($data['phone']) ? $data['phone'] : null;
        $this->subject = isset($data['subject']) ? $data['subject'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
        return $this;
    }

    public function save(){
        $name = $this->name;
        $email = $this->email;
        $phone = $this->phone;
        $subject = $this->subject;
        $message = $this->message;
        $file = fopen('./contacts.txt', "a");
        fwrite($file, json_encode(compact('name','email','phone','subject','message')) );
        fwrite($file, PHP_EOL, FILE_APPEND );
        fclose($file);
    }

}