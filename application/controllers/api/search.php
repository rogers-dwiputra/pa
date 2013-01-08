<?php  
require(APPPATH.'libraries/REST_Controller.php');  
Class search extends REST_Controller {  

    //$tes = 'rogers';
    public function spot_get()  
    {  
    	if($this->get('q'))
    	{
    		$response = $this->M_spot->api_get($this->get('q'));
            $response['status'] = 'TRUE';
    	}
    	else
    	{
			$response = $this->M_spot->api_get();    		
            $response['status'] = 'TRUE';
    	}
        
       	$this->response($response);
    }  

    public function events_get()
    {
       if($this->get('q'))
        {
            $data = $this->M_spot->get($this->get('q'));
        }
        else
        {
            $data = $this->M_spot->get();           
        }
        
        $this->response($data); 
    }
}  