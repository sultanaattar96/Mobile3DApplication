<?php
include __DIR__ . '/../config/config.php';
// Include the Load and Model classes
require_once __DIR__ . '/../view/load.php';
require_once __DIR__ . '/../model/model.php';
class Controller {
	public $load;
	public $model;
	
	function __construct($pageMethod = null)
	{
		$this->load = new Load();
		$this->model = new Model();

		// Check if $pageMethod is a string and a method of this class
		if (is_string($pageMethod) && method_exists($this, $pageMethod)) {
			$this->$pageMethod();
		} else {
			// Handle the error or call a default method
			header('Content-Type: application/json');
			//echo json_encode(['error' => 'Invalid method name or method does not exist.']);
			//$this->home();
		}
	}
	
    function home()
	{
		$this->load->view('viewCocaCola');
	}

	function apiCocaCola()
	{
		$this->load->view('viewCocaCola');	
	}

	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  


	public function getJsonData() {
        try {
            $data = $this->model->getData(); // This method should now use PDO

            if ($data === null || empty($data)) {
                throw new Exception('No data found');
            }

            $response = [
                'status_code_header' => 'HTTP/1.1 200 OK',
                'body' => json_encode($data)
            ];
        } catch (Exception $e) {
            $response = [
                'status_code_header' => 'HTTP/1.1 500 Internal Server Error',
                'body' => json_encode(['error' => 'An error occurred: ' . $e->getMessage()])
            ];
        }

        header($response['status_code_header']);
        header('Content-Type: application/json');
        echo $response['body'];
    }

	/* Without PDO
	public function getJsonData() {
		try {
			$data = $this->model->getData(); // Modify this method in your Model class
	
			// Check if $data is not null or empty
			if ($data === null || empty($data)) {
				throw new Exception('No data found');
			}
	
			// Prepare the response
			$response = [
				'status_code_header' => 'HTTP/1.1 200 OK',
				'body' => json_encode($data)
			];
		} catch (Exception $e) {
			// Handle the exception (e.g., log it or return an error message)
			$response = [
				'status_code_header' => 'HTTP/1.1 500 Internal Server Error',
				'body' => json_encode(['error' => 'An error occurred: ' . $e->getMessage()])
			];
		}
	
		// Send the response
		header($response['status_code_header']);
		header('Content-Type: application/json');
		echo $response['body'];
	}*/
	

}
?>    