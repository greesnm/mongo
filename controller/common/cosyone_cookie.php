<?php 
class ControllerCommonCosyoneCookie extends Controller {
	public function index() {
		
		// Cookie Control
		$data['cosyone_use_cookie'] = $this->config->get('cosyone_use_cookie');
		$cosyone_cookie_text = $this->config->get('cosyone_cookie_text');
        $data['cosyone_cookie_message'] = html_entity_decode($cosyone_cookie_text[$this->language->get('code')], ENT_QUOTES, 'UTF-8');
		
		$cosyone_cookie_button_readmore = $this->config->get('cosyone_cookie_button_readmore');
        $data['cosyone_readmore_text'] = html_entity_decode($cosyone_cookie_button_readmore[$this->language->get('code')], ENT_QUOTES, 'UTF-8');
		
		$cosyone_cookie_button_accept = $this->config->get('cosyone_cookie_button_accept');
        $data['cosyone_button_accept_text'] = html_entity_decode($cosyone_cookie_button_accept[$this->language->get('code')], ENT_QUOTES, 'UTF-8');
		
		$data['cosyone_readmore_url'] = $this->config->get('cosyone_readmore_url');
		
		// Old IE check
		$data['cosyone_use_ie'] = $this->config->get('cosyone_use_ie');
		
		$cosyone_ie_update_text = $this->config->get('cosyone_ie_update_text');
        $data['cosyone_ie_update_message'] = html_entity_decode($cosyone_ie_update_text[$this->language->get('code')], ENT_QUOTES, 'UTF-8');
		
		$cosyone_ie_text = $this->config->get('cosyone_ie_text');
        $data['cosyone_ie_message'] = html_entity_decode($cosyone_ie_text[$this->language->get('code')], ENT_QUOTES, 'UTF-8');
		
		$data['cosyone_ie_url'] = $this->config->get('cosyone_ie_url');
		
		return $this->load->view('cosyone/template/common/cosyone_cookie.tpl', $data);
	}
	public function info() {
		$this->response->setOutput($this->index());
	}
}