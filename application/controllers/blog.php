<?php
class Blog extends CI_Controller {

	public function index()
	{
            $id=1;
		$this->load->model('user_model','',TRUE);
                $this->load->view('header');
                $this->load->view('navbar');
                echo "<br><br><br> Niedźwiedź ";
                $resultat = $this->user_model->get_pracownik($id);
                $cos=$resultat['imie'];
                echo  "$cos<br><br>";
//                foreach ($result as $key) {
//                    $imie=$key['imie'];
//                    $nazwisko=$key['nazwisko'];
//                    $tytul=$key['tytul'];
//                    echo "<br>$tytul $imie $nazwisko";
//                        }
                
                
                $this->load->view('body');
//                $this->load->model('user_model', '', TRUE);
//                $result=$this->user_model->wyswietl();
//                foreach ($result as $key) {
//                    $imie=$key['imie'];
//                    $nazwisko=$key['nazwisko'];
//                    echo "<br>$imie $nazwisko";
//                        }
        }
        public function comments()
        {
            echo 'Look at this!';
        }
        public function shoes($sandals, $id)
        {
            echo "$sandals - $id<br>";
        }
        private function prywatna(){
            echo 'Prywatna funkcja chce powiedziec: Hello!';
        }
//        public function _remap($method)
//        {
//            echo 'jestem w remap!';
//        }
}
?>