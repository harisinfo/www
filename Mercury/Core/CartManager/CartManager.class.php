<?php
/********************************************************
*	@Author: Hari Ramamurthy <info@harisinfo.co.uk>		*
*														*
********************************************************/

include_once( __CORE_DIR . '\\SessionManager\\SessionManager.class.php');

class CartManager extends SessionManager
{    
	protected $action = NULL;
	protected $cart = 'basket';
	protected $p = 'p_id';
	protected $q = 'q';
	protected $c = 'c';
	
	public function init($request, $cmd=NULL)
	{
		$this->action = $cmd;
		$this->createCart();
		
		switch($cmd)
		{
			case 'add':
				$this->addToCart($request);
			break;
			case 'update':
				$this->updateCart($request);
			break;
			case 'remove':
				$this->removeFromCart($request);
			break;
			case 'empty':
			
			break;
		}
	}
	
	
	protected function createCart()
	{
		if( !isset($_SESSION[decrypt($this->cart, KEYHASH)])===TRUE)
		{
			$_SESSION[encrypt($this->cart, KEYHASH)] = '';
		}
	}
	
	
	protected function emptyCart()
	{
		if( isset($_SESSION[decrypt($this->cart, KEYHASH)])===TRUE)
		{
			unset($_SESSION[encrypt($this->cart, KEYHASH)]);
		}
	}
	
	public function addToCart($request)
	{
		if(!isset($request['search']['cart'])===TRUE)
		{
			return FALSE;
		}
		
		if(!isset($request['search']['cart']['product_id'])===TRUE)
		{
			return FALSE;
		}
		
		if(!is_int($request['search']['cart']['product_id'])===TRUE)
		{
			return FALSE;
		}
		
		if(!isset($request['search']['cart']['quantity'])===TRUE)
		{
			$request['search']['cart']['quantity'] = 1;
		}
		
		
		$_SESSION[encrypt($this->cart, KEYHASH)][encrypt($this->p, KEYHASH)][encrypt($request['search']['cart']['product_id'], KEYHASH)] = 
		encrypt($request['search']['cart']['product_id'], KEYHASH);
		
		$_SESSION[encrypt($this->cart, KEYHASH)][encrypt($this->p, KEYHASH)][encrypt($this->q, KEYHASH)] = 
		encrypt($request['search']['cart']['quantity'], KEYHASH);
		
		if(isset($request['search']['cart']['condition_id'])&&is_int($request['search']['cart']['condition_id'])===TRUE)
		{
			$_SESSION[encrypt($this->cart, KEYHASH)][encrypt($this->c, KEYHASH)] = encrypt($request['search']['cart']['condition_id'], KEYHASH);
		}
		
		return TRUE;
	}
	
	
	public function readCart()
	{
		$cart_contents = array();
		$c_c = encrypt($this->cart, KEYHASH);
		$c_p = encrypt($this->p, KEYHASH);
		$c_q = encrypt($this->q, KEYHASH);
		
		foreach($_SESSION[$c_c] as $key => $value)
		{
			if($key==$c_p)
			{
				$cart_contents['product_id'][decrypt($value, KEYHASH)] = decrypt($value, KEYHASH);
			}
			
			if($key==$c_q)
			{
				$cart_contents['product_id'][decrypt($value, KEYHASH)] = decrypt($value, KEYHASH);
			}
			
		}
		
		if(is_empty($cart_contents)===TRUE)
		{
			return FALSE;
		}
		
		return $cart_contents;
	}
	
	
	public function updateCart($request)
	{
		
	}
	
	
	public function removeFromCart($request)
	{
		
	}
		
    
}