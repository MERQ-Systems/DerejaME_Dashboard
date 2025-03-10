const CACHE = "pwabuilder-offline";
const QUEUE_NAME = "bgSyncQueue";
importScripts('https://storage.googleapis.com/workbox-cdn/releases/5.1.4/workbox-sw.js');
self.addEventListener("message", (event) => {
    if (event.data && event.data.type === "SKIP_WAITING") {
        self.skipWaiting();
    }
});
const bgSyncPlugin = new workbox.backgroundSync.BackgroundSyncPlugin(QUEUE_NAME, {
    maxRetentionTime: 24 * 60
});
workbox.routing.registerRoute(new RegExp('/*'), new workbox.strategies.StaleWhileRevalidate({
    cacheName: CACHE,
    plugins: [bgSyncPlugin]
}));