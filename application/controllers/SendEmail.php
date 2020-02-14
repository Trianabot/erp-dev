<?php 
class SendEmail extends CI_Controller
{
    
    public function __construct(){
        parent::__construct();
         $this->load->library('email');
        
    }
    // function SendEmail()
    // {
    //     parent::Controller();
    //     $this->load->library('email'); // load the library
    // }
    
    function index()
    {
        $this->sendEmail();
    }
    
    public function sendEmail()
    {
        // Email configuration
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.yourdomainname.com.',
            'smtp_port' => 25,
            'smtp_user' => 'naveen@9700.', // change it to yours
            'smtp_pass' => 'naveen@123', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        
        $this->load->library('email', $config);
        $this->email->from('r.naveen@tridentdatasol.com', "Admin Team");
        $this->email->to("naveenramlu@gmail.com");
        $this->email->cc("testcc@domainname.com");
        $this->email->subject("This is test subject line");
        $this->email->message("testing mail");
        
        $data['message'] = "Sorry Unable to send email...";
        if ($this->email->send()) {
            $data['message'] = "Mail sent...";
        }else {
            print_r($this->email->print_debugger(), true);
        }
        
        // forward to index page
      //  $this->load->view('index', $data);
    }
    
}
?>