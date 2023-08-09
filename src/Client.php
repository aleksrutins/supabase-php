<?php
namespace Supabase;

use Postgrest\Interfaces\IPostgrestClient;
use Supabase\Functions\Interfaces\IFunctionsClient;
use Supabase\Gotrue\Interfaces\IGotrueClient;
use Supabase\Realtime\Interfaces\IRealtimeClient;
use Supabase\Storage\Interfaces\IStorageClient;

class Client {
    public function __construct(
        public IGotrueClient $auth,
        public IRealtimeClient $realtime,
        public IFunctionsClient $functions,
        public IPostgrestClient $postgrest,
        public IStorageClient $storage,
        public SupabaseOptions $options
    ) { }

    // public static function connect(string $supabaseUrl, string $supabaseKey = null, SupabaseOptions $options = null): Client {
    //     return new Client(null, null, null, null, null, $options ?? new SupabaseOptions());
    // }
}