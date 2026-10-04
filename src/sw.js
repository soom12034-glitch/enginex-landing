// Migration worker for cloud deployments that previously used a cached PWA
// worker. It takes control once, unregisters itself, then reloads open tabs
// so they receive the current server-rendered application assets.
self.addEventListener('install', () => {
  self.skipWaiting();
});

self.addEventListener('activate', (event) => {
  event.waitUntil((async () => {
    await self.registration.unregister();
    const clients = await self.clients.matchAll({ type: 'window' });
    await Promise.all(clients.map((client) => client.navigate(client.url)));
  })());
});
