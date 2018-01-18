<?php
class ControllerCustomCertificates extends Controller
{
    private $error = array();
    public function index()
    {
        $this->load->model('setting/setting');
        $this->load->language('custom/certificates');

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('custom/certificates')
        );
            $data['heading_title'] = $this->language->get('heading_title');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['description'] = '';

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
      
        
		$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/custom/certificates.tpl', $data));
    }
}
?>