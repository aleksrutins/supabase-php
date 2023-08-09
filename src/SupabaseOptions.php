<?php
namespace Supabase;

class SupabaseOptions {
    public function __construct(
        public string $schema = "public",
        public bool $autoRefreshToken = true,
        public bool $autoConnectRealtime = false,
        public array $headers = [],
        public string $authUrlFormat = "%s/auth/v1",
        public string $restUrlFormat = "%s/rest/v1",
        public string $realtimeUrlFormat = "%s/realtime/v1",
        public string $storageUrlFormat = "%s/storage/v1",
        public string $functionsUrlFormat = "%s/functions/v1"
    ) {}
}