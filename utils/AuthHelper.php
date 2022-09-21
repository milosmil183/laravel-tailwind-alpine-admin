<?php

/**
 * The helper class to communicate with the supremechannels API backend
 *
 */
class AuthHelper
{
  public function __construct()
  {
  }

  /**
   * Register the user with the provided info.
   *
   * @param string $name
   * @param string $email
   * @param string $password
   * @return bool|string
   */
  public function register(string $name, string $email, string $password)
  {
    // Production Server
    // $url = "https://supremechannels.com/api/auth/register";

    // Development Server
    $url = "https://dev.supremechannels.com/api/auth/register";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
      "Content-Type: application/x-www-form-urlencoded",
      "Accept: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $data = "name=$name";
    $data .= "&email=$email";
    $data .= "&password=$password";
    $data .= "&password_confirmation=$password";

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
  }
}

// This is how to use the class.
$helper = new AuthHelper();
$response = $helper->register("Test User", "test@test.com", "asdf1234");
var_dump($response);
