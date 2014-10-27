<?php

abstract class Module {
		function __construct($db, $auth) {
			$this->db = $db;
			$this->auth = $auth;
			
			$this->version = 0;
			$this->author = "";
			
			$this->SetMetadata();
		}
		
		function Init(){
		
		}
		
		abstract function SetMetadata();
		
		abstract function RegisterRoutes($route);
}