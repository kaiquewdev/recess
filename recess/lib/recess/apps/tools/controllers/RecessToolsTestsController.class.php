<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !View Native, Prefix: tests/
 * !RoutesPrefix tests/
 */
class RecessToolsTestsController extends Controller {
	
	public function init() {
		if(RecessConf::$mode == RecessConf::PRODUCTION) {
			throw new RecessResponseException('Tools are available only during development.', ResponseCodes::HTTP_NOT_FOUND, array());
		}
	}
	
	/** !Route GET */
	public function home() {
		
	}
	
}

?>