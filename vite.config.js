import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import livewire from "@defstudio/vite-livewire-plugin";

export default defineConfig({

    server: {
        host: "0.0.0.0",
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php") && !file.includes("livewire")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
        livewire({
            refresh: ["resources/css/app.css"],
        }),
    ],
});

