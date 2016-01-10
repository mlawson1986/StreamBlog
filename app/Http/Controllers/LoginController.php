<?php
/**
 * @author Michael Lawson <mlawson1986@gmail.com>
 */

namespace StreamBlog\Http\Controllers;


class LoginController extends Controller {
    public function index() {
        return view('auth.login');
    }
}