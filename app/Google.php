<?php
  namespace App;
  class Google
  {

    public function client() {
      $client = new \Google_Client();
      $client -> setClientID(env('GOOGLE_CLIENT_ID'));
      $client -> setClientSecret(env('GOOGLE_CLIENT_SECTRT'));
      $client -> setRedirectUri(env('GOOGLE_REIDIRECT_URL'));
      $client -> setScopes(explode(',', env('GOOGLE_SCOPES')));
      $client -> setApprovalPrompt(env('GOOGLE_APPROVAL_PROMPT'));
      $client -> setAccessType(env('GOOGLE_ACCESS_TYPE'));

      return $client;
    }


  }
