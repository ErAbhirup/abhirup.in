<?php

class UsersController extends BaseController{

  public function postLogin()
  {
    Auth::attempt(array('email' => Input::get('email'),'password' => Input::get('password')));
  return Redirect::route('add_new_post');

  }

  public function getLogout()
  {
    Auth::logout();
    return Redirect::route('index');
  }
}
