<?php

        class Home_c extends CI_Controller{
        
        	public function index()
        	{
        	    $this->load->view('Home_v');	
        	}
        	public function registration_form()
        	{
        		$this->load->helper('url');
        		$this->load->view('Registration_form_v');
        	}
        	public function set_data()
        	{
                       $this->load->library('session');
        		$this->load->database();
        		$this->load->model('Project_m');

                       $this->load->library('form_validation');

                      $this->form_validation->set_rules('name','Name','required');
                        $this->form_validation->set_rules('fathername','Fathers name','required');
                          $this->form_validation->set_rules('phone','Mobile no.','required');
                            $this->form_validation->set_rules('email','Email','required');
                           $this->form_validation->set_rules('course','Course','required');

                       if($this->form_validation->run()==false){
                         
                         $response=array(
                               'status'=>'error',
                               'message'=>validation_errors()
                         );

                        }else{
                               
                        $Name=$this->input->post('name');
             
                        $Fathername=$this->input->post('fathername');
                        $Phone=$this->input->post('phone');
                        $Email=$this->input->post('email');
                        $Course=$this->input->post('course');

                        //session code
                        $this->session->set_userdata('name',$Name);
                       
                        $data['Name']=$Name;
                        $data['Fathername']=$Fathername;
                        $data['Phone']=$Phone;
                        $data['Email']=$Email;
                        $data['Course']=$Course;
                          $this->Project_m->save_data($data);  
                           $response=array(
                               'status'=>'success',
                              // 'message'=>"<h3>Email or Phone already exist</h3>"
                         );
                       
                        }

                        $this->output
                          ->set_content_type('application/json')
                          ->set_output(json_encode($response));
                   }

                   
                   public function ques_view()
                   {
                         $this->load->view('Ques_v');  
                       
                   }
                    public function quiz_view()
                   {
                        $this->load->view('Start_q_v');  
                       
                   }
                   public function result()
                   {
                           $ques1;
                           $ques2;
                           $ques3;
                           $ques4;
                           $ques5;
                           $s1=$this->input->post('ques_1');
                           if($s1=='yes')
                           {
                                 $ques1=4;
                           }else if($s1=='No'){
                                $ques1=3;
                           }else if($s1=='Doesn’t Matter'){
                                $ques1=2;
                           }else{
                                $ques1=0;
                           }

                           $s2=$this->input->post('ques_2');
                           if($s2=='yes')
                           {
                                $ques2=4;
                           }else if($s2=='no'){
                                $ques2=3;
                           }else if($s2=='nomatter'){
                                $ques2=2;
                           }else{
                                $ques2=0;
                           }
                                
                        $s3=$this->input->post('ques_3');
                           if($s3=='yes')
                           {
                                $ques3=4;
                           }else if($s3=='no'){
                                $ques3=3;
                           }else if($s3=='nomatter'){
                                $ques3=2;
                           }else{
                                $ques3=0;
                           }

                           $s4=$this->input->post('ques_4');
                           if($s4=='yes')
                           {
                                $ques4=4;
                           }else if($s4=='no'){
                                $ques4=3;
                           }else if($s4=='nomatter'){
                                $ques4=2;
                           }else{
                                $ques4=0;
                           }

                           $s5=$this->input->post('ques_5');
                           if($s5=='yes')
                           {
                                $ques5=4;
                           }else if($s5=='no'){
                                $ques5=3;
                           }else if($s5=='nomatter'){
                                $ques5=2;
                           }else{
                                $ques5=0;
                           }

                           $sum1=$ques1+$ques2+$ques3+$ques4+$ques5;
                        
                           $result['hello']="result";
                           if($sum1==20){
                                $result['hello']="Entrepreneur";
                           }else if($sum1>=15 && $sum1<20)
                           {
                                $result['hello']="Engineer";
                           }else if($sum1>=10 && $sum1<15){
                                $result['hello']="Doctor";
                           }else if ($sum1>=5 && $sum1<10) {
                                   $result['hello']="Chartered Accountant";
                           }else{
                                $result['hello']="You need Counselling";
                           }

                
                        $this->load->view('Result_v',$result); 
                   }

                 
        }

 ?>