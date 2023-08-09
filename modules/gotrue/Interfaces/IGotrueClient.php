<?php
namespace Supabase\Gotrue\Interfaces;

/**
 * @template TUser
 * @template TSession
 */
interface IGotrueClient {
    function isOnline(): bool;
}