<?php


class Pages extends CI_Controller{


    // URL is .../home/view
    public function view($page='home'){

        if(!file_exists(APPPATH."views/pages/$page.php")){

            show_404();
        }

        $data['title'] = ucwords($page);

        $this->load->view('templates/header.php',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer.php',$data);
    }

}