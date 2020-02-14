<?php 
class Mailtest extends CI_Controller {
    
    public function index(){
        $this->sendMail();
    }
    function sendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'naveenramlu@gmail.com', // change it to yours
  'smtp_pass' => 'Naveen@2019', // change it to yours
  'mailtype' => 'text',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = '';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('naveenramlu@gmail.com'); // change it to yours
      $this->email->to('r.naveen@tridentdatasol.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}
?>