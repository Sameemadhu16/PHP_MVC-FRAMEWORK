

<?php

class Home extends Controller
{

    public function index()
    {
        $model = new Model;
        

        $result = $model->delete(7);
        
        show($result);

        $this->view('home');

    }
}