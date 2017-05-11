<?php

namespace Laravel\Socialite\Contracts;

interface Provider
{
    /**
     * Redirect the user to the authentication page for the provider.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect();

    /**
     * Get the User instance for the authenticated user.
     *
     * @return \Laravel\Socialite\Contracts\User
     */
    public function user();

    /**
     * @param string $token
     * @param string $tokenSecret
     * @return
     */
    public function setAccessToken($token, $tokenSecret = '');
}
