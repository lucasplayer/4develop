<?php
class Template {
	protected $_ci;

	function __construct() {
			$this->_ci = &get_instance(); 
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
				// head
				$data['_meta'] 					= $this->_ci->load->view('template/_meta', $data, TRUE);
				$data['_css'] 					= $this->_ci->load->view('template/_css', $data, TRUE);
				
				// Header
				$data['_nav'] 				= $this->_ci->load->view('template/_nav', $data, TRUE);
				$data['_header'] 				= $this->_ci->load->view('template/_header', $data, TRUE);
				
				//Sidebar
				$data['_sidebar'] 				= $this->_ci->load->view('template/_sidebar', $data, TRUE);
				
				//Content
				$data['_headerContent'] 	= $this->_ci->load->view('template/_headerContent', $data, TRUE);
				$data['_mainContent'] 		= $this->_ci->load->view($template, $data, TRUE);
				$data['_content'] 				= $this->_ci->load->view('template/_content', $data, TRUE);
				
				//Footer
				$data['_footer'] 				= $this->_ci->load->view('template/_footer', $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->_ci->load->view('template/_js', $data, TRUE);

				echo $data['_template'] 		= $this->_ci->load->view('template/_template', $data, TRUE);
			}
		}
                function views2($template = NULL, $data = NULL) {
			if ($template != NULL) {
				// head
				$data['_meta'] 					= $this->_ci->load->view('template2/_meta', $data, TRUE);
				$data['_css'] 					= $this->_ci->load->view('template2/_css', $data, TRUE);
				
				// Header
				$data['_nav'] 				= $this->_ci->load->view('template2/_nav', $data, TRUE);
				$data['_header'] 				= $this->_ci->load->view('template2/_header', $data, TRUE);
				
				//Sidebar
				$data['_sidebar'] 				= $this->_ci->load->view('template2/_sidebar', $data, TRUE);
				
				//Content
				$data['_headerContent'] 	= $this->_ci->load->view('template2/_headerContent', $data, TRUE);
				$data['_mainContent'] 		= $this->_ci->load->view($template, $data, TRUE);
				$data['_content'] 				= $this->_ci->load->view('template2/_content', $data, TRUE);
				
				//Footer
				$data['_footer'] 				= $this->_ci->load->view('template2/_footer', $data, TRUE);
				
				//JS
				$data['_js'] 					= $this->_ci->load->view('template2/_js', $data, TRUE);

				echo $data['_template'] 		= $this->_ci->load->view('template2/_template', $data, TRUE);
			}
		}
		

	}
	?>